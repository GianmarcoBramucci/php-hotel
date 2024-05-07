<?php 
session_start();
include __DIR__ ."/userDb.php";
$emali = $_POST['emali'];
$password = $_POST['password'];
$check = false;
foreach($utenti as $utente){
    if(in_array($emali,$utente)){
        if(in_array($password,$utente)){
            $check = true;
        }   
    }

}
if($check){
    $_SESSION["emali"] = $emali;
    header('Location: index.php');
}


