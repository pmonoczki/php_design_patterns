<?php
    final class Singleton {

      private static $instance = null;

      public static function getInstance() :Singleton {
         
         if (null === static::$instance) {
            static::$instance = new static();
         }
         return static::$instance;
      }
      protected function __construct() {
      }
      
      private function __clone() {
      }
      
      private function __wakeup() {
      }
   }
   
  
   
   $obj = Singleton::getInstance();
   var_dump($obj === Singleton::getInstance());
   
   
?>