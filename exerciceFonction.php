<?php
require 'partials/head.php';
?>
    <h1>Exercice les fonctions en PHP</h1>

    <h2>Exercice 1</h2>
<?php
    function afficherMessage() {;
        echo "<p>Hello World</p>";
    }
    
    afficherMessage();
?>

    <h2>Exercice 2</h2>
<?php
    function greetUser($name) {
        echo "<p>Hello, $name!</p>";
    }
    
    greetUser("Mathis");
    greetUser("Isma");
?>

    <h2>Exercice 3</h2>
<?php
    function sum($a, $b) {
        return $a + $b;
    }
    $result = sum(7, 13);
    echo "<p>Mon resultat c'est $result</p>";
?>

    <h2>Exercice 4</h2>
<?php
    function sumArray( array $numbers) {
        $somme = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $somme += $numbers[$i];
        }
        return $somme;
    }

    $somme = sumArray([33, 28, 730, 55, 209, 88]);
    echo "<p> Ma somme est :$somme</p>"
?>

    <h2>Exercice 5</h2>
<?php
    function greetWithTime($name, $timeOfDay){
        return "Salut $name bonne $timeOfDay";
    }

    $resultat = greetWithTime('Maria de Fatima Ferreira De Freitas de Darque de St Agonia', 'Journée');

    echo "<p>$resultat</p>";
?>

    <h2>Exercice 6</h2>
<?php
    function getFruits() {
        return ["Pomme", "Banane", "Orange"];
    }

    $tabFruit = getFruits();

    var_dump($tabFruit);
?>

    <h2>Exercice 7</h2>
<?php
    function reverseString($str) {
        return strrev($str);
    }
    $maPhrase = "Hello";
    echo "<p>$maPhrase</p>";
?>

    <h2>Exercice 8</h2>
<?php
    function divide($a, $b) {
        if ($b == 0) {
            return  "<p>Erreur : division par zéro n'est pas possible.</p>";
        }
        $result = $a / $b;
            return "<p>Mon resultat est $result</p>";
       };
    $myResult = divide(10, 2);
    echo $myResult;
?>

<h2>Exercice 9</h2>
<?php
    function generateMultiplicationTable($number) {
        $table = [];
        for ($i = 0; $i <= 10; $i++) {
            $table[] = $number * $i;
        }
        return $table;
    }

    $multiplicationTable = generateMultiplicationTable(5);
    echo "<p>Multiplication table of 5: " . implode(", ", $multiplicationTable) . "</p>"
?>

    <h2>Exercice 10</h2>
<?php
    function checkEligibility($age, $hasLicense){
        if($age >= 18 && $hasLicense){
            return "Eligible!";
        } else {
            return "Pas éligibile !";
        }
    }
    $resulat = checkEligibility(16,true);
    echo "<p>$resulat</p>";
?>
<?php
require 'partials/footer.php';
?>