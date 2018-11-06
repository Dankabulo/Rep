<?php
   
   $nom = $_POST['pseudo'];
   $mpasse = $_POST['pwd'];

   $db = new PDO('mysql:host=localhost;dbname=membres', 'root', '');

   $str = 'SELECT * FROM personnal';
   $r = $db->prepare($str);
   $r->execute();
   
   $tab_c = $r->fetchAll();
   foreach($tab_c as $c)
   {   
        if($c['pseudo'] == $nom)
        {
            if($c['pwd'] == $mpasse)
            {
                echo '<a href="indexx.php">Acceder a la page maitenant</a>';
            }
        }
    }
?>
