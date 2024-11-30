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
        <article class="entrainements">
            <div class="membres">
                <img class="training" src="img\Bureau\clem.jpg" alt="bureau">
                Pour vos entrainements débutants et 1ère année, votre entraîneur: <br>Clément
            </div>
            <div class="membres">
                <img class="training" src="img\Bureau\yoyo.jpg" alt="bureau">
                Pour vos entrainements débutants et 1ère année le support à l'entraîneur : <br>Lionel
            </div>
        </article>
        <article class="milieu">
        <div>
            <p>
                Les entrainements ont lieux au boulodrome de passy :
            <ul>
                <li> Les lundis de 17h30 à 22h00</li>
                <li>Les mardis de 19h15 à 22h00</li>
                <li>Les vendredis de 19h00 à 22h00</li>
            </ul>
            </p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2775.5824028689785!2d6.710836176649241!3d45.91965840293421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478956601197dbb3%3A0x1e0f13431674b8ed!2sBoulodrome!5e0!3m2!1sfr!2sfr!4v1732918198298!5m2!1sfr!2sfr"
                 style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </article>
</main>

    <!-- footer use on all pages -->
    <?php include('footer.php'); ?>

    <script type="text/javascript"
        src="//cookie.eurowebpage.com/cookie.js?skin=cookielaw2&amp;box_radius=15&amp;position=bottom_left&amp;animation=shake2&amp;delay=0&amp;bg_color=fcb941&amp;accept_radius=7&amp;link_color=af1a1a&amp;msg_color=050505&amp;accept_color=de9d3e"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>