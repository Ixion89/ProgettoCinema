<?php
class Fdb{
      public $_connection;
      public $_result;
      public $_table;
      public $_key;
      public $_return_class;

      public function __construct() {
             global $config;
             if (!isset($this->_connection)){
                $this->_connection=new mysqli($config['mysql']['host'], $config['mysql']['user'], $config['mysql']['password'], $config['mysql']['db']);
                 if ($this->_connection->connect_errno) {
                   die('Impossibile connettersi al database: ' . $this->_connection->error);
                    }
                     debug('Connessione al db riuscita');}
             else  {return $this->_connection;}
      
      }
      
      public function query($query){
             if(isset($this->_connection)){
                $this->_result=$this->_connection->query($query);
                debug($query);
                debug($this->_connection->error);
                if (!$this->_result)
                   return false;
                else
                    return true;}
                else return false;}
                 
      public function getArrayAss(){
             if ($this->_result != false) {
                $numero_righe=$this->_result->num_rows;
                debug('Numero risultati: '. $numero_righe);
                              if ($numero_righe>0) {
                                 $return=array();
                                 while ($row = $this->_result->fetch_assoc()) {
                                       $return[]=$row;
                                       }
                                 $this->_result=false;
                                 return $return;
                              }
                }
             return false;}
             
      public function getObject() {
             if ($this->_result != false) {
             $numero_righe=$this->_result->num_rows;
             debug('Numero risultati:'. $numero_righe);
             if ($numero_righe>0) {
                $row = $this->_result->fetch_object('EFilm'/*$this->_return_class*/);
                $this->_result=false;
                return $row;}
                }
             else return false;
             }
      
      public function getObjectArray() {
        if ($this->_result != false) {
        $numero_righe=$this->_result->num_rows;
        debug('Numero risultati:'. $numero_righe);
        if ($numero_righe>0) {
            $return=array();
            while ($row = $this->_result->fetch_object('EFilm'/*$this->_return_class*/)) {
                $return[]=$row;
            }
            $this->_result=false;
            return $return;}
            }
            else return false;
             }
    
      public function close(){
             $this->_connection->close();
             unset($this->_connection);
             debug('Connessione al db chiusa');}
                 
}
?>
