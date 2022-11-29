<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['felhasznalo'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="Style/style.css">

</head>

<body>

     <h1>Hello, <?php echo $_SESSION['felhasznalo']; ?></h1>

     <a href="logout.php">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: logout.php");

     exit();

}

 ?>