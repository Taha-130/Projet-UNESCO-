<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Connexion</title>
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylesAdm.css"/>
</head>
<?php 
        include('connexion.inc.php');
        $cnx->exec("set search_path to Avignon;");
?>
<body>
<header>
    <nav>
    <h1>Choix du Monument</h1>
    <ul>
      <li><a href = "index.html">Accueil</a></li>
    </ul>
</nav>
</header>


<fieldset>
<legend><h1>Monuments</h1></legend>
<form action="modificationTexte.php" method="post">
<?php
$requete = $cnx->query("SELECT nom FROM texteMonuments;");

while ($monument = $requete->fetch(PDO::FETCH_ASSOC)) {
    $nomMonument = $monument['nom'];
    echo '<label><input type="radio" name="monument" value="' . $nomMonument . '">' . $nomMonument . '</label><br>';
}
?>
<input type="reset" name="reset" value="Effacer" /> 
<input type="submit" name="submit" value="Valider" />
</form>
</fieldset>

</body>
</html>