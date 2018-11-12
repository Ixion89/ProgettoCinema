<?php
require_once ROOT_DIR.'\app\foundation\FSala.php';

class ESala {
      public $nomesala;
      public $numeroposti;

      
      public function __construct (){}
      public function costruttore (string $name, int $nr){
             $this->set_nome($name);
             $this->set_nr_posti($nr);}
             
      public function save(){
             $conn=new FSala();
             $cerca=array('nomesala = \''.$this->get_nome().'\'');
             $res=$conn->search($cerca);
             if ($conn->store($this)){}
             else {$conn->update($this);}}
      public function delete(){
             $conn=new FSala();
             $conn->delete($this);}
      public function get_sala(string $nomesala){
             $conn=new FSala();
             return $conn->load($nomesala);}
             
      public function get_nome(){return $this->nomesala;}
      public function get_nr_posti(){return $this->numeroposti;}
      public function set_nome(string $valore){$this->nomesala=$valore;}
      public function set_nr_posti(int $valore){$this->numeroposti=$valore;}
}

?>
