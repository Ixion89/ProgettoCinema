<?php
require_once'C:\xampp\htdocs\_progetto\Entity\EProfilo.php';
require_once'C:\xampp\htdocs\_progetto\Entity\EGuest.php';
class EUtente extends EGuest {
      public $email;
      public $validazione;
	  public $profilo;
      
      public function __construct(string $un,string $pw, EProfilo $Profilo)
	  {
      $this->set_username($un);
      $this->set_password($pw);
	  $this->validazione=true;
	  $this->profilo=$Profilo;
	  }
      public function get_email(){return $this->email;}
      public function get_validazione(){return $this->validazione;}
      public function set_email(string $valore){$this->email=$valore;}
      public function set_validazione(string $valore){$this->validazione=$valore;}
      
      
      }

?>
