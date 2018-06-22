<?php
class EPagamento{

      public $persona;
      public $totale;   //float
      public $idpagamento;  //string //id di ogni pagamento----> 1 biglietto
      public $listaitem;  //array di item
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
      public function crea_biglietto(){
                $x=$this->get_id().bin2hex(random_bytes(1));
                $l=$this->get_lista_item();
                $r='';
                for ($i=0;$i<count($l);$i++){
                    $y=$l[$i]->get_nome();
                    $y=explode('#',$y);
                    $y[0]=$y[0][4].$y[0][5].'-'.$y[0][2].$y[0][3].'-'.$y[0][0].$y[0][1] ;
                    $r=$r.'Data '.$y[0].' Ora '.$y[2]."\n".'Film in '.$y[3].'D: '.'recupero nome film da DB tramite id'."\n";
                    $r=$r.'Sala '.$y[1].' Posto '.$y[4]."\n".'Prezzo: '.$l[$i]->get_valore()."\n\n";}
                $r=$r.'Totale Pagato: '.$this->get_totale();
                $bigl=new EBiglietto($r,$x);
                return $bigl;}
}

?>
