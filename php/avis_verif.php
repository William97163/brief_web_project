<?php
   if(!empty($_POST['nom'])&& !empty($POST['message'])){
      // require permet d'indiquer qu'un fichier est requis 
      require('bdd.php');

      $req= $bdd -> prepare('INSERT INTO Avis(pseudo, message, _date) VALUES(:nom, :message, :heure)');
      $req -> execute([
         'pseudo'=>$_POST['pseudo'],
         'msg'=>$_POST['msg'], 
         'heure'=>date('y/m/d H:i/s')

      ]);

   include('index.php');
   }else{
      echo 'Veuillez renseigner tous les champs.';
   }
?>