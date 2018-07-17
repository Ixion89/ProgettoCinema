<?php
class EFiliale {
      public $idfiliale;
      public $nome;
      public $indirizzo;
      public $telefono;
      public $email;
      public $orariapertura;
      public $a_listasale;      //array
      public $partitaiva;
      
      public function __construct(){
             }
      public function costruttore(string $i,string $a, string $b, string $c, string $d, string $e, array $f,string $p){
             $this->set_idfiliale($i);
             $this->set_nome($a);
             $this->set_indirizzo($b);
             $this->set_telefono($c);
             $this->set_email($d);
             $this->set_orariapertura($e);
             $this->set_listasale($f);
             $this->set_partitaiva($p);}
             
      public function save(){
             $conn=new FFiliale();
             if ($conn->store($this)){}
             else {$conn->update($this);}}
      public function delete(){
             $conn=new FFiliale();
             $conn->delete($this);}
      public function get_struttura(string $idfiliale){
             $conn=new FFiliale();
             return $conn->load($idfiliale);}
             
      public function get_idfiliale(){return $this->idfiliale;}
      public function get_nome(){return $this->nome;}
      public function get_indirizzo(){return $this->indirizzo;}
      public function get_telefono(){return $this->telefono;}
      public function get_email(){return $this->email;}
      public function get_orariapertura(){return $this->orariapertura;}
      public function get_listasale(){return $this->a_listasale;}
      public function get_partitaiva(){return $this->partitaiva;}
      
      public function set_idfiliale(string $valore){$this->idfiliale=$valore;}
      public function set_nome(string $valore){$this->nome=$valore;}
      public function set_indirizzo(string $valore){$this->indirizzo=$valore;}
      public function set_telefono(string $valore){$this->telefono=$valore;}
      public function set_email(string $valore){$this->email=$valore;}
      public function set_orariapertura(string $valore){$this->orariapertura=$valore;}
      public function set_listasale(array $valore){$this->a_listasale=$valore;}
      public function set_partitaiva(string $valore){$this->partitaiva=$valore;}
      
      public function add_sala(ESala $valore){$this->a_listasale[]=$valore;}
      public function delete_sala(string $n){
             for($i=0;$i<count($this->a_listasale);$i++){
                   if ($n==$this->a_listasale[$i]->nome){
                          array_splice($this->a_listasale,$i,1);}
                   else;
             }}
}

?>
