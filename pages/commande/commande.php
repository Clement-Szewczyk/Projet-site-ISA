<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commande</title>
    <link rel="stylesheet" href="commande.css">
    <link rel="stylesheet" href="../../bibliothèque/bootstrap-5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../navbar/navbar.css">
    <link rel="stylesheet" href="../../header_footer/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.php">
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
        <a href="../panier/panier.php">
                    <button class="btn btn-outline-dark color" type="submit">
                        <img src="../../Images/shopping-cart.png" alt="shopping-cart" class="cart">
                        <strong>Panier</strong>
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                 </a>
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
    <section>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              Votre commande a bien été éffectué
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
                                    <a class="lien" href="../Mention-legal/mention-legal.php">Mention legal</a>
                                </div>
                                <div>
                                  <a class="lien" href="../Mention-legal/conditions-generales.php">Conditions-generales</a>
                              </div>
                              <div>
                                <a class="lien" href="../Mention-legal/politique.php">Politique</a>
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