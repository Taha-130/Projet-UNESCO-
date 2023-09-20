<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Presentation of Notre-Dame des Doms</title>
</head>
<body>
  <header>
    <h1>Presentation of the Notre-Dame des Doms Cathedral</h1>
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
      <p>The Notre-Dame des Doms Cathedral is a magnificent religious building located in the heart of the city of Avignon. It is considered one of the main historical monuments in the region and attracts numerous visitors each year.
         The cathedral is a symbol of Provençal Gothic architecture and plays an important role in the spiritual and cultural life of the city.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Notredame.png" alt="Notre Dame">
    </section>
    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Notre Dame des Doms';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
    </section>

    <section id="historical-facts">
      <h2>Historical and Cultural Facts</h2>
      <p>The Notre-Dame des Doms Cathedral has a rich cultural and historical significance. It was built in the 12th century and became the seat of the Archbishop of Avignon. During the 14th century, Avignon was the seat of the papacy, and the cathedral played a central role in the religious life of the city.
         Many popes resided in Avignon during this period, contributing to the cultural and spiritual radiance of the cathedral.
         In addition to its religious significance, the Notre-Dame des Doms Cathedral is also a symbol of Avignon's cultural identity. It has witnessed numerous historical events and has been the venue for important ceremonies over the centuries. Today, it continues to be an active place of worship and a major tourist site that attracts enthusiasts of architecture, history, and spirituality.</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.374839651346!2d4.804906175979903!3d43.951610271089535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb86d90a23f1%3A0xc3d249199481820d!2sNotre%20Dame%20des%20Doms%20d&#39;Avignon!5e0!3m2!1sfr!2sfr!4v1686835380472!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Opening Hours</h2>
      <ul>
        <li>Monday to Saturday: 6:30 AM - 12:00 PM, 2:30 PM - 5:30 PM</li>
        <li>Sunday: 9:00 AM - 12:00 PM, 2:30 PM - 5:30 PM</li>
      </ul>
    </section>

    <section id="testimonials" class="testimonial-section">
      <h2>Testimonials</h2>
      <blockquote>
        "It is a beautiful building with a beautifully crafted facade. The interior houses magnificent paintings and beautiful stained glass windows.
         I particularly enjoyed the dome representing angels of different colors above the altar in the central aisle, as well as the Chapel of the Holy Sacrament
         with its multicolored ceiling paintings depicting biblical scenes and its elaborate columns. I recommend visiting." - Laure
      </blockquote>
      <blockquote>
        "The people of Avignon call it La Métropole. It is a place that is both religious, rich in history, and cultural, open to music. You can find beautiful religious artworks there." - Papaline, tourist
      </blockquote>
    </section>

    <section id="activities" class="activity-section">
      <h2>Activities and Events</h2>
      <ul>
        <li>Free and self-guided tours. (Please do not disturb during religious services).</li>
      </ul>
      <p>Visit our website to find out about planned activities during your visit.</p>
    </section>
  </div>
  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>
