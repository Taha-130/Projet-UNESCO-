<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Introduction to the Rocher des Doms in Avignon</title>
</head>
<body>
  <header>
    <h1>Introduction to the Rocher des Doms in Avignon</h1>
    <nav>
      <ul class="navbar">
        <li><a href="indexanglais.html"><span>Home</span></a></li>
        <li><a href="#introduction"><span>Introduction</span></a></li>
        <li><a href="#image"><span>Image</span></a></li>
        <li><a href="#description"><span>Description</span></a></li>
        <li><a href="#facts"><span>Cultural Facts</span></a></li>
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
      <p>The Rocher des Doms is an iconic monument in Avignon, renowned for its exceptional panorama of the city and the Rhône River.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Rocherdesdoms.png" alt="Rocher des Doms in Avignon">
    </section>
    <section id="description">
  <h2>Description</h2>
  <?php
  include('connexion.inc.php');
  $cnx->exec("set search_path to Avignon;");
  $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Rochers des Doms';");
  $resultat = $text->fetch(PDO::FETCH_ASSOC);
  echo $resultat['texteen'];
  ?>
</section>

<section id="facts">
  <h2>Historical and Cultural Facts</h2>
  <p>The Rocher des Doms is a place steeped in history. It houses the Jardin des Doms, a green space where residents and visitors can relax while enjoying the panoramic view.</p>
</section>

<section id="location">
  <h2>Location</h2>
  <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d91914.12172900069!2d4.7376105827906905!3d43.95282140967951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x12b5eb89338315e9%3A0x7e0b049efde9c9e3!2s2%20Mnt%20des%20Moulins%2C%2084000%20Avignon!3m2!1d43.9528428!2d4.8076504!5e0!3m2!1sfr!2sfr!4v1686768175589!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section id="opening-hours" class="active">
  <h2>Opening Hours</h2>
  <p>The opening hours of the Rocher des Doms in Avignon are:</p>
  <ul>
    <li>Monday - Sunday: 9:00 AM - 6:00 PM</li>
  </ul>
</section>

<section id="testimonials" class="testimonial-section">
  <h2>Testimonials or Quotes</h2>
  <blockquote>
    "The Rocher des Doms offers an amazing view of the city. It's the perfect place to admire the sunset over Avignon." - Sophie, visitor
  </blockquote>
  <blockquote>
    "I loved walking through the Jardin des Doms and discovering the different plant species. A true haven of peace in the heart of the city." - Pierre, visitor
  </blockquote>
</section>

<section id="activities" class="activity-section">
  <h2>Activities and Events</h2>
  <p>The Rocher des Doms offers various activities and events throughout the year:</p>
  <ul>
    <li>Guided tours of the garden and its monuments</li>
    <li>Outdoor art exhibitions</li>
    <li>Concerts and performances in the amphitheater</li>
    <li>Gardening and botany workshops</li>
  </ul>
  <p>Visit our website to learn about the activities planned during your visit.</p>
</section>
</div>
  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>