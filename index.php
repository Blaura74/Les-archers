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
            <?php include('aside.php'); ?>

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