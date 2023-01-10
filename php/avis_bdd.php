<?php
try
{
   $bdd = new PDO('mysql:dbname=web_projet;host=127.0.0.1;chartset=utf8', 'root', '');
}
catch (\Exception $e)
{
   die('Erreur 123:' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM utilisateur');
$req->execute();

   while($donnes = $req->fetch()){
   echo 'Bonjour ' . $donnes['pseudo'];
   }
?>