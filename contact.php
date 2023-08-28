<!DOCTYPE html>
<html lang="en">
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
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="contact.css">
    </head>
<body>
    <div class="container-fluid entete">
        <div class="row">
            <div class="d-flex flex-wrap align-items-center justify-content-md-between ">
                <div class="col-md-auto d-flex flex-row">
                    <!-- <yt-icon id="guide-icon" icon="yt-icons:menu" class="style-scope ytd-app"><svg style="height:24px; flex-shrink:0" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g class="style-scope yt-icon"><path d="M21,6H3V5h18V6z M21,11H3v1h18V11z M21,17H3v1h18V17z" class="style-scope yt-icon"></path></g></svg></yt-icon> -->
                    <img src="logo.png" class="logo ms-4 my-2" width="120" alt="logo SamaAdmi">
                </div>
                <ul class="nav col-lg-auto col-md-4 col-sm-9 col-8 d-flex justify-content-end align-items-end">
                    <li>                        
                        <input type="button" class="px-2 mb-3 me-3 w-100" data-bs-toggle="modal" data-bs-target="#Rendezvous" value="Rendez-vous">
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2">
                             <i class="fa-solid fa-bell text-dark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 text-dark">
                            <i class="fa-solid fa-user"></i>                       
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav class="sidebar col-12 col-md-6 col-lg-3 navbar navbar-expand-lg bg-body-tertiary ">
                <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav pe-3">
                        <ul class="nav nav-pills flex-column ">
                            <li class="nav-item mb-2">
                            <a href="accueil.php" class="nav-link">
                                <i class="fa-solid fa-house"></i>
                                <span class="ms-4">Accueil</span>
                            </a>
                            </li>
                            <li class="nav-item residence mb-2">
                                <div class="nav-link">
                                    <i class="fa-solid fa-receipt"></i>                   
                                    <span class="ms-4">Certificat de résidence</span>
                                </div>
                                <div class="texte ms-3 pt-2 text-center">
                                    <p>Papier a fournir</p>
                                    <p>Envoie fichiers</p>
                                </div>
                            </li>
                            <li class="nav-item mb-2 mariageLi">
                                <div class="nav-link">
                                    <i class="fa-solid fa-ring"></i> 
                                    <span class="mariage">Mariage</span>
                                </div>
                                <div class="texte2 pt-2 text-center">
                                    <p class="Certificat">Certificat de mariage</p>
                                    <p class="civil">Mariage civil</p>                                    
                                </div>
                                <div class="texte3 pt-2 ms-3 text-center">
                                    <p class="papierResidence">Papier a fournir</p>
                                    <p>Envoie fichiers</p>
                                </div>
                                <div class="texte4 pt-2 ms-3 text-center">
                                    <p>Papier a fournir</p>
                                    <p>Rendez-vous</p>
                                </div>
                            </li>
                            <li class="nav-item mb-2 certificatDeces">
                                <div class="nav-link">
                                    <i class="fa-solid fa-feather-pointed"></i>
                                    <span class="deces">Certificat de décés</span>
                                </div>
                                <div class="texte5 pt-2 ms-3 text-center">
                                    <p>Papier a fournir</p>
                                    <p>Envoie fichiers</p>
                                </div>
                            </li>
                            <li class="nav-item mb-2 extraitNaissanace">
                                <div class="nav-link">
                                    <i class="fa-solid fa-person-pregnant"></i>
                                    <span class="naissance">Extrait de naissance</span>
                                </div>
                                <div class="texte6 pt-2 ms-3 text-center">
                                    <p class="papierExtrait">Papier a fournir</p>
                                    <p>Envoie fichiers</p>
                                </div>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="demande.php" class="nav-link">
                                    <i class="fa-solid fa-paper-plane"></i>
                                    <span class="mariage">Mes demandes</span>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="contact.php" class="nav-link Active">
                                    <i class="fa-solid fa-id-badge"></i>
                                    <span class="naissance">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="col-12 col-md-6 col-lg-9">
                <div class="container contact mt-5 py-5">
                    <div class="row">
                        <div class="col-12 offset-md-2 col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom*">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="exampleFormControlInput2" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Votre prenom*">                        
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 offset-md-2 col-md-8">
                            <label for="floatingInput">Addresse mail</label>
                            <input type="email" class="form-control" id="floatingInput" placeholder="nom@exemple.com">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 offset-md-2 col-md-8">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="footer mt-5">
        <p>Copyright Sama Adminitra 2023</p>
      </div>

    <script src="main.js"></script>
</body>
</html>