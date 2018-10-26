<?php
require_once 'C:\xampp\htdocs\cinema\app\entity\EUtente.php';
require_once 'C:\xampp\htdocs\cinema\app\foundation\FRegistrazione.php';
require_once 'C:\xampp\htdocs\cinema\app\foundation\USingleton.php';
$user=new EUtente();
$user->costruttore_registrazione('789456','teresa@mal.com');
$reg= new FRegistrazione();
$reg->store($user);

?>