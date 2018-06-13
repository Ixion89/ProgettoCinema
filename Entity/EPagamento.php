<?php
class EPagamento{

public $totale;   //float
public $IDPagamento;  //string //id di ogni pagamento----> 1 biglietto
public $ListaIte;  //array di item

public function __construct(){}

public function calcolo_totale(){
	$totale=1000;
	return $totale;
}

?>