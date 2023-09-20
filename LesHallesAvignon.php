<!DOCTYPE html>
<html lang="fr">

<head>
  <META NAME="Description" CONTENT="Présentation des Halles d'Avignon">
  <META NAME="Keywords" CONTENT="Avignon">
  <META NAME="Robots" CONTENT="index/noindex, follow/nofollow">
  <META NAME="Made" CONTENT="avignonprojet@gmail.com">
  <META NAME="Owns" CONTENT="Avignon">
  <META NAME="Generator" CONTENT="Nom du logiciel">
  <META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
  <META NAME="http.language" CONTENT="fr-FX">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Présentation des Halles d'Avignon</title>
</head>

<body>
    <header>
        <h1>Présentation des Halles d'Avignon </h1>
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
      <p>Ce marché couvert par une halle est reconnu pour la qualité de ses produits au sein de la cité des Papes.
Considéré comme un lieu de rencontre et de convivialité, c’est un incontournable. </p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Hallesavignon.png" alt="Halles d'Avignon">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Halles d''Avignon';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>En 1562, le dénommé Parpaille fut mis à mort comme hérétique et sa maison, sise au centre-ville d'Avignon, rasée. Sur ce terrain fut prévu d'édifier une halle couverte et des baraquements en bois pour loger les bêtes de somme apportant les provisions au marché.
Cet emplacement fut alors appelé Place Pie, du nom de Pie V, pape régnant à Rome. Ce premier édifice fut lent à construire puisque sur un plan de la ville d'Avignon, en 1618, apparaît la colonnade de cette halle en chantier.
Celle-ci fut terminée en 1624, elle comprenait, outre les boutiques, un corps de garde et une chapelle.
</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.5678841676663!2d4.807648075979679!3d43.94761587108973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb87f12bc2b5%3A0xab245fa1f8797383!2sLes%20Halles%20d&#39;Avignon!5e0!3m2!1sfr!2sfr!4v1686818277630!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="horaires" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les horaires d'ouverture des Halles d'Avignon sont :</p>
      <ul>
        <li>Mardi - Dimanche : 6h00 - 14h00</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
        <h2>Témoignages ou citations</h2>
        <blockquote>
          "Un marché atypique qui propose plein de produits de producteurs locaux. Sympa pour faire ses petits achats." - Laurent, visiteur
        </blockquote>
        <blockquote>
          "Pléthore de petits commerçants de toute nationalités proposant une farandoles de produits goumands la plupart du temps faits maison." - Jacques, visiteur
        </blockquote>
      </section>
  
      <section id="activites" class="activity-section">
        <h2>Activités et événements</h2>
        <p>Les Halles proposent une variété d'activités et d'événements tout au long de l'année, tels que :</p>
        <ul>
          <li>Démonstration culinaire avec les chefs Avignonnais</li>
          <li>Atelier photo avec le père noël</li>
          <li>Nocturne de noël</li>
          <li>Le mur végétal</li>
        </ul>
        <p>Consultez le calendrier des événements sur notre site Web pour connaître les activités prévues lors de votre visite.</p>
      </section>
    </div>

  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>

</html>
