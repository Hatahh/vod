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
	
		<h3>Liste des films</h3>

		
		<!--Les différents tests-->
		
		
			<?php
			/*
		
			$row = 1;
			if ( ( $handle = fopen( "data/vod.csv" , "r" ) ) !== FALSE) {
				while ( ( $data = fgetcsv ($handle , 1000 , "," ) ) !== FALSE) {
					$num = count($data);
					$row++ ;
					for ($i = 0 ; $i < $num ; $i++ ) {
					echo $data[$i] . "<br />\n";
					}
				}
			fclose($handle);
			}
			*/
			
			/*
			$handle = fopen( "data/vod.csv" , "r" ) ;
			$data = fgetcsv ( $handle , 1000 , "," ) ;
			$num = count ( $data ) ;
			list($nomFilm0 , $annee0 , $prod0) = explode(":" , $data[0]) ;
			list($nomFilm1 , $annee1 , $prod1) = explode(":" , $data[1]) ;
			list($nomFilm2 , $annee2 , $prod2) = explode(":" , $data[2]) ;
			list($nomFilm3 , $annee3 , $prod3) = explode(":" , $data[3]) ;
			list($nomFilm4 , $annee4 , $prod4) = explode(":" , $data[4]) ;
			
			echo $data[0]."\n";	
			*/
			
			/*
			$rows   = array_map('str_getcsv', file('data/vod.csv'));
			$header = array_shift($rows);
			$csv    = array();
			foreach($rows as $row) {
				$csv[] = array_combine($header, $row);
			}
			*/
			
			/*
			$csv = array_map('str_getcsv', file('data/vod.csv'));
			
			list($nomFilm[0] , $annee[0] , $prod[0]) = explode(":" , $csv[0][0]) ;
			list($nomFilm[1] , $annee[1] , $prod[1]) = explode(":" , $csv[1][0]) ;
			list($nomFilm[2] , $annee[2] , $prod[2]) = explode(":" , $csv[2][0]) ;
			list($nomFilm[3] , $annee[3] , $prod[3]) = explode(":" , $csv[3][0]) ;
			list($nomFilm[4] , $annee[4] , $prod[4]) = explode(":" , $csv[4][0]) ;
			
			*/
			?>
			
			<!--<table>	
			<tr>
				<th>Nom du film</th><th>Année</th><th>Producteur</th>
			</tr>
			<tr>
				<td><?php/* echo $nomFilm[0]."\n"; */?></td><td><?php/* echo $annee[0]."\n"; */?></td><td><?php/* echo $prod[0]."\n"; */?></td>
			</tr>
			<tr>
				<td><?php/* echo $nomFilm[1]."\n"; */?></td><td><?php/* echo $annee[1]."\n"; */?></td><td><?php/* echo $prod[1]."\n"; */?></td>
			</tr>
			<tr>
				<td><?php/* echo $nomFilm[2]."\n"; */?></td><td><?php/* echo $annee[2]."\n"; */?></td><td><?php/* echo $prod[2]."\n"; */?></td>
			</tr>
			<tr>
				<td><?php/* echo $nomFilm[3]."\n"; */?></td><td><?php/* echo $annee[3]."\n"; */?></td><td><?php/* echo $prod[3]."\n"; */?></td>
			</tr>
			<tr>
				<td><?php/* echo $nomFilm[4]."\n"; */?></td><td><?php/* echo $annee[4]."\n"; */?></td><td><?php/* echo $prod[4]."\n"; */?></td>
			</tr>										
		</table>-->


		
		<?php 
			
			$csv = array_map('str_getcsv', file('data/vod.csv'));
			
			$contenu_fichier = file_get_contents('data/vod.csv');
			$nombreLignes = substr_count($contenu_fichier, "\n");
			
			echo "<table>" ;
			for( $i = 0 ; $i < $nombreLignes ; $i++ ){
				list($nomFilm[$i] , $annee[$i] , $prod[$i]) = explode(":" , $csv[$i][0]) ;
				echo "<tr>"	;
				echo "<td>" ;
				echo $nomFilm[$i]."\n" ;
				echo "</td>" ;
				echo "<td>" ;
				echo $annee[$i]."\n" ;
				echo "</td>" ;
				echo "<td>" ;
				echo $prod[$i]."\n" ;
				echo "</td>" ;
				echo "</tr>" ;				
			}
			echo "</table>" ;
				
		?>
								   
		<br/>
		<br/>

	</body>
</html>
