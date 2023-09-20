<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Présentation du Palais des Papes à Avignon</title>
</head>

<body>
    <header>
        <h1>Présentation du Palais des Papes à Avignon</h1>
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
      <p>Le Palais des Papes à Avignon, une forteresse médiévale emblématique, témoigne de la grandeur et du pouvoir de l'Église catholique. Avec son architecture imposante et son histoire fascinante, il attire les visiteurs du monde entier, les transportant dans une époque révolue de puissance et de spiritualité.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Palaisdespapes.png" alt="Palais des Papes à Avignon">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Palais des Papes';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>Le Palais des Papes à Avignon est un monument d'importance historique majeure. Voici trois faits intéressants à son sujet :

Le palais est le plus grand palais gothique au monde et est inscrit au patrimoine mondial de l'UNESCO. Construit au XIVe siècle, il fut la résidence officielle des papes pendant environ 70 ans.

À l'intérieur, les visiteurs peuvent admirer des salles somptueusement décorées et des fresques murales qui racontent des scènes bibliques, offrant un aperçu fascinant de l'art et de la culture de l'époque.

Aujourd'hui, le Palais des Papes est un site touristique populaire, attirant des visiteurs du monde entier qui sont fascinés par son architecture imposante et son histoire unique.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.411482215707!2d4.8076971!3d43.9508521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb868edbf86f%3A0x778ce565c188d2cb!2sPalais%20des%20Papes!5e0!3m2!1sfr!2sfr!4v1686210854639!5m2!1sfr!2sfr" width="600" height="450" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="horaires" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les horaires d'ouverture du Palais des Papes à Avignon sont :</p>
      <ul>
        <li>Lundi - Dimanche : 9h00 - 18h00</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
        <h2>Témoignages ou citations</h2>
        <blockquote>
          "Le Palais des Papes est vraiment époustouflant. Je suis resté sans voix devant son architecture grandiose et son histoire fascinante." - Jeanne, visiteuse
        </blockquote>
        <blockquote>
          "La visite du Palais des Papes a été une expérience inoubliable. J'ai été transporté dans une autre époque et j'ai pu apprécier toute sa grandeur." - Thomas, visiteur
        </blockquote>
      </section>
  
      <section id="activites" class="activity-section">
        <h2>Activités et événements</h2>
        <p>Le Palais des Papes propose une variété d'activités et d'événements tout au long de l'année, tels que :</p>
        <ul>
          <li>Expositions d'art et d'histoire</li>
          <li>Concerts de musique classique</li>
          <li>Spectacles de lumière</li>
          <li>Visites guidées thématiques</li>
        </ul>
        <p>Consultez le calendrier des événements sur notre site Web pour connaître les activités prévues lors de votre visite.</p>
      </section>
    </div>

  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>

</html>
