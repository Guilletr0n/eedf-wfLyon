<?php

namespace Model;

class MailServerModel extends \W\Model\Model
{
    private static $host;
    private static $user;
    private static $password;

    public function __construct(){
      $app = getApp();
      self::$host = $app->getConfig('mail_server');
      self::$user = $app->getConfig('mail_username');
      self::$password = $app->getConfig('mail_password');
    }
    public static function setAddress(){
      $app = getApp();
    }
    public static function setUser(){}
    public static function setPassword(){}

    public static function getHost(){
      return self::$host;
    }
    public static function getUser(){
      return self::$user;
    }
    public static function getPassword(){
      return self::$password;
    }
}
 ?>
