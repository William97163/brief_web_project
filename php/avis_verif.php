<?php
   if(!empty($_POST['nom'])&& !empty($_POST['message'])){
      // require permet d'indiquer qu'un fichier est requis 
      require('avis_bdd.php');

      $req= $bdd -> prepare('INSERT INTO avis(pseudo, msg, _date) VALUES(:nom, :msg, :heure)');
      $req -> execute([
         'nom'=>$_POST['nom'],
         'msg'=>$_POST['message'], 
         'heure'=>date('y/m/d H:i:s')

      ]);

   header("Location: http://localhost/brief_web_project/#avis_id");
   }else{   
      echo 'Veuillez renseigner tous les champs.';
   }
?>