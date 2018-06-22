<?php
class Fdb{
      public $_connection;
      public $_result;
      public $_table='film';
      public $_key='titolo';
      public $_return_class;
      public $_autoinc=false;

      public function __construct() {
             global $config;
             $this->_connection=new mysqli($config['mysql']['host'], $config['mysql']['user'], $config['mysql']['password'], $config['mysql']['db']);
             if ($this->_connection->connect_errno) {
                   die('Impossibile connettersi al database: ' . $this->_connection->error);
                    }
             debug('Connessione al db riuscita');
      }
      
      public function query($query){
             if(isset($this->_connection)){
                $this->_result=$this->_connection->query($query);
                debug($query);
                debug($this->_connection->errno);
                if (!$this->_result)
                   return 'query fallita';
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

      public function store($object){
             $i=0;
             $values=$fields='';
             foreach ($object as $key=>$value){
                     if (!($this->_autoinc && $key==$this->_key) && substr($key,0,2)!='a_'){
                        if ($i==0){
                           $fields.=$key;
                           $values.='\''.$value.'\'';}
                        else {
                             $fields.=','.$key;
                             $values.=',\''.$value.'\'';}
                        $i++;}
                     }
             $query='INSERT INTO '.$this->_table.' ('.$fields.') VALUES ('.$values.')';
             $return=$this->query($query);
             return $return;}
             
      public function load($key){
             $query='SELECT * FROM '.$this->_table.' WHERE '.$this->_key.'=\''.$key.'\'';
             $this->query($query);
             return $this->getObject();}
                 
}
?>
