<?php 
  //démarer la session
  include("include/login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>connexion| season_tp </title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>

<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <img src="images/gravatar.png" alt="avatar" width="100" class="rounded-circle">
            <form action=""  method="POST" class="form_connexion_inscription">
              <h1>Connectez-vous</h1>

              
           <p class="message_error">
              
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" value="<?php echo $user; ?>" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="pwd" required="" value="<?php echo $pass; ?>" />
              </div>
              <div>
              <input type="submit" class="btn btn-primary btn-sm" name="button_con">
              </div>
              <div class="clearfix"></div>
                <br>
              <div class="separator">
                <p class="change_link text-left">Pas de compte membre?
                  <a href="inscription.php" class="to_register"> créer un compte </a>
                </p>
                <?php echo $msg; ?>
                <div class="clearfix"></div>
              </div>
            </form>
          </section>
        </div>
  </body>
</html>