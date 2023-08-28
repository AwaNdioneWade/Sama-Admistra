<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Font favicon -->
            <link rel="icon" href="images/favicon.png">
            <!-- bootstrap5 -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            <script src="https://kit.fontawesome.com/3e56bd9026.js" crossorigin="anonymous"></script>
            <!-- Font Awesome6 -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- button navbar -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            <!-- tooltip -->
            <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>
            <title>Sama Adminitratif</title>
            <link rel="stylesheet" href="connexion.css">
    </head>
    <body>
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['exampleFormControlInput6'];
        $pass = $_POST['inputPassword7'];
        if ($email != "" && $pass != "") {
            $req = $bdd->query("SELECT * FROM user WHERE email = '$email' AND pass = '$pass'");
            $rep = $req->fetch();
            if ($rep['id'] != false) {
                header("Location: accueil.php");
            }else{
                $error_msg = "Email ou mots de passe incorrect";
            }
        }
    }
?>
        <div class="container mt-5 pt-4">
            <div class="row pt-md-5">
                <div class="col-12 offset-md-2 col-md-8 pt-md-5 contact">
                    <div class="row pt-md-5">
                        <div class="col-12 offset-md-1 col-md-1 logo">
                            <img src="logo.png" alt="">
                        </div>
                        <div class="col-12 offset-md-3 col-md-5">
                            <form action="" method = "POST">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput6" class="form-label">Addresse email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput6" name = "exampleFormControlInput6" placeholder="name@example.com" required>
                                </div>
                                <label for="inputPassword7" class="form-label">Mots de passe</label>
                                <input type="password" id="inputPassword7" name = "inputPassword7" class="form-control" aria-describedby="passwordHelpBlock" required>
                                <div class="mt-5 submit">
                                    <input type="submit" value="Se connecter">
                                    <a href="index.php">s'incrire</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>