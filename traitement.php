<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=utilisateur", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        // echo "Connexion réussie !";
    } catch (PDOException $e) {
        echo "Erreur : ".$e->getMessage();
    }

    if (isset($_POST['inscrire'])) {
        // var_dump($_POST);

        // extract($_POST):

        
        $prenom = $_POST['exampleFormControlInput1'];
        $nom = $_POST['exampleFormControlInput2'];
        $lieu = $_POST['exampleFormControlInput3'];
        $age = $_POST['exampleFormControlInput4'];
        $num = $_POST['exampleFormControlInput5'];
        $email = $_POST['exampleFormControlInput6'];
        $pass = $_POST['inputPassword7'];
        $passnew = $_POST['inputPassword8'];

        $requete = $bdd->prepare("INSERT INTO user VALUE (0, :prenom, :nom, :lieu, :age, :num, :email, :pass, :newpass)");
        $requete->execute(
        array(
            "prenom" => $prenom,
            "nom" => $nom,
            "lieu" => $lieu,
            "age" => $age,
            "num" => $num,
            "email" => $email, 
            "pass" => $pass,
            "newpass" => $passnew
        )
    );
    header("Location: accueil.php");

    }

    
?>












