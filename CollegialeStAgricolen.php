<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Presentation of the Collegiate Church of St. Agricole in Avignon</title>
</head>
<body>
  <header>
    <h1>Presentation of the Collegiate Church of St. Agricole in Avignon</h1>
    <nav>
      <ul class="navbar">
        <li><a href="indexanglais.html"><span>Home</span></a></li>
        <li><a href="#introduction"><span>Introduction</span></a></li>
        <li><a href="#image"><span>Image</span></a></li>
        <li><a href="#description"><span>Description</span></a></li>
        <li><a href="#faits"><span>Cultural Facts</span></a></li>
        <li><a href="#localisation"><span>Location</span></a></li>
        <li><a href="#horaires"><span>Opening Hours</span></a></li>
        <li><a href="#temoignages"><span>Testimonials</span></a></li>
        <li><a href="#activites"><span>Activities and Events</span></a></li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <section id="introduction" class="active">
      <h2>Introduction</h2>
      <p>The Collegiate Church of St. Agricole is a must-visit monument in Avignon, showcasing an exceptional example of Gothic architecture in Provence.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Collegialeavignon.png" alt="Collegiate Church of St. Agricole in Avignon">
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
	
    <section id="faits">
  <h2>Historical and Cultural Facts</h2>
  <p>The Collegiate Church of St. Agricole houses a rich cultural heritage, bearing witness to the significance of religious art in Avignon's history.</p>
</section>

<section id="localisation">
  <h2>Location</h2>
  <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.502112082012!2d4.80194267577752!3d43.94897683325133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb85e9761b95%3A0xa5d999614abeabca!2s%C3%89glise%20Saint-Agricol!5e0!3m2!1sfr!2sfr!4v1686769941711!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section id="opening-hours" class="active">
  <h2>Opening Hours</h2>
  <p>The opening hours of the Collegiate Church of St. Agricole in Avignon are:</p>
  <ul>
    <li>Monday - Sunday: 9:00 AM - 6:00 PM</li>
  </ul>
</section>

<section id="temoignages" class="testimonial-section">
  <h2>Testimonials</h2>
  <blockquote>
    "The Collegiate Church of St. Agricole is an architectural gem. A place filled with spirituality and beauty." - Sophie, visitor
  </blockquote>
  <blockquote>
    "I was amazed by the peaceful atmosphere in the Collegiate Church of St. Agricole. A truly spiritual experience." - Pierre, visitor
  </blockquote>
</section>

<section id="activites" class="activity-section">
  <h2>Activities and Events</h2>
  <p>The Collegiate Church of St. Agricole offers various activities and events throughout the year:</p>
  <ul>
    <li>Guided tours to discover the history and architecture of the collegiate church</li>
    <li>Sacred music concerts</li>
    <li>Exhibitions of religious art</li>
    <li>Religious celebrations and masses</li>
  </ul>
  <p>Visit our website to find out about the scheduled activities during your visit.</p>
</section>
</div>
  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>