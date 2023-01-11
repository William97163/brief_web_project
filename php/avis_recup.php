<!-- cette page affiche les avis dans la partie dédiée -->
<?php
require('avis_bdd.php');
$req = $bdd->prepare('SELECT * FROM avis');
$req->execute();

$datas = $req->fetchAll();
foreach($datas as $data){
    echo '<p>Pseudo : ' . $data['pseudo'].'</p>';
    echo '<p>Message : ' . $data['msg'].'</p>';
    echo '<p>Heure : ' . $data['_date'] . '</p>';
}

?>