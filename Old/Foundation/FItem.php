<?php
class FItem extends Fdb{

    public function __construct()
    {
        $this->_table='item';
        $this->_key='nome';
        $this->_return_class='EItem';
        $this->_connection=USingleton::getInstance("Fdb")->get_connection();
    }
}
?>

