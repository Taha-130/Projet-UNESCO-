<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="Description" content="Presentation of the Basilica of Saint Pierre">
  <meta name="Keywords" content="Avignon">
  <meta name="Robots" content="index/noindex, follow/nofollow">
  <meta name="Made" content="avignonprojet@gmail.com">
  <meta name="Owns" content="Avignon">
  <meta name="Generator" content="Software Name">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="http.language" content="en-US">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Presentation of the Basilica of Saint Pierre</title>
</head>
<body>
  <header>
    <h1>Presentation of the Basilica of Saint Pierre</h1>
    <nav>
      <ul class="navbar">
        <li><a href="indexanglais.html"><span>Home</span></a></li>
        <li><a href="#introduction"><span>Introduction</span></a></li>
        <li><a href="#image"><span>Image</span></a></li>
        <li><a href="#description"><span>Description</span></a></li>
        <li><a href="#historical-facts"><span>Historical Facts</span></a></li>
        <li><a href="#location"><span>Location</span></a></li>
        <li><a href="#opening-hours"><span>Opening Hours</span></a></li>
        <li><a href="#testimonials"><span>Testimonials</span></a></li>
        <li><a href="#activities"><span>Activities and Events</span></a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <section id="introduction" class="active">
      <h2>Introduction</h2>
      <p>The Basilica of Saint Pierre in Avignon is a Gothic basilica. Saint Pierre was rebuilt starting from 1385, thanks to the donations of Cardinal Pierre de Près. Remaining unfinished, its construction resumed in the 15th century.</p>
    </section>
<section id="image">
  <h2>Image</h2>
   <img src="images/Basiliquestpierre.png" alt="Basilica of Saint Pierre">
</section>

<section id="description">
  <h2>Description</h2>
  <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Basilique Saint Pierre';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
</section>

<section id="historical-facts">
  <h2>Historical or Cultural Facts</h2>
  <p>According to tradition, a first building was constructed in the 7th century and ravaged by the Saracens. On its ruins, Foulques II began a reconstruction (the first mention of the church of Saint Pierre dates back to this period).
  The generosity of Cardinal Pierre des Prés in 1358 allowed the construction of canons' buildings and the cloister, now disappeared. Pope Innocent VI elevated it to a collegiate church.
  In the 15th century, the nave was lengthened and equipped with new chapels. The forecourt dates from 1486, and the bell tower from 1495. The decoration of the facade began in 1512.
  In 1840, it was classified as a historical monument.</p>
</section>

<section id="location">
  <h2>Location</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.4884429941585!2d4.805570975979761!3d43.949259671089486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb864d3d9503%3A0x71751c3501006fe2!2sBasilique%20Saint-Pierre!5e0!3m2!1sfr!2sfr!4v1686817911534!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section id="opening-hours" class="active">
  <h2>Opening Hours</h2>
  <p>The opening hours of the Basilica of Saint Pierre in Avignon are:</p>
  <ul>
    <li>Monday - Saturday: 8:00 AM - 12:40 PM and 3:00 PM - 5:00 PM</li>
    <li>Sunday: 8:00 AM - 11:30 AM</li>
  </ul>
</section>

<section id="testimonials" class="testimonial-section">
  <h2>Testimonials or Quotes</h2>
  <blockquote>
    "Basilica of Saint Pierre in Avignon, A Wealth of Provençal Religious Art!" - DanyEarth, visitor
  </blockquote>
  <blockquote>
    "A beautiful visit to make in Avignon, in the city center of Avignon; A monument with magnificent architecture." - Maurice, visitor
  </blockquote>
</section>

<section id="activities" class="activity-section">
  <h2>Activities and Events</h2>
  <p>The Basilica of Saint Pierre offers a variety of activities and events throughout the year, such as:</p>
  <ul>
    <li>Masses</li>
    <li>Pilgrimages</li>
    <li>The Night of Churches from June 23 to July 3, 2023</li>
    <li>Restitution of working groups of the pastoral letter</li>
  </ul>
  <p>Check the event calendar on our website to know the scheduled activities during your visit.</p>
</section>
  </div>
  <footer>
    <p>Presentation realized in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>