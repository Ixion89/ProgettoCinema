<?php
class EBiglietto{
      public $riepilogo;
      public $idpagamento;
      public $idbiglietto;
      
      public function __construct(string $text, string $i, string $idb){
             $this->riepilogo=$text;
             $this->idpagamento=$i;
             $this->idbiglietto=$idb;}
             
      public function get_riepilogo(){return $this->riepilogo;}
      public function get_idbiglietto(){return $this->idbiglietto;}
      public function get_id_pagamento(){return $this->idpagamento;}
      public function set_riepilogo(string $valore){$this->riepilogo=$valore;}
      public function set_idpagamento(string $valore){$this->idpagamento=$valore;}
      public function set_idbiglietto(string $valore){$this->idbiglietto=$valore;}
      
      public function stampa_biglietto(){
             print('Codice Biglietto: '.$this->get_idbiglietto()."\n\n".$this->get_riepilogo()."\n\n".$this->get_id_pagamento());}
      }

?>
