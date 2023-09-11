<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Présentation bureau</title>
    <meta name="description" content="Le site internet du club des Archers du Mont-Blanc">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
   <section>

    <?php include('menu.php'); ?>

   </section>
   <!-- Main Content -->
   <main id="bureau">
     
     <div class="member">
        <img class="gauche" src="img/arnaud.jpg" alt="Président"> Le Président Arnaud.
     </div>

    <div class="member" style="text-align: right;">
        Le vice président Lionel
        <img class="droite"  src="img/yoyo.jpg" alt="Vice Président">      
    </div>

    <div class="member">
        <img class="gauche" src="img/clem.jpg" alt="Secretaire">Le secrétaire Clément
    </div>

    <div class="member" style="text-align: right;">
        La trésorière Angélique
        <img class="droite" src="img/angel.jpg" alt="Trésorière">
    </div>

    <div class="member">
        <img class="gauche" src="img/chanchan.jpg" alt="Vice Trésorière">La vice trésorerière Chantale
    </div>

    <div class="member" style="text-align: right;">
        La vice secrétaire Laura
        <img class="droite" src="img/laura.jpg" alt="Vice secrétaire">
    </div>

<div id="group">
    <div class="members" style="text-align: center;">
    <img src="img/equipe.jpg" alt="Equipe du bureau"><p>L'équipe au complet</p>
</div>
</div>
</main>
  <!-- footer use on all pages -->
 <?php include('footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>