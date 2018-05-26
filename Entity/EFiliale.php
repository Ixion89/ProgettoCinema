<?php
class EFiliale extends EGuest{
	public $IDFiliale;
	
	public function __construct(string $un, string $pw){
		$this->set_username($un);
		$this->set_password($pw);
	   
	}
	
	public function get_idfiliale(){return $this->$IDFiliale;}
	public function set_idfiliale($idf){$this->IDFiliale=$idf;}
	}
		
?>