<?php
    require 'partials/head.php';
?>

<?php
    // Exercice 1
    echo '<p>Hello World, Bienvenue sur mon premier script PHP</p>';
?>

<?php
    // Exercice 2
    echo'<p>Bonjour tout le monde! </br></p>';
    print '<p>Aujourd`\'hui , nous sommes le 03 septembre.</p>';
?>

<? // Exercice 3 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <?php
    echo '<p>Ce texte est affiché depuis PHP </p>';
    ?>
</body>
</html>

<?php
    // Exercice 4
    // cet exercice utilise echo pour afficher un texte et print pour en afficher un autre

    /* La différence entre echo et print est minime,
    * echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
    * quelques mots" et ne retourne rien)
    * print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
    * true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
    * valeur de vraioufaux sera true (1));
    */
?>

<?php
    // Exercice 5

    $personne = [
        'nom' => 'Ayoub',
        'age' => 19,
    ];

    print_r($personne)
?>

<?php
    // Exercice 6
    $nombre = 18;
    $str = "Wukong";
   
    var_dump($nombre);
    var_dump($str);
?>

<?php
    // Exercice 7
    echo "Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>";
?>

<?php
    // Exercice 8

    // PHP génére du code HTML grâce à echo
    echo '
    <div>
        <h1>Bienvenue</h1>
        <h2> sur mon application </h2>
    </div>'
  
?>

<? // Exercice 9 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <h1>Bienvenue sur ma page</h1>
    <h2>Voici un exemple de date affichée avec PHP</h2>
    <p>
        Aujourd'hui, nous sommes le <?php echo date("d/m/Y"); ?>.
    </p>
</body>
</html>

<?php
    //Exercice 10
    $message = 'en formation';
    echo '<h1>Abdel est ' .$message . '</h1>'
?>

<?php
    require 'partials/footer.php';
?>