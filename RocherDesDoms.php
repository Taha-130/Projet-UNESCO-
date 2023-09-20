<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Présentation du Rocher des Doms à Avignon</title>
</head>
<body>
    <header>
        <h1>Présentation du Rocher des Doms à Avignon</h1>
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
      <p>Le Rocher des Doms est un monument emblématique d'Avignon, connu pour son panorama exceptionnel sur la ville et le fleuve Rhône.</p>
    </section>
    <section id="image">
  <h2>Image</h2>
  <img src="images/Rocherdesdoms.png" alt="Rocher des Doms à Avignon">
</section>

<section id="description">
  <h2>Description</h2>
  <?php
  include('connexion.inc.php');
  $cnx->exec("set search_path to Avignon;");
  $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Rochers des Doms';");
  $resultat = $text->fetch(PDO::FETCH_ASSOC);
  echo $resultat['texte'];
  ?>
</section>

<section id="faits">
  <h2>Faits historiques ou culturels</h2>
  <p>Le Rocher des Doms est un lieu chargé d'histoire. Il abrite notamment le Jardin des Doms, un espace verdoyant où les habitants et les visiteurs peuvent se détendre tout en profitant de la vue panoramique.</p>
</section>

<section id="localisation">
  <h2>Localisation</h2>
  <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d91914.12172900069!2d4.7376105827906905!3d43.95282140967951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x12b5eb89338315e9%3A0x7e0b049efde9c9e3!2s2%20Mnt%20des%20Moulins%2C%2084000%20Avignon!3m2!1d43.9528428!2d4.8076504!5e0!3m2!1sfr!2sfr!4v1686768175589!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>

<section id="horaires" class="active">
  <h2>Horaires d'ouverture</h2>
  <p>Les horaires d'ouverture du Rocher des Doms à Avignon sont :</p>
  <ul>
    <li>Lundi - Dimanche : 9h00 - 18h00</li>
  </ul>
</section>

<section id="temoignages" class="testimonial-section">
    <h2>Témoignages ou citations</h2>
    <blockquote>
      "Le Rocher des Doms offre une vue imprenable sur la ville. C'est l'endroit idéal pour admirer le coucher de soleil sur Avignon." - Sophie, visiteuse
    </blockquote>
    <blockquote>
      "J'ai adoré me promener dans le Jardin des Doms et découvrir les différentes espèces végétales. Un vrai havre de paix en plein cœur de la ville." - Pierre, visiteur
    </blockquote>
  </section>

  <section id="activites" class="activity-section">
    <h2>Activités et événements</h2>
    <p>Le Rocher des Doms propose diverses activités et événements tout au long de l'année :</p>
    <ul>
      <li>Visites guidées du jardin et de ses monuments</li>
      <li>Expositions artistiques en plein air</li>
      <li>Concerts et spectacles dans l'amphithéâtre</li>
      <li>Ateliers de jardinage et de botanique</li>
    </ul>
    <p>Consultez notre site Web pour connaître les activités prévues lors de votre visite.</p>
  </section>
</div>
<footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>
</html>
