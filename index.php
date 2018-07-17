<?php
require_once 'include/autoload.inc.php';
require_once 'include/config.inc.php';
         
//$user=new EUtente();
//$user=$user->login('ultrad89@yahoo.it','dadino');
$user2=new EUtente();
$user2=$user2->login('prova@gmail.com','prova');
print("\n\n");
//$user->convalida($user2);
$user2->costruttore('Simone','Pagliariccio','1991-07-18','Via Roma','LAquila','1111111',array());
$user2->save();

?>
