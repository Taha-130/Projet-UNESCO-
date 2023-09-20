<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Presentation of Ile de la Barthelasse</title>
</head>

<body>
    <header>
        <h1>Presentation of Ile de la Barthelasse</h1>
        <nav>
          <ul class="navbar">
          <li><a href="indexanglais.html"><span>Home</span></a></li>
            <li><a href="#introduction"><span>Introduction</span></a></li>
            <li><a href="#image"><span>Image</span></a></li>
            <li><a href="#description"><span>Description</span></a></li>
            <li><a href="#facts"><span>Cultural Facts</span></a></li>
            <li><a href="#location"><span>Location</span></a></li>
            <li><a href="#hours"><span>Opening Hours</span></a></li>
            <li><a href="#testimonials"><span>Testimonials</span></a></li>
            <li><a href="#activities"><span>Activities and Events</span></a></li>
          </ul>
        </nav>
      </header>
      
        
  <div class="container">
    <section id="introduction" class="active">
      <h2>Introduction</h2>
      <p>Ile de la Barthelasse in Avignon, located in the middle of the Rhone River, is an oasis of greenery and tranquility. With its vast expanses of farmland, orchards, and picturesque gardens, the island offers a peaceful natural retreat away from the hustle and bustle of the city. It's the perfect place for a relaxing walk, an outdoor picnic, or simply enjoying breathtaking views of Avignon's old town and its famous Palais des Papes. Whether to escape the fast pace of urban life or to admire the natural beauty of the region, Ile de la Barthelasse is a true gem to discover.</p>
    </section>

    <section id="image">
      <h2>Image</h2>
      <img src="images/Bartellasse.png" alt="Bartelasse">
    </section>

    <section id="description">
      <h2>Description</h2>
      <?php
      include('connexion.inc.php');
      $cnx->exec("set search_path to Avignon;");
      $text = $cnx->query("SELECT texteen FROM texteMonuments WHERE nom = 'Ile de la Barthelasse';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texteen'];
      ?>
    </section>

    <section id="facts">
      <h2>Historical and Cultural Facts</h2>
      <p>Ile de la Barthelasse in Avignon is the largest river island in Europe. It was historically used for agriculture and was a residence for cardinals during the period when Avignon was the seat of the papacy. Today, the island is popular among residents and tourists for its green spaces, hiking trails, and access to the Rhone River. It is home to rich biodiversity and is also associated with cultural festivities in Avignon, including the Avignon Festival. Ile de la Barthelasse offers a peaceful setting where visitors can discover the history, nature, and culture of the Avignon region.</p>
    </section>

    <section id="location">
      <h2>Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11485.49960278305!2d4.821394263566997!3d43.972295987416516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eceb2e8f9471%3A0xbb746819910fa413!2s%C3%8Ele%20de%20la%20Barthelasse!5e0!3m2!1sfr!2sfr!4v1686752596324!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="hours" class="active">
      <h2>Opening Hours</h2>
      <p>The opening hours of Ile de la Barthelasse are:</p>
      <ul>
        <li>24/7</li>
      </ul>
    </section>

    <section id="testimonials" class="testimonial-section">
        <h2>Testimonials or Quotes</h2>
        <blockquote>
          Sophie, a local history enthusiast: "Ile de la Barthelasse is steeped in history and mystery. As I walk through its lands, I can almost feel the imprint of centuries gone by. Did you know that this island was the residence of cardinals during the period of the papacy in Avignon? It's fascinating to think of the historical significance of this place. Additionally, the island is home to incredible biodiversity, with its diverse flora and fauna. It's a place where history and nature converge, creating a unique and captivating atmosphere."
        </blockquote>
        <blockquote>
        Marie, a passionate artist: "Ile de la Barthelasse is my sanctuary. Its enchanting landscape and vast green expanses are an endless source of inspiration for my artistic creations. Every time I visit, I feel connected to nature and its soothing beauty. It's a place where I can rejuvenate, unleash my creativity, and let my mind wander. Ile de la Barthelasse is a true treasure for all artists seeking inspiration."
        </blockquote>
      </section>
  
      <section id="activities" class="activity-section">
        <h2>Activities and Events</h2>
        <p>Activities and events on Ile de la Barthelasse:</p>
        <ul>
          <li>Birdwatching</li>
          <li>Water sports</li>
          <li>Hiking and walking</li>
        </ul>
        <p>Check the event calendar on our website to find out about scheduled activities during your visit.</p>
      </section>
    </div>

  <footer>
    <p>Presentation created in partnership with UNESCO and Gustave Eiffel University.</p>
  </footer>
</body>

</html>
