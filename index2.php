<?php
require_once 'include/autoload.inc.php';
require_once 'include/config.inc.php';

$f=new EFilm();
$gg=array('Commedia','Avventura');
$gc=array('Massimo Boldi,Christian De Sica','Biagio Izzo');
$f->costruttore('Natale sul Nilo','Neri Parenti',2002,103,$gg,$gc,'Filmaur');
$f->save();
print_r(EFilm::get_film('Dracula 2'));
?>
