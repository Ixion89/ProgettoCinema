<?php
class FSala extends Fdb{

      public function __construct(){
             $this->_table='sala';
             $this->_key='nomesala';
             $this->_return_class='ESala';
             $this->_connection=USingleton::getInstance("Fdb")->get_connection();}

}
?>
