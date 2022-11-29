<?php

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Zöldmenedék'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' => 'Kezdőlap'),
    'gazdira' => array('fajl' => 'gazdira', 'szoveg' => ' Gazdiraváró állatok'),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => ' Galéria'),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => ' Kapcsolat'),
    'belepes' => array('fajl' => 'belreg', 'szoveg' => ' Belépés'),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => ' Kilépés'),
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA1 = './Képek/galleria/';
$MAPPA = './Képek/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;

?>