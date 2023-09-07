<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Contact</title>
    <link href="www\css\style.css" rel="stylesheet" type="text/css" />
    <!--Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--CSS & JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--icon font stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>
  
  <body>
    <!-- navbar creation / use on all pages-->
    <section>
        <!--NavBar creation for all pages-->
        <!--Logo insertion-->
        <div class="Nav-Brand">
            <img id="logo" src="C:\Users\laura\les-archers\img\logo.png" alt="logo du club" />
        </div>
        <!--Link creation-->
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Accueil</a>
                    </li>
                    <!-- dropdown menu-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarClub" role="button" data-toggle="dropdown" aria-expanded="false">
              Le Club
            </a>
                        <!-- dropdown item-->
                        <ul class="dropdown-menu" aria-labelledby="navbarClub">
                            <li><a class="dropdown-item" href="presentation.html">Presentation</a></li>
                            <li><a class="dropdown-item" href="trainningtime.html">Horaires entrainements</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="subscribe.html">Inscritpion</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galery.html">Galerie</a>
                    </li>
                    <!--dropdown menu-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                              Compétition
                            </a>
                        <!-- dropdown item-->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="competsub.html">Inscription aux concours</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php\contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- search form-->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <input id="pawBoar" type="image" src="img\pawprints.png">
            </form>
        </nav>
            <!-- search form-->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <input id="pawBoar" type="image" src="\img\pawprints.png">
            </form>
        </nav>
        <!--carousel creation-->
        <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1000">
                    <img src="\img\carousel1.jpg" class="d-block w-100" alt="@archerystudio">
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="\img\carousel2.jpg" class="d-block w-100" alt="@archerystudio">
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="\img\carousel3.jpg" class="d-block w-100" alt="@archerystudio">
                </div>
            </div>
            <!--prev & next button for carousel-->
            <button class="carousel-control-prev" type="button" data-target="#carouselFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </button>
            <button class="carousel-control-next" type="button" data-target="#carouselFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </button>
        </div>
        </section>
  
    <!-- Main Content -->
    <main>
        <div class="content">
        <div class="container">
            <p>Vous pourrez retrouver ici toutes les informations nécessaires liées au club. Pour toutes questions ou demandes particulières, n’hésitez pas à nous contacter par mail à archersdumontblanc@gmail.com ou encore via notre page facebook. </p>
</p>
    <h1>Formulaire de contact</h1>
    <form method="post">
      <label for="name">Nom & prénom</label>
      <input type="text" id="name" name="firstname" placeholder="Votre nom et prénom">
  
      <label for="sujet">Sujet</label>
      <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message" required>
  
      <label for="emailAddress">Email</label>
      <input id="emailAddress" type="email" name="email" placeholder="Votre email" required>
  
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Votre message" style="height:200px" required></textarea>
      <input type="submit" value="Envoyer">
    </form>
    <?php
    // si le formulaire a été soumis
    if (isset($_POST['message'])) {
        $retour = mail('lauraberthoud74@gmail.com', $_POST['sujet'], $_POST['message'], 'From:' .  $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
  </div>
        </div>
      </main>
   
  <!-- footer use on all pages -->
  <div class="footer-basic">
    <footer>
        <div class="social"><a href="https://www.facebook.com/profile.php?id=100086312898343&locale=fr_FR"><i class="bi bi-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html">Accueil</a></li>
            <li class="list-inline-item"><a href="plan.html">Plan du site</a></li>
            <li class="list-inline-item"><a href="partnership.html">Nos partenaires</a></li>
        </ul>
        <p class="copyright">Les Archers du Mont Blanc © 2022</p>
    </footer>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>