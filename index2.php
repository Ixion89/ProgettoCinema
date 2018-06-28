<?php
require_once 'include/autoload.inc.php';
require_once 'include/config.inc.php';

/*$gg=array('Commedia','Avventura');
$gc=array('Massimo Boldi,Christian De Sica','Biagio Izzo');
$f->costruttore('Natale sul Nilo','Neri Parenti',2002,103,$gg,$gc,'Filmauro');
$f->save();
print_r(EFilm::get_film('Dracula 2'));
$f->delete(); */

$s=new ESala();
/*$s->costruttore('Aurora',50);
$s->save();
$s->delete();*/

$st=new EStruttura();
$sale=array($s->get_sala('Aurora'),$s->get_sala('Maestrale'));
$st->costruttore('F0003','AstraTE','Via Torino 47, Teramo','0861333333','astra.te@gmail.com','Lunedì 16:00 - 22:00',$sale);
$conn=new FStruttura();
//$conn->store($st);
//print_r($conn->load('F0001'));
//$conn->update($st);
//$parameter=array('listasale LIKE \'%Aurora%\'');
//print_r($conn->search($parameter));
$conn->delete($st);
?>
