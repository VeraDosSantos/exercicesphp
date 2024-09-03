<?php
    require 'partials/head.php';
?>
<h1>Exercices Concatenantion</h1>
<h2>Execice 1</h2>
<?php
    $nom = "Salah";
    $prenom = "Fatima";
    echo "<p>Ton nom :$nom, ton prénom: $prenom</p>";
    echo '<p>' . $nom . ' ' . $prenom . '</p>'
?>

<h2>Execice 2</h2>
<?php 
    $phrase1 = 'Le ciel est'; 
    $phrase2 = 'bleu aujourd\'hui.'; 

    echo '<p>' . $phrase1 . ' ' . $phrase2 . '</p>'
?>

<h2>Exercice 3</h2>
<?php
    $mot1 = 'J\'aime';
    $mot2 = 'le';
    $mot3 = 'PHP.';
    echo  '<p>' , $mot1 , ' ' , $mot2 , ' ' , $mot3 , '</p>';
?>

<h2>Exercice 4</h2>
<?php
    $texte = 'Je vais';
    $texte .= ' à la plage.';
    echo '<p>' . $texte . '</p>';
?>

<h2>Exercice 5</h2>
<?php
    $citation =  "Il a dit : \"Le PHP est fantastique\"";
    echo "<p>$citation<p>"; 
?>

<h2>Exercice 6</h2>
<?php
     $mot = 'PHP';

     echo 'le mot est : $mot </br>';
     echo "le mot est : $mot";
?>

<h2>Exercice 7</h2>
<?php 
    $nom = 'Privat';
    echo "<p>Bonjour, $nom, bienvenue sur notre site!</p>";
?>

<h2>Exercice 8</h2>
<?php
    $citation = "La vie est belle";
    $citation .= ", surtout quand on code en PHP!";

    echo "<p>\" $citation \"</p>";
?>

<h2>Exercice 9</h2>
<?php
    $a = 5;
    $b = 10;
    $total = $a + $b;

    echo "<p> La somme de $a et $b est $total. </p>"
?>
<?php
    require 'partials/footer.php';
?>