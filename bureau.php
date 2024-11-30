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
   <main>
        <div id="carousel">
                <div class="bureau">
                    <div class="membres">
                        <img class="member" src="img\Bureau\arnaud.jpg" alt="bureau">
                        Président : Arnaud 
                    </div>
                    <div class="membres"> 
                        <img class="member" src="img\Bureau\yoyo.jpg" alt="bureau">
                        Vice président : Lionel
                    </div>
                    <div class="membres"> 
                        <img class="member" src="img\Bureau\clem.jpg" alt="bureau">
                        Secrétaire : Clément
                    </div>
                    <div class="membres"> 
                        <img class="member" src="img\Bureau\laura.jpg" alt="bureau">
                        Sous secrétaire laura
                    </div>

                    <div class="membres">
                        <img class="member" src="img\Bureau\chanchan.jpg" alt="bureau">
                        Trésorière : Chantal
                    </div>
                    <div class="membres">
                        <img class="member" src="img\Bureau\angel.jpg" alt="bureau">
                        Trésorière : Angélique
                    </div>
                </div>
                <div class="membres">
                <img class="equipe" src="img\Bureau\equipe.jpg" alt="bureau">
            </div>
            </div>

    </main>
  <!-- footer use on all pages -->
 <?php include('footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>