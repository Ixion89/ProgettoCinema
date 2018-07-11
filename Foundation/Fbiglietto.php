<?php
class Fbiglietto extends Fdb           //necessaria al db l'implementazione almeno di pagamento
{
    public function __construct()
    {
        $this->_table = 'biglietto';
        $this->_key = 'idbiglietto';
        $this->_return_class = 'EBiglietto';
        $this->_connection = USingleton::getInstance('Fdb')->get_connection();
    }

}
