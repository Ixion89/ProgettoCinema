<?php
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
