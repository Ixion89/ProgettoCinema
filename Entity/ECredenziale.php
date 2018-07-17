<?php
class ECredenziale{
      public $numerocarta;
      public $circuitocarta;
      public $scadenza;
      public $id;

 
      public function __construct(){}
      public function costruttore(string $nc, string $cc, string $scad, string $id){
             $this->set_numerocarta($nc);
		     $this->set_circuitocarta($cc);
		     $this->set_scadenza($scad);
             $this->set_id($id);}
             
       public function save(){
             $conn=new FCredenziale();
             if ($conn->store($this)){}
             else {$conn->update($this);}}
      public function delete(){
             $conn=new FCredenziale();
             $conn->delete($this);}
      public function get_credenziale(string $idfiliale){
             $conn=new FCredenziale();
             return $conn->load($idfiliale);}
		  
      public function get_numerocarta(){ return $this->numerocarta;}
      public function set_numerocarta(string $nc) {$this->numerocarta=$nc;}
	  public function get_circuitocarta () {return $this->numerocarta;}
	  public function set_circuitocarta(string $val) {$this->circuitocarta=$val;}
	  public function get_scadenza(){return $this->scadenza;}
	  public function set_scadenza(string $val) {$this->scadenza=$val;}
	  public function set_id(string $id) {$this->id=$id;}
	  public function get_id(){return $this->id;}
}
		  
?>
