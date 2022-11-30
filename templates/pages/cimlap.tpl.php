<div id="cimlap">
  
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zöldmenedék</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="BEADANDÓ/Style/style.css">

</head>
<body>
<div id="be"><?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?></div>
<!--Oldalra mozgó képek(Slide)-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ul>
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
               <div class="p-1 mb-1 bg-dark text-white szurkekerek"><p class="szkozep">Alapítványunk 1993-ban alakult. Legfőbb feladatunk a menhely fenntartása és működtetése. Kb 300 - 320 kutya és 60 - 80 cica napi ellátásáról (etetés, állatorvos, oltások) gondoskodunk. 
                 A körzetben jelentős a szerepünk. Nyilvántartást vezetünk a talált és az elveszett állatokról.
                 Legfőbb nehézségeink a kutyák gazdához kihelyezése és az anyagiak megteremtése. Folyamatosan frissítjük az oldalunkat, mégis a személyes látogatást javasoljuk a felelősségteljes kiválasztáshoz. 
                 Nagyon szeretnénk, ha a kutyáink sorsa jóra fordulna és szerető családra találnának.<br>Ez az új oldalunk, jelenleg még csak béta fázisban jár.
                  Esetleges opciók nem jelennek meg akkor látogason el a régi oldalunkra amelyet ezen a linken megtehet:
                  <a href="http://zoldmenedek.hu/kutya_macska/Kezdolap.html">link</a></p>
               </div>
                <div class="p-1 mb-1 bg-dark text-white szurkekerek">
                   <iframe width="350" height="240" style="margin-left: auto; margin-right: auto; display: block;"
                    src="https://youtube.com/embed/-e2Mdq7ucYg">
                   </iframe>
                </div>

                 <div class="p-1 mb-1 bg-dark text-white szurkekerek"> 
                <div class="col-lg-4 col-md-4 col-12">

                 <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=392&amp;hl=en&amp;q= Vác, Külső-Rádi út&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:500px;height:392px;}.gmap_canvas {overflow:hidden;background:none!important;width:500px;height:392px;}.gmap_iframe {width:500px!important;height:392px!important;}</style></div>

                </div>
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
            <div class="p-1 mb-1 bg-dark text-white szurkekerek"><p class="szkozep">Hálásan köszönjük, ha állatorvosok jelentkeznek orvosi munkák elvégzésére. Szeretnénk az ivartalanító műtétek számát optimális szintre. <br>
                Szívesen fogadunk száraz kenyeret, jó minőségű állateledelt, faforgácsot, tisztítószert, tisztítóeszközöket, gumikesztyűt, építőanyagot a menhely támogatására. </p>
            </div>
            <div class="p-1 mb-1 bg-dark text-white szurkekerek">
            <video width="350" height="240" controls style="margin-left: auto; margin-right: auto; display: block;">
                      <source src="Videos/5sec.mp4" type="video/mp4"> 
                  </video>
</div>
        </div>  
    </section>
 </a>




<!--Footer-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>
</html>