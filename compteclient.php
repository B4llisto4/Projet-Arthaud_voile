<?php
Error_reporting(E_ALL);
    include"connexion.php";

    $id_client=ISSET($_POST['id_client'])?$_POST['id_client']:NULL;
    $name=ISSET($_POST['name'])?$_POST['name']:NULL;
    $lastname=ISSET($_POST['lastname'])?$_POST['lastname']:NULL;
    $email=ISSET($_POST['email'])?$_POST['email']:NULL;
    $password=ISSET($_POST['password'])?$_POST['password']:NULL;
    $address=ISSET($_POST['address'])?$_POST['address']:NULL;

    //var_dump($_POST);
    if(!empty($email)){
        try{
            $pwd=password_hash($password, PASSWORD_DEFAULT);
            $sql = "insert into client(name, lastname, email, password, address) values('$name', '$lastname', $email','$pwd', '$address')";
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
        <title>Création du compte client </title>
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
    <center><h4>Création du compte client</h4><br>
    <label class="form-check-label" for="exampleCheck1">Vous avez déjà un compte ?</label><br>
    
  <a href="compteclientconnexion.php">Me connecter</a>
  

  
  <div class="form-group"><br>
    <label for="exampleInputName1"></label>
    <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Nom">
  </div>

  <div class="form-group">
    <label for="exampleInputLastname1"></label>
    <input name="lastname" type="text" class="form-control" id="exampleInputLastname1" placeholder="Prénom">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
  </div>

  <div class="form-group">
    <label for="exampleInputAddress1"></label>
    <input name="address" type="text" class="form-control" id="exampleInputAddress1" placeholder="Adresse">
  </div><br>

  <button type="submit" class="btn btn-primary">Création du compte</button>
    
</form>
    </body>
</html>
