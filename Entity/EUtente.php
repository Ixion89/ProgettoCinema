<?php
class EUtente {
       public $email;
       public $password;
       public $Idregistrazione;
       public $validazione;

       public function __construct(){}
       public function costruttore(string $a, string $b){
              $this->email=$a;
              $this->password=$b;
              $this->validazione=false;}
              
       public function get_utente(string $id){
             $conn=new FUtente();
             return $conn->load($id);}
       
       public function get_email(){return $this->email;}
       public function get_password(){return $this->password;}
       public function get_id(){return $this->Idregistrazione;}
       public function is_validato(EUtenteregistrato $user){
              $id=ltrim($user->get_idutente(),'u');
              $temp=EUtente::get_utente($id);
              return $temp->validazione;}
       public function set_email(string $valore){$this->email=$valore;}
       public function set_password(string $valore){$this->password=$valore;}
       public function convalida(EUtenteregistrato $user){
              $id=ltrim($user->get_idutente(),'u');
              $u=EUtente::get_utente($id);
              if(!EUtente::is_validato($user)){
                      $u->validazione=true;
                      $conn=new FUtente();
                      $conn->update($u);}
              else print ('L\'utente è già validato');}
       
       public function signup(string $em,string $pw){
              $t=new FUtente();
              $ret=new EUtente();
              $ret->costruttore($em,$pw);
              if ($t->store($ret)){
                   $param=array('email = \''.$em.'\'');
                   $ret=$t->search($param);
                   $user=new EUtenteregistrato();
                   $user->set_idutente('u'.$ret[0]->get_id());
                   $conn=new FUtenteregistrato();
                   $conn->store($user);}
              else print ('E-Mail già in uso!');}
       public function login (string $em, string $pw){      //ritorna sempre un oggetto
              $param=array ('email = \''.$em.'\'');
              $t= new FUtente();
              $temp=$t->search($param);
              $obj=$temp[0];
                    if ($obj){
                       if ($obj->get_password()==$pw){
                          $t=new FUtenteregistrato();
                          $t=$t->search(array('idutente = \'u'.$obj->get_id().'\''));
                          if ($t[0]){
                             $res=new FUtenteregistrato();
                             return $res->load('u'.$obj->get_id());}
                          else {
                               $res=new FFiliale();
                               return $res->load('f'.$obj->get_id());}}
                       else print ('Password Errata!');}
                    else print('Utente non esistente!');}
}

?>
