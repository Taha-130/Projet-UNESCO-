<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Presentation of the Ramparts of Avignon</title>
</head>
<body>
  <header>
    <h1>Presentation of the Ramparts of Avignon</h1>
    <nav>
      <ul class="navbar">
        <li><a href="indexanglais.html"><span>Home</span></a></li>
        <li><a href="#introduction"><span>Introduction</span></a></li>
        <li><a href="#image"><span>Image</span></a></li>
        <li><a href="#description"><span>Description</span></a></li>
        <li><a href="#facts"><span>Historical Facts</span></a></li>
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
      <p>The ramparts of Avignon are an impressive set of fortifications that surround the old town of Avignon, located in the south of France.
         These ramparts have played a crucial role in protecting the city over the centuries,
         and they represent an important testimony of the region's history.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/remparts.png" alt="St. Agricole Collegiate Church of Avignon">
    </section>
    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Remparts d''Avignon';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
    </section>

    <section id="facts">
      <h2>Historical or Cultural Facts</h2>
      <p>Over the centuries, the ramparts have witnessed several major historical events. They have withstood numerous sieges and invasions, notably during the Hundred Years' War and the Wars of Religion. The ramparts of Avignon also played an important role during the Western Schism in the 14th century when two popes disputed the papal legitimacy.

Today, the ramparts of Avignon are a major tourist attraction. They offer visitors a unique opportunity to delve into the history of the city and enjoy breathtaking views of Avignon and its surroundings.</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.8072421044467!2d4.802741975979441!3d43.94266277108989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b592bff933d8d7%3A0x3784875b82eb0438!2sRemparts%20d&#39;Avignon!5e0!3m2!1sfr!2sfr!4v1686835850435!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Opening Hours</h2>
      <p>The ramparts are open for visitation at all hours of the day and night!</p>
    </section>

    <section id="testimonials" class="testimonial-section">
      <h2>Testimonials or Quotes</h2>
      <blockquote>
        "From an architectural point of view, the fortifying ramparts of the city are magnificent and beautifully decorated." - Passenger246584, visitor
      </blockquote>
      <blockquote>
        "In perfect condition
        The ramparts are a sight to behold
        Note that you cannot walk on top of them to go around.
        Several entrance gates can be found along the way to access the city.
        Tip: Prefer walking alongside the ramparts next to the river, as it is much more picturesque than the interior." - Leexi3, history enthusiast
      </blockquote>
    </section>

    <section id="activities" class="activity-section">
      <h2>Activities and Events</h2>
      <p>The ramparts of Avignon offer various activities and events throughout the year:</p>
      <ul>
        <li>Self-guided tours with Interactive City Game</li>
        <li>Wine tasting</li>
        <li>Guided tours by a professional</li>
      </ul>
      <p>Visit our website to learn about the planned activities during your visit.</p>
    </section>
  </div>
  <footer>
    <p>Presentation realized in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>
