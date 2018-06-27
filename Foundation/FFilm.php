<?php
class FFilm extends Fdb{

      public function __construct(){
             $this->_table='film';
             $this->_key='titolo';
             $this->_return_class='EFilm';
             $this->_connection=USingleton::getInstance("Fdb")->get_connection();}

      public function convert_to_string(array $a){
             $ret='';
             for ($i=0;$i<count($a);$i++){
                 if($i==0) $ret.=$a[$i];
                 else $ret.=','.$a[$i];}
             return $ret;}
      public function convert_to_array(string $s){
             return explode(',',$s);}
             
      public function store($film){
             Fdb::store($film);/*
             $query='INSERT INTO film (generi,cast) VALUES (\''.$this->convert_to_string($film->get_generi()).'\',\''.$this->convert_to_string($film->get_cast()).'\') WHERE titolo=\''.$film->get_titolo().'\';';
             debug($query);
             $this->query($query);*/}
}

?>
