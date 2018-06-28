<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 27/06/2018
 * Time: 18:17
 */
require_once 'C:\xampp\htdocs\_progetto\Foundation\Fdb.php';
class FStruttura extends  Fdb{

    public function __construct(){
        $this->_table='struttura';
        $this->_key='idregistrazione';
        $this->_return_class='EStruttura';
        $this->_connection=USingleton::getInstance("Fdb")->get_connection();
    }

    public function convert_to_string(array $a){
        $ret='';
        for ($i=0;$i<count($a);$i++){
            if($i==0) $ret.=$a[$i];
            else $ret.=','.$a[$i];}
        return $ret;}


        public function convert_to_array(string $s){
        return explode(',',$s);}

        public function store ($struttura){
            if(Fdb::store($struttura)){
                $query='UPDATE struttura SET orariapertura=\''.$this->convert_to_string($struttura->get_orari_apertura()).'\'';
                debug($query);
                return $this->query($query);
            }
        }

        public function load($key){
            $res=Fdb::load($key);
            $res->set_orari_apertura($this->convert_to_array($res->orariapertura));
            //$res->set_lista_sale($this->convert_to_array($res->)) ritorna tt le sale che hanno l'id di qst struttura;
            unset($res->orariapertura);  //fare poi anche di listasale
            return $res;
        }



}
?>