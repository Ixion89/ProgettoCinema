<?php
class Fdb{
      public $_connection;

      public function __construct() {
             global $config;
             $this->_connection=new mysqli($config['mysql']['host'], $config['mysql']['user'], $config['mysql']['password'], $config['mysql']['db']);
             if ($this->_connection->connect_errno) {
                die('Impossibile connettersi al database: ' . mysqli_error());
                }
             debug('Connessione al db riuscita');
             }
      
      }
?>
