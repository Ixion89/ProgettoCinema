<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 26/06/2018
 * Time: 17:46
 */
require_once 'C:\xampp\htdocs\_progetto\Foundation\Fdb.php';
class FPagamento extends Fdb{
    public function __construct()
    {
        $this->_table='pagamento';
        $this->_key='idpagamento';
        $this->_autoinc=false;
        $this->_return_class='EPagamento';
        USingleton::getInstance('Fdb');
    }
}





?>