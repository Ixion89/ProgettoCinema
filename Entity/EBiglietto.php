<?php
class EBiglietto{
      public $riepilogo;
      public $id;
      
      public function __construct(string $text, string $i){
             $this->riepilogo=$text;
             $this->id=$i;}
             
      public function get_riepilogo(){return $this->riepilogo;}
      public function get_id(){return $this->id;}
      
      public function set_riepilogo(string $valore){$this->riepilogo=$valore;}
      public function set_id(string $valore){$this->id=$valore;}
      
      public function stampa_biglietto(){
             print('Codice Biglietto: '.$this->get_id()."\n\n".$this->get_riepilogo());}
      }

?>
