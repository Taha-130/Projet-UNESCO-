<!DOCTYPE html>
<html lang="fr">

<head>
  <META NAME="Description" CONTENT="Présentation du Musée Calvet">
  <META NAME="Keywords" CONTENT="Avignon">
  <META NAME="Robots" CONTENT="index/noindex, follow/nofollow">
  <META NAME="Made" CONTENT="avignonprojet@gmail.com">
  <META NAME="Owns" CONTENT="Avignon">
  <META NAME="Generator" CONTENT="Nom du logiciel">
  <META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
  <META NAME="http.language" CONTENT="fr-FX">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Présentation du Musée Calvet</title>
</head>

<body>
    <header>
        <h1>Présentation du Musée Calvet</h1>
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
      <p>Dans un bel hôtel particulier du XVIIIe siècle, se tient la riche collection de Beaux-Arts, peintures et sculptures du XVe au XXe siècle du Musée Calvet qui était trop à l'étroit dans l'ancien couvent Saint-Martial.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Museecalvet.png" alt="Musée Calvet">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Musée Calvet';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>En 1742, le premier consul d'Avignon, Joseph-Ignace de Villeneuve-Martignan, qui avait décidé de de transformer l'ancien logis de sa famille, engage l'architecte Jean-Baptiste Franque et son fils François pour bâtir une demeure qui est encore le plus bel hôtel seigneurial d'Avignon. 
En 1754, Il est ruiné, il est donc contraint d'interrompre les travaux, le bâtiment passera ensuite de mains en mains et sera transformé après la Révolution et, par ses propriétaires successifs.
En 1833, la ville d'Avignon l'acquiert alors pour y loger le musée Calvet trop à l'étroit dans l'ancien couvent Saint-Martial.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.588993336052!2d4.800880175979659!3d43.94717907108973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb8f718724d1%3A0x5a9a4cee7002dbc3!2sMus%C3%A9e%20Calvet!5e0!3m2!1sfr!2sfr!4v1686818530779!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    
    <section id="horaires" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les horaires d'ouverture du Musée Calvet sont :</p>
      <ul>
        <li>Lundi - Dimanche excepté le Mardi : 10h00 - 13h00 et 14h00 - 17h00</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
        <h2>Témoignages ou citations</h2>
        <blockquote>
          "Un des plus beaux musées d'Avignon" - Camille, visiteuse
        </blockquote>
        <blockquote>
          "Exceptionnel musée qui renferme bien des trésors uniques ..." - Ben, visiteur
        </blockquote>
      </section>
  
      <section id="activites" class="activity-section">
        <h2>Activités et événements</h2>
        <p>Le Musée Calvet propose une variété d'activités et d'événements tout au long de l'année, tels que :</p>
        <ul>
          <li>Atelier en famille</li>
          <li>Expositions </li>
          <li>Visites</li>
        </ul>
        <p>Consultez le calendrier des événements sur notre site Web pour connaître les activités prévues lors de votre visite.</p>
      </section>
    </div>

  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>

</html>
