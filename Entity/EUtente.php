<?php
class Utente extends EGuest {
      public $email;
      public $validazione;
      
      public function __construct(string $em,string $val);{
      $this->email=$em;
      $this->validazione=$val;}
      public function get_email(){return $this->email;}
      public function get_validazione(){return $this->validazione;}
      public function set_email(string $valore){$this->email=$valore;}
      public function set_validazione(string $valore){$this->validazione=$valore;}
      
      
      }

?>
