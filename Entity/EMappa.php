<?php
class EMappa{
      public $numero_file;
      public $numero_posti;
      public $a_modello;
      public $nomeschema;

      public function __construct(){}
      public function costruttore(int $f, int $p, string $n){      //la mappa la deve prendere da file in base al nome dello schema
             $this->set_numero_file($f);
             $this->set_numero_posti($p);
             $this->set_nome_schema($n);
             $s=array();
             $val="A";
             $i=1;
             while ($i<=$f)
                 {for ($j=1;$j<=$p;$j++)
                     {$x=new EPosto();
                     $x->costruttore($val,$j,0);
                     $s[$val][$j]= $x;}
                 $val++;
                 $i++;
                 }
             $this->set_schema($s);
              }

      public function get_numero_file(){return $this->numero_file;}
      public function get_numero_posti(){return $this->numero_posti;}
      public function get_schema(){return $this->a_modello;}
      public function get_nome_schema(){return $this->nomeschema;}

      public function set_numero_file(int $valore){$this->numero_file=$valore;}
      public function set_numero_posti(int $valore){$this->numero_posti=$valore;}
      public function set_schema(array $valore){$this->a_modello=$valore;}
      public function set_nome_schema(string $valore){$this->nomeschema=$valore;}

      public function delete_posti(string $f, int $s_p, int $e_p){
             if (array_key_exists($f,$this->a_modello)){
                if (array_key_exists($s_p,$this->a_modello[$f])){               //se non esistono pi? il numero di posto iniziale o finale non elimina niente
                   if (array_key_exists($e_p,$this->a_modello[$f])){
                      array_splice($this->a_modello[$f],$s_p-1,$e_p-$s_p+1);}
                   }
                }
             }

      }

?>
