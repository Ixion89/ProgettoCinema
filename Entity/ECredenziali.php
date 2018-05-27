<?php

class ECredenziali{
 public $numerocarta;
 public $circuitocarta;
 public $scadenza;
 
 public function __construct(){}
 public function costruttore(string $nc, string $cc, string $scad){
          $this->numerocarta($nc);
		  $this->setcirccarta($cc);
		  $this->scadenza($scad);
		  }
		  
		  public function get_numcarta(){ return $this->numerocarta;}
		  public function set_numerocarta (string $nc) {$this->numerocarta=$nc;}
		  public function get_circuitocarta () {return $this->numerocarta;}
		  public function set_circuitocarta (string $val) {$this->circuitocarta;}
		  public function get_scadenza(){return $this->scadenza;}
		  public function set_scadenza (string $val) {$this->scadenza;}
}
		  
?>