<?php 

/* 
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/


$age = $_GET['age'] ?? '';
$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';


$valid_age = is_numeric($age);
$valid_name = mb_strlen($name);
$valid_mail = strpos($mail, '@') !== false && strpos($mail, '.') !== false;

if($valid_age && $valid_name && $valid_mail){
    echo 'Accesso Riuscito';
}else{
    echo 'Accesso Negato';
}




?>