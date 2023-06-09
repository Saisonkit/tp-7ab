<?php 

  //démarer la session
  session_start();
  
  $nom=$email=$username="";
  if(isset($_SESSION["login"]) && isset($_SESSION['login']["username"]) && isset($_SESSION['login']["password"])){
    
    if(!empty($_SESSION['login']["username"]) && !empty($_SESSION['login']["password"])){

      include("include/config.php");

      $username=$_SESSION["login"]["username"];
      $password=$_SESSION["login"]["password"];
  
      $result= $con->query("SELECT * FROM users WHERE username='$username' AND mot_de_passe='$password'");
      $count= $result->num_rows;
      if($count > 0) {

        $row=$result->fetch_assoc();
        $username=$row["username"];
        $nom=$row["nom_compet"];
        $email=$row["email"];

      }else{
        header("location:include/deconnexion.php");
      }
  


    }else{
      header("location:include/deconnexion.php");
    }

  }else{
    header("location:include/deconnexion.php");
  }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>profile| season_tp </title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body class="login">
    <div class="contenter">
              <div class="profile">
                <img src="images/user.png" alt="">
                <h5 class="text-center">Bienvenu(e) dans votre compte, <?php echo $nom;?></h5> 
                <p class="mar-b-20">@<?php echo $username;?></p>
                <p class="mar-b-20"><a href=""><?php echo $email;?></a></p>
                <a class="btn btn-danger btn-sm" href="include/deconnexion.php">Déconnexion</a>
            </div>
        </div>
    </body>