<?php
    require 'partials/head.php';
?>
<h1>Exercices Conditions</h1>
<h2>Exercice 1</h2>
<?php 
    $age = 25;
    if (($age >= 0) && ($age <= 120) && is_int($age)) {
        echo "L'âge est valide.";
    } else {
        echo "L'âge n'est pas valide.";
    }
?>
<h2>Exercice 2</h2>
<?php
    $montant = 48;

    if($montant > 100) {
        $total = $montant * 0.9;
        echo "<p>Mon montant est de $montant avec -10% il est maintenant à $total</p>";

    } else if (($montant >= 50) && ($montant <= 100)){
        $total = $montant *0.95;
        echo "<p>Mon montant est de $montant avec -5% il est maintenant à $total</p>";

    } else {
        $total = $montant;
        echo "<p>Mon montant est de $total</p>";
    }
?>

<h2>Exercice 3</h2>
<?php
    
    $jour = 3; 

switch ($jour) {
    case 1:
        echo "<p>Aujourd'hui, c'est Lundi</p>";
        break;
    case 2:
        echo "<p>Aujourd'hui, c'est Mardi</p>";
        break;
    case 3:
        echo "<p>Aujourd'hui, c'est Mercredi</p>";
        break;
    case 4:
        echo "<p>Aujourd'hui, c'est Jeudi</p>";
        break;
    case 5:
        echo "<p>Aujourd'hui, c'est Vendredi</p>";
        break;
    case 6:
        echo "<p>Aujourd'hui, c'est Samedi</p>";
        break;
    case 7:
        echo "<p>Aujourd'hui, c'est Dimanche</p>";
        break;
    default:
        echo "<p>Jour invalide<br>";
}
?>

<h2>Exercice 4</h2>

<?php
    $a = 'yassine';
    $b = 'sofia';
    if($a === $b){
        echo "<p>les 2 valeurs sont identique </p>";
    }else{
        echo "<p>les 2 valeurs sont pas identique </p>";
    }
?>

<h2>Exercice 5</h2>

<?php
    $note1 = 12;
    $note2 = 8;
    $note3 = 15;

    $moyenne = ($note1 + $note2 + $note3) / 3;

    if($moyenne >=20 ){
        if ($moyenne >= 10) {
            echo "<p>La moyenne est $moyenne. Vous avez réussi l'examen.</p>";
        } else {
            echo "<p>La moyenne est $moyenne. Vous avez échoué l'examen.</p>";
        }
    } else {
        echo "<p>Il y a une erreur dans la $moyenne.</p>";
    }
?>

<h2>Exercice 6</h2>
<?php
    $var;
    if(isset($var)){
        echo "<p>$var est définie.</p>";
    } else {
        echo "<p>$var n'est pas définie.</p>";
    }
?>

<h2>Exercice 7</h2>

<?php
    $nom;
    if(empty($nom)){
        echo '<p>Remplisser le champ svp, aller on sort les tracteurs!</p>';
    } else {
        echo '<p>Le champ n\'est pas vide!</p>';
    }
?>

<h2>Exercice 8</h2>

<?php
    $nombre = 7;

    if ($nombre % 2 == 0) {
        echo "<p>$nombre est un nombre pair.</p>";
    } else {
        echo "<p>$nombre est un nombre impair.</p>";
    }
?>

<h2>Exercice 9</h2>

<?php
    $age = 45;

    if($age <= 12){
        echo "<p>Tu est un enfant (gros bébé va).</p>";
    } elseif($age > 12 && $age <= 18){
        echo "<p>Tu est un adolescent.</p>";
    } elseif ($age > 18 && $age <= 50) {
        echo "<p>Tu est un adulte (bientot la mort).</p>";
    } else {
        echo "<p>Tu est un enfant (mais que dans la tête).</p>";
    }
?>

<h2>Exercice 10</h2>

<?php
    $utiliseEmpreinteDigitale = true;
    $utiliseMotDePasse = false;
    
    if(!empty($utiliseEmpreinteDigitale) && !empty($utiliseMotDePasse)){
        if ($utiliseEmpreinteDigitale xor $utiliseMotDePasse) {
            echo "<p>Connexion réussie.</p>";
        } else {
            echo "<p>Connexion impossible : choisissez une seule méthode de connexion.</p>";
        }
    } else {
        echo "<p>Connexion impossible : choisissez une méthode de connexion.</p>";
    }
?>
<?php
    require 'partials/footer.php';
?>