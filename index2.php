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
$m->costruttore(10,5);
//$m->delete_posti("B",2,3);
//$m->delete_posti("B",1,3);

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
$pro=EProiezione::costruttore($f,$s2,'20-07-2018','20.00',$m,'3');
//$conn=new FProiezione();
//$m->delete_posti("A",1,2);
//$pro->set_mappa_pro($m);
//$conn->update($pro);
//print_r(FProiezione::mappa_to_string($m));
//$conn->store($pro);
//print_r($conn->load('180702#Aurora#13.00#3'));
//$parameter=array('idproiezione LIKE \'%#Aurora#%\'');
//print_r($conn->search($parameter));
$pro->save();
//print_r(EProiezione::get_proiezione('180710#Aurora#13.00#3'));

?>
