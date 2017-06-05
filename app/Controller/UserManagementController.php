<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Security\StringUtils;
use \Model\AdherentModel;
use \Model\AdminModel;
use \Model\Globals;

class UserManagementController extends Controller {

  protected $currentUser;
  protected $auth;
  protected $utils;
  protected $mail;
  protected $adminUser;

  public function __construct(){
    $this->currentUser = new AdherentModel;
    $this->auth        = new AuthentificationModel;
    $this->mail        = new \PHPMailer();
    $this->utils       = new StringUtils;
    $this->adminUser   = new AdminModel;
  }

  public function listAdmins(){
    $data = array('role'=>Globals::ADMIN);
    $usersList = $this->currentUser->search($data);
    $this->show('admin/manageUsers',['usersList'=>$usersList,'loggedUser'=>$this->auth->getLoggedUser()]);
  }
  public function listUsers(){
    $data = array('role'=>Globals::ADHERENT);
    $usersList = $this->currentUser->search($data);
    $this->show('admin/manageUsers',['usersList'=>$usersList,'loggedUser'=>$this->auth->getLoggedUser()]);

  }
  public function deleteUser($id){
    $this->currentUser->delete($id);
    $this->show('admin/manageUsers');
  }
  public function detailsUser($id){
    $user = $this->currentUser->find($id);
    $this->show('admin/manageUsers',['user'=>$user,'loggedUser'=>$this->auth->getLoggedUser()]);
  }
  public function editDetailsUser(){
    $this->currentUser->update($_POST,$_POST['id']);
    $user = $this->currentUser->find($_POST['id']);
    $this->show('admin/manageUsers',['user'=>$user,'loggedUser'=>$this->auth->getLoggedUser(),'w_current_route'=>'userManagement_details_user']);
  }
  public function editDetailsUserForm($id){
    $user = $this->currentUser->find($id);
    $this->show('admin/manageUsers',['user'=>$user,'loggedUser'=>$this->auth->getLoggedUser()]);
  }
  public function loginUser(){
    if($this->auth->isValidLoginInfo($_POST['email'], $_POST['password'])){
      $utilisateur = $this->currentUser->getUserByUsernameOrEmail($_POST['email']);
      $this->auth->logUserIn($utilisateur);
      switch($utilisateur['role']){
        case Globals::SUPERADMIN:
          $this->show('admin/manageUsers',['role'=>'superadmin','loggedUser'=>$this->auth->getLoggedUser()]);
        break;
        case Globals::ADMIN:
          $this->show('admin/manageUsers',['role'=>'admin','loggedUser'=>$this->auth->getLoggedUser()]);
        break;
        case Globals::ADHERENT:
          $this->redirectToRoute('default_home');
        break;
        default:
          $this->redirectToRoute('default_home');
        break;
      }
      // USER LOGIN IS NOT VALID
    } else {
    $this->show('default/home',['message'=>'login incorrect']);
    }
  }

  public function inscription_bk(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('user/inscription');
    }else{
      $this->show('user/inscription',['output'=>$_POST]);
    }
  }

  public function inscription(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('user/inscription');
    }else{
      $duplicates = false;
      if($this->currentUser->emailExists($_POST['email'])){
        $duplicates = true;
      }
      if($this->currentUser->phoneExists($_POST['email'])){
        $duplicates = true;
      }
      if(!$duplicates){
        $_POST['password'] = $this->auth->hashPassword($_POST['password']);
        $_POST['role'] = Globals::ADHERENT;
        $_POST['token'] = $randString = $this->utils->randomString();
        try{
          $newUser = $this->currentUser->insertAdherent($_POST);
        }
        catch(MySQLDuplicateKeyException $e){
          $e->getMessage();
        }
        catch (MySQLException $e) {
          // other mysql exception (not duplicate key entry)
          $e->getMessage();
        }
        catch (Exception $e) {
          // not a MySQL exception
          $e->getMessage();
        }
        //$this->auth->logUserIn($newUser);
        $isSentEmail = $this->sendEmail($_POST['email'], $newUser['id'], $_POST['token']);
        $this->show('user/inscription',['message'=>'ok']);
      } else {
        $this->show('user/inscription',['message'=>'duplicate']);
      }
    }
  }

  public function connexion(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $this->show('user/connexion');
    } else {
      $user = $this->auth->isValidLoginInfo($_POST['username'], $_POST['password']);
      if($user != 0){
        $this->auth->logUserIn($this->currentUser->find($user));
        $this->redirectToRoute('default_home');
      }else{
        $_SESSION['error'] = "Identifiant ou mot de passe incorrect";
      }
    }
  }

  public function deconnexion(){
    $this->auth->logUserOut();
    $this->redirectToRoute('default_home');
  }

  public function getLoggedUser(){
    $this->show('admin/manageUsers', ['loggedUser'=>$this->auth->getLoggedUser()]);
  }
  public function addAdminForm(){
    $this->show('admin/manageUsers');
  }
  public function addAdmin(){
    $_POST['role'] = Globals::ADMIN;
    $_POST['password'] = $this->auth->hashPassword($_POST['password']);
    if($newAdmin = $this->adminUser->insertAdmin($_POST)){
      $this->show('admin/manageUsers', ['newAdmin'=>$newAdmin]);
      //$this->show('dev/output',['newAdmin'=>$newAdmin]);
    }else{
      //$this->show('dev/output',['var'=>'error']);
      $this->show('admin/manageUsers', ['error'=>'incorrect']);
    }
    if($_GET['id']){
      $result['id'] = $_GET['id'];
    }
    // Confirm account on the database
    $data = array('confirm'=>1);
    $this->currentUser->update($data, $_GET['id']);
    $this->show('admin/manageUsers');
  }

// UTILITIES

  private function sendEmail($address,$userId,$token){
    $this->mail->isSMTP();
    $this->mail->isHTML(true);
    $this->mail->Host = "smtp.gmail.com";
    $this->mail->Port = 465;
    $this->mail->SMTPAuth = true;
    $this->mail->SMTPSecure = 'ssl';
    $this->mail->Username  = "wf3lyon@gmail.com";
    $this->mail->Password = "Azerty1234";
    $this->mail->SetFrom('wf3lyon@gmail.com','BioForce3 Lyon');
    $this->mail->addAddress($address);
    $this->mail->Subject = 'EEDF Validation d\'email';
    $url = $this->generateTokenUrl($userId,$token);
    $bodyContent = '<p>Verification</p><a href="'.$url.'">'.$token.' '.$userId.'</a><p></p>';
    $this->mail->Body = $bodyContent;

    // if (!$this->mail->send()) {
    //     return "Mailer Error: " . $this->mail->ErrorInfo;
    // } else {
    //     return "Message sent!";
    // }

    return true;

  }

  private function generateTokenUrl($userId, $token){
    $url = 'http://localhost'.$this->generateUrl('admin_confirmation');
    $url .= '?id='   .$userId;
    $url .= '&token='.$token;
    return $url;
  }
}
