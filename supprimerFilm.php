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
		
			<?php

			/*
			$csv = array_map('str_getcsv', file('data/vod.csv'));
			
			$contenu_fichier = file_get_contents('data/vod.csv');
			$nombreLignes = substr_count($contenu_fichier, "\n");
			
			for ( $i = 0 ; $i < $nombreLignes ; $i++ ){
				list($nomFilm[$i] , $annee[$i] , $prod[$i]) = explode(":" , $csv[$i][0]) ;
				if ( $_POST["nomfilm"] != $nomFilm[$i] ){
					
				    break ;	
					}
			}
			*/
			
			/*
			$nomfilm = $_POST['nomfilm'] ;
		
				$fichierCsv = fopen("/var/www/html/vod/data/vod.csv") ;
				$myCsv = array() ;
				while ( !feof ( $fichierCsv ) ) {
					$line_of_text = fgetcsv( $fichierCsv, 1024 ) ;
					if ( $nomfilm != $line_of_text[0] {
						fputcsv( $fichierCsv, $line_of_text ) ;
					}
				}
				fclose ( $fichierCsv ) ;
			*/	
			
			$csv = array_map('str_getcsv', file('data/vod.csv'));
			$contenu_fichier = file_get_contents('data/vod.csv');
			$nombreLignes = substr_count($contenu_fichier, "\n");
			
			$csvFile = fopen('data/vod.csv','r');
			$csvFile2 = fopen('data/vod2.csv','a');

			$laLigne = $_POST['nomfilm'] ;

			for ( $i = 0 ; $i < $nombreLignes ; $i++ ){
				list( $nomFilm[$i] , $annee[$i] , $prod[$i] ) = explode(":" , $csv[$i][0] ) ;
				if ( $laLigne != $nomFilm[$i] ){
					$array = array( $csv[$i][0] ) ;
					fputcsv ( $csvFile2, $array );
				}
			}
			
			fclose($csvFile);
			fclose($csvFile2);
			
			rename('data/vod2.csv','data/vod.csv');
			
			
			
			
			?>

	</body>
	
</html>
