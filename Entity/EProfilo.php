<?php

require_once'C:\xampp\htdocs\_progetto\Entity\ESconto.php';
require_once'C:\xampp\htdocs\_progetto\Entity\ECredenziali.php';
class EProfilo{
        public $nome;
		public $cognome;
		public $datadinascita;
		public $indirizzo;
		public $citta;
		public $telefono;
		public $cartacredito;
		public $listasconti;
		
public function __construct(){}
public function costruttore (ECredenziali $CC, array $Sconti){
	$this->set_cartacredito($CC);
	$this->listasconti=$Sconti;
}
public function get_nome(){return $this->nome;}
public function set_nome(string $valore){$this->nome=$valore;}
public function get_cognome() {return $this->cognome;}
public function set_cognome(string $valore){$this->cognome=$valore;}
public function get_datanascita(){return $this->datadinascita;}
public function set_datanascita(string $valore){$this->datadinascita=$valore;}
public function get_indirizzo(){return $this->indirizzo;}
public function set_indirizzo (string $valore){$this->indirizzo=$valore;}
public function get_citta(){return $this->citta;}
public function set_citta(string $valore){$this->citta=$valore;}
public function get_telefono (){return $this->telefono;}
public function set_telegono(string $valore){$this->telefono=telefono;}
public function get_cartacredito(){return $this->cartacredito;}
public function set_cartacredito(ECredenziali $valore){$this->cartacredito=$valore;}
public function get_listasconti(){return $this->listasconti;}
public function set_listasconti (array $valore){$this->listasconti=$valore;}



}
?>
