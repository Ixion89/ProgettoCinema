<?php
require_once 'include/autoload.inc.php';
require_once 'include/config.inc.php';

//$a->costruttore('ahahah','no','1','via roma 30','0863415411','78945621');
//$a->costruttore('madagascar','disney','222','120',['kikik','ioioi'],['skipper','soldato'],'boh');
//print_r($a);

/*
$b= new EProfilo();
$conn= new Fdb();
$c= new FProfilo();
$b->set_nome('mario');
$b->set_cognome('rossi');
$b->set_indirizzo('via bologna');
$b->set_citta('luco dei marsi');
$b->set_telefono('3278385503');

print_r($b);
print_r($c->store($b));*/
$conn= new Fdb();
/*$a1=array('romantico','drammatico');
$a2=array('ryan gosling','anna');
$a= new EFilm();
$b= new FFilm();
$a->set_titolo('Le pagine della nostra vita');
$a->set_regista('Nicholas Sparks');
$a->set_anno(2006);
$a->set_casa_produzione('Universal');
$a->set_durata('200');
$a->a_generi=$a1;
$a->a_cast=$a2;
print_r($a);
print_r($b->store($a));*/

/*$d= new EBiglietto();
$e= new Fbiglietto();
$d->set_idbiglietto('1');
$d->set_idpagamento('1');
$d->set_riepilogo('');
print_r($e);
print_r($d);
print_r($e->store($d));*/

/*
$a= new Eitem;
print_r($a);
$b= new FItem();
print_r($b);*/
/*
$a= new ECredenziale();
$a->set_circuitocarta('mastercard');
$a->set_scadenza('maggio 2025');
$a->set_numerocarta('12542005633215441');
print_r($a);
$b= new FCredenziali();
print_r($b->store($a));*/
/*
$a= new ESconto();
$b= new FSconto();
$a->set_idsconto('1');
$a->set_valore(5.00);
$a->set_descrizione('Sconto applicato a tutti i bambini con età max di 14 anni');
print_r($a);
print_r($b->store($a));*/
/*
$a= new EUtente();
$a->set_email('teresa.4us@gmail.com');
$a->set_password('tatta');
print_r($a);*/
$b= new FRegistrazione();
$a= new EUtente();
$a->costruttore_registrazione('1','tatta','teresa.4us@gmail.com');
print_r($a);
print_r($b->store($a));
?>

