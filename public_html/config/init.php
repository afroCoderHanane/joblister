<?php
//Start a session
  session_start();

  // Database config file
   require_once 'config.php';
   //include Helpers
   require_once 'helpers/system_helper.php';

  // Autoload
  function __autoload($class_name){
    require_once 'lib/'. $class_name.'.php';
  }
?>