<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bac</title>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index.html">
                <img src="../Images/adibaba.png" alt="logo" class="img-logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                <form class="d-flex">
                  <button class="btn btn-outline-dark color" type="submit">
                    <a class="A" href="../pages/panier/panier.php">
                        <img src="../../Images/shopping-cart.png" alt="shopping-cart" class="cart">
                             <strong>Panier</strong>
                             <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                      </a>
                  </button>
                </form>
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
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src= "https://user-images.githubusercontent.com/97881881/164550334-ef8b684f-eb8c-464f-afda-c8c9020b5c91.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">#0001</div>
                        <h1 class="display-5 fw-bolder">Bac Général</h1>
                        <div class="fs-5 mb-5">
                             500€
                            
                        </div>
                        <p class="lead">C'est une nouveauté ! Vous pouvez désormais acheté le diplôme du Bac attitré à votre nom. Ce produit vous permet d'accèder en toute légalité à des offres d'emplois satisfaisantes. Ce produit risque d'être rapidement victime de son succès</p>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Spécialités</label>
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>Choisir...</option>
                              <option value="1">Mathématiques-SVT</option>
                              <option value="2">Physique-SVT</option>
                              <option value="3">Mathématiques-Physique</option>
                              <option value="4">Histoire-Mathématiques</option>
                              <option value="5">Histoire-SVT</option>
                              <option value="6">Histoire-LLCE</option>
                              <option value="7">LLCE-Physique</option>
                              <option value="8">SES-Mathématiques</option>
                              <option value="9">SES-SVT</option>
                              <option value="10">Physique-SES</option>
                              <option value="11">SES-Histoire</option>

                            </select>
                          </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Mention</label>
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>Choisir...</option>
                              <option value="1">Aucune</option>
                              <option value="2">Assez Bien</option>
                              <option value="3">Bien</option>
                              <option value="4">Très Bien</option>
                            </select>
                          </div>
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
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="https://user-images.githubusercontent.com/97881881/169655024-8f3e76e7-447f-446b-aae0-56403fc330f2.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Eau de mon bain Ruby Nikara</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    1500€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./Page produit Ruby Nikara.php">Voir détails</a></div>
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
                                          <a class="lien" href="../pages/Mention-legal/mention-legal.html">Mention legal</a>
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
