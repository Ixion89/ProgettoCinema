<?php
class EFilm {
      public $titolo;
      public $regista;
      public $anno;
      public $durata;      //da valutare in minuti
      public $a_generi;     //array formattato in stringa su db
      public $a_cast;       //array
      public $casaproduzione;
      
      public function __construct (){}
      public function costruttore (string $t,string $r,int $y,int $d,array $g,array $c, string $p){
             $this->set_titolo($t);
             $this->set_regista($r);
             $this->set_anno($y);
             $this->set_durata($d);
             $this->set_generi($g);
             $this->set_cast($c);
             $this->set_casa_produzione($p);
             }

      public function save(){
             $conn=new FFilm();
             $cerca=array('titolo = \''.$this->get_titolo().'\'');
             $res=$conn->search($cerca);
             if ($conn->store($this)){}
             else {$conn->update($this);}}
      public function get_film(string $titolo){
             $conn=new FFilm();
             return $conn->load($titolo);}
             
      public function get_titolo(){return $this->titolo;}
      public function get_regista(){return $this->regista;}
      public function get_anno(){return $this->anno;}
      public function get_durata(){return $this->durata;}
      public function get_generi(){return $this->a_generi;}
      public function get_cast(){return $this->a_cast;}
      public function get_casa_produzione(){return $this->casaproduzione;}
      
      public function set_titolo(string $valore){$this->titolo=$valore;}
      public function set_anno(int $valore){$this->anno=$valore;}
      public function set_regista(string $valore){$this->regista=$valore;}
      public function set_durata(int $valore){$this->durata=$valore;}
      public function set_generi(array $valore){$this->a_generi=$valore;}
      public function set_cast(array $valore){$this->a_cast=$valore;}
      public function set_casa_produzione(string $valore){$this->casaproduzione=$valore;}
      
      public function add_genere(string $g){$this->a_generi[]=$g;}
      public function add_attore_cast(string $a){$this->a_cast[]=$a;}
}

?>
