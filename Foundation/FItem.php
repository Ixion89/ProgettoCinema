<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 02/07/2018
 * Time: 15:27
 */

class FItem extends Fdb{

    public function __construct()
    {
        $this->_table='item';
        $this->_key='nome';
        $this->_return_class='EItem';
        $this->_connection=USingleton::getInstance("Fdb")->get_connection();
    }
}


