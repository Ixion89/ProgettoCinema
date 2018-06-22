<?php
function __autoload($classname) {
         $filename="./".$classname.".php";
include_once($filename);}
$a= new EFilm();
//$a->costruttore('ahahah','no','1','via roma 30','0863415411','78945621');
//$a->costruttore('madagascar','disney','222','120',['kikik','ioioi'],['skipper','soldato'],'boh');
//print_r($a);
$b= new EItem();
print_r($b);
?>

