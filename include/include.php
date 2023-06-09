<?php
include('config.php');


if(isset($_POST) && isset($_POST["button_inscription"]) && isset($_POST["nom_complet"]) && isset($_POST["email"]) && isset($_POST["username"])  && isset($_POST["password"])){

    // Récupération et stockage des informations du formulaires dans des variables
    $nom=$_POST["nom_complet"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $pass=$_POST["password"];
    $password=md5($_POST["password"]); // md5 : est algorithme de cryptage de donnée qui va nous permettre de crypter le mot de passe avant de l'enregistrer dans la base de données

    // Remove all illegal characters from email
    $emails = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($emails, FILTER_VALIDATE_EMAIL) === false) {

        // Vérification si le usernae existe dans la base de données

        $check_username = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
        if(mysqli_num_rows($check_username) > 0) {
        
            header("location:?user=$username&pass=$password&nom=$nom&email=$email&id=3");
            

        }else{

            // Vérification si le email existe dans la base de données
            $check_email = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
            if(mysqli_num_rows($check_email) > 0){

                header("location:?user=$username&pass=$pass&nom=$nom&email=$email&id=4");
                  

            }else{

                // Insertion de données dans la base de données

                $sql = "INSERT INTO users (nom_compet, email, username, mot_de_passe) VALUES ('$nom', '$email', '$username', '$password')";

                if (mysqli_query($con, $sql)) {
                    header("location:?id=1");
                } else {
                    header("location:?id=0");
                }

            }
        }

        
    }else{
        
        
        header("location:?user=$username&pass=$pass&nom=$nom&email=$email&id=2");

    }


}

?>