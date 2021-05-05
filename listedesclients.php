<!DOCTYPE html>
	<html>
		<head>
			<title> Liste des clients </title>
			<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
			<link rel="stylesheet" id="all-css-4-1" href="https://s0.wp.com/_static/??/wp-content/themes/pub/hever/style.css,/wp-content/mu-plugins/admin-bar/masterbar-overrides/masterbar.css?m=1613409500j&amp;cssminify=yes" type="text/css" media="all">
			<link rel="stylesheet" id="all-css-6-1" href="https://s0.wp.com/_static/??-eJxti8sKgCAQAH8oW6KHdoi+xcTUWF1pjX4/OnSIOg0DM3BmYSgVmwrEQ2Q8XEgMmbiIFXXYgb3eQ3IPa8Ncwf/FZIJGgeToLZ+peBstg+/AIS0a72COU9OPUg69atV2AWWKN+I=?cssminify=yes" type="text/css" media="all">

				
			
			<br><br><center><u><h3>Liste des clients</h3></u></center><br><br>
		</head>
		
		<body>
		
		
			
		<figure class="wp-block-table alignfull">
			<table>
				<thead>
					<tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
						<th>Address</th>
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
								
				$reponse = $bdd->query('SELECT name, lastname, email, address FROM client');
				
        while ($donnees = $reponse->fetch()) {

			?>
				<tbody>
					<tr>
					<td><?php echo $donnees['name']; ?></td>
					<td><?php echo $donnees['lastname']; ?></td> 
					<td><?php echo $donnees['email']; ?></td>
					<td><?php echo $donnees['address']; ?></td>
	
          <?php
				}
			?>
					</tr>
				</tbody>
			</table>
		</figure>	
		</body>
</html>