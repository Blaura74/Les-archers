
        <div class="header"> <!--NavBar creation for all pages-->
            <div class="Brand">
                <!--Logo insertion-->
                <img id="logo" src="img\logos\logor.png" alt="logo du club" />
                <!--Link creation-->
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Accueil</a>
                            </li>
                            <!-- dropdown menu-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarClub" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Le Club
                                </a>
                                <!-- dropdown item-->
                                <ul class="dropdown-menu" aria-labelledby="navbarClub">
                                    <li><a class="dropdown-item" href="presentation.php">Presentation du club</a></li>
                                    <li><a class="dropdown-item" href="bureau.php">Presentation du bureau</a></li>
                                    <li><a class="dropdown-item" href="training.php">Entrainements</a>
                                    </li>
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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarClub" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Evènements
                                </a>
                                <!-- dropdown item-->
                                <ul class="dropdown-menu" aria-labelledby="navbarClub">
                                    <li><a class="dropdown-item" href="concours.php">Liste concours</a></li>
                                    <li><a class="dropdown-item" href="inscription.php">Inscription aux concours</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>

                    </div>

                </nav>
            </div>

            <!--carousel creation-->
            <div class="carousel">
                <div id="carouselauto" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img\carousel\carousel1.jpg" class="d-block w-100" width="auto" alt="@archerystudio">
                        </div>
                        <div class="carousel-item">
                            <img src="img\carousel\carousel2.jpg" class="d-block w-100" width="auto" alt="@archerystudio">
                        </div>
                        <div class="carousel-item">
                            <img src="img\carousel\carousel3.jpg" class="d-block w-100" width="auto" alt="@archerystudio">
                        </div>
                    </div>
                </div>
            </div>
        </div>
