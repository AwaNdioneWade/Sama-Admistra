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
            <link rel="stylesheet" href="accueil.css">
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
                            <a href="accueil.php" class="nav-link Active">
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
                                    <!-- <p >Papier a fournir</p> -->
                                    <p  data-bs-toggle="modal" data-bs-target="#papiersàfournir">papiers à fournir</p>
                                    <!-- <p>Envoie fichiers</p> -->
                                    <p data-bs-toggle="modal" data-bs-target="#Envoiefichier">Envoie fichier</p>
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
                                  <p  data-bs-toggle="modal" data-bs-target="#papiersàfournirmariage">papiers à fournir</p>
                                  <p  data-bs-toggle="modal" data-bs-target="#Envoiefichiermariage">Envoie fichier</p>
                                  <!-- <p>Envoie fichiers</p> -->
                                </div>
                                <div class="texte4 pt-2 ms-3 text-center">
                                  <p class="px-2 mb-3 me-3 w-100" data-bs-toggle="modal" data-bs-target="#Rendezvous" value="Rendez-vous">Rendez-vous</p>
                                  <p  data-bs-toggle="modal" data-bs-target="#papiersàfournirmariagecivile">papiers à fournir</p>
                                  <!-- <p>Papier a fournir</p> -->
                                  <p  data-bs-toggle="modal" data-bs-target="#Envoiefichiermariagecivil">Envoie fichier</p>
                                  <!-- <p>Envoie fichiers</p> -->
                                    <!-- <input type="button" class="px-2 mb-3 me-3 w-100" data-bs-toggle="modal" data-bs-target="#Rendezvous" value="Rendez-vous"> -->
                                </div>
                            </li>
                            <li class="nav-item mb-2 certificatDeces">
                                <div class="nav-link">
                                    <i class="fa-solid fa-feather-pointed"></i>
                                    <span class="deces">Certificat de décés</span>
                                </div>
                                <div class="texte5 pt-2 ms-3 text-center">
                                  <p  data-bs-toggle="modal" data-bs-target="#papiersàfournirdeces">papiers à fournir</p>
                                  <p  data-bs-toggle="modal" data-bs-target="#Envoiefichierdeces">Envoie fichiers</p>

                                 
                                </div>
                            </li>
                            <li class="nav-item mb-2 extraitNaissanace">
                                <div class="nav-link">
                                    <i class="fa-solid fa-person-pregnant"></i>
                                    <span class="naissance">Extrait de naissance</span>
                                </div>
                                <div class="texte6 pt-2 ms-3 text-center">
                                  <p  data-bs-toggle="modal" data-bs-target="#papiernaissance">papiers à fournir</p>
                                  <!-- <p>Envoie fichiers</p> -->
                                  <p data-bs-toggle="modal" data-bs-target="#Envoiefichiersnaissance">Envoie fichier</p>
                                </div>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="demande.php" class="nav-link">
                                    <i class="fa-solid fa-paper-plane"></i>
                                    <span class="mariage">Mes demandes</span>
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="contact.php" class="nav-link">
                                    <i class="fa-solid fa-id-badge"></i>
                                    <span class="naissance">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="accueil1 col-12 col-md-6 col-lg-9">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-3 mb-5 py-3 me-md-5 offset-md-1 statistique">
                <h1>+100</h1>
                <p>Documents fournis par jour</p>
            </div>
            <div class="col-12 col-md-3 mb-5 py-3 ms-md-5 statistique">
                <h1>+10</h1>
                <p>Mairies en collaboration</p>
            </div>
            <div class="col-12 col-md-3 mb-5 py-3 ms-md-5 statistique">
                <h1>+500</h1>
                <p>Communautés</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-12 col-md-9 apropos"></div>
            <div class="col-12 col-md-3 mairies">
                <h3>Listes Mairies</h3>
                <ul>
                    <li>
                        <p>Mairie Dakar</p>
                        <i class="fa-solid fa-phone ms-4"></i>
                    </li>
                    <li>
                        <p>Mairie Parcelle</p>
                        <i class="fa-solid fa-phone ms-2"></i>
                    </li>
                    <li>
                        <p>Mairie Ngor</p>
                        <i class="fa-solid fa-phone ms-4"></i>
                    </li>
                    <li>
                        <p>Mairie Ouakam</p>
                        <i class="fa-solid fa-phone"></i>
                    </li>
                    <li>
                        <p>Mairie Kaolack</p>
                        <i class="fa-solid fa-phone"></i>
                    </li>
                    <li>
                        <p>Mairie Dakar</p>
                        <i class="fa-solid fa-phone ms-4"></i>
                    </li>
                    <li>
                        <p>Mairie Parcelle</p>
                        <i class="fa-solid fa-phone ms-2"></i>
                    </li>
                    <li>
                        <p>Mairie Ngor</p>
                        <i class="fa-solid fa-phone ms-4"></i>
                    </li>
                    <li>
                        <p>Mairie Ouakam</p>
                        <i class="fa-solid fa-phone"></i>
                    </li>
                    <li>
                        <p>Mairie Kaolack</p>
                        <i class="fa-solid fa-phone"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#Envoiefichier"><p>Envoie fichier</p></a> -->

    <!-- -------------------------Modal rendez-vous------------------ -->



<div class="modal fade" id="Rendezvous" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">prise de rendez-vous</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Entrez votre prenom</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Entrez votre Nom</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Entrez votre numero de telephone</label>
            <input type="number" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="mail" class="col-form-label">Entrez votre mail</label>
            <input type="mail" class="form-control" id="recipient-name" placeholder="@gmail.col" required="required">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Motif</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary w-100">Send message</button>
      </div>
    </div>
  </div>
</div>


<!-- -----------------------------modal renseignment residence-------------------------- -->
<div class="modal fade" id="papiersàfournir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Renseignment pour residence</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <h1>les dossiers à fournir</h1>
              <ul>
                <li>Carte d'identité nationnale(ou bien)</li>
                <li>Extrait de naissance</li>
  
              </ul>
              
            </div>
            <!-- <a href="Envoie fichier.html" class="btn btn-primary w-100">Envoyer</a> -->
            <input type="button" value="Envoyer fichier" data-bs-toggle="modal" data-bs-target="#Envoiefichier">
            
          </form>
        </div>
       
      </div>
    </div>
  </div>

  <!-- ----------------------modal evoie fichier residence------------------------------ -->

  <div class="modal fade" id="Envoiefichier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Certificat de residence</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre documents</label>
              <input type="number" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="number" class="col-form-label">payez par:</label><br>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Wave
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Orange money
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Free
              </label>
            </div>

            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>

             
            <div class="haut2">
              <div class="dzu-dropzone"><label style="background-color: rgb(231, 157, 49); color: rgb(255, 255, 255); 
                cursor: pointer;
                 border-radius: 30px; 
                 margin-top: 2em;
                 " >Ajouter les documents
                  <input type="file" id="dzu-dropzone w-90" name="dzu-dropzone" multiple></label></div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <a href="#"class="btn btn-primary w-100">Envoyez votre demende </a>
        </div>
      </div>
    </div>
  </div>


  <!-- --------------------modal extrait -->
  <div class="modal fade "  id="Envoiefichiersnaissance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Envoiefichiers">Envoyez votre demande</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>

            <!-- ------------------Mairie------------------- -->
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02">
                  <option selected>Choisir une mairie</option>
                  <option value="1">Mairie Dakar</option>
                  <option value="2">Mairie Parcelle</option>
                  <option value="2">Mairie Ngor</option>
                  <option value="2">Mairie Ouakam</option>
                  <option value="2">Mairie Kaolak</option>
                  <option value="2">Mairie Matam</option>
                  <option value="2">Mairie Tamba</option>
                  <option value="3">Mairie Zinguinchor</option>
                </select>
              </div>
              <!-- --------------bouton radio---------------- -->

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Nouveau né(e)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  les autres
                </label>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre de documents </label>
                <input type="number" class="form-control" id="recipient-name">
              </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Entrez votre numero register  </label>
              <input type="number" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">payez par:  </label><br>
              
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Wave
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
               orange money
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                free
              </label>
            </div>
            
            <div class="haut2">
                <div class="dzu-dropzone"><label style="background-color: rgb(231, 157, 49); color: rgb(255, 255, 255); 
                  cursor: pointer;
                   border-radius: 30px; 
                   margin-top: 2em;
                   " >Ajouter les documents
                    <input type="file" id="dzu-dropzone w-90" name="dzu-dropzone" multiple></label></div>
                </div>
  
            
          </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <a href="#"class="btn btn-primary w-100">Envoyez votre demende </a>
          
        </div>
      </div>
    </div>
  </div>


  <!-- -------------------------modal renseignment extrai -->

  <div class="modal fade" id="papiernaissance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Renseignment pour Extrait</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <h5>Les dossiers à fournir pour les nouveaux nées</h5>
              <ul>
                  <li>certificat d'accouchement</li>
                  <li>Photocopie CNI des deux parents</li>
              </ul>
  
              <h3 class="text-center">Pour les autres </h3>
              <ul>
                  <li>L'année et le Numéro du registre (ou bien)</li>
                  <li>Photocopie CNI (ou)</li>
                  <li>un ancien bultin de naissance</li>
              </ul>
            
            </div>
            <!-- <a href="document.html" class="btn btn-primary w-100">Envoyer</a> -->
            <input type="button" value="Envoyer fichier" data-bs-toggle="modal" data-bs-target="#Envoiefichiersnaissance">
            
            
          </form>
        </div>
       
      </div>
    </div>
  </div>
  <!-- -------------------------------modal renseignment mariage--------------------------------------- -->
  <div class="modal fade" id="papiersàfournirmariage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Renseignment pour papier mariage</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <h1>les dossiers à fournir</h1>
              <ul>
                <li>Volet numero 1 de l'acte de mariage</li>
                <li>Livret de famille</li>
                <li>Ancienne copie de l'acte de mariage </li>
              </ul>
              
            </div>
            <!-- <a href="Envoie fichier.html" class="btn btn-primary w-100">Envoyer</a> -->
            <input type="button" value="Envoyer fichier" data-bs-toggle="modal" data-bs-target="#Envoiefichiermariage">
            
          </form>
        </div>
       
      </div>
    </div>
  </div>

  <!-- ---------------------modal envoie papier mariage------------------------- -->
  <div class="modal fade" id="Envoiefichiermariage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Certificat de mariage</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre documents</label>
              <input type="number" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="number" class="col-form-label">payez par:</label><br>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Wave
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Orange money
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Free
              </label>
            </div>

            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>

             
            <div class="haut2">
              <div class="dzu-dropzone"><label style="background-color: rgb(231, 157, 49); color: rgb(255, 255, 255); 
                cursor: pointer;
                 border-radius: 30px; 
                 margin-top: 2em;
                 " >Ajouter les documents
                  <input type="file" id="dzu-dropzone w-90" name="dzu-dropzone" multiple></label></div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          
          <a href="#"class="btn btn-primary w-100">Envoyez votre demende </a>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="modal fade" id="Envoiefichiermariage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Certificat de mariage </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre documents</label>
              <input type="number" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="number" class="col-form-label">payez par:</label><br>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Wave
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Orange money
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Free
              </label>
            </div>

            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>

             
            <div class="haut2">
              <div class="dzu-dropzone"><label style="background-color: rgb(231, 157, 49); color: rgb(255, 255, 255); 
                cursor: pointer;
                 border-radius: 30px; 
                 margin-top: 2em;
                 " >Ajouter les documents
                  <input type="file" id="dzu-dropzone w-90" name="dzu-dropzone" multiple></label></div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          
          <a href="#"class="btn btn-primary w-100">Envoyez votre demende </a>
        </div>
      </div>
    </div>
  </div> -->


  <!-- -------------------------modal mariage civil---------------------------------- -->
  <div class="modal fade" id="papiersàfournirmariagecivile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Renseignment pour papier mariage civil</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <h5>les dossiers à fournir pour mariage civil</h5>
              <ul>
                <li>Une copie des actes de niassace detant moins de trois(3) mois des deux epoux pourtant la mention 'délivrer en vie de mariage'</li>
                <li>Une copie certifiée conform des pieces d'indentité des deux conjoints</li>
                <li>Une copie certifiée conform des pieces d'indentité des témoins</li>
               
                
              </ul>
              
            </div>
            
            <input type="button" value="Envoyer fichier" data-bs-toggle="modal" data-bs-target="#Envoiefichiermariagecivil">
            
          </form>
        </div>
       
      </div>
    </div>
  </div>

  <!-- ---------------------------modal envoyer dossier civil--------------------------------------- -->

  <div class="modal fade" id="Envoiefichiermariagecivil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Certificat de mariage civil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre documents</label>
              <input type="number" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="number" class="col-form-label">payez par:</label><br>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Wave
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Orange money
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Free
              </label>
            </div>

            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>

             
            <div class="haut2">
              <div class="dzu-dropzone"><label style="background-color: rgb(231, 157, 49); color: rgb(255, 255, 255); 
                cursor: pointer;
                 border-radius: 30px; 
                 margin-top: 2em;
                 " >Ajouter les documents
                  <input type="file" id="dzu-dropzone w-90" name="dzu-dropzone" multiple></label></div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          
          <a href="#"class="btn btn-primary w-100">Envoyez votre demende </a>
        </div>
      </div>
    </div>
  </div>

  <!-- --------------------------modal renseignment pour certificat de deces-------------------------------------- -->


  <div class="modal fade" id="papiersàfournirdeces" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Renseignment pour papier mariage</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <h5>les dossiers à fournir pour avoir certificat de decés</h5>
              <ul>
                <li>Extrait de decés</li>
                <li>Ancien bulltin de decés</li>
                <li>Livret de famille</li>
                <li>Volet numero 01 de l'acte de decés </li>
                <li>Année et numero d'enregistrement de decés sur les registre de l'etat civil</li>
               
              </ul>
              
            </div>
            
            <input type="button" value="Envoyer fichier" data-bs-toggle="modal" data-bs-target="#Envoiefichierdeces">
            
          </form>
        </div>
       
      </div>
    </div>
  </div>

  <!-- --------------------modal envoie certificat de deces---------------------- -->

  <div class="modal fade" id="Envoiefichierdeces" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Certificat de decés</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre documents</label>
              <input type="number" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="number" class="col-form-label">payez par:</label><br>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Wave
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Orange money
              </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                  Free
              </label>
            </div>

            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>

             
            <div class="haut2">
              <div class="dzu-dropzone"><label style="background-color: rgb(231, 157, 49); color: rgb(255, 255, 255); 
                cursor: pointer;
                 border-radius: 30px; 
                 margin-top: 2em;
                 " >Ajouter les documents
                  <input type="file" id="dzu-dropzone w-90" name="dzu-dropzone" multiple></label></div>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          
          <a href="#"class="btn btn-primary w-100">Envoyez votre demende </a>
        </div>
      </div>
    </div>
  </div>


  <div class="footer">
    <p>Copyright Sama Adminitra 2023</p>
  </div>
    <script src="main.js"></script>

</body>
</html>