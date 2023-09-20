<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Présentation de la Collégiale St Agricole d'Avignon</title>
</head>
<body>
  <header>
    <h1>Présentation de la Collégiale St Agricole d'Avignon</h1>
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
      <p>La Collégiale St Agricole est un monument incontournable d'Avignon, offrant aux visiteurs un exemple exceptionnel de l'architecture gothique en Provence.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Collegialeavignon.png" alt="Collégiale St Agricole d'Avignon">
    </section>
    
	<section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Collégiale Saint-Agricol';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>La Collégiale St Agricole abrite un riche patrimoine culturel, témoignant de l'importance de l'art religieux dans l'histoire d'Avignon.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.502112082012!2d4.80194267577752!3d43.94897683325133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb85e9761b95%3A0xa5d999614abeabca!2s%C3%89glise%20Saint-Agricol!5e0!3m2!1sfr!2sfr!4v1686769941711!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les horaires d'ouverture de la Collégiale St Agricole à Avignon sont :</p>
      <ul>
        <li>Lundi - Dimanche : 9h00 - 18h00</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
      <h2>Témoignages ou citations</h2>
      <blockquote>
        "La Collégiale St Agricole est un joyau architectural. Un lieu empreint de spiritualité et de beauté." - Sophie, visiteuse
      </blockquote>
      <blockquote>
        "J'ai été émerveillé par l'atmosphère paisible qui règne dans la Collégiale St Agricole. Une véritable expérience spirituelle." - Pierre, visiteur
      </blockquote>
    </section>

    <section id="activites" class="activity-section">
      <h2>Activités et événements</h2>
      <p>La Collégiale St Agricole propose diverses activités et événements tout au long de l'année :</p>
      <ul>
        <li>Visites guidées pour découvrir l'histoire et l'architecture de la collégiale</li>
        <li>Concerts de musique sacrée</li>
        <li>Expositions d'art religieux</li>
        <li>Célébrations religieuses et messes</li>
      </ul>
      <p>Consultez notre site Web pour connaître les activités prévues lors de votre visite.</p>
    </section>
  </div>
  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>
</html>
