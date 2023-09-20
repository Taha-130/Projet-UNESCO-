<!DOCTYPE html>
<html lang="en">
<head>
  <META NAME="Description" CONTENT="Presentation of the Calvet Museum">
  <META NAME="Keywords" CONTENT="Avignon">
  <META NAME="Robots" CONTENT="index/noindex, follow/nofollow">
  <META NAME="Made" CONTENT="avignonproject@gmail.com">
  <META NAME="Owns" CONTENT="Avignon">
  <META NAME="Generator" CONTENT="Software Name">
  <META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
  <META NAME="http.language" CONTENT="en-US">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Presentation of the Calvet Museum</title>
</head>
<body>
    <header>
        <h1>Presentation of the Calvet Museum</h1>
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
      <p>In a beautiful 18th-century mansion, you will find the rich collection of fine arts, paintings, and sculptures from the 15th to the 20th century at the Calvet Museum, which was too small in the former Saint-Martial convent.</p>
    </section>
<section id="image">
  <h2>Image</h2>
  <img src="images/Museecalvet.png" alt="Calvet Museum">
</section>

<section id="description">
  <h2>Description</h2>
  <?php
  include('connexion.inc.php');
  $cnx->exec("set search_path to Avignon;");
  $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Musée Calvet';");
  $resultat = $text->fetch(PDO::FETCH_ASSOC);
  echo $resultat['texteen'];
  ?>
</section>

<section id="historical-facts">
  <h2>Historical or Cultural Facts</h2>
  <p>In 1742, the first consul of Avignon, Joseph-Ignace de Villeneuve-Martignan, decided to transform his family's old residence and hired the architect Jean-Baptiste Franque and his son François to build a mansion that is still the most beautiful lordly mansion in Avignon.
  In 1754, he went bankrupt and was forced to interrupt the works. The building changed hands several times and was transformed by its successive owners after the Revolution.
  In 1833, the city of Avignon acquired it to house the Calvet Museum, which was too small in the former Saint-Martial convent.</p>
</section>

<section id="location">
  <h2>Location</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.588993336052!2d4.800880175979659!3d43.94717907108973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb8f718724d1%3A0x5a9a4cee7002dbc3!2sMus%C3%A9e%20Calvet!5e0!3m2!1sfr!2sfr!4v1686818530779!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section id="opening-hours" class="active">
  <h2>Opening Hours</h2>
  <p>The opening hours of the Calvet Museum are:</p>
  <ul>
    <li>Monday - Sunday except Tuesday: 10:00 AM - 1:00 PM and 2:00 PM - 5:00 PM</li>
  </ul>
</section>

<section id="testimonials" class="testimonial-section">
    <h2>Testimonials or Quotes</h2>
    <blockquote>
      "One of the most beautiful museums in Avignon" - Camille, visitor
    </blockquote>
    <blockquote>
      "Exceptional museum that holds many unique treasures..." - Ben, visitor
    </blockquote>
  </section>

  <section id="activities" class="activity-section">
    <h2>Activities and Events</h2>
    <p>The Calvet Museum offers a variety of activities and events throughout the year, such as:</p>
    <ul>
      <li>Family Workshop</li>
      <li>Exhibitions</li>
      <li>Guided Tours</li>
    </ul>
    <p>Check the event calendar on our website to find out about the activities scheduled during your visit.</p>
  </section>
</div>
  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>
</html>