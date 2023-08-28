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
            <link rel="stylesheet" href="inscription.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-2 col-md-8 contact">
                    <div class="row pt-md-2">
                        <div class="col-12 offset-md-1 col-md-1 logo">
                            <img src="logo.png" alt="">
                        </div>
                        <div class="col-12 offset-md-3 col-md-5 mb-3">
                            <form action="traitement.php" method = "POST">
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name = "exampleFormControlInput1" placeholder="Votre prenom*" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput2" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" name = "exampleFormControlInput2" placeholder="Votre nom*" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput3" class="form-label">Lieu de naissance</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3" name = "exampleFormControlInput3" placeholder="Votre lieu*" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput4" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput4" name = "exampleFormControlInput4" placeholder="Votre age*" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput5" class="form-label">Numéro téléphone</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput5" name = "exampleFormControlInput5" placeholder="Votre numéro*" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput6" class="form-label">Addresse email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput6" name = "exampleFormControlInput6" placeholder="name@example.com" required>
                                </div>
                                <label for="inputPassword7" class="form-label">Mots de passe</label>
                                <input type="password" id="inputPassword7" name = "inputPassword7" class="form-control" aria-describedby="passwordHelpBlock" required>
                            
                                <label for="inputPassword8" class="form-label">Confirmer mots de passe</label>
                                <input type="password" id="inputPassword8" class="form-control" name = "inputPassword8" aria-describedby="passwordHelpBlock" required>
                                <div class="mt-2 submit">
                                    <input type="submit" value="S'inscrire" name = "inscrire">
                                    <a href="connexion.php">Se connecter</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>