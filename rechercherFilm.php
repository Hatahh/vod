<!DOCTYPE html>
<html lang="fr">
	
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="style/vod.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
	
		<ul>
			<li><a class="active" href="vod.html">Accueil</a></li>
			<li><a href="consulterFilms.php">Consulter</a></li>
			<li><a href="saisieTitreRecherche.html">Rechercher</a></li>
			<li><a href="saisieFilm.html">Ajouter</a></li>
			<li><a href="saisieTitreSuppression.html">Supprimer</a></li>
		</ul>
		
		<br/>
		<br/>
		
		<?php 
			
			$csv = array_map('str_getcsv', file('data/vod.csv'));
			
			$contenu_fichier = file_get_contents('data/vod.csv');
			$nombreLignes = substr_count($contenu_fichier, "\n");
			
			/*list($nomFilm[0] , $annee[0] , $prod[0]) = explode(":" , $csv[0][0]) ;
			list($nomFilm[1] , $annee[1] , $prod[1]) = explode(":" , $csv[1][0]) ;
			list($nomFilm[2] , $annee[2] , $prod[2]) = explode(":" , $csv[2][0]) ;
			list($nomFilm[3] , $annee[3] , $prod[3]) = explode(":" , $csv[3][0]) ;
			list($nomFilm[4] , $annee[4] , $prod[4]) = explode(":" , $csv[4][0]) ;*/
			
			for ( $i = 0 ; $i < $nombreLignes ; $i++ ){
				list($nomFilm[$i] , $annee[$i] , $prod[$i]) = explode(":" , $csv[$i][0]) ;
				if ( $_GET["valeur"] == $nomFilm[$i] ){
				  echo "<table>";
				  echo "<tr>";
					echo "<th>Nom du film</th><th>Année</th><th>Producteur</th>";
				  echo "</tr>";
				  echo "<tr>";
					echo "<td>$nomFilm[$i]</td>";
					echo "<td>$annee[$i]</td>";
					echo "<td>$prod[$i]</td>";
				  echo "</tr>";
				  echo "</table>";
				   break ;	
					}
			}
			
		?>

	</body>
	
</html>
