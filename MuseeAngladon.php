<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Présentation du Musée Angladon à Avignon</title>
</head>
<body>
  <header>
    <h1>Présentation du Musée Angladon à Avignon</h1>
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
      <p>Le Musée Angladon est un lieu culturel incontournable à Avignon, offrant aux visiteurs une collection d'œuvres d'art exceptionnelle.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Museeangladon.png" alt="Musée Angladon à Avignon">
    </section>
    <section id="description">
  <h2>Description</h2>
  <?php
  include('connexion.inc.php');
  $cnx->exec("set search_path to Avignon;");
  $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Musée Angladon';");
  $resultat = $text->fetch(PDO::FETCH_ASSOC);
  echo $resultat['texte'];
  ?>
</section>

<section id="faits">
  <h2>Faits historiques ou culturels</h2>
  <p>Le Musée Angladon abrite une collection remarquable d'œuvres d'art, comprenant des peintures, des sculptures et des objets d'artisanat.</p>
</section>

<section id="localisation">
  <h2>Localisation</h2>
   <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.6456768924168!2d4.804395775777359!3d43.94600613344454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb88ea2947dd%3A0xc2a91df9eb561dab!2sMus%C3%A9e%20Angladon%20-%20Collection%20Jacques%20Doucet!5e0!3m2!1sfr!2sfr!4v1686769568830!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section id="opening-hours" class="active">
  <h2>Horaires d'ouverture</h2>
  <p>Les horaires d'ouverture du Musée Angladon à Avignon sont :</p>
  <ul>
    <li>Lundi - Dimanche : 9h00 - 18h00</li>
  </ul>
</section>

<section id="testimonials" class="testimonial-section">
  <h2>Témoignages ou citations</h2>
  <blockquote>
    "Le Musée Angladon présente des chefs-d'œuvre artistiques incroyables. Une expérience inoubliable pour les amateurs d'art." - Sophie, visiteuse
  </blockquote>
  <blockquote>
    "J'ai été fasciné par la diversité des œuvres exposées au Musée Angladon. Un véritable trésor culturel à découvrir." - Pierre, visiteur
  </blockquote>
</section>

<section id="activities" class="activity-section">
  <h2>Activités et événements</h2>
  <p>Le Musée Angladon propose diverses activités et événements tout au long de l'année :</p>
  <ul>
    <li>Visites guidées des collections permanentes</li>
    <li>Expositions temporaires d'artistes contemporains</li>
    <li>Conférences et ateliers d'art</li>
    <li>Concerts et performances artistiques</li>
  </ul>
  <p>Consultez notre site Web pour connaître les activités prévues lors de votre visite.</p>
</section>
</div>
  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>
</html>