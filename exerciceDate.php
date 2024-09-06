<?php
require 'partials/head.php';
?>
<h1>Exercice les dates en PHP</h1>
    <h2>Exercice 1</h2>
<?php
    $today = date('d/m/Y h-i-s');
    echo "<p>$today</p>"
?>

    <h2>Exercice 2</h2>
<?php
    $dateDonne = '2024-08-08';
    $date = strtotime($dateDonne);
    $dateFormat = date("d-m-Y", $date);
    echo "<p>$dateFormat</p>";
?>

    <h2>Exercice 3</h2>
<?php
    $ageUser = '15-02-1990';

    $naissance = strtotime($ageUser);

    // On récupère le timestamp actuel : 
    $now = time();

    // On calcul la différence en années :
    $age = date('Y', $now) - date('Y', $naissance);

    echo "<p>Tu as $age ans</p>";
?>

    <h2>Exercice 4</h2>
<?php
    function validateDate($date)
    {
        $newDate = strtotime($date);
    
        if (!$newDate) {
            echo '<p>Date invalide!</p>';
        } else {
            echo '<p>Date valide!</p>';
        }
    }

    validateDate('22-05-1992');
    validateDate('33-06-2024');
?>

    <h2>Exercice 5</h2>
<?php
    $timestamp = time();
    echo "<p>Le timestamp actuel est : $timestamp.</p>";
    echo "<p>Le timestamp actuel est le nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00 UTC (système UNIX). Cette date est appelée 'Epoch'. Le timestamp est souvent utilisé en programmation pour représenter un instant précis dans le temps de manière numérique.</p>";
?>

    <h2>Exercice 6</h2>
<?php
     echo "<p>La date correspondant au timestamp actuel est : </p>" . date('d/m/Y', $timestamp) . "<br>";
?>

    <h2>Exercice 7</h2>
<?php
    $timestamp_aujourdhui = time();
    $timestamp_semaine_apres = strtotime('+1 week', $timestamp_aujourdhui);
    $date_semaine_apres = date('d/m/Y', $timestamp_semaine_apres);
    echo "<p>La date dans une semaine sera : $date_semaine_apres</p>";
?>

    <h2>Exercice 8</h2>
<?php
    $dateJanvier = strtotime("01-01-2024");
    $dateAujourdhui = time();
    $dateCalc = $dateAujourdhui - $dateJanvier;
    $calcul = round($dateCalc / (60 * 60 * 24));
    
    echo "<p>$calcul jours se sont écoulé depuis le 1er janvier 2024</p>";
?>
<?php
require 'partials/footer.php';
?>