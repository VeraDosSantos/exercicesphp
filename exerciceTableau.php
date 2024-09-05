<?php
require 'partials/head.php';
?>
<h1>Exercice Tableau</h1>
<h2>Exercice 1</h2>


<?php
    $filmsPreferes = array('Inception', 'Le Seigneur des Anneaux', 'Interstellar', 'Gladiator', 'Matrix');
    var_dump($filmsPreferes);

    echo "<h3>Liste de mes films préférés :</h3>";
?>
<ul>
    <?php
    foreach ($filmsPreferes as $film) {
        echo "<li>$film</li>";
    }
    ?>
</ul>

<h2>Exercice 2</h2>

<?php
    $fruits = ["Pomme", "Banane", "Orange", "Mangue"];

    array_push($fruits, "Ananas");
    $fruits[] = "Fraise";

    foreach ($fruits as $fruit) {
        echo "<p>$fruit<p>";
    }

    array_shift($fruits);
    foreach ($fruits as $fruit) {
        echo "<p>$fruit<p>";
    }
?>

<h2>Exercice 3</h2>
<?php
    $info = array(
        'nom' => 'Abdel',
        'prenom'=> 'Karim',
        'age'=> '20'
    );
    echo '<p>Mon nom est ' . $info['nom'] . '.</p>';
    echo '<p>Mon prenom est ' . $info['prenom'] . '.</p>';
    echo '<p>J\'ai ' . $info['age'] . ' ans.</p>';
?>

<h2>Exercice 4</h2>
<?php
    $villes = ["Amsterdam", "Paris", "Tokyo" , "Londres", "New York"];
    echo "<p>Nombre de villes : " . count($villes) . "</p>";
?>

<h2>Exercice 5</h2>
<?php

$etudiants = [
    ["prenom" => "vera", "nom" => "Dos Santos", "note" => 5],
    ["prenom" => "Fatima", "nom" => "Salah", "note" => 19],
    ["prenom" => "Khaoula", "nom" => "Jouini", "note" => 13]
];

echo "<p>La note de" . $etudiants[0]['prenom'] . ' ' . $etudiants[0]['nom'] . " est :" . $etudiants[0]['note'] . "</p>";
?>

<h2>Exercice 6</h2>
<?php
$etudiants[1]["note"] = 16;
foreach ($etudiants as $etudiant) {
    echo "<p>" . $etudiant["prenom"] . " " . $etudiant["nom"] . " a eu la note de " . $etudiant["note"] . "</p>";
}
?>

<h2>Exercice 7</h2>
<?php
    $tableauMois = array('Janvier', 'Février', 'Mars' , 'Avril' , 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
    
    for ($i = 0; $i < count($tableauMois); $i++) {
        echo '<p>' . $tableauMois[$i] . '</p>' ; 
    }
?>

<h2>Exercice 8</h2>
<?php

    $animaux = [
        'chien' => 'aboi',
        'chat' => 'miaul',
        'vache' => 'meugle',
        'coq' => 'cocorico',
        'canard' => 'coin-coin'
    ];

    foreach ($animaux as $animal => $bruit) {
        echo "<p>L'animal $animal qui $bruit</p>";
    }
?>

<h2>Exercice 9</h2>
<?php
    $aleatoire = [10, 1541, 56, 8479, 848, 4, 7, 63];

    if(in_array(55, $aleatoire)){
        echo "<p>Tu m'as trouvé</p>";
    }else{
        echo "<p>Une prochaine fois</p>";
    }
?>

<h2>Exercice 10</h2>
<?php
    $prenom = ["Julien Vincent","Marina", "Americo Fernando", "Maria de Fatima"];
    $nom = ["De Freitas", "Velhote", "Morreira", "Ferreira"];

    $nomsCompletsTab = array_map(function ($myPrenom, $myNom) {
        return "$myPrenom $myNom";
    }, $prenom, $nom);
    
    foreach ($nomsCompletsTab as $nomComplet) {
        echo "<p> $nomComplet </p>";
    }
?>

<?php
require 'partials/footer.php';
?>