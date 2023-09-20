<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Présentation de Notre-Dame des Doms</title>
</head>
<body>
  <header>
    <h1>Présentation de la cathédrale Notre-Dame des Doms</h1>
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
      <p>La cathédrale Notre-Dame des Doms est un magnifique édifice religieux situé au cœur de la ville d'Avignon. Elle est considérée comme l'un des principaux monuments historiques de la région et attire de nombreux visiteurs chaque année.
         La cathédrale est un symbole de l'architecture gothique provençale et joue un rôle important dans la vie spirituelle et culturelle de la ville.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Notredame.png" alt="Notre Dame">
    </section>
    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Notre Dame des Doms';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>La cathédrale Notre-Dame des Doms a une riche histoire culturelle et historique. 
        Elle a été construite au XIIe siècle et est devenue le siège de l'archevêque d'Avignon. Pendant le XIVe siècle, Avignon a été le siège de la papauté et la cathédrale a joué un rôle central dans la vie religieuse de la ville.
         De nombreux papes ont résidé à Avignon pendant cette période, ce qui a contribué au rayonnement culturel et spirituel de la cathédrale.
        En plus de sa signification religieuse, la cathédrale Notre-Dame des Doms est également un symbole de l'identité culturelle d'Avignon. Elle a été témoin de nombreux événements historiques et a été le théâtre de cérémonies importantes au fil des siècles. Aujourd'hui, elle continue d'être un lieu de culte actif et un site touristique majeur qui attire les amateurs d'architecture, d'histoire et de spiritualité.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.374839651346!2d4.804906175979903!3d43.951610271089535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb86d90a23f1%3A0xc3d249199481820d!2sNotre%20Dame%20des%20Doms%20d&#39;Avignon!5e0!3m2!1sfr!2sfr!4v1686835380472!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Horaires d'ouverture</h2>
      <ul>
        <li> du Lundi au Samedi : 6h30 - 12h00, 14h30 - 17h30</li>
        <li> Dimanche : 9h00 - 12h00, 14h30 - 17h30</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
      <h2>Avis</h2>
      <blockquote>
        "C'est un très bel édifice à la façade joliment travaillée. L'intérieur renferme de magnifiques tableaux et de très beaux vitraux.
         J'ai tout particulièrement apprécié la coupole représentant des anges de couleurs différentes au-dessus de l'autel dans l'allée centrale ainsi que la Chapelle du Saint-Sacrement 
         avec ses peintures multicolores au plafond représentant des scènes bibliques et ses colonnes ouvragées. Je recommande la visite." - Laure
      </blockquote>
      <blockquote>
          "Les Avignonnais l'appellent La Métropole. Cest un lieu à la fois religieux, chargé d'histoire, et culturel ouvert à la musique. On y trouve de très belles pièces d'art religieux." - Papaline, touriste
		  </blockquote>
    </section>

    <section id="activites" class="activity-section">
      <h2>Activités et événements</h2>
      <ul>
        <li>Visite libre et gratuite. (ne pas déranger pendant les offices religieux).</li> 
      </ul>
      <p>Consultez notre site Web pour connaître les activités prévues lors de votre visite.</p>
    </section>
  </div>
  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>
</html>
