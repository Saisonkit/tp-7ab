<?php
include("include/include_login.php");

$msg=$user=$pass="";

if(isset($_GET) && isset($_GET["user"]) && isset($_GET["pass"])){
    $user=$_GET["user"];
    $pass=$_GET["pass"];
}else{
    $user="";
    $pass="";
}


if(isset($_GET) && isset($_GET["id"]) && !empty($_GET["id"])){
    if($_GET["id"]=="false"){
        $msg="<div class='alert alert-danger'>Désolé, le nom d'utilisateur que vous avez entré est incorrect!</div>";
    }else if($_GET["id"]=="falsep"){
        $msg="<div class='alert alert-danger'>Désolé, le mot de passe que vous avez entré est incorrect!</div>";
    }else{
        $msg="";
    }
}else{
    $msg="";
}






?>