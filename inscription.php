<?php
include("include/inscription.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>inscription | season_tp </title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body class="login">
           
            <div>
                <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>
        
                <div class="login_wrapper">
                <div class="animate form login_form">
                    <div id="register" class="animate form registration_form">
                        <section class="login_content">
                        <form action="" method="POST" class="form_connexion_inscription">
                            <h1>Enregistrez-vous</h1>

                            <p class="message_error">
                                
                            <div>
                            <input type="text" class="form-control" placeholder="nom complet" required="" name="nom_complet" value="<?php echo $nom;?>"/>
                            </div>
                            <div>
                            <input type="email" class="form-control" placeholder="Adresse email" required="" name="email" value="<?php echo $email;?>"/>
                            </div>
                            <div>
                            <input type="text" class="form-control" placeholder="Username" required="" name="username" value="<?php echo $user;?>"/>
                            </div>
                            <div>
                            <input type="password" class="form-control" placeholder="Password" required="" name="password" value="<?php echo $pass;?>"/>
                            </div>
                            <div>
                            <input type="submit" value="Creer un compte" class="btn btn-primary btn-sm" name="button_inscription">
                            </div>
                                <br>
                            <div class="clearfix"></div>

                            <div class="separator">
                            <p class="change_link text-left">Déjà membre ?
                                <a href="index.php" class="to_register"> connectez-vous </a>
                            </p>

                            <?php echo $msg;?>

                            <div class="clearfix"></div>
                            </div>
                        </form>
                        </section>
                    </div>
                    </div>
                </div>
            </div>
</body>
<!-- Relié notre page a notre fichier javascript -->
<script src="script.js"></script>
</html>