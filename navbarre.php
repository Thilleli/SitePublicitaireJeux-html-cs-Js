<?php 
// On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
	$page = $_SERVER['REQUEST_URI'];

?>


<div>
		<nav class="navbar-nav" id="nav" >
			<ul>
					<li <?php if(strpos($page, "index.php") !== false){echo 'class="active"';} ?>><a href="index.php">Acceuil</a></li>
					<li <?php if(strpos($page, "personnages.php") !== false){echo 'class="active"';} ?>><a href="personnages.php">Nos personnages</a></li>
					<li <?php if(strpos($page, "platforme.php") !== false){echo 'class="active"';} ?>><a href="platforme.php">Nos platformes</a></li>
					<li <?php if(strpos($page, "contact.php") !== false){echo 'class="active"';} ?>><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
</div>