<?php
class FPosto extends Fdb{

      public function __construct(){
             $this->_table='posto';
             $this->_key='idPosto';
             $this->_return_class='EPosto';
             USingleton::getInstance('Fdb');}
             
      public function store(EPosto $posto, string $proiezione){
             parent::store($posto);
             $id=$proiezione.'#'.$posto->get_fila().$posto->get_numero();
             $query='INSERT INTO posto (idPosto,proiezione) VALUES ('.$id.', '.$proiezione.')';
             $this->query($query);}
}
?>
