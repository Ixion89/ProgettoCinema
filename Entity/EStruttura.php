<?php
class EStruttura {
      public $nome;
      public $indirizzo;
      public $telefono;
      public $email;
      public $orariapertura;  //array con 2 stringhe
      public $a_listasale;      //array
      
      public function __construct(){
             }
      public function costruttore(string $a, string $b, string $c, string $d, array $e, array $f){
             $this->set_nome($a);
             $this->set_indirizzo($b);
             $this->set_telefono($c);
             $this->set_email($d);
             $this->set_orari_apertura($e);
             $this->set_lista_sale($f);}
             
      public function get_nome(){return $this->nome;}
      public function get_indirizzo(){return $this->indirizzo;}
      public function get_telefono(){return $this->telefono;}
      public function get_email(){return $this->email;}
      public function get_orari_apertura(){return $this->orari_apertura;}
      public function get_lista_sale(){return $this->a_lista_sale;}
      
      public function set_nome(string $valore){$this->nome=$valore;}
      public function set_indirizzo(string $valore){$this->indirizzo=$valore;}
      public function set_telefono(string $valore){$this->telefono=$valore;}
      public function set_email(string $valore){$this->email=$valore;}
      public function set_orari_apertura(array $valore){$this->orari_apertura=$valore;}
      public function set_lista_sale(array $valore){$this->a_lista_sale=$valore;}
      
      public function add_sala(ESala $valore){$this->a_lista_sale[]=$valore;}
      public function set_ora_apertura(string $a){$this->orari_apertura[0]=$a;}
      public function set_ora_chiusura(string $c){$this->orari_apertura[1]=$c;}
      public function delete_sala(string $n){
             for($i=0;$i<count($this->a_lista_sale);$i++){
                   if ($n==$this->a_lista_sale[$i]->nome){
                          array_splice($this->a_lista_sale,$i,1);}
                   else;
             }}
}

?>
