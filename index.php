<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les Archers du Mont-Blanc</title>
    <meta name="description" content="Le site internet du club des Archers du Mont-Blanc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <!--Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <!--CSS & JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!--icon font stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--appel feuille js target pour ouvrir les lien dans des nouveaux onglets-->
    <script type="text/javascript" src="js\target.js"></script>

</head>

<body>
<div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
<section>
       <?php include('menu.php'); ?>
</section>
<main>


</div>

<div class="content">
    <div class="principale">
        <article class="bienvenue">
            <h1>Bienvenue sur notre site !</h1>
            <p> Le club des Archers du Mont Blanc est un club de tir à l'arc situé à Passy en Haute Savoie(74). 
                Notre club est né le 17 mars 2022 et compte aujourd’hui 31 licenciés.
                Nous pratiquons le tir à l’arc dans différentes disciplines comme le tir en salle (saison hiver)
                et le
                tir à l'arc en extérieur (saison
                printemps/été) qui se nomme également TAE. Nos entrainements s'effectuent au boulodrome de
                passy.
                Mais
                vous pouvez nous retrouver sur
                differents évènements tout au long de l'année.
                </p>
        </article>
        <article class="actualites">
            <h2>Dernières news du club !</h2>
            <iframe class="fb"
                src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Farchersmontblanc%2Fposts%2Fpfbid02gKt91DKfKFxdxbdFQkbZz6pBqm43hbYdRAEM6cGvApqUDLXqKjV89C7WQy27teqAl&show_text=true&width=500"
                width="500" height="652" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            <iframe class="fb"
                src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Farchersmontblanc%2Fposts%2Fpfbid08z5h8GJFsdRnCsk2UtFrFVq9FfSs1EE3m6QdDjiBSJWD2YyTXNUrNwaiVJB1QrRQl&show_text=true&width=500"
                width="500" height="640" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </article>
        
    </div>
    <aside>
                <!-- implementation widget weather-->
                 <article>
                    <h3>Météo</h3>
                <div id="weather">
                    <iframe id="widget_autocomplete_preview" frameborder="0"
                        src="https://meteofrance.com/widget/prevision/742080##F4970A"
                        title="Prévisions Passy par Météo-France"> </iframe>
                </div>
                 </article>
                <!-- implementation calendar-->
                 <article>
                    <h3>Calendrier</h3>
                <div id="calendar">
                    <iframe
                        src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23F6BF26&ctz=Europe%2FParis&showNav=1&showDate=1&showPrint=0&showCalendars=0&showTz=0&src=YXJjaGVyc2R1bW9udGJsYW5jQGdtYWlsLmNvbQ&color=%23616161"
                        style="border:solid 1px #777" width="300" height="310" frameborder="0"></iframe>
                </div>
            </article>
                <!--implementation slide partenaires-->

                <article id="partnership">
                    <h3>Nos partenaires</h3>
                    <div class="center">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                               <!-- <div class="carousel-item active">
                                    <a href="https://archerystudio.wixsite.com/archerystudio/l-equipe"
                                        title="Archery studio" target="_blank" >
                                        <img src="img/archerystudio.png" class=" d-block w-100"
                                            alt="logo Archery studio">
                                    </a>
                                </div> -->
                                <div class="carousel-item active">
                                    <img src="img\logos\tramoy.png" class=" d-block w-100" alt="logo société tramoy">
                                </div>
                                <div class="carousel-item">
                                    <a href="https://www.ffta.fr/" title="FFTA" target="_blank">
                                        <img src="img\logos\FFTA1.jpg" class=" d-block w-100"
                                            alt="Logo fédération française de tir à l'arc">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="https://www.ville-passy-mont-blanc.fr/" title="ville de Passy" target="_blank">
                                        <img src="img\logos\Passy.png" class=" d-block w-100" alt="logo ville de passy">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="https://www.auvergnerhonealpes.fr/" title="Région Auvergne-Rhône-Alpes" target="_blank">
                                        <img src="img\logos\region.jpg" class="d-block w-100"
                                            alt="logo région auvergnes rhone alpes">
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </article>
            </aside>

        </div>

    </main>




    <!-- footer use on all pages -->
    <?php include('footer.php'); ?>

    <script type="text/javascript"
        src="//cookie.eurowebpage.com/cookie.js?skin=cookielaw2&amp;box_radius=15&amp;position=bottom_left&amp;animation=shake2&amp;delay=0&amp;bg_color=fcb941&amp;accept_radius=7&amp;link_color=af1a1a&amp;msg_color=050505&amp;accept_color=de9d3e"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>