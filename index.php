<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Formualire CHAP</title>
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
  <div class="wrapper">  
    <div id="notreformulaire">
    <form name="form1" id="formulairedecontact" method="post" action="envoyer.php">
    <h1>Formualire CHAP</h1>
	<p>Formulaire d'enregistrement des chants (HTML5 rersponsive)</p>	
        <label>
		<span>Titre*:</span>
        <input type="text" placeholder="Titre du chant" name="titre" id="titre" required autofocus>
        </label>
        
        <label>
		<span>Type1 (Partie de messe)*:</span>    
		<select type="text" placeholder="Partie de messe" name="type1" id="type1" required>
		  <option value="Entrée">Entrée</option>
		  <option value="Kyrie">Kyrie</option>
		  <option value="Gloria">Gloria</option>
		  <option value="Psaume">Psaume</option>
		  <option value="Acclamation">Acclamation</option>
		  <option value="PU">PU</option>
		  <option value="Offertoire">Offertoire</option>
		  <option value="Sanctus">Sanctus</option>
		  <option value="Agnus Dei">Agnus Dei</option>
		  <option value="Communion">Communion</option>
		  <option value="Action de Grace">Action de Grace</option>
		  <option value="Sortie">Sortie</option>
		</select>
        </label>
        
        <label>
		<span>Type2 (Marie, Gospel, ...):</span>   
		<select type="text" placeholder="Chants à Marie, Gospel, ..." name="type2" id="type2" />
		  <option value="...">...</option>
		  <option value="Chant à Marie">Chant à Marie</option>
		  <option value="Gospel">Gospel</option>
		  <option value="Concert">Concert</option>	
		</select>	
        </label>
	  	
  
  		<label>
		<span>Date d'apprentissage*:</span>
        <input type="date" placeholder="AAAA/MM/JJ" name="date_app" id="date_app" required>
      	</label>
  

		
		<input class="sendButton" type="submit" name="Submit" value="Envoyer">
			
	</form>
	</div>
   </div>

</body>
</html>