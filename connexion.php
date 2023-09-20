<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Connexion</title>
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylesAdm.css"/>
</head>

<body>
<header>
	<nav>
    <h1>Connexion Admins</h1>
	<ul>
      <li><a href = "index.html">Accueil</a></li>
    </ul>
</nav>
</header>
<fieldset>
<legend><h1>Connectez-vous</h1></legend>
<form action="connexion.php" method="post">
	<table>
		<tr><td><label for="pseudo">Pseudo</label></td><td><input type="text" name="pseudo" /></td></tr>
		<tr><td><label for="mdp">Mot de passe</label></td><td><input type="password" name="mdp" /></td></tr>
	</table>
	<br />
	<input type="reset" name="reset" value="Effacer" /> 
	<input type="submit" name="submit" value="Valider" />
</form>
</fieldset>
<?php
include('connexion.inc.php');
$cnx->exec("set search_path to Avignon;");

if (isset($_POST["pseudo"], $_POST["mdp"])) {
    $compte = $cnx->query("SELECT * FROM comptesAdmin;");
    while ($ligne = $compte->fetch(PDO::FETCH_OBJ)) {// un par un   
        if ($ligne->pseudo == $_POST["pseudo"] && $ligne->motdepasse == $_POST["mdp"]) 
            header('Location: accueilAdmin.php'); 
    }
}
?>
</body>
</html>

