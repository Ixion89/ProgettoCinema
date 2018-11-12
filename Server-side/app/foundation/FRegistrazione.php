<?php
require_once ROOT_DIR.'\app\utility\USingleton.php';
require_once ROOT_DIR.'\app\foundation\Fdb.php';
require_once ROOT_DIR.'\app\entity\EUtente.php';

class FRegistrazione extends Fdb
{
  public function __construct()
  {
      $this->_table='registrazione';
      $this->_key='idregistrazione';
      $this->_autoinc=true;
      $this->_return_class='EUtente';
      $this->_connection=USingleton::getInstance("Fdb")->get_connection();
  }

  public function store($eutente){
      $query= 'INSERT INTO registrazione (password,email) VALUES ('.'\''.$eutente->get_password().'\''.','.'\''.$eutente->get_email().'\''.')';
      $this->query($query);
      //debug($query);
      }
}