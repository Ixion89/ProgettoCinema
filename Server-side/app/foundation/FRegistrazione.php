<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 02/07/2018
 * Time: 16:21
 */

require_once 'C:\xampp\htdocs\cinema\app\config\Fdb.php';
require_once 'C:\xampp\htdocs\cinema\app\foundation\USingleton.php';
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