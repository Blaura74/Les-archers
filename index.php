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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--CSS & JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--icon font stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v17.0" nonce="36dQOF1y"></script>
<section>
       <?php include('menu.php'); ?>
</section>
<main>
            <article>
                <h2>Bienvenue !</h2>
                <p>Bienvenue sur le site des Archers du Mont Blanc. 
                    Notre club, né le 17 mars 2022, compte aujourd’hui 11 licenciés. Nous pratiquons le tir à l’arc dans différentes disciplines comme le tir en salle (saison hiver) et le tir à l'arc en extérieur (saison printemps/été) qui se nomme également TAE. Vous pouvez nous rencontrer au stand de tir de Chedde sur la commune de Passy.
                    </article>
            <article>
                <h2>Fête du sport</h2>
                <p>Nous arrivons comme chaque année à la période de la fête du sport ! Que vous soyez juste curieux d'en apprendre plus ou de vouloir tester, venez nous rencontrer le 
                    10 septembre 2023 à notre stand au lac de Passy. 
                    Vous pourrer retrouver toutes les informations qu'il pourrait vous manquer et ainsi faire la connaissance d'une partie de nos archers qui ont mis leur coeur dans la création de ce club.  
                </p>
                <p style="text-align: center;"><b> A bientôt ! </b></p>
                <div style="text-align: center;">
                <img src="img\fetesport23.jpg" width="300">
            </div>
            </article>
</main>
        <aside>
            <!--immplemetation fb-->
            <div class="fb-page" data-href="https://www.facebook.com/archersmontblanc/?show_switched_toast=0&amp;show_invite_to_follow=0&amp;show_switched_tooltip=0&amp;show_podcast_settings=0&amp;show_community_review_changes=0&amp;show_community_rollback=0&amp;show_follower_visibility_disclosure=0" 
            data-tabs="timeline" data-width="400" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/archersmontblanc/?show_switched_toast=0&amp;show_invite_to_follow=0&amp;show_switched_tooltip=0&amp;show_podcast_settings=0&amp;show_community_review_changes=0&amp;show_community_rollback=0&amp;show_follower_visibility_disclosure=0" 
                class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/archersmontblanc/?show_switched_toast=0&amp;show_invite_to_follow=0&amp;show_switched_tooltip=0&amp;show_podcast_settings=0&amp;show_community_review_changes=0&amp;show_community_rollback=0&amp;show_follower_visibility_disclosure=0">
                        Les Archers du Mont Blanc</a></blockquote></div>
                <!-- implementation calendar-->
            <div id="calendar">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23F6BF26&ctz=Europe%2FParis&showNav=1&showDate=1&showPrint=0&showCalendars=0&showTz=0&src=YXJjaGVyc2R1bW9udGJsYW5jQGdtYWlsLmNvbQ&color=%23616161" 
                style="border:solid 1px #777"
                    width="400" height="410" frameborder="0"></iframe>
            </div>
            <!-- implementation widget weather-->
            <div id="weather">
                <iframe id="widget_autocomplete_preview" width="400" height="350" frameborder="0" src="https://meteofrance.com/widget/prevision/742080##2196F3BF"> </iframe>
            </div>
        </aside>
                
    <!-- footer use on all pages -->
    <?php include('footer.php'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>