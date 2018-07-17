<?php
class FUtenteregistrato extends Fdb{
      public function __construct(){
             $this->_table='utenteregistrato';
             $this->_key='idutente';
             $this->_return_class='EUtenteregistrato';
             $this->_connection=USingleton::getInstance("Fdb")->get_connection();
             }

      public function convert_to_string($a){
             $ret='';
             for ($i=0;$i<count($a);$i++){
                 if($i==0) $ret.=$a[$i];
                 else $ret.=','.$a[$i];}
             return $ret;}
      public function convert_to_array($s){
             if ($s){return explode(',',$s);}
             else return array();}
                
      public function store ($object){
             if (Fdb::store($object)) {
                $query = 'UPDATE utenteregistrato SET listasconti=\'' . $this->convert_to_string($object->get_listasconti()) . '\' WHERE idutente = \''.$object->get_idutente().'\'';
                $this->query($query);}
             }

      public function load($key){
             $res=Fdb::load($key);
             $res->set_listasconti($this->convert_to_array($res->listasconti));
             unset($res->listasconti);
             return $res;}
             
      public function update($object){
             $res=Fdb::update($object);
             $query='UPDATE utenteregistrato SET listasconti=\'' . $this->convert_to_string($object->get_listasconti()) . '\' WHERE idutente = \''.$object->get_idutente().'\'';
             $res=$res&&$this->query($query);
             return $res;}
             
      public function search($parameters = array()){
            //& for ($j=0; $j<count($parameters)
             $res=Fdb::search($parameters);
             if ($res){for ($i=0; $i<count($res);$i++){
                 $res[$i]->set_listasconti($this->convert_to_array($res[$i]->listasconti));unset ($res[$i]->listasconti);}}
             return $res;}



}
?>
