<?php
class FUtente extends Fdb{
      public function __construct(){
             $this->_table='utente';
             $this->_key='Idregistrazione';
             $this->_autoinc=true;
             $this->_return_class='EUtente';
             $this->_connection=USingleton::getInstance("Fdb")->get_connection();}
             
      public function store($eutente){
             $par=array ('email = \''.$eutente->get_email().'\'');
             if (Fdb::search($par)){}
             else{
                  $query= 'INSERT INTO utente (password,email) VALUES ('.'\''.$eutente->get_password() .'\', \''.$eutente->get_email().'\')';
                  return $this->query($query);}}
}
