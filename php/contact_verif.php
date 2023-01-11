<?php
   if(!empty($_POST['contact_nom']) && !empty($_POST['contact_mail']) && !empty($_POST['contact_num']) && !empty($_POST['contact_msg'])){
      // require permet d'indiquer qu'un fichier est requis 
      require('bdd.php');

      $req= $bdd -> prepare('INSERT INTO contact(nom, mail, num, msg) VALUES(:nom, :mail, :num, :msg)');
      $req -> execute([
         'nom'=>$_POST['contact_nom'],
         'mail'=>$_POST['contact_mail'], 
         'num'=>$_POST['contact_num'],
         'msg'=>$_POST['contact_msg']

      ]);

   header("Location: http://localhost/brief_web_project/#contact_id");
}else{   
   echo 'Veuillez renseigner tous les champs.';
}
