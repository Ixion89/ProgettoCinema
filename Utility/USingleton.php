<?php
class USingleton {
      private static $instances = array();

      private function __construct(){}

      public static function getInstance($c){
             if(!isset(self::$instances[$c])){
                  self::$instances[$c] = new $c;}
             return self::$instances[$c];
      }
}
?>
