<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session n'existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="../../bibliothèque\bootstrap.css" >
    <link rel="stylesheet" href="../../bibliothèque/bootstrap-5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../navbar/navbar.css" >
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="../../header_footer/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="../acceuil/acceuil.html">
                <img src="../../Images/adibaba.png" alt="logo" class="img-logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../Decouvert/decouvert.php">
                      <img src="../../Images/person.svg" alt="Personne"><strong>Nous-découvrir</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.php">
                      <img src="../../Images/telephone.svg" alt="tel">
                      <strong>Nous contacter</strong>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link button" href="../connexion_inscription/index.php" ><strong>Se Connecter</strong></a>
                  </li>
                </ul>  
                <form class="d-flex">
                  <button class="btn btn-outline-dark color" type="submit">
                  <a class="A" href="../panier/panier.php">
                <img src="../../Images/shopping-cart.png" alt="shopping-cart" class="cart">
                     <strong>Panier</strong>
                     <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
              </a>
                  </button>
                </form>
              </div>
              
            </div>
          </nav>
<script src="../../bibliothèque/bootstrap-5.1.3/js/bootstrap.min.js"></script>
        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


                <div class="text-center">
                        <h1 class="p-5 espace">Bonjour <?php echo $data['pseudo']; ?> !</h1>
                        <hr />
                        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                          Changer mon mot de passe
                        </button>
                </div>
            </div>
        </div>    

       

        

                                
        <!-- Modal -->
        <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="layouts/change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Changer mon avatar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="layouts/change_avatar.php" method="POST" enctype="multipart/form-data">
                                <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                                <input type="file" name="avatar_file">
                                <br />
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                        <br />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="espace">
            <!-- Footer Start-->
            <div class="footer-main background">
                <div class="orange">
                <div class="footer-area footer-padding">
                    <div class="container-fluid">
                        <div class="row  justify-content-between">
                            <div class="col-lg-3 col-md-4 col-sm-8"></div>
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                            <a href="/"><img style="width:30%" loading="lazy" src="https://user-images.githubusercontent.com/97881881/164652408-4a8ddd19-ae9b-4f11-91ab-e5c37c0ebf74.png" alt=""></a>
                                    </div>
                                </div>
                            </div>   
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Jeune start-up novatrice spécialisée dans la vente de produit divers, aussi bien des produits électroniques, mécanique, textiles... Nous avons pour but d’étendre notre e-commerce à une échelle européenne dans les 5 ans à venir</p>
                                        </div>
                                        <div>
                                            <a class="lien" href="../Mention-legal/mention-legal.html">Mention legal</a>
                                        </div>
                                        
                                    </div>           
                           
                        <!-- Copy-Right -->
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right">
                                    <p>
                                        Copyright &copy; 2022 All rights reserved | Adibaba
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <!-- Footer End-->
        </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .couleur{
                background-color: #ff6502;
            }
            .couleur:hover{
                background-color: #eb5a00;
            }
        h1{
            margin-top:100px;
        }
    </style>
  </body>
</html>
