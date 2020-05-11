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
		
                $nomFilm = $_POST['nomfilm'];
                $anneeFilm = $_POST['anneefilm'];
                $prod = $_POST['prod'];

                $file = fopen("/var/www/html/vod/data/vod.csv", "a");
                fwrite($file,$nomFilm);
                fwrite($file,":");
                fwrite($file,$anneeFilm);
                fwrite($file,":");
                fwrite($file,$prod."\n");
                fclose($file);
				
			?>

	</body>
	
</html>
