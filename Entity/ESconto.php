<?php

class ESconto{
  public $idsconto;
  public $baseapplicazione;
 
  public function __construct(){}
  public function costruttore(int $idprec, float $val){
	  $this->idsconto=$idprec+1;
	  $this->base_applicazione=$val;	  
  }
  public function get_idsconto(){return $this->idssconto;}
  public function set_idsconto(int $val){$this->idsconto;}
  public function get_valore(){return $this->baseapplicazione;}
  public function set_valore(float $valore){$this->baseapplicazione;}
  
  public function calcola_sconto(float $val1, float $val2){
	  if ($val1 != 0 && $val2 !=0){
		  
	   
  } else {
	  print("Non si possono applicare sconti su valori nulli");
}
  }
}
  
?>