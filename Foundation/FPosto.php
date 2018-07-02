<?php
class FPosto extends Fdb{

      public function __construct(){
             $this->_table='posto';
             $this->_key='idPosto';
             $this->_return_class='EPosto';
             USingleton::getInstance('Fdb');}
             
      public function id_to_posto(string $id){
             $a=explode('#',$id);
             $res=array($a[4],$a[5]);
             return $res;}
      public function posto_to_id(EPosto $posto){}
             
      public function store($posto){
             Fdb::store($posto);
             $id=$proiezione.'#'.$posto->get_fila().$posto->get_numero();
             $query='INSERT INTO posto (idPosto,proiezione) VALUES ('.$id.', '.$proiezione.')';
             $this->query($query);}
             
      if(Fdb::store($struttura)){
                $query='UPDATE struttura SET listasale=\''.$this->sale_to_string($struttura->get_listasale()).'\' WHERE Idfiliale=\''.$struttura->get_idfiliale().'\';';
                return $this->query($query);}
            }
}
?>
