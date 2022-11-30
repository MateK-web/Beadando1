<?php

$ablakcim = array (
    'cim' => 'Zöldmenedék',
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Zöldmenedék'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' =>'Cimlap','menun' => 'Kezdőlap'),
    'gazdira' => array('fajl' => 'gazdira', 'szoveg'=>'Gazdira váró','menun' => ' Gazdiraváró állatok'),
    'galeria' => array('fajl' => 'galeria', 'szoveg' =>'Galléria','menun'=> ' Galéria'),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg'=>'Kapcsolat','menun' => ' Kapcsolat'),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' =>'Üzenet','menun'=> ' Üzenet'),
    'belepes' => array('fajl' => 'belepes', 'szoveg'=>'Belépés','menun' => ' Belépés'),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' =>'Kilépés','menun'=> ' Kilépés'),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => 'Belep'),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' =>'','menun'=> ' Kilépés'),

);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA1 = './Képek/galleria/';
$MAPPA = './Képek/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;

?>