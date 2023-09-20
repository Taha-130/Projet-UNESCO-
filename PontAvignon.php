<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Présentation du Pont d'Avignon</title>
</head>

<body>
    <header>
        <h1>Présentation du Pont d'Avignon</h1>
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
      <p>Le Pont d'Avignon, connu sous le nom de Pont Saint-Bénézet, est un symbole emblématique de la ville d'Avignon en France. Érigé au XIIe siècle, ce pont historique offre une vue pittoresque sur le Rhône et incarne l'histoire et le charme de la région. Bien qu'aujourd'hui il ne subsiste que partiellement, le Pont d'Avignon reste un témoignage poignant du passé glorieux de la ville, captivant les visiteurs avec son allure évocatrice et son lien avec une chanson célèbre qui a traversé les siècles.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Pontavignon.png" alt="Pont d'Avignon">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Pont d''Avignon';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>Le Pont d'Avignon, également connu sous le nom de Pont Saint-Bénézet, possède une histoire riche et culturellement significative. Construit au XIIe siècle, il était un important passage commercial sur le Rhône, favorisant les échanges entre Avignon et les régions environnantes. Le pont tire son nom de Saint Bénézet, un jeune berger à qui l'on attribue la vision divine l'incitant à le construire. Malheureusement, au fil du temps, les crues du Rhône ont causé des dommages considérables et seules quatre arches du pont d'origine subsistent aujourd'hui. Malgré cela, le Pont d'Avignon demeure un symbole emblématique de la ville et attire les visiteurs curieux de découvrir son passé fascinant et son charme pittoresque.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.259428667669!2d4.802163975980025!3d43.95399817108948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb825fa84051%3A0x7b72f2b877bc1976!2sPont%20Saint-Benezet%20(Le%20Pont%20d&#39;Avignon)!5e0!3m2!1sfr!2sfr!4v1686673634220!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="horaires" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les horaires d'ouverture du Pont d'Avignon sont :</p>
      <ul>
        <li>24h/24h 7j/7j</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
        <h2>Témoignages ou citations</h2>
        <blockquote>
          Nicolas Renaud : "La majesté du Pont d'Avignon m'a émerveillé. En marchant sur ses quelques arches subsistantes, j'ai ressenti la grandeur de l'architecture médiévale et imaginé les foules qui autrefois le traversaient. C'est une expérience qui m'a profondément connecté à l'histoire et à l'âme de cette belle ville."
        </blockquote>
        <blockquote>
          Isabella Martinelli : "Le Pont d'Avignon est un lieu emblématique, imprégné de légendes et de mystères. En le contemplant, j'ai été frappée par la puissance des éléments naturels qui ont façonné sa destinée. Les crues du Rhône ont effacé une grande partie du pont, mais cela n'a fait qu'ajouter à son charme énigmatique, en faisant un incontournable pour tout amateur d'histoire et de beauté architecturale."
        </blockquote>
      </section>
  
      <section id="activites" class="activity-section">
        <h2>Activités et événements</h2>
        <p>Le Pont d'Avignon est un lieu emblématique qui accueille diverses activités et événements. Voici quelques exemples :</p>
        <ul>
          <li>Visites guidées</li>
          <li>Festivals et spectacles</li>
          <li>Marchés d'artisans</li>
        </ul>
        <p>Consultez le calendrier des événements sur notre site Web pour connaître les activités prévues lors de votre visite.</p>
      </section>
    </div>

  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>

</html>
