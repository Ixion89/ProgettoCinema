<?php
class EItem {
      public $nome;      //contiene l'id della proiezione e con un altro # il posto
      public $valore;
      
      public function __construct (){}
      public function costruttore(EProiezione $pr1, EPosto $p1){
             $r=new EItem();
             $x=EItem::crea_nome($pr1,$p1);
             $r->set_nome($x);
             $y=$pr1->get_id();
             $y=explode('#',$y);
             if ($y[3]=='2'){
                $r->set_valore(7.00);}
             else {$r->set_valore(10.00);};
             return $r;}
             
      public function get_nome(){return $this->nome;}
      public function get_valore(){return $this->valore;}
      
      public function set_nome(string $valore){$this->nome=$valore;}
      public function set_valore(float $valore){
             $this->valore=$valore;}
      
      public function crea_nome(EProiezione $pr, EPosto $p){
             $x=$pr->get_id().'#'.$p->get_fila().$p->get_numero();
             return $x;}
      public function sconta_valore(float $s){
             $w=$this->get_valore();
             $this->set_valore($w-$s);}
}
?>
