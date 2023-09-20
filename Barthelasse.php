<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/monument.css"/>
  <title>Présentation de l'Ile de la Barthelasse</title>
</head>

<body>
    <header>
        <h1>Présentation de l'Ile de la Barthelasse</h1>
        <nav>
          <ul class="navbar">
          <li><a href="index.html"><span>Accueil</span></a></li>
            <li><a href="#introduction"><span>Introduction</span></a></li>
            <li><a href="#image"><span>Image</span></a></li>
            <li><a href="#description"><span>Description</span></a></li>
            <li><a href="#faits"><span>Faits culturels</span></a></li>
            <li><a href="#localisation"><span>Localisation</span></a></li>
            <li><a href="#horaires"><span>Horaires d'ouverture</span></a></li>
            <li><a href="#temoignages"><span>Témoignages</span></a></li>
            <li><a href="#activites"><span>Activités et événements</span></a></li>
          </ul>
        </nav>
      </header>
      
        
  <div class="container">
    <section id="introduction" class="active">
      <h2>Introduction</h2>
      <p>L'île de la Barthelasse à Avignon, située au milieu du Rhône, est une oasis de verdure et de tranquillité. Avec ses vastes étendues de terres agricoles, ses vergers et ses jardins pittoresques, l'île offre un refuge naturel paisible loin de l'agitation de la ville. C'est l'endroit parfait pour une promenade relaxante, un pique-nique en plein air ou simplement pour profiter d'une vue imprenable sur la vieille ville d'Avignon et son célèbre Palais des Papes. Que ce soit pour échapper au rythme effréné de la vie urbaine ou pour admirer la beauté naturelle de la région, l'île de la Barthelasse est un véritable joyau à découvrir.</p>
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
      $text = $cnx->query("SELECT texte FROM texteMonuments WHERE nom = 'Ile de la Barthelasse';");
      $resultat = $text->fetch(PDO::FETCH_ASSOC);
      echo $resultat['texte'];
      ?>
    </section>

    <section id="faits">
      <h2>Faits historiques ou culturels</h2>
      <p>L'île de la Barthelasse à Avignon est la plus grande île fluviale d'Europe. Elle a été historiquement utilisée pour l'agriculture et était une résidence pour les cardinaux pendant la période où Avignon était le siège de la papauté. Aujourd'hui, l'île est prisée des habitants et des touristes pour ses espaces verts, ses sentiers de randonnée et son accès au Rhône. Elle abrite une riche biodiversité et est également associée aux festivités culturelles d'Avignon, notamment le Festival d'Avignon. L'île de la Barthelasse offre un cadre paisible où l'on peut découvrir l'histoire, la nature et la culture de la région avignonnaise.</p>
    </section>

    <section id="localisation">
      <h2>Localisation</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11485.49960278305!2d4.821394263566997!3d43.972295987416516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eceb2e8f9471%3A0xbb746819910fa413!2s%C3%8Ele%20de%20la%20Barthelasse!5e0!3m2!1sfr!2sfr!4v1686752596324!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section id="horaires" class="active">
      <h2>Horaires d'ouverture</h2>
      <p>Les horaires d'ouverture de l'Ile de la Bartelasse sont :</p>
      <ul>
        <li>24h/24h 7j/7j</li>
      </ul>
    </section>

    <section id="temoignages" class="testimonial-section">
        <h2>Témoignages ou citations</h2>
        <blockquote>
          Sophie, une passionnée d'histoire locale : "L'île de la Barthelasse est imprégnée d'histoire et de mystère. En me promenant sur ses terres, je peux presque ressentir l'empreinte des siècles passés. Saviez-vous que cette île a été le lieu de résidence des cardinaux pendant la période de la papauté à Avignon ? C'est fascinant de penser à l'importance historique de cet endroit. De plus, l'île abrite une biodiversité incroyable, avec sa faune et sa flore variées. C'est un lieu où l'histoire et la nature se rencontrent, créant une atmosphère unique et captivante."
        </blockquote>
        <blockquote>
        Marie, une artiste passionnée : "L'île de la Barthelasse est mon havre de paix. Son paysage enchanteur et ses vastes étendues verdoyantes sont une source infinie d'inspiration pour mes créations artistiques. Chaque fois que je m'y rends, je me sens connectée à la nature et à sa beauté apaisante. C'est un endroit où je peux me ressourcer, laisser libre cours à ma créativité et laisser mon esprit s'évader. L'île de la Barthelasse est un véritable trésor pour tous les artistes en quête d'inspiration."
        </blockquote>
      </section>
  
      <section id="activites" class="activity-section">
        <h2>Activités et événements</h2>
        <p>Activités et événements sur l'île de la Barthelasse :</p>
        <ul>
          <li>Observations ornithologiques </li>
          <li>Sports nautiques</li>
          <li>Randonnée et promenade</li>
        </ul>
        <p>Consultez le calendrier des événements sur notre site Web pour connaître les activités prévues lors de votre visite.</p>
      </section>
    </div>

  <footer>
    <p>Présentation réalisée en partenariat avec l'UNESCO et l'Université Gustave Eiffel.</p>
  </footer>
</body>

</html>
