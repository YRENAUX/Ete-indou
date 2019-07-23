<?php

  try{
  $conn = new PDO('mysql:host=localhost;dbname=ete;charset=utf8', 'root', '' /*$username, $password*/);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
      catch(Exception $e)
  {
      die('Erreur : '.$e->getMessage());
  }
  $req = $conn->prepare('SELECT nom, mdp, img, description, tel FROM `mutuelle` WHERE nom=:nom AND mdp=:mdp');


  if(isset($_POST['submit'])){
      $req->execute([
        'nom' => $_POST['nom'],
          'mdp' => $_POST['mdp']
          ]);
          $user = $req->fetch();
      if ($user){
        session_start();
          $_SESSION['id'] = $_POST['nom'];
          $_SESSION['assurance_img'] = $user['img'];
          $_SESSION['assurance_description'] = $user['description']; 
          $_SESSION['assurance_tel'] = $user['tel'];
          ob_start();
          header('location:menu.php');
          exit;
          ob_end_flush();
      }else{
          echo "<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
          identifiants incorrects !
        </div>";
      }
  }

?>
