<!DOCTYPE html>
<html lang="fr">

<head>
  <META NAME="Description" CONTENT="Présentation de la Basilique Saint Pierre">
  <META NAME="Keywords" CONTENT="Avignon">
  <META NAME="Robots" CONTENT="index/noindex, follow/nofollow">
  <META NAME="Made" CONTENT="avignonprojet@gmail.com">
  <META NAME="Owns" CONTENT="Avignon">
  <META NAME="Generator" CONTENT="Nom du logiciel">
  <META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
  <META NAME="http.language" CONTENT="fr-FX">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Présentation de la Basilique Saint Pierre</title>
</head>

<body>
    <header>
        <h1>Présentation de la Basilique Saint Pierre</h1>
        <nav>
          <ul class="navbar">
          <li><a href="index.html"><span>Accueil</span></a></li>
            <li><a href="#introduction"><span>Introduction</span></a></li>
            <li><a href="#image"><span>Image</span></a></li>
            <li><a href="#description"><span>Description</span></a></li>
            <li><a href="#faits"><span>Faits culturels</span></a></li>
            <li><a href="#localisation"><span>Localisation</span></a></li>
            <li><a href="#horaires"><span>Horaires d'ouverture</span></a></li>
            <li><a href="#temoignages"><span>Témoignages</span></a></li>
            <li><a href="#activites"><span>Activités et événements</span></a></li>
          </ul>
        </nav>
      </header>
      
        
  <div class="container">
    <section id="introduction" class="active">
      <h2>Introduction</h2>
      <p>La basilique Saint-Pierre d'Avignon est une basilique gothique, Saint-Pierre a été rebâtie à partir de 1385, grâce aux dons du cardinal Pierre de Près. Restée inachevée, sa construction reprit au XVe siècle.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Basiliquestpierre.png" alt="Basilique Saint Pierre">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Basilique Saint Pierre';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>Selon la tradition, un premier édifice fut construit au viie siècle et ravagé par les sarrazins. Sur ses ruines, Foulques II entame une reconstruction (la première mention dans les textes de l'église Saint-Pierre date de cette époque).
C'est la générosité du cardinal Pierre des Prés, en 1358, qui permet la construction de bâtiments de chanoine et du cloître, aujourd'hui disparu. Le pape Innocent VI l'érige en collégiale.
Au xve siècle, la nef fut allongée et dotée de nouvelles chapelles. Le parvis date de 1486, le clocher de 1495. Les décors de la façade débutent en 1512.
Dès 1840, elle fut classée monument historique.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.4884429941585!2d4.805570975979761!3d43.949259671089486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb864d3d9503%3A0x71751c3501006fe2!2sBasilique%20Saint-Pierre!5e0!3m2!1sfr!2sfr!4v1686817911534!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="horaires" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les horaires d'ouverture de la Basilique Saint Pierre sont :</p>
      <ul>
        <li>Lundi - Samedi : 8h00 - 12h40 et 15h00 - 17h00</li>
        <li>Dimanche : 8h00 - 11h30</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
        <h2>Témoignages ou citations</h2>
        <blockquote>
          "Basilique Saint Pierre d'Avignon , Un Foisonnement d'Art Religieux Provençal !" - DanyEarth, visiteur
        </blockquote>
        <blockquote>
          "Une belle visite à faire à avignon, dans le centre ville d'avignon; Un monument d'une architecture magnifique." - Maurice, visiteur
        </blockquote>
      </section>
  
      <section id="activites" class="activity-section">
        <h2>Activités et événements</h2>
        <p>Le Palais des Papes propose une variété d'activités et d'événements tout au long de l'année, tels que :</p>
        <ul>
          <li>Messes</li>
          <li>Pélerinnages</li>
          <li>La nuit des églises du 23 juin au 3 juillet 2023</li>
          <li>Restitution des groupes de travail de la lettre pastorale</li>
        </ul>
        <p>Consultez le calendrier des événements sur notre site Web pour connaître les activités prévues lors de votre visite.</p>
      </section>
    </div>

  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>

</html>
