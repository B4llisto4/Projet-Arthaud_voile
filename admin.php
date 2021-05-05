<?php
Error_reporting(E_ALL);
    include"connexion.php";

    $id_admin=ISSET($_POST['id_admin'])?$_POST['id_admin']:NULL;
    $email=ISSET($_POST['email'])?$_POST['email']:NULL;
    $password=ISSET($_POST['password'])?$_POST['password']:NULL;
    $name=ISSET($_POST['name'])?$_POST['name']:NULL;
   
    //var_dump($_POST);
    if(!empty($email)){
        try{
            $pwd=password_hash($password, PASSWORD_DEFAULT);
            $sql = "insert into admin(email, password, name) values('$email','$pwd', '$name')";
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
        <title>Authentification Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />

        <style>
        .form-control{
            width: 300px;
        }
    </style>
    </head>

    <body>
    <form name="toto" method="post" action="redirection.php">
    <br><br><br>
    <center><h4>Authentification de l'administrateur</h4><br><br>
  <center><div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nom">
  </div>

  <div class="form-group form-check">
  
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
  </div>
  <button type="submit" class="btn btn-primary">Authentification...</button>
    
</form>










    </body>
</html>
