<?php
function __autoload($classname) {
         $filename="./".$classname.".php";
include_once($filename);}
$a= new EFiliale();
$a->costruttore('ahahah','no','1','via roma 30','0863415411','78945621');


print_r($a);
?>