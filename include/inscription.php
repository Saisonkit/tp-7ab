<?php
include("include/include.php");

$user=$pass=$nom=$msg=$email="";  // Initialisation des variable

if(isset($_GET) && isset($_GET["user"]) && isset($_GET["pass"]) && isset($_GET["nom"]) && isset($_GET["email"]) && isset($_GET["id"])){
    $user=$_GET["user"];
    $pass=$_GET["pass"];
    $nom=$_GET["nom"];
    $email=$_GET["email"];
    
}else{
    $user="";
    $pass="";
    $nom="";
    $email="";
}

if(isset($_GET) && isset($_GET["id"]) && !empty($_GET["id"])){

    if($_GET["id"]=="0"){
        $msg="<div class='alert alert-danger'>Désolé, Erreur d'enregistrement de compte!</div>";  
    }else if($_GET["id"]=="1"){
        $msg="<div class='alert alert-success'>Compte enregistré avec succè!!</div>";  
    }else if($_GET["id"]=="2"){
        $msg="<div class='alert alert-danger'>Désolé, l'adresse email est incorrect!!</div>";  
    }else if($_GET["id"]=="3"){
        $msg="<div class='alert alert-danger'>Désolé, ce nom d'utilisateur existe déjà dans la base de données.</div>";
    }else if($_GET["id"]=="4"){
        $msg="<div class='alert alert-danger'>Désolé, cette adresse email existe déjà dans la base de données.</div>";  
    }else{
        $msg="";
    }
}else{
    $msg="";
}


?>