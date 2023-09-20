<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Introduction to the Palais des Papes in Avignon</title>
</head>

<body>
  <header>
    <h1>Introduction to the Palais des Papes in Avignon</h1>
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
      <p>The Palais des Papes in Avignon, an iconic medieval fortress, bears witness to the grandeur and power of the Catholic Church. With its imposing architecture and fascinating history, it attracts visitors from all over the world, transporting them to a bygone era of power and spirituality.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Palaisdespapes.png" alt="Palais des Papes in Avignon">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Palais des Papes';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
    </section>

    <section id="facts">
      <h2>Historical and Cultural Facts</h2>
      <p>The Palais des Papes in Avignon is a monument of major historical significance. Here are three interesting facts about it:

      - The palace is the largest Gothic palace in the world and is listed as a UNESCO World Heritage Site. Built in the 14th century, it served as the official residence of the popes for approximately 70 years.

      - Inside, visitors can admire lavishly decorated rooms and wall frescoes depicting biblical scenes, offering a fascinating glimpse into the art and culture of the time.

      - Today, the Palais des Papes is a popular tourist attraction, attracting visitors from around the world who are fascinated by its imposing architecture and unique history.</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.411482215707!2d4.8076971!3d43.9508521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb868edbf86f%3A0x778ce565c188d2cb!2sPalais%20des%20Papes!5e0!3m2!1sfr!2sfr!4v1686210854639!5m2!1sfr!2sfr" width="600" height="450" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Opening Hours</h2>
      <p>The opening hours of the Palais des Papes in Avignon are:</p>
      <ul>
        <li>Monday - Sunday: 9:00 AM - 6:00 PM</li>
      </ul>
    </section>

    <section id="testimonials" class="testimonial-section">
        <h2>Testimonials or Quotes</h2>
        <blockquote>
          "The Palais des Papes is truly breathtaking. I was speechless in front of its grand architecture and fascinating history." - Jeanne, visitor
        </blockquote>
        <blockquote>
          "Visiting the Palais des Papes was an unforgettable experience. I was transported to another era and could appreciate all its grandeur." - Thomas, visitor
        </blockquote>
    </section>

    <section id="activities" class="activity-section">
      <h2>Activities and Events</h2>
      <p>The Palais des Papes offers a variety of activities and events throughout the year, such as:</p>
      <ul>
        <li>Art and history exhibitions</li>
        <li>Classical music concerts</li>
        <li>Light shows</li>
        <li>Thematic guided tours</li>
      </ul>
      <p>Check the event calendar on our website to see the activities scheduled during your visit.</p>
    </section>
  </div>

  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>

</html>
