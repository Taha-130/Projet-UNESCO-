<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Présentation du muséee du Petit Palais</title>
</head>
<body>
  <header>
    <h1>Présentation du muséee du Petit Palais</h1>
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
      <p>Cet établissement prestigieux abrite une collection d'art exceptionnelle et offre aux visiteurs une expérience unique à travers l'histoire et la culture.
         Que vous soyez un passionné d'art ou simplement curieux, le musée du Petit Palais est un incontournable lors de votre visite à Avignon.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Museepetitpalais.png" alt="Collégiale St Agricole d'Avignon">
    </section>
    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Musée du Petit Palais';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>Le musée du Petit Palais est étroitement lié à l'histoire culturelle d'Avignon. 
        Il témoigne de la période faste de la ville lorsqu'elle était le siège des papes au XIVe siècle. À cette époque, Avignon était un centre majeur de l'art et de la culture en Europe. Le musée abrite de nombreuses œuvres d'art religieux qui reflètent la piété et l'influence de l'Église à cette époque.
        De plus, la collection du musée est le résultat de donations et d'acquisitions réalisées au fil des siècles. Elle témoigne de la passion des collectionneurs et de l'engagement des autorités locales à préserver et promouvoir le patrimoine culturel de la région.
        Ainsi, le musée du Petit Palais joue un rôle essentiel dans l'éducation artistique et l'enrichissement culturel de la communauté locale et des visiteurs.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5744.914414946831!2d4.799807395229337!3d43.94990598435817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb86e7e12b61%3A0x3bd27f9004677eb5!2sMus%C3%A9e%20Du%20Petit%20Palais!5e0!3m2!1sfr!2sfr!4v1686834535997!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Horaires d'ouverture</h2>
      <ul>
        <li> du Mercredi au Lundi : 10h00 - 13h00, 14h00 - 18h00</li>
        <li> Mardi : Fermé</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
      <h2>Avis</h2>
      <blockquote>
        "En WE à Avignon, nous avons découvert ce musée avec délectation.
En premier, il est gratuit (comme les musées municipaux d'Avignon). Ensuite ses collections sont de très grande qualité!
Nous avons ainsi découvert qu'il possédait une œuvre de Botticelli (hélas prêtée à cette époque) et plusieurs attribuées à l'atelier du Maître. 
Les peintures sur bois présentées en nombre sont de grandes qualité." - Dominique, mère de famille
      </blockquote>
      <blockquote>
          "Le petit palais a l'avantage de mixer la visite d'un beau bâtiment et d'une collection sur des peintres italiens de la Renaissance. Visite gratuite en plus." - Chrisair, touriste
	</blockquote>
    </section>

    <section id="activites" class="activity-section">
      <h2>Activités et événements</h2>
      <p>Le musée du Petit Palais propose diverses activités et événements tout au long de l'année :</p>
      <ul>
        <li>Visite guidée - chaque dernier dimanche du mois à 10h30 - sauf les jours fériés. <br> Tarifs : 5 € / 3 €</li>
        <li>Restaurant de produits locaux et cuisine raffinée, le tout sur l'un des jardins les plus secret d'Avignon !</li>
        <li>Visite libre, environ 1h30.</li>
      </ul>
      <p>Consultez notre site Web pour connaître les activités prévues lors de votre visite.</p>
    </section>
  </div>
  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>
</html>
