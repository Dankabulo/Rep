<?php

$db = new PDO('mysql:host=localhost;dbname=membres', 'root', '');

$str = 'INSERT INTO personnal VALUES(null, :t , :x, :y, :d)';
$nom = $_POST['pseudo'];
$pwd = $_POST['pwd'];
$mail = $_POST['mail']; 
$genre = $_POST['genre'];

$r = $db->prepare($str);
$r->execute(
    array('t' => $nom , 'x' => $pwd , 'y' => $mail , 'd' => $genre)
);

echo "<h1>L'enregistrement s'est effectue avec succes!!</h1>";
echo '<h2>Bienevenue dans <h1>ExpliqueSimplement</h1></h2><a href="indexx.php">Acceder</a>';

?>