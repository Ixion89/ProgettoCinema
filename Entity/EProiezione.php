<?php
class EProiezione{
      public $film;
      public $sala;
      public $orario;
      public $mappa_pro;
      public $tipo;
      
      public function __construct (){}
      public function costruttore (EFilm $f, ESala $s, string $o, EMappa $m, string $t){
             $pro=new EProiezione();
             $pro->set_film($f);
             $pro->set_sala($s);
             $pro->set_orario($o);
             $pro->set_mappa_pro($m);
             $pro->set_tipo($t);
             return $pro;}
             
      public function get_film(){return $this->film;}
      public function get_sala(){return $this->sala;}
      public function get_orario(){return $this->orario;}
      public function get_mappa_pro(){return $this->mappa_pro;}
      public function get_tipo(){return $this->tipo;}

      public function set_film(EFilm $valore){$this->film=$valore;}
      public function set_sala(ESala $valore){$this->sala=$valore;}
      public function set_orario(string $valore){
             $x=array(':',',','.');
             $a=str_replace($x,' ',$valore);
             $a=explode(' ',$a);
             if($a[0]>=0&&$a[0]<=23&&$a[1]>=0&&$a[1]<=59){
             $this->orario=$a[0].'.'.$a[1];}}
      public function set_mappa_pro(EMappa $valore){$this->mappa_pro=$valore;}
      public function set_tipo(string $valore){$this->tipo=$valore;}

}
?>
