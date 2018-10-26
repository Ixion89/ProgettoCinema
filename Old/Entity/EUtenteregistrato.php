<?php
class EUtenteregistrato{
        public $nome;
		public $cognome;
		public $idutente;
		public $datadinascita;
		public $indirizzo;
		public $citta;
		public $telefono;
		public $a_listasconti;

        public function __construct(){}
        public function costruttore (string $n, string $c, string $d, string $i, string $city, string $t, array $sconti){
               $this->set_nome($n);
               $this->set_cognome($c);
               $this->set_datanascita($d);
               $this->set_indirizzo($i);
               $this->set_citta($city);
               $this->set_telefono($t);
               $this->a_listasconti=$sconti;}
	           
        public function save(){
             $conn=new FUtenteregistrato();
             if ($conn->store($this)){}
             else {$conn->update($this);}}
      public function delete(){
             $conn=new FUtenteregistrato();
             $conn->delete($this);}
      public function get_utenteregistrato(string $idfiliale){
             $conn=new FUtenteregistrato();
             return $conn->load($idfiliale);}
	           
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
        public function set_telefono(string $valore){$this->telefono=$valore;}
        public function get_listasconti(){return $this->a_listasconti;}
        public function set_listasconti (array $valore){$this->a_listasconti=$valore;}
        public function get_idutente() {return $this->idutente;}
        public function set_idutente(string $val){$this->idutente=$val;}



}
?>
