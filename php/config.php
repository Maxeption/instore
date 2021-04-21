<?php

define('DB_SERVER', 'localhost'); //=>définit une constante 
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'y-c_gestion_stock');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); // creation de connection 
 

if($link === false){ // vérifier le connection et vérifier le type de variable
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>