<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../navbar/navbar.css">
    <link rel="stylesheet" href="../../header_footer/style.css">
    
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.html">
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

      <header class=" py-3 fonce marge">
        <div class="clair">
        <div class="container d-flex align-items-center flex-column">
                       <img class="masthead-avatar mb-9" src="https://user-images.githubusercontent.com/97881881/162624927-5458c272-f276-44fd-9799-456b4a052190.png" width="100px" alt="..." />
                    </div>
                
                <div class="container d-flex align-items-center flex-column ">
                    <img class="taille" src="https://user-images.githubusercontent.com/97881881/162625071-ac15e30c-fb54-4ef1-983b-f74d1548999c.png" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-8"></div> 
                      <div class="text-center text-white">
                           <h1 class="display-4 fw-bolder text-white"><strong>Vente de produits divers</strong></h1>
                           <p class="lead fw-normal text-white-50 mb-0">Entreprise <span style="color: blue;">Fra</span><span style="color: white ;">nça</span><span style="color: red;">ise</span>, localisée dans le département du Nord</p>
                         </div>
                    
                </div>
            </div>
        </div>
    </div>
    </header>
  <section id="contact">
    <h3>Contactez-nous</h3>
        <div class="form-container">
            <form id="reused_form">
                <div>
                    <input id="name" type="text" name="name" placeholder="Nom" required class="validate">
                </div>
                <div>
                    <input id="email" type="email" name="email" placeholder="E-mail" required class="validate">
                </div>
                <div>
                    <textarea id="message" name="message" placeholder="Ici votre message..." class="validate" ></textarea>
                </div>
                <div>
                    <button class="form-button" type="submit">Envoyer</button>
                </div>
            </form>
          
            <div id="error_message" style="width:100%; height:100%; display:none; ">
                <h4>Une erreur s'est produite, veuillez rééssayer</h4> 
            </div>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
                <h4>Message envoyé !</h4>
            </div>
            </div>


  </section>

  <footer class="">
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
    
    <script src="./assets/js/jquery.min.js" type="text/javascript"></script>
     <script src="./assets/form/form.js"></script>
   
    
</body>
</html> 