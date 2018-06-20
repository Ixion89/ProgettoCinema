<?php
class Fdb{
      public $_connection;

      public function __construct() {
             global $config;
             $this->_connection=mysqli_connect($config['mysql']['host'], $config['mysql']['user'], $config['mysql']['password'], $config['mysql']['database']);
             if ($this->_connection->connect_errno) {
                die('Impossibile connettersi al database: ' . mysql_error());
                }
             debug('Connessione al db riuscita');
             }
      
 /*     public function connect($host,$password,$host,$database) {
             $this->_connection=mysqli_connect($host,$user,$password,$database);
             if (!$this->_connection) {
                die('Impossibile connettersi al database: ' . mysql_error());
                }
             $db_selected = mysql_select_db($database, $this->_connection);
             if (!$db_selected) {
                die ("Impossibile utilizzare $database: " . mysql_error());
                }
             debug('Connessione al database avvenuta correttamente');

             $this->query('SET names \'utf8\'');
             return true; }     */

?>
