<?php

$ablakcim = array (
    'cim' => 'Zöldmenedék',
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Zöldmenedék'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' =>'Címlap','menun' => 'Kezdőlap'),
    'gazdira' => array('fajl' => 'gazdira', 'szoveg'=>'Gazdira váró','menun' => ' Gazdiraváró állatok'),
    'galeria' => array('fajl' => 'galeria', 'szoveg' =>'Galléria','menun'=> ' Galéria'),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg'=>'Kapcsolat','menun' => ' Kapcsolat'),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' =>'Üzenet','menun'=> ' Üzenet'),
    'elkuld' => array('fajl' => 'elkuldes', 'szoveg' => '', 'menun' => array(0,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg'=>'Belépés','menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' =>'Kilépés','menun'=> array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'feltolt' => array('fajl' => 'feltolt', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' =>'','menun'=> array(0,0)),
    'szervell' => array('fajl' => 'szervell', 'szoveg' => '', 'menun' => array(0,0)),

);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA1 = './Képek/galleria/';
$TIPUSOK = array ('.jpg', '.png', '.jpeg');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 1920*1080;

?>