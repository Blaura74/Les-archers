

     <!--NavBar creation for all pages-->
        <!--Logo insertion-->
        <div class="Nav-Brand">
            <img id="logo" src="img\logo.png" alt="logo du club" />
        </div>
        <!--Link creation-->
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <!-- dropdown menu-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarClub" role="button" data-toggle="dropdown" aria-expanded="false">
              Le Club
            </a>
                        <!-- dropdown item-->
                        <ul class="dropdown-menu" aria-labelledby="navbarClub">
                            <li><a class="dropdown-item" href="presentation.php">Presentation du club</a></li>
                            <li><a class="dropdown-item" href="bureau.php">Presentation du bureau</a></li>
                            <li><a class="dropdown-item" href="trainningtime.php">Horaires entrainements</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="subscribe.php">Inscritpion au club</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galery.php">Galerie</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarClub" role="button" data-toggle="dropdown" aria-expanded="false">
              Evènements
            </a>
                        <!-- dropdown item-->
                        <ul class="dropdown-menu" aria-labelledby="navbarClub">
                            <li><a class="dropdown-item" href="concours.php">Liste concours</a></li>
                            <li><a class="dropdown-item" href="inscription.php">Inscription aux concours</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- search form
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <input id="pawBoar" type="image" src="img\pawprints.png">
            </form>-->
        </nav>
        <!--carousel creation-->
        <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1000">
                    <img src="img\carousel1.jpg" class="d-block w-100" alt="@archerystudio">
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="img\carousel2.jpg" class="d-block w-100" alt="@archerystudio">
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="img\carousel3.jpg" class="d-block w-100" alt="@archerystudio">
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

