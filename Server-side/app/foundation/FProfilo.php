<?php
require_once ROOT_DIR.'\app\utility\USingleton.php';
require_once ROOT_DIR.'\app\foundation\Fdb.php';
require_once ROOT_DIR.'\app\entity\EProfilo.php';

class FProfilo extends Fdb{
    public function __construct()
    {
        $this->_table='profilo';
        $this->_key='idutente';
        $this->_return_class='EProfilo';
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

    public function store ($object)
    {
        if (Fdb::store($object)) {
            $query = 'UPDATE profilo SET listasconti=\'' . $this->convert_to_string($object->get_listasconti()) . '\'';
            debug($query);
            $this->query($query);
        }
    }

        public function load($key){
            $res=Fdb::load($key);
            $res->set_listasconti($this->convert_to_array($res->listasconti));
            unset($res->listasconti);
            return $res;}



}
?>