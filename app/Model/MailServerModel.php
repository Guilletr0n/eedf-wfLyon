<?php

namespace Model;

class MailServerModel extends \W\Model\Model
{

    private static $address;
    private static $user;
    private static $password;

    public function __construct(){
      $app = getApp();
      self::$address = $app->getConfig('mail_server');
      self::$user = $app->getConfig('mail_username');
      self::$password = $app->getConfig('mail_password');
    }
    public static function setAddress(){
      $app = getApp();
      //self::$address = $app->getConfig('mail_server');
    }
    public static function setUser(){}
    public static function setPassword(){}

    public static function getAddress(){
      return self::$address;
      //return 'hola';
    }
    public static function getUser(){
      return self::$user;
    }
    public static function getPassword(){
      return self::$password;
    }

}

 ?>
