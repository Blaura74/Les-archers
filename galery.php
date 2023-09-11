<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Galerie</title>
    <link href="css\galery.css" rel="stylesheet" type="text/css" />
    <!--Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--CSS & JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--icon font stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="js\script.js" defer></script>

  </head>
  
  <body>
    <!-- navbar creation / use on all pages-->
    <section id="hero">
    <?php include('menu.php'); ?>
        </section>
  
     <!-- Main Content -->
     <main>
       <section id="filters">
        <div><a href="#" id="all">Tout</a></div>
        <div><a href="#" id="tirsalle">Tir en Salle</a></div>
        <div><a href="#" id="tirext">Tir en extérieur</a></div>
       </section>
       <div id="gallery">
        <img src="img\tir_ext1.jpg" alt="extérieur" data-tirext class="active">
        <img src="img\tir_ext2.jpg" alt="extérieur" data-tirext class="active">
        <img src="img\tir_ext3.jpg" alt="extérieur" data-tirext class="active">
        <img src="img\tir_ext4.jpg" alt="extérieur" data-tirext class="active">
        <img src="img\tir_ext5.jpg" alt="extérieur" data-competext class="active">
        <img src="img\tir_salle1.jpg" alt="salle" data-tirsalle="" class="active">
        <img src="img\tir_salle2.jpg" alt="salle" data-tirsalle="" class="active">
        <img src="img\tir_salle3.jpg" alt="salle" data-tirsalle="" class="active">
        <img src="img\tir_salle4.jpg" alt="salle" data-tirsalle="" class="active">
        
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