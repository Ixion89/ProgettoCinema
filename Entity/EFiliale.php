<?php
class EFiliale extends EGuest{
	public $IDFiliale;
	public $indirizzo;
	public $telefono;
	public $partitaiva;
	
	
	
	public function __construct(){

	}
	public function costruttore(string $un, string $pw, string $id, string $ind, string $tel, string $pi){
		$this->username=$un;
		$this->password=$pw;
		$this->IDFiliale=$id;
		$this->indirizzo=$ind;
		$this->telefono=$tel;
		$this->partitaiva=$pi;
	    
	}
	
	public function get_idfiliale(){return $this->$IDFiliale;}
	public function set_idfiliale($idf){$this->IDFiliale=$idf;}
	public function get_indirizzo(){return $this->$$indirizzo;}
	public function set_indirizzo(string $val) {$this->indirizzo=$val;}
	public function get_telefono(){return $this->telefono;}
	public function set_telefono(string $val){$this->telefono=$val;}
	public function get_partitaiva(){return $this->$partitaiva;}
	public function set_partitaiva($val){$this->partitaiva=$val;}
	}
		
?>