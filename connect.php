<?php
 
 define ('server' ,'localhost');
 define ('usrnme','root');
 define ('psw','');
 define ('dbname','hotel');

$con = new mysqli(server,usrnme,psw,dbname);

if ($con -> connect_error){

echo "database connection error";	
}







?>