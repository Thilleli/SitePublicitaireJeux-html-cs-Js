<!DOCTYPE html>
<html>
<head>
	<title>Platform de jeu</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<header></header>
	<div><?php include('navbarre.php'); ?></div>
	<div class="container" align="center">
		<br>
		<img src="images/crsed.png">
		<br>
		<h1>SEASON DE RÉANCARNATION</h1>
		<h2>Platformes de jeu</h2>
        <p class="txt">CRSED est disponible sur différentes platformes:</p>
   		<br>
        
        <input type="button"  id ="button" value="Jouer sur STEAM"  onclick="window.location.href = 'https://store.steampowered.com/app/884660/CRSED_FOAD/';"/>
        <input type="button"  id ="button"  value="Jouer sur EPIC" onclick="window.location.href = 'https://www.epicgames.com/store/fr/product/crsed-f-o-a-d/home';"/>
        <input type="button"  id ="button"  value="Jouer sur PS4" onclick="window.location.href = 'https://store.playstation.com/fr-fr/product/EP4432-CUSA15169_00-CUISINEROYALE000';"/>
        <input type="button"  id ="button"  value="Jouer sur XBOX" onclick="window.location.href = 'https://www.microsoft.com/fr-fr/p/cuisine-royale-game-preview/c3nnlthw9t9w?rtc=1&activetab=pivot:overviewtab';"/>
        <br>
        <p class="txt"> Bientôt disponible sur: <br><img src="images/ps5.jpg" width="125px"> <br><img src="images/xbox.png" width="125px"></p>
        
        
    </div>

</body>
</html>