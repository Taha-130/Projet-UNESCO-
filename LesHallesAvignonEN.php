<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="Description" content="Presentation of Avignon Market">
  <meta name="Keywords" content="Avignon">
  <meta name="Robots" content="index/noindex, follow/nofollow">
  <meta name="Made" content="avignonproject@gmail.com">
  <meta name="Owns" content="Avignon">
  <meta name="Generator" content="Software Name">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="http.language" content="en-US">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Presentation of Avignon Market</title>
</head>

<body>
    <header>
        <h1>Presentation of Avignon Market</h1>
        <nav>
          <ul class="navbar">
            <li><a href="indexanglais.html"><span>Home</span></a></li>
            <li><a href="#introduction"><span>Introduction</span></a></li>
            <li><a href="#image"><span>Image</span></a></li>
            <li><a href="#description"><span>Description</span></a></li>
            <li><a href="#historical"><span>Historical Facts</span></a></li>
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
      <p>This covered market is known for the quality of its products in the city of the Popes.
Considered as a meeting place and a place of conviviality, it is a must-visit.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Hallesavignon.png" alt="Avignon Market">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Halles d''Avignon';");
      $result = $text->fetch(PDO::FETCH_ASSOC);
      echo $result['texteen'];
      ?>
    </section>

    <section id="historical">
      <h2>Historical or Cultural Facts</h2>
      <p>In 1562, a man named Parpaille was put to death as a heretic and his house, located in the city center of Avignon, was razed. On this land, it was planned to build a covered market and wooden barracks to accommodate the pack animals bringing provisions to the market.
This location was then called Place Pie, named after Pope Pius V, who reigned in Rome. This first building was slow to construct since a 1618 city plan of Avignon shows the colonnade of this market still under construction.
It was completed in 1624 and included, in addition to the shops, a guardhouse and a chapel.
</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.5678841676663!2d4.807648075979679!3d43.94761587108973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb87f12bc2b5%3A0xab245fa1f8797383!2sLes%20Halles%20d&#39;Avignon!5e0!3m2!1sfr!2sfr!4v1686818277630!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="opening-hours" class="active">
      <h2>Opening Hours</h2>
      <p>The opening hours of Avignon Market are:</p>
      <ul>
        <li>Tuesday - Sunday: 6:00 AM - 2:00 PM</li>
      </ul>
    </section>

    <section id="testimonials" class="testimonial-section">
        <h2>Testimonials or Quotes</h2>
        <blockquote>
          "An atypical market that offers plenty of products from local producers. Great for picking up some small purchases." - Laurent, visitor
        </blockquote>
        <blockquote>
          "A plethora of small merchants from various nationalities offering a variety of delicious products, most of which are homemade." - Jacques, visitor
        </blockquote>
      </section>
  
      <section id="activities" class="activity-section">
        <h2>Activities and Events</h2>
        <p>Avignon Market offers a variety of activities and events throughout the year, such as:</p>
        <ul>
          <li>Culinary demonstration with Avignon chefs</li>
          <li>Photo workshop with Santa Claus</li>
          <li>Christmas night market</li>
          <li>The green wall</li>
        </ul>
        <p>Check the event calendar on our website to see the activities scheduled during your visit.</p>
      </section>
    </div>

  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>

</html>