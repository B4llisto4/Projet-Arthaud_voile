<?php
Error_reporting(E_ALL);
    include"connexion.php";

    $id_client=ISSET($_POST['id_client'])?$_POST['id_client']:NULL;
    $username=ISSET($_POST['username'])?$_POST['username']:NULL;
    $password=ISSET($_POST['password'])?$_POST['password']:NULL;

    //var_dump($_POST);
    if(!empty($password)){
        try{
            $pwd=password_hash($password, PASSWORD_DEFAULT);
            $sql = "insert into compte_client(username, password) values('$username', '$pwd')";
            $bdd->exec($sql);
            //echo "Votre demande a été prise en compte";
			//header("Location:accueil_admin.php");
		} catch(PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
          
      ?>

<!DOCTYPE>
<html lang="fr">
    <head>
        <title>Connexion </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />

        <style>
        .form-control{
            width: 300px;
        }
    </style>
    </head>

    <body>
    <form name="toto" method="post" action="">
    <br><br><br>
    <center><h4>Connexion au site</h4><br>
    <label class="form-check-label" for="exampleCheck1">Vous n'avez pas encore de compte ?</label><br>
    
    <a href="compteclient.php">M'inscrire</a>
  

  
  <div class="form-group"><br>
    <label for="exampleInputName1"></label>
    <input name="username" type="text" class="form-control" id="exampleInputName1" placeholder="Identifiant">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
  </div>

  <button type="submit" class="btn btn-primary">Création du compte</button>
    
</form>










    </body>
</html>
