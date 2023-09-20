<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Presentation of the Angladon Museum in Avignon</title>
</head>
<body>
  <header>
    <h1>Presentation of the Angladon Museum in Avignon</h1>
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
      <p>The Angladon Museum is a must-visit cultural venue in Avignon, offering visitors an exceptional collection of artworks.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Museeangladon.png" alt="Angladon Museum in Avignon">
    </section>
    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Musée Angladon';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
    </section>

    <section id="historical-facts">
      <h2>Historical or Cultural Facts</h2>
      <p>The Angladon Museum houses a remarkable collection of artworks, including paintings, sculptures, and handicrafts.</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.6456768924168!2d4.804395775777359!3d43.94600613344454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb88ea2947dd%3A0xc2a91df9eb561dab!2sMus%C3%A9e%20Angladon%20-%20Collection%20Jacques%20Doucet!5e0!3m2!1sfr!2sfr!4v1686769568830!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Opening Hours</h2>
      <p>The opening hours of the Angladon Museum in Avignon are:</p>
      <ul>
        <li>Monday - Sunday: 9:00 AM - 6:00 PM</li>
      </ul>
    </section>

    <section id="testimonials" class="testimonial-section">
      <h2>Testimonials or Quotes</h2>
      <blockquote>
        "The Angladon Museum presents incredible artistic masterpieces. An unforgettable experience for art enthusiasts." - Sophie, visitor
      </blockquote>
      <blockquote>
        "I was fascinated by the diversity of artworks exhibited at the Angladon Museum. A true cultural treasure to discover." - Pierre, visitor
      </blockquote>
    </section>

    <section id="activities" class="activity-section">
      <h2>Activities and Events</h2>
      <p>The Angladon Museum offers various activities and events throughout the year:</p>
      <ul>
        <li>Guided tours of the permanent collections</li>
        <li>Temporary exhibitions of contemporary artists</li>
        <li>Lectures and art workshops</li>
        <li>Concerts and artistic performances</li>
      </ul>
      <p>Visit our website to find out about the planned activities during your visit.</p>
    </section>
  </div>
  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>
