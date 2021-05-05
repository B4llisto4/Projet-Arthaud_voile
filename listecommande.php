<?php
Error_reporting(E_ALL);
    include"connexion.php";

    $id_commande=ISSET($_POST['id_commande'])?$_POST['id_commande']:NULL;
    $id_client=ISSET($_POST['id_client'])?$_POST['id_client']:NULL;
    $status=ISSET($_POST['status'])?$_POST['status']:NULL;
   
    //var_dump($_POST);
    if(!empty($status)){
        try{
            $sql = "insert into commande(id_commande, id_client, status) values('$id_commande','$id_client', '$status')";
            $bdd->exec($sql);
            //echo "Votre demande a été prise en compte";
			//header("Location:accueil_admin.php");
		} catch(PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

      ?>

<!DOCTYPE html>
	<html>
		<head>
			<title> Liste des commandes </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
      <link rel="stylesheet" id="all-css-4-1" href="https://s0.wp.com/_static/??/wp-content/themes/pub/hever/style.css,/wp-content/mu-plugins/admin-bar/masterbar-overrides/masterbar.css?m=1613409500j&amp;cssminify=yes" type="text/css" media="all">
			<link rel="stylesheet" id="all-css-6-1" href="https://s0.wp.com/_static/??-eJxti8sKgCAQAH8oW6KHdoi+xcTUWF1pjX4/OnSIOg0DM3BmYSgVmwrEQ2Q8XEgMmbiIFXXYgb3eQ3IPa8Ncwf/FZIJGgeToLZ+peBstg+/AIS0a72COU9OPUg69atV2AWWKN+I=?cssminify=yes" type="text/css" media="all">
			
			<br><br><center><u><h3>Liste des commandes</h3></u></center><br><br>
		</head>
		
		<body>
		
		
    <form name="toto" method="post" action="redirection.php">
		<figure class="wp-block-table alignfull">
			<table>
				<thead>
					<tr>
						<th>Id Commande</th>
						<th>Id Client</th>
						<th>Status</th>
					</tr>
				</thead>
			<?php
				try {
					$bdd = new PDO('mysql:host=localhost;dbname=arthaud_voile', 'user', 'user');
				}
				catch(Exception $e) {
					die('Erreur : '.$e->getMessage());
				}
			?>
				
			<?php
								
				$reponse = $bdd->query('SELECT id_commande, id_client, status FROM commande');
				
        while ($donnees = $reponse->fetch()) {

			?>
				<tbody>
					<tr>
					<td><?php echo $donnees['id_commande']; ?></td>
					<td><?php echo $donnees['id_client']; ?></td> 
					<td><select name="commande" id="commande-status">
                 
                 <option value="Nouvelle">Nouvelle</option>
                 <option value="En cours">En cours</option>
                 <option value="Terminée">Terminée</option>
              </select>
	
          <?php
				}
			?>
					</tr>
				</tbody>
			</table>
		</figure>	
    <button type="submit" class="btn btn-primary">Valider</button>
    </form>
		</body>
</html>