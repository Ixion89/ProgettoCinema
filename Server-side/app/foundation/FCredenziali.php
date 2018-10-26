<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 02/07/2018
 * Time: 15:38
 */
require_once 'C:\xampp\htdocs\_progetto\Foundation\Fdb.php';
class FCredenziali extends Fdb
{
    public function __construct()
    {
        $this->_table='credenziale';
        $this->_key='numerocarta';
        $this->_return_class='ECredenziale';
        $this->_connection=USingleton::getInstance("Fdb")->get_connection();
    }




}