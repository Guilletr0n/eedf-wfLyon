<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Security\StringUtils;
use \Model\AdherentModel;
use \Model\AdminModel;
use \Model\Globals;
use \Model\MailServerModel as MailServer;
use \Model\MembersModel as members;
use \Model\SectionsModel as sections;
use \Model\DocumentsModel as document;

class UserManagementController extends Controller {

  protected $currentUser;
  protected $auth;
  protected $utils;
  protected $mail;
  protected $adminUser;
  protected $mailServer;
  private $MembersModel;
  private $SectionsModel;
  protected $docModel;

  public function __construct(){
    $this->currentUser = new AdherentModel;
    $this->auth        = new AuthentificationModel;
    $this->mail        = new \PHPMailer();
    $this->utils       = new StringUtils;
    $this->adminUser   = new AdminModel;
    $this->mailServer  = new MailServer;
    $this->MembersModel = new members;
    $this->SectionsModel = new sections;
    $this->docModel = new document;
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
    $this->redirectToRoute('userManagement_list_users');
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
        $this->show('default/accueil');
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
        //récupération des sections existantes
        $listsections = $this->SectionsModel->findAll('id');
        //récupération des membres en fonction d'un utilisateur
        $usermembers = $this->MembersModel->userMembers($user);
        $data = $this->docModel->findAll();
        $this->show('default/accueil',['user'=>$_SESSION['user'],'usermembers' => $usermembers,'listsections' => $listsections,'documents' => $data]);
        //$this->show('dev/output');
      }else{
        $_SESSION['error'] = "Identifiant ou mot de passe incorrect";
        $this->show('dev/output',['user'=>$_SESSION['error']]);
      }
    }
  }

  public function deconnexion(){
    $this->auth->logUserOut();
    $this->redirectToRoute('default_accueil');
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

  public function testEmail($email){
    $address = $this->mailServer->getHost();
    $user = $this->mailServer->getUser();
    $password = $this->mailServer->getPassword();

    $this->show('dev/output',['address'=>$address,'user'=>$user,'password'=>$password,'email'=>$email,'sent'=>$this->sendEmail('gonzalezdecastro.guillermo@gmail.com')]);
//$this->sendEmail($_GET['email'])
  }

// UTILITIES

private function sendEmail($address = '', $userId = '',$token = '', $subject = ''){
  // set email server
  $mailAddress = $this->mailServer->getHost();
  $user = $this->mailServer->getUser();
  $password = $this->mailServer->getPassword();

  $this->mail->isSMTP();
  $this->mail->isHTML(true);
  $this->mail->Host = $this->mailServer->getHost();
  $this->mail->Port = 465;
  $this->mail->SMTPAuth = true;
  $this->mail->SMTPSecure = 'ssl';
  $this->mail->Username  = $this->mailServer->getUser();
  $this->mail->Password = $this->mailServer->getPassword();
  $this->mail->SetFrom($this->mailServer->getUser(),'EEDF Annonay');
  $this->mail->addAddress($address);
  $this->mail->Subject = $subject;
  if(strlen($token)>1){
    $url = $this->generateTokenUrl($userId,$token);
  }
  $url = $this->generateTokenUrl($userId,$token);
  $bodyContent = '<p>Verification</p><a href="'.$url.'">'.$token.' '.$userId.'</a><p></p>';
  $this->mail->Body = $bodyContent;

  if (!$this->mail->send()) {
       return "Mailer Error: " . $this->mail->ErrorInfo . ' ' .$mailAddress.' '.$address;
  } else {
     return "Message sent!";
  }

  return true;

}

  private function sendEmailOld($address,$userId,$token){
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
