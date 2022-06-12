<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD Wejdene</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="../../bibliothèque/bootstrap-5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../navbar/navbar.css">
        <link rel="stylesheet" href="../header_footer/style.css">
        <link rel="stylesheet" href="./page_produit.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">
            <img src="../Images/adibaba.png" alt="logo" class="img-logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse blanc" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pages/Decouvert/decouvert.php">
                  <img src="../Images/person.svg" alt="Personne"><strong>Nous-découvrir</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../pages/contact/contact.php">
                  <img src="../Images/telephone.svg" alt="tel">
                  <strong>Nous contacter</strong>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link button" href="../pages/connexion_inscription/index.php" ><strong>Se Connecter</strong></a>
              </li>
            </ul>  
            <a href="../pages/panier/panier.php">
                    <button class="btn btn-outline-dark color" type="submit">
                        <img src="../Images/shopping-cart.png" alt="shopping-cart" class="cart">
                        <strong>Panier</strong>
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                 </a>
          </div>
          
        </div>
      </nav>
          <script src="../bibliothèque/bootstrap-5.1.3/js/bootstrap.min.js"></script>
      
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
              
  <!-- Product section-->
  <section class="py-5 marge">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src= "https://user-images.githubusercontent.com/97881881/169656551-8907e4f9-6ab8-46e0-9980-4e2e906606ba.png" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">#0004</div>
                        <h1 class="display-5 fw-bolder">Eau de mon bain Ruby Nikara</h1>
                        <div class="fs-5 mb-5">
                           <!-- Product price-->
                           1500€
                            
                        </div>
                        <p class="lead"> Eau du bain de Ruby Nikara. Ce produit est en édition limitée. L'eau est certifié, elle a été utilisée lors de la toilette de Ruby. Peu contenir le Covid 23. Ce produit risque d'être rapidement victime de son succès... ou pas</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Les clients ayant acheté cet article ont également acheté</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promos</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://user-images.githubusercontent.com/97881881/169655692-a58cbc05-40b5-4dcc-af50-bd0cf03de28b.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bac Général</h5>
                                     <!-- Product reviews-->
                                     <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    500€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./Page produit Bac.php">Voir options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promos</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://user-images.githubusercontent.com/97881881/169653889-537399f6-2b3e-4131-b6b8-cc77b5d5c49e.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Maillot Third PSG Neymar 10</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">95€</span>
                                    55€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./Page produit Maillot PSG.php">Voir options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-50%</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://user-images.githubusercontent.com/97881881/169654191-6092557d-cc09-4ea9-ba54-5f9ce81d02c8.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">ESP-32 caméra</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">4€</span>
                                    1,99€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./Page produit ESP 32.php">Voir détails</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-primary text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Tendance</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://user-images.githubusercontent.com/97881881/169655285-4ed90b17-07be-40fa-9b9f-acef52aa87f8.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Clio 4</h5>
                                    
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">10500€ </span>
                                    4500€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./Page produit Clio 4.php">Voir détails</a></div>
                            </div>
                        </div>
                    </div>
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
                                    <a class="lien" href="../pages/Mention-legal/mention-legal.php">Mention legal</a>
                                </div>
                                <div>
                                  <a class="lien" href="../pages/Mention-legal/conditions-generales.php">Conditions-generales</a>
                              </div>
                              <div>
                                <a class="lien" href="../pages/Mention-legal/politique.php">Politique</a>
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


</body>
</html>