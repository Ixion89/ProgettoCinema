<?php
/**
 * Created by PhpStorm.
 * User: Teresa
 * Date: 02/07/2018
 * Time: 15:55
 */

class FSconto extends  Fdb
{
    public function __construct()
    {
        $this->_table = 'sconto';
        $this->_key = 'idsconto';
        $this->_return_class = 'ESconto';
        $this->_connection = USingleton::getInstance('Fdb')->get_connection();
    }

}