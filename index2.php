<?php
require_once 'include/autoload.inc.php';
require_once 'include/config.inc.php';

/*$gg=array('Commedia','Avventura');
$gc=array('Massimo Boldi,Christian De Sica','Biagio Izzo');
$f->costruttore('Natale sul Nilo','Neri Parenti',2002,103,$gg,$gc,'Filmauro');
$f->save();
print_r(EFilm::get_film('Dracula 2'));
$f->delete(); */
$f=EFilm::get_film('Madagascar');
$f1=EFilm::get_film('Natale sul Nilo');
$s1=ESala::get_sala('Aurora');
$s2=ESala::get_sala('Zefiro');
$m=new EMappa();
$m->costruttore(5,4,'Aurora');
//$m->delete_posti("B",2,3);
//$m->delete_posti("B",1,3);
//$conn=new FMappa();
//$conn->store($m);
//print_r($conn->load('Aurora'));
//$m->costruttore(5,5,'Zefiro');
//$conn->update($m);
//$parameter=array('modello LIKE \'%F-5%\'');
//print_r($conn->search($parameter));
//$m->save();
//print_r(EMappa::get_mappa('Maestrale'));

$s=new ESala();
/*$s->costruttore('Aurora',50);
$s->save();
$s->delete();*/

$st=new EStruttura();
$sale=array($s->get_sala('Aurora'),$s->get_sala('Maestrale'));
$st->costruttore('F0003','AstraTE','Via Torino 4, Teramo','0861333333','astra.te@gmail.com','Lunedì 16:00 - 22:00',$sale);
//$conn=new FStruttura();
//$conn->store($st);
//print_r($conn->load('F0001'));
//$conn->update($st);
//$parameter=array('listasale LIKE \'%Aurora%\'');
//print_r($conn->search($parameter));
//$conn->delete($st);
/*$st->save();
$st->delete();
print_r(EStruttura::get_struttura('F0001'));*/

//$pro=new EProiezione();
$pro=EProiezione::costruttore($f1,$s1,'15-07-2018','16.00','2');
//$conn=new FProiezione();
//$m->delete_posti("A",1,2);
//$pro->set_mappa_pro($m);
//$conn->update($pro);
//print_r(FProiezione::mappa_to_string($m));
//$conn->store($pro);
//print_r($conn->load('180702#Aurora#13.00#3'));
//$parameter=array('idproiezione LIKE \'%#Aurora#%\'');
//print_r($conn->search($parameter));
//$pro->save();
//print_r(EProiezione::get_proiezione('180710#Aurora#13.00#3'));

$pro=$pro->get_proiezione('180720#Aurora#13.00#2');
$temp=$pro->get_mappa_pro()->get_schema();
$item[]=EItem::costruttore($pro,$temp['B'][2]);
$item[]=EItem::costruttore($pro,$temp['B'][1]);
//print_r($item);
$pag=EPagamento::costruttore('u1',$item);
//print_r($pag);
//$pag->pagamento();
//$biglietto=$pag->crea_biglietto();
//print_r($biglietto);
//$conn=new FBiglietto();
//$conn->store($biglietto);
//$biglietto->save();
//$conn=new FPagamento();
//$conn->store($pag);
//$pag=$conn->load('229cfb');
//$pag->pagamento();
//$conn->update($pag);
//$parameter=array('persona LIKE \'f%\'');
//print_r($conn->search($parameter));
$pag=$pag->get_pagamento('11111');


?>
