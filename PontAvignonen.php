<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Presentation of the Pont d'Avignon</title>
</head>

<body>
    <header>
        <h1>Presentation of the Pont d'Avignon</h1>
        <nav>
          <ul class="navbar">
            <li><a href="indexanglais.html"><span>Home</span></a></li>
            <li><a href="#introduction"><span>Introduction</span></a></li>
            <li><a href="#image"><span>Image</span></a></li>
            <li><a href="#description"><span>Description</span></a></li>
            <li><a href="#cultural-facts"><span>Cultural Facts</span></a></li>
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
      <p>The Pont d'Avignon, known as the Pont Saint-Bénézet, is an iconic symbol of the city of Avignon in France. Built in the 12th century, this historical bridge offers picturesque views of the Rhône River and embodies the history and charm of the region. Although only partially preserved today, the Pont d'Avignon remains a poignant testament to the city's glorious past, captivating visitors with its evocative appearance and its connection to a famous song that has endured through the centuries.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Pontavignon.png" alt="Pont d'Avignon">
    </section>

    <section id="description">
      <h2>Description</h2>
		<?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Pont d''Avignon';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
    </section>

    <section id="cultural-facts">
      <h2>Cultural Facts</h2>
      <p>The Pont d'Avignon, also known as the Pont Saint-Bénézet, possesses a rich and culturally significant history. Built in the 12th century, it served as an important commercial passage over the Rhône River, fostering exchanges between Avignon and the surrounding regions. The bridge derives its name from Saint Bénézet, a young shepherd to whom a divine vision is attributed, inspiring him to build it. Unfortunately, over time, the floods of the Rhône River caused considerable damage, and only four arches of the original bridge remain today. Nevertheless, the Pont d'Avignon remains an iconic symbol of the city, attracting visitors curious to explore its fascinating past and picturesque charm.</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.259428667669!2d4.802163975980025!3d43.95399817108948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb825fa84051%3A0x7b72f2b877bc1976!2sPont%20Saint-Benezet%20(Le%20Pont%20d&#39;Avignon)!5e0!3m2!1sfr!2sfr!4v1686673634220!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Opening Hours</h2>
      <p>The opening hours of the Pont d'Avignon are:</p>
      <ul>
        <li>24h/24h 7d/7d</li>
      </ul>
    </section>

    <section id="testimonials" class="testimonial-section">
        <h2>Testimonials</h2>
        <blockquote>
          Nicolas Renaud: "The majesty of the Pont d'Avignon amazed me. Walking on its few remaining arches, I felt the grandeur of medieval architecture and imagined the crowds that once crossed it. It's an experience that deeply connected me to the history and soul of this beautiful city."
        </blockquote>
        <blockquote>
          Isabella Martinelli: "The Pont d'Avignon is an iconic place, steeped in legends and mysteries. As I contemplated it, I was struck by the power of the natural elements that shaped its destiny. The floods of the Rhône River have erased a large part of the bridge, but it has only added to its enigmatic charm, making it a must-visit for any history and architectural beauty enthusiast."
        </blockquote>
      </section>
  
      <section id="activities" class="activity-section">
        <h2>Activities and Events</h2>
        <p>The Pont d'Avignon is an iconic site that hosts various activities and events. Here are some examples:</p>
        <ul>
          <li>Guided tours</li>
          <li>Festivals and performances</li>
          <li>Artisan markets</li>
        </ul>
        <p>Check the event calendar on our website to find out about the activities scheduled during your visit.</p>
      </section>
    </div>

  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>

</html>
