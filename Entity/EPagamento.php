<?php
class EPagamento{

      public $persona;
      public $totale;   //float
      public $IDPagamento;  //string //id di ogni pagamento----> 1 biglietto
      public $ListaItem;  //array di item
      public $pagato;

      public function __construct(){}
      public function costruttore(string $p, array $i){
             $x= new EPagamento();
             $x->set_persona($p);
             $x->set_lista_item($i);
             $x->set_totale($x->calcolo_totale());
             $x->set_pagato(false);
             $c=true;
             while($c){
                       $bytes = random_bytes(3);
                       $bytes=bin2hex($bytes);
                       if (true){                 //da inserire condizione di esistenza nel DB
                          $x->set_id($bytes);
                          $c=false;}
                        }
             return $x;
             }

      public function get_persona(){return $this->persona;}
      public function get_totale(){return $this->totale;}
      public function get_id(){return $this->IDPagamento;}
      public function get_lista_item(){return $this->ListaItem;}
      public function get_pagato(){return $this->pagato;}
      
      public function set_persona(string $valore){$this->persona=$valore;}
      public function set_totale(float $valore){$this->totale=$valore;}
      public function set_id(string $valore){$this->IDPagamento=$valore;}
      public function set_lista_item(array $valore){$this->ListaItem=$valore;}
      public function set_pagato(bool $valore){$this->pagato=$valore;}
      
      public function calcolo_totale(){
	         $items=$this->get_lista_item();
	         $totale=0;
	         for ($i=0;$i<count($items);$i++){
                 $totale=$totale+$items[$i]->get_valore();}
	         return $totale;
	         }
      public function pagamento(){
             if ($this->get_persona()=='F000'){
                $this->set_pagato(true);}
             else if ($this->get_persona()=='teresabove@prova.it'){
                  $this->set_pagato(true);}
             }
}

?>
