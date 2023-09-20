<?php session_start(); ?>
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

        function doublerQuotes($chaine) {
            return str_replace("'", "''", $chaine);
        }
        
?>
<body>
<header>
    <h1>Modification du texte</h1>
</header>

<?php
// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'],$_POST['monument'])) {
    // Récupérer la valeur sélectionnée
    $choixMonument = $_POST['monument'];
    $_SESSION['monum'] = $_POST['monument'];
    ?>
    <div style="display: flex; align-items: flex-start;">
    <form action="modificationTexte.php" method="post">
    <label for="txt">Texte Français</label>
    <br>
    <textarea id="txt" name="txt" rows="10" cols="110"><?php
    // Code pour récupérer et afficher le texte français
        $choixMonumentDouble = doublerQuotes($choixMonument);
        $texteMonument = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = '$choixMonumentDouble';");
        $resultat = $texteMonument->fetch(PDO::FETCH_ASSOC);
        echo $resultat['texte'];
    ?></textarea>
        <br>
    <label for="txt2">Texte Anglais</label>
    <br>
    <textarea id="txt2" name="txt2" rows="10" cols="110"><?php
        // Code pour récupérer et afficher le texte anglais
        $choixMonumentDouble = doublerQuotes($choixMonument);
        $texteMonument = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = '$choixMonumentDouble';");
        $resultat = $texteMonument->fetch(PDO::FETCH_ASSOC);
        echo $resultat['texteen'];
    ?></textarea>
    <br>
    <input type="submit" name="submit" value="Envoyer">
</form>
<a class="custom-button" href="https://www.deepl.com/translator" target="_blank">Traducteur en ligne</a>
</div>
<?php 
}
else if(isset($_POST['submit'],$_POST['txt'],$_POST['txt2']))  {
    $choixMonumentDouble = doublerQuotes($_SESSION['monum']);
    $txt = doublerQuotes($_POST['txt']);
    $txt2 = doublerQuotes($_POST['txt2']);
    $cnx->exec("UPDATE texteMonuments SET texte = '$txt', texteen = '$txt2' WHERE nom = '$choixMonumentDouble';");
    header("location: accueilAdmin.php");
}
?>
</body>
</html>
