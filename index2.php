<?php
require_once 'include/autoload.inc.php';
require_once 'include/config.inc.php';

$f1=new EFilm();
$f1->costruttore('Dracula 2','Bram Stoker',1960,90,array('Horror'),array('Leslie Nielsen'),'Pixar');
$f=new EFilm();
$f->costruttore('Natale sul Nilo','Neri Parenti',2002,103,array('Commedia','Avventura'),array('Massimo Boldi,Christian De Sica','Biagio Izzo'),'Filmauro');
print_r($f1);
print_r($f);
/*$gg=array('Commedia','Avventura');
$gc=array('Massimo Boldi,Christian De Sica','Biagio Izzo');
$f->costruttore('Natale sul Nilo','Neri Parenti',2002,103,$gg,$gc,'Filmauro');
$f->save();
print_r(EFilm::get_film('Dracula 2'));
$f->delete();

$s=new ESala();
$s->costruttore('Aurora',50);
$s->save();
$s->delete(); */
?>
