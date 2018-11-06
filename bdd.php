<?php

$db = new PDO('mysql:host=localhost;dbname=membres', 'root', '');

$str = 'SELECT * FROM personnal';
$r = $db->prepare($str);
$r->execute();

$tab_c = $r->fetchAll();
foreach($tab_c as $c)
{
   echo $c['id'].' '.$c['pseudo'].' '.$c['pwd'].' '.$c['email'].' '.$c['genre'];
   echo "</br>";
}
?>