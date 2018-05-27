<?php

class ESconto{
  public $idsconto;
  public $valore_applicazione;
  
  public function __construct(){}
  
  public function get_idsconto(){return $this->idssconto;}
  public function set_idsconto(int $val){$this->idsconto;}
  public function get_valore(){return $this->valore_applicazione;}
  public function set_valore(float $valore){$this->valore_applicazione;}
}
  
?>