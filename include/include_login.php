<?php
include('config.php');

if(isset($_POST) && isset($_POST["button_con"]) && isset($_POST["username"]) && isset($_POST["pwd"])){

    $username=$_POST["username"];
    $password=md5($_POST["pwd"]);
    $pass=$_POST["pwd"];


    $result= $con->query("SELECT * FROM users WHERE username='$username'");
    $count= $result->num_rows;
    if($count > 0) {
        $results= $con->query("SELECT * FROM users WHERE username='$username'");
        $row=$results->fetch_assoc();
        if($password==$row['mot_de_passe']){

            session_start();
            $_SESSION["login"]=array(
                'username'=>$row["username"],
                'password'=>$row["mot_de_passe"],
            );
            header("location:profile.php");

        }else{
            header("location:?id=falsep&user=$username&pass=$pass");
        }


    }else{
        header("location:?id=false&user=$username&pass=$pass");
    }


}




?>