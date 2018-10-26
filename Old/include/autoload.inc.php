<?php
function __autoload($classname){
         switch ($classname[0]){
                case 'V':
                     require_once ('View/'.$classname.'.php');break;
                case 'C':
                     require_once ('Controller/'.$classname.'.php');break;
                case 'E':
                     require_once ('Entity/'.$classname.'.php');break;
                case 'F':
                     require_once ('Foundation/'.$classname.'.php');break;
                case 'U':
                     require_once ('Utility/'.$classname.'.php');break;
                     }
         }
?>
