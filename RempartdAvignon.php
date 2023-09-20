<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Présentation des remparts d'Avignon</title>
</head>
<body>
  <header>
    <h1>Présentation des remparts d'Avignon</h1>
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
      <p>Les remparts d'Avignon sont un ensemble impressionnant de fortifications qui entourent la vieille ville d'Avignon, située dans le sud de la France.
         Ces remparts ont joué un rôle crucial dans la protection de la ville au cours des siècles,
         et ils représentent aujourd'hui un témoignage important de l'histoire de la région.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/remparts.png" alt="Collégiale St Agricole d'Avignon">
    </section>
    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Remparts d''Avignon';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>Au cours des siècles, les remparts ont été témoins de plusieurs événements historiques majeurs. Ils ont résisté à de nombreux sièges et invasions, notamment pendant la guerre de Cent Ans et les guerres de religion. Les remparts d'Avignon ont également joué un rôle important lors du Grand Schisme d'Occident au 14e siècle, lorsque deux papes se disputaient la légitimité papale.

Aujourd'hui, les remparts d'Avignon sont un attrait touristique majeur. Ils offrent aux visiteurs une occasion unique de se plonger dans l'histoire de la ville et de profiter de superbes panoramas sur Avignon et ses environs.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.8072421044467!2d4.802741975979441!3d43.94266277108989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b592bff933d8d7%3A0x3784875b82eb0438!2sRemparts%20d&#39;Avignon!5e0!3m2!1sfr!2sfr!4v1686835850435!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les remparts sont visitablees à toutes heures du jour et de la nuit !</p>
    </section>

    <section id="temoignages" class="testimonial-section">
      <h2>Témoignages ou citations</h2>
      <blockquote>
        "D'un point de vue architecture les remparts fortifiants la ville sont magnifique et très bien décorés." - Passenger246584, visiteur
      </blockquote>
      <blockquote>
        "En parfaite état
        Les remparts en mette pleins la vue
        a noté qu'on ne peux pas y monter dessus pour faire le tour de celle-ci.
        Quelques porte d'entrée se trouve tout du long pour accéder a la vile
        Conseil: préféré longer les remparts coté fleuve bien plus bucolique que par l'intérieur" - Leexi3, passionné d'histoire
      </blockquote>
    </section>

    <section id="activites" class="activity-section">
      <h2>Activités et événements</h2>
      <p>Les remparts d'Avignon propose diverses activités et événements tout au long de l'année :</p>
      <ul>
        <li>Visites Auto guidée avec City Game Interactif</li>
        <li>Dégustation de vins</li>
        <li>visité guidé par un professionnel</li>
      </ul>
      <p>Consultez notre site Web pour connaître les activités prévues lors de votre visite.</p>
    </section>
  </div>
  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>
</html>
