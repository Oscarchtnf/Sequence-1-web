<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>IMC</title>
 	</head>
 	<body>
 		<p>
 				
 			<?php 

 			
 			if (isset($_GET['poids']) AND isset($_GET['taille']) AND isset($_GET['genre']))//on a le poids, la taille et le genre 
 			{
 				echo "test1";
 			
 			echo "Bonjour bienvenu sur le site de l'imc. Votre poid est de " . $_GET['poids']  . " Votre taille est de " . $_GET['taille'] . " Vous etes de sexe : " . $_GET['genre'] ;
 			}

 			
 			
 			$var_poids = $_GET['poids'];
 			$var_taille = $_GET['taille'];
 			$var_genre = $_GET['genre'];
 			$imc = ($var_poids / ($var_taille**2))*10000;

			?>
 			<br/>
 			<?php
 			echo $imc; 
			?>

 			
 			<br/>
 			<?php

 			echo "test2";
 			

 			if ($imc<16.0)
 			{
 				echo "Dénutrition - Maigreur extrême";
 			}
 			if (16.0<$imc<17.0)
 			{
 				echo "Maigreur";
 			}
 			if (17.0<$imc<18.5)
 			{	
 				echo "léger sous-poids";
 			}
 			if (18.5<$imc<24.9)
 			{
 				{echo "Corpulence normale";}
 			}
 			if (25.0<$imc<29.9)
 			{
 				echo "Surpoids";
 			}
			if (30.0<$imc<34.9)
			{
 				echo "Obésité de stade 1 (modérée)/td>";
			}
 			if (35.0<$imc<39.9)
 			{
 				echo "Obésité de stade 2 (sévère)";
 			}
 			if ($imc<40.0)
 			{
 				echo "Obésité de stade 3 (morbide/massive)";
 			}
 			
 			?>

 		</p>
 	</body>
</html>