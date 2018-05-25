<?php
class ESala {
      public $nome;
      public $nr_posti;
      public $nome_schema;
      
      public function __construct (){}
      public function costruttore (string $name, int $nr, string $schema){
             $this->set_nome($name);
             $this->set_nr_posti($nr);
             $this->set_schema($schema);}
      public function get_nome(){return $this->nome;}
      public function get_nr_posti(){return $this->nr_posti;}
      public function get_schema(){return $this->nome_schema;}
      public function set_nome(string $valore){$this->nome=$valore;}
      public function set_nr_posti(int $valore){$this->nr_posti=$valore;}
      public function set_schema(string $valore){$this->nome_schema=$valore;}
}

?>
