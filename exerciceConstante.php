<?php
require 'partials/head.php';
?>
<h1>Exercices constante</h1>
<h2>Exercice 1</h2>
<?php
    define('PI', 3.14159);
    echo '<p>' . PI . '<p>';
?>
<h2>Exercice 2</h2>
<?php
    define('LARGEUR', 6);
    define('LONGUEUR', 4);

    $total = LARGEUR * LONGUEUR;

    echo "<p>$total</p>";
?>
<h2>Exercice 3</h2>
<?php 
    echo __DIR__;
?>

<h2>Exercice 4</h2>

<?php
    define("PREFIXE", 'Bonjour');
    $mot1 = "tout";
    $mot2 = "le";
    $mot3 = "monde";

    echo '<p>' . PREFIXE . " $mot1 $mot2 $mot3.</p>";
?>

<h2>Exercie 5</h2>

<?php
    define('SUJET', 'La France');
    $capitale = 'Paris';
    echo  '<p>La capitale de ' . SUJET . ' est ' . $capitale . '</p>';
?>

<h2>Exercice 6</h2>

<?php
    define('TAUX_TVA', 0.2);
    $prix_ht = 100;
    $prix_ttc = $prix_ht + ($prix_ht * TAUX_TVA);
    echo "<p>Le prix TTC est : $prix_ttc €</p>";
?>

<h2>Exercice 7</h2>

<?php

    define('EURO_VERS_USD', 1.2);
    $euros = 100;
    $total = $euros * EURO_VERS_USD;

    echo "<p>$euros € convertis en dollard font $total $.</p>"
?>

<h2>Exercice 8</h2>

<?php 
    define("SEUIL", 10);
    $variable = 8;
    
    if($variable < SEUIL){
        echo "<p>Le nombre $variable est plus petit que " . SEUIL . '</p>';
    }else {
        echo "<p>Le nombre $variable est plus grand que " . SEUIL . '</p>';
    }
?>

<h2>Exercice 9</h2>

<?php
    define('URL_SITE', 'https://fsalah.ma6tvacoder.org/');

    $chemin = '#propos';
    $cheminComplet = URL_SITE . $chemin;
    
    echo "<button type='button' class='btn btn-warning'>
    <a style='text-decoration: none' class='text-dark' href='$cheminComplet'>The best site</a>
    </button>" 
?>

<h2>Exercice 10</h2>

<?php
    define('AGE_LEGAL', 18);
    $age = random_int(0,99);

    if ($age >= AGE_LEGAL) {
        echo "<p>Tu as $age ans donc t'as plus de " . AGE_LEGAL . ' mais je pense que tu le sais</p>';
    }else{
        echo "<p>Tu as $age ans donc t'as moins de " . AGE_LEGAL . ' mais je pense que tu le sais</p>';;
    }
?>

<?php
require 'partials/footer.php';
?>