<?php
class EProiezione{
      public $a_film;
      public $a_sala;
      public $a_giorno;        //da inserire in formato gg-mm-aaaa
      public $a_orario;
      public $a_mappaproiezione;
      public $a_tipo;
      public $idProiezione;     //l'id contiene data,nome sala, ora e tipo separati da #
      
      public function __construct (){}
      public function costruttore (EFilm $f, ESala $s, string $g,string $o, EMappa $m, string $t){
             $pro=new EProiezione();
             $pro->set_film($f);
             $pro->set_sala($s);
             $pro->set_giorno($g);
             $pro->set_orario($o);
             $pro->set_mappa_pro($m);
             $pro->set_tipo($t);
             $pro->set_id();
             return $pro;}
             
      public function get_film(){return $this->a_film;}
      public function get_sala(){return $this->a_sala;}
      public function get_giorno(){return $this->a_giorno;}
      public function get_orario(){return $this->a_orario;}
      public function get_mappa_pro(){return $this->a_mappaproiezione;}
      public function get_tipo(){return $this->a_tipo;}
      public function get_id(){return $this->idProiezione;}

      public function set_film(EFilm $valore){$this->a_film=$valore;}
      public function set_sala(ESala $valore){$this->a_sala=$valore;}
      public function set_giorno(string $valore){$this->a_giorno=$valore;}
      public function set_orario(string $valore){
             $x=array(':',',','.');
             $a=str_replace($x,' ',$valore);
             $a=explode(' ',$a);
             if($a[0]>=0&&$a[0]<=23&&$a[1]>=0&&$a[1]<=59){
             $this->a_orario=$a[0].'.'.$a[1];}}
      public function set_mappa_pro(EMappa $valore){$this->a_mappaproiezione=$valore;}
      public function set_tipo(string $valore){$this->a_tipo=$valore;}
      public function set_id(){
             $x=explode('-',$this->get_giorno());
             $i=$x[2][2].$x[2][3].$x[1].$x[0].'#'.$this->get_sala()->get_nome().'#'.$this->get_orario().'#'.$this->get_tipo();
             $this->idProiezione=$i;}
      public function extract(){
             $s=$this->get_id();
             $a=explode('#',$s);
             $this->set_giorno($a[0][4].$a[0][5].'-'.$a[0][2].$a[0][3].'-'.$a[0][0].$a[0][1]);
             $this->set_sala(ESala::get_sala($a[1]));
             $this->set_orario($a[2]);
             $this->set_tipo($a[3]);}

}
?>
