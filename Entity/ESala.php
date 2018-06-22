<?php
class ESala {
      public $nomesala;
      public $numeroposti;
      public $nomeschema;

      
      public function __construct (){}
      public function costruttore (string $name, int $nr, string $schema){
             $this->set_nome($name);
             $this->set_nr_posti($nr);
             $this->set_schema($schema);}
      public function get_nome(){return $this->nomesala;}
      public function get_nr_posti(){return $this->numeroposti;}
      public function get_schema(){return $this->nomeschema;}
      public function set_nome(string $valore){$this->nomesala=$valore;}
      public function set_nr_posti(int $valore){$this->numeroposti=$valore;}
      public function set_schema(string $valore){$this->nomeschema=$valore;}
}

?>
