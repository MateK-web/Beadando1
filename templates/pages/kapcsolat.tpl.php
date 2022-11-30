<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zöldmenedék</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="BEADANDÓ/Style/style.css">
    <script type="text/javascript" src="Java/srcipt.js"></script>

</head>
<body>
  <from onsubmit='return ellenoriz();' method='post' action='?oldal=elkuld'>
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

      <div class="container" style=" margin-top:15px;margin-bottom:15px; ">
<div class="row kerek" >

    <div class="col-lg-6 col-md-6 col-12">

    <h1>Kapcsolat</h1>
    <form name="kapcsolat" action="./templates/pages/szervell.php" onsubmit="return ellenoriz();" method="post">
        <div>
            <label><input type="text" id="nev" name="nev" size="20" maxlength="40">Név (minimum 5 karakter): </label>
            <br/>
            <label><input type="text" id="email" name="email" size="30" maxlength="40">E-mail (kötelező): </label>
            <br/>
            <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet (kötelező): </label>
            <br/>
            <input id="kuld" type="submit" value="Küld">
            <button onclick='ellenoriz();' type="button">Ellenőriz</button>
        </div>
    </form>

    </div>

    
    
    <div class="col-lg-6 col-12" style="margin:auto;">
    <b> 
        <p>
            Lépjen velünk kapcsolatba</br>
            Az űrlap segítségével küldhet nekünk üzenetet</br>
            </br>
        
        </p>
    </b>
    </div>

</div>
</div>





      



<!--Footer-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>
</html>