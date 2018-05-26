<?php

require_once 'C:\xampp\htdocs\_progetto\Entity\ESconto.php';
require_once'C:\xampp\htdocs\_progetto\Entity\ECredenziali.php';
class EProfilo{
	public $nome;
	public $cognome;
	public $indirizzo;
	public $datanascita;
	public $citta;
	public $numerotel;
	public $cartacredito;  //oggetto di tipo credenziale composzione
	public $ListaSconto; //lista di oggetti sconto
	
	
	public function __construct(){}
	public function costruttore( string $n, string $c, string $i, string $d, string $ci,
	                         Int $tel, ECredenziali $cc, ESconto $sconto){		
		$this->set_nome($n);
		$this->set_cognome($c);
		$this->set_indirizzo($i);
		$this->set_datanascita($d);
		$this->set_citta($c);
		$this->set_numerotel($tel);
		$this->cartacredito=$cc;  //newcartacredito
		$this->ListaSconto=[$sconto];}   //new sconto
		
	public function get_nome() {return $this->nome;}
	public function set_nome(string $n){$this->nome=$n;}
	public function get_cognome(){return $this->cognome;}
	public function set_cognome(string $c){$this->cognome=$c;}
	public function get_indirizzo(){return $this->indirizzo;}
	public function set_indirizzo(string $i){$this->indirizzo=$i;}
	public function get_datanascita(){return $this->datanascita;}
	public function set_datanascita(string $d){$this->datanascita=$d;}
	public function get_citta(){return $this->citta;}
	public function set_citta(string $ci){$this->citta=$ci;}
	public function get_numtel(){return $this->numerotel;}
	public function set_numtel(Int $nt) {$this->numerotel=$nt;}
	public function get_cartacc(){return $this->cartacredito;}
	public function set_cartacc(string $cc){$this->cartacredito=$cc;}
	public function set_sconto(string $sc){$this->sconto=$sc;}
	public function get_sconto (){ return $this->sconto;}
	
	
	}
?>