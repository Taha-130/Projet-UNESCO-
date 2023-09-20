<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css" />
  <title>Presentation of the Petit Palais Museum</title>
</head>
<body>
  <header>
    <h1>Presentation of the Petit Palais Museum</h1>
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
      <p>This prestigious establishment houses an exceptional art collection and offers visitors a unique experience through history and culture. Whether you are an art enthusiast or simply curious, the Petit Palais Museum is a must-visit during your trip to Avignon.</p>
    </section>
    <section id="image">
      <h2>Image</h2>
      <img src="images/Museepetitpalais.png" alt="Collégiale St Agricole in Avignon">
    </section>
    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Musée du Petit Palais';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
    </section>

    <section id="facts">
      <h2>Cultural Facts</h2>
      <p>The Petit Palais Museum is closely tied to the cultural history of Avignon. It bears witness to the city's prosperous period when it served as the seat of the popes in the 14th century. During this time, Avignon was a major center of art and culture in Europe. The museum houses numerous religious artworks that reflect the piety and influence of the Church during that era.
Furthermore, the museum's collection is the result of donations and acquisitions made over the centuries. It testifies to the passion of collectors and the commitment of local authorities to preserve and promote the region's cultural heritage.
Thus, the Petit Palais Museum plays a vital role in the artistic education and cultural enrichment of both the local community and visitors.</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5744.914414946831!2d4.799807395229337!3d43.94990598435817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb86e7e12b61%3A0x3bd27f9004677eb5!2sMus%C3%A9e%20Du%20Petit%20Palais!5e0!3m2!1sfr!2sfr!4v1686834535997!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Opening Hours</h2>
      <ul>
        <li>Wednesday to Monday: 10:00 AM - 1:00 PM, 2:00 PM - 6:00 PM</li>
        <li>Tuesday: Closed</li>
      </ul>
    </section>

    <section id="testimonials" class="testimonial-section">
      <h2>Testimonials</h2>
      <blockquote>
        "During our weekend in Avignon, we discovered this museum with delight.
First, it is free (like the municipal museums in Avignon). Moreover, its collections are of very high quality!
We found out that it possessed a work by Botticelli (unfortunately loaned out at that time) and several attributed to the Master's workshop.
The wooden paintings presented in large numbers are of great quality." - Dominique, mother of the family
      </blockquote>
      <blockquote>
          "The Petit Palais has the advantage of combining the visit of a beautiful building with a collection of Italian Renaissance painters. Plus, it's free." - Chrisair, tourist
    </section>

    <section id="activities" class="activity-section">
      <h2>Activities and Events</h2>
      <p>The Petit Palais Museum offers various activities and events throughout the year:</p>
      <ul>
        <li>Guided tour - every last Sunday of the month at 10:30 AM, except on public holidays. <br> Rates: €5 / €3</li>
        <li>Restaurant serving local products and refined cuisine, all in one of the most secret gardens in Avignon!</li>
        <li>Self-guided tour, approximately 1 hour and 30 minutes.</li>
      </ul>
      <p>Visit our website to know the planned activities during your visit.</p>
    </section>
  </div>
  <footer>
    <p>Presentation realized in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>
