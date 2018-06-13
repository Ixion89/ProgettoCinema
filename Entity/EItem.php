<?php
class EItem {
      public $nome;
      public $valore;
      
      public function __construct (){}
      public function costruttore(string $i, float $v){
             $r=new EItem();
             $r->set_nome($i);
             $r->set_valore($v);
             return $r;}
             
      public function get_nome(){return $this->nome;}
      public function get_valore(){return $this->valore;}
      
      public function set_nome(string $valore){$this->nome=$valore;}
      public function set_valore(float $valore){$this->valore=$valore;}
      
      public function crea_nome(EProiezione $pr, EPosto $p){
             $x=$pr->get_id().'#'.$p->get_fila().$p->get_numero();
             return $x;}
}
?>
