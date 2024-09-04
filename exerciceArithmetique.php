<?php
    require 'partials/head.php';
?>
<h1>Exercices d'arithmetique</h1>
<h2>Exercice 1</h2>

<?php
    $a = 3 ;
    $b = 3 ;

    echo "<p>Ma variable a = $a et ma variable b = $b.</p>";

    $total = $a + $b;
    echo "<p>Ma variable a + ma variable b = $total</p>";

    $total = $a - $b;
    echo "<p>Ma variable a - ma variable b = $total</p>";

    $total = $a * $b;
    echo "<p>Ma variable a x ma variable b = $total</p>";

    $total = $a / $b;
    echo "<p>Ma variable a ÷ ma variable b = $total</p>";

    $total = $a % $b;
    echo "<p>Le modulo de ma variable a et ma variable b = $total</p>";
?>
<h2>Exercice 2</h2>
<?php
    $a = 40;
    $b = 10;

    $a += $b;
    echo "<p>Le total de ma variable a est = $a</p>";

    $a -= $b;
    echo "<p>Le total de ma variable a est = $a</p>"; 

    $a *= $b;
    echo "<p>Le total de ma variable a est = $a</p>";

    $a /= $b; 
    echo "<p>Le total de ma variable a est = $a</p>";

    $a %= $b;
    echo "<p>Le total de ma variable a est = $a</p>"
?>

<h2>Exercice 3</h2>
<?php
    $counter = 10;
    echo "<p>$counter</p>";
    ++$counter;
    echo "<p>$counter</p>";
    $counter = 10;
    echo "<p>$counter</p>";
    --$counter;
    echo "<p>$counter</p>";
?>
<h2>Exercice 4</h2>
<?php
    $num = 10;
    echo "<p>Valeur initiale : $num</p>";
    echo "<p>Incrémentation : " . $num++ . " (avant incrémentation, après c'est $num)</p>";
    $num = 10;
    echo "<p>Décrémentation : " . $num-- . " (avant décrémentation, après c'est $num)</p>";
?>
<h2>Exercice 5</h2>
<?php
    $age = 32;
    echo "<p>Mon age initiale $age</p>";
    $age++; 
    echo "<p>Mon age aprés une année, c'est $age</p>";
    $age2 = $age--;
    echo "<p>Retour a l'age initiale $age</p>"; 
?>

<h2>Exercice 6</h2>
<?php
    $note1 = 15;
    $note2 = 12;
    $note3 = 18;

    $moyenne = ($note1 + $note2 + $note3) / 3;

    echo "<p>La moyenne des trois notes est : $moyenne</p>";

    $nouvelleNote = 14;
    $moyenne = ($note1 + $note2 + $note3 + $nouvelleNote) / 4;

    echo "<p>Après ajout de la nouvelle note, la nouvelle moyenne est : $moyenne</p>";
?>

<h2>Exercice 7</h2>
<?php
    $total = 37;
    $resultat = ($total % 2 === 0) ? "Pair" : "Impair";
    echo "<p>Le numéro est $resultat</p>";

    if ($total == 0){
        echo "<p> $total est pair </p>";
    }else {
        echo "<p> $total est impair </p>";
    }
?>
<h2>Exercice 8</h2>

<?php
    $quantity = 5;
    $quantity += 3;
    $quantity -= 2;
    echo "<p>$quantity</p>";
?>

<h2>Exercice 9</h2>
<?php
    $kilometres = 100;
    $kilometres *= 0.621371;
    echo '<p>La valeur $kilometres est de 100km mais après convertion en miles le résultat est de ' . $kilometres . ' miles</p>';
?>

<h2>Exercice 10</h2>

<?php
    $score = 50;
    $score += 10;
    $score -= 5;
    echo "<p>$score</p>";
?>
<?php
    require 'partials/footer.php';
?>