<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./panier.css">
    <title>Panier</title>
    <link rel="stylesheet" href="../../navbar/navbar.css">
    <link rel="stylesheet" href="../../bibliothèque/bootstrap-5.1.3/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../../header_footer/style.css">
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
          <div class="collapse navbar-collapse blanc" id="navbarSupportedContent">
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
    <!-- Header -->
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
                         <h1 class="display-4 fw-bolder text-white">Vente de produits divers</h1>
                         <p class="lead fw-normal text-white-50 mb-0">Entreprise <span style="color: blue;">Fra</span><span style="color: white ;">nça</span><span style="color: red;">ise</span>, localisée dans le département du Nord</p>
                       </div>
                  
              </div>
          </div>
      </div>
  </div>
  </header>
    <!--___________________________Main_______________________________-->
    <main class="page marge">
      <div class="container">
        <h1>Votre panier :</h1>
        <hr />
        <ul>
          <li class="cart-element">
            <span class="cart-index">1.</span>
            <div class="product">
              <div class="product-left">
                <a href="../../Page produit/Page produit Clio 4.php">
                  <img class="image" src="https://user-images.githubusercontent.com/97881881/169657881-74e8fea8-2ff4-4f96-898f-89d1bbb9e70e.jpg" alt=""
                /></a>
                <div class="book">
                  <div class="bookInfo">
                    <a class="titre-produit" href="../../Page produit/Page produit Clio 4.php">CLIO 4</a>
                    <h4>Renault</h4>
                  </div>
                  <div>Edition 2020</div>
                </div>
              </div>
              <div class="product-right">
                <span class="price">Achat: 4500€</span>
                <div class="delete">
                  <img src="../../Images/delete.svg" alt="poubelle"/>
                </div>
              </div>
            </div>
          </li>
          <li class="cart-element">
            <span class="cart-index">2.</span>
            <div class="product last">
              <div class="product-left">
                <a href="../../Page produit/Page PQ OM.php">
                  <img class="image" src="https://user-images.githubusercontent.com/97881881/169658047-13e6e635-85b5-4363-8525-e7905f4b51f7.png" alt=""
                /></a>
                <div class="book">
                  <div class="bookInfo">
                    <a class="titre-produit" href="../../Page produit/Page PQ OM.php">PQ - OM</a>
                    <h4>Papier toilettes</h4>
                  </div>
                </div>
              </div>
              <div class="product-right">
                <span class="price">Achat: Gratuit</span>
                <div class="delete">
                  <img src="../../Images/delete.svg" alt="poubelle" />
                </div>
              </div>
            </div>
          </li>
          <div class="total">
            <h4>Sous-total :</h4>
            <h2>4500€</h2>
            <div class="cart-bottom">
              <a class="button_buy" href="../commande/commande.php"
                >Commander</a
              >
            </div>
          </div>
        </ul>
        <div></div>
      </div>
    </main>

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

  <style>
      .blanc{
        background-color: white !important;
          padding: 10px;
          border-radius: 10px;
      }
            
            
        </style>
    </body>

</html>
