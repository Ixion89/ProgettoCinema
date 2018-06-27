<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 26/06/2018
 * Time: 16:20
 */
require_once 'C:\xampp\htdocs\_progetto\Foundation\Fdb.php';
class Fbiglietto extends Fdb           //necessaria al db l'implementazione almeno di pagamento
{
    public function __construct(){
        $this->_table='biglietto';
        $this->_key='idbiglietto';
        $this->_return_class='EBiglietto';
       $this->_connection= USingleton::getInstance('Fdb')->get_connection();
    }

    public function store ($object){
        parent::store($object);
    }


}