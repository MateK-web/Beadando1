<from action="?oldal=belepes" method ="post">
<!DOCTYPE html>
<html>
  <head>
    <title>Belépés</title>
    <meta charset="utf-8">
  </head>
  <body>
  <from action="?oldal=belepes" method ="post">
  <div id="be"><?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?></div>
    <div class="container" style=" margin-top:15px;margin-bottom:15px; ">
<div class="row kerek" >

    <div class="col-lg-6 col-md-6 col-12">

    <form action = "./Belépés/belep.php" method = "post">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>

    </div>

    
    
    <div class="col-lg-6 col-12" style="margin:auto;">
    <h3>Regisztrálja magát, ha még nem felhasználó!</h2>
    <form action = "./Belépés/regisztral.php" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
    </div>






  </body>
</html>