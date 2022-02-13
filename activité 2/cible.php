<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Bienvenue sur mon site web</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
	<p><h1>Bonjour bienvenu sur le site de l'imc.</h1></p>

		<p>Votre poids est de : <?php echo $_POST['poids']; ?> kg.</p></br>
		<p>Votre genre est femme: <?php echo $_POST['femme'];?> </p>
 		<p>Votre genre est homme: <?php echo $_POST['homme'];?> </p>
 			
 			<?php 

 			/*if (isset($_GET['poids']) AND isset($_GET['taille']) AND isset($_GET['genre']))//on a le poids, la taille et le genre 
 			{
 			echo "Bonjour bienvenu sur le site de l'imc. Votre poid est de " . $_GET['poids']  . "kg. Votre taille est de " . $_GET['taille'] . "cm. Vous etes de sexe : " . $_GET['genre'] ;
 			}
*/
 			$var_poids = $_POST['poids'];
 			$var_taille = $_POST['taille'];
 			$var_genre = $_POST['genre'];
 			$imc = ($var_poids / ($var_taille**2))*10000;

			?>
 			
 			<p>Votre taux d'imc est de : <?php echo  $imc; ?> </p>
 			
 			<br/>
 			<?php
 			
 				if ($imc<16.0)
 			{echo "Vous etes dans un cas de dénutrition - maigreur extrême";}
 				elseif ($imc<17.0)
 			{echo "Vous etes dans un cas de maigreur";}
 				elseif  ($imc<18.5)
 			{echo "Vous etes dans un cas de léger sous-poids";}
 				elseif  ($imc<24.9)
 			{echo "Vous etes dans un cas  de Corpulence normale";}
 				elseif  ($imc<29.9)
 			{echo "Vous etes dans un cas  de surpoids";}
				elseif  ($imc<34.9)
			{echo "Vous etes dans un cas d'obésité de stade 1 (modérée)/td>";}
 				elseif  ($imc<39.9)
 			{echo "Vous etes dans un cas d'bésité de stade 2 (sévère)";}
 				elseif  ($imc<40.0)
 			{echo "Vous etes dans un cas d'bésité de stade 3 (morbide/massive)";}			
 			?>
 			<p>Si vous voulez modifier vos paramétres, <a href="formulaire.html">clique ici<a/> pour revenir à la page formulaire.php.</p>
 		</p>
	</body>
</html>