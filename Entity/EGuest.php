<?php
class EGuest {
       public $username;
       public $password;

       public function __construct(){
       $this->username='guest'; //valori fittizi per il guest
       $this->password='';}

       
       public function get_username(){return $this->username;}
       public function get_password(){return $this->password;}
       public function set_username(string $valore){$this->username=$valore;}
       public function set_password(string $valore){$this->password=$valore;}
       public function login (string $un, string $pw){
                if ($un=='mariorossi'){
                   if ($pw=='red'){
                      $a= new EUtente($un,$pw);}
                   else{
                        print("password errata!");
                   }}

                elseif ($un=='movieaq'){
                       if ($pw=='red'){
                        $b= new EFiliale($un,$pw);}
                else {
                     print ('password errata!');}}
                else {print("Utente non esistente!");}}

                


?>
