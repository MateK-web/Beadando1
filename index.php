<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zöldmenedék</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--Navigációs menü-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Zöld Menedék</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#kezdo">Kezdőlap <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gazdiraváró
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#kutyák">Kutyák</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Macskák</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galléria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Elérhetőségink</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">Belépés</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">Regisztráció</a>
      </li>
    </ul>
  </div>
</nav>
<!--Navigációs menü vége-->

<!--Oldalra mozgó képek(Slide)-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="képek/borito1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Képek/borito3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="képek/borito2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    <!--Oldalra mozgó képek(Slide)vége-->
    <a id="kezdo">
      <!--Kezdo selction(Rólunk,Támogatás,Segítség,Yt videó, mp4 videó-->
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Kezdőlap</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
        <div class="col-lg-4 col-md-4 col-12">     
        <img class="kozep" src="képek/info.png" class="img-fluid pb-3"> 
          <h3 class="text-center">Rólunk</h3>
            <div class="p-1 mb-1 bg-dark text-white"><p class="szkozep">Alapítványunk 1993-ban alakult. Legfőbb feladatunk a menhely fenntartása és működtetése. Kb 300 - 320 kutya és 60 - 80 cica napi ellátásáról (etetés, állatorvos, oltások) gondoskodunk. 
                A körzetben jelentős a szerepünk. Nyilvántartást vezetünk a talált és az elveszett állatokról.
                Legfőbb nehézségeink a kutyák gazdához kihelyezése és az anyagiak megteremtése. Folyamatosan frissítjük az oldalunkat, mégis a személyes látogatást javasoljuk a felelősségteljes kiválasztáshoz. 
                Nagyon szeretnénk, ha a kutyáink sorsa jóra fordulna és szerető családra találnának.<br>Ez az új oldalunk, jelenleg még csak béta fázisban jár.
                 Esetleges opciók nem jelennek meg akkor látogason el a régi oldalunkra amelyet ezen a linken megtehet:
                 <a href="http://zoldmenedek.hu/kutya_macska/Kezdolap.html">link</a></p>
            </div>
                <div class="p-1 mb-1 bg-dark text-white">
                  <iframe width="350" height="240" style="margin-left: auto; margin-right: auto; display: block;"
                    src="https://www.youtube.com/watch?v=-e2Mdq7ucYg">>
                  </iframe>

                  <video width="350" height="240" controls style="margin-left: auto; margin-right: auto; display: block;">
                      <source src="video/5sec.mp4" type="video/mp4"> 
                  </video>
                </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">     
        <img class="kozep" src="képek/info.png" class="img-fluid pb-3"> 
            <h3 class="text-center">Támogatás</h3>
            <p style="text-align:center; padding-top: 20px;"><img src="képek/1sz.jpg" class="img-fluid pb-3" ></p>
            <p class="text-center"></p>
        </div>  
        <div class="col-lg-4 col-md-4 col-12">     
        <img class="kozep" src="képek/info.png" class="img-fluid pb-3"> 
            <h3 class="text-center">Segítsen</h3>
            <div class="p-1 mb-1 bg-dark text-white"><p class="szkozep">Hálásan köszönjük, ha állatorvosok jelentkeznek orvosi munkák elvégzésére. Szeretnénk az ivartalanító műtétek számát optimális szintre. <br>
                Szívesen fogadunk száraz kenyeret, jó minőségű állateledelt, faforgácsot, tisztítószert, tisztítóeszközöket, gumikesztyűt, építőanyagot a menhely támogatására. </p>
            </div>
        </div>  
    </section>
 </a>

 <!--Kezdo selction(Rólunk,Támogatás,Segítség,Yt videó, mp4 videó vége-->

 <!--Gazdiraváró kutyák-->
 <a id="kutyák">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>