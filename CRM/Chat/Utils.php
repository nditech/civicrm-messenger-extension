<?php
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
/**
 * "Wraps" botman
 */

class CRM_Chat_Utils {

  static function shorten($string, $length = 50) {

    return strlen($string) > $length ? substr($string, 0, $length)."..." : $string;

  }

  static function exit($code = 0) {

    if ($code === 0) {
      echo 'OK';
      CRM_Utils_System::civiExit(0);
    } else {
      CRM_Utils_System::civiExit($code);
    }

  }

}