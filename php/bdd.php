<?php
try
{
   $bdd = new PDO('mysql:dbname=web_projet;host=127.0.0.1;chartset=utf8', 'root', 'root');
} catch (\Exception $e) {
   die('Erreur 123:' . $e->getMessage());
}
?>