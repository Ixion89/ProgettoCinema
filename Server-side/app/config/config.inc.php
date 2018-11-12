<?php

define ('ROOT_DIR', 'C:\xampp\htdocs\_progetto\Server-side');
global $config;

$config['debug']=true;
$config['mysql']['user']='root';
$config['mysql']['password']='';
$config['mysql']['host']='localhost';
$config['mysql']['db']='cinemadb';


function debug($var){
         global $config;
         if ($config['debug']){
            echo "<pre>";
            print_r($var);
            echo "</pre>\n";
            }
         }
?>
