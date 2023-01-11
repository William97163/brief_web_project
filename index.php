<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/header.css" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="stylesheet" href="style/footer.css" />
  <link rel="stylesheet" href="style/form.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.cdnfonts.com/css/rounded-elegance" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet" />
  <title>Brief web_project</title>
</head>

<body>
  <header>
    <nav>
      <img class="logo" src="assets/header_logo.png" alt="" />
      <div class="menu">
        <ul>
          <li><a href="" class="first">ACCUEIL</a></li>
          <li><a href="#station_id">STATIONS</a></li>
          <li><a href="#avis_id">AVIS</a></li>
          <li><a href="#contact_id">CONTACT</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <section class="station" id="station_id">
      <h1>STATIONS</h1>
      <div class="content">
        <div class="left" id="map"></div>
        <div class="right">
          <div class="info">
            <div class="titre">INFO STATION</div>
            <h3>Nom station:</h3>
            <h3>Etat:</h3>
            <h3>Vélos dispo:</h3>
            <h3>Places dispo:</h3>
          </div>
        </div>
      </div>
    </section>
    <section class="avis" id="avis_id">
      <h1>LES AVIS</h1>
      <div class="content">
        <div class="left">
          <form class="avis_form" action="php/avis_verif.php" method="post">
            <label for="nom">nom:</label>
            <input type="text" id="nom" name="nom" class="psd" placeholder="Pseudo" required />
            <label for="message">Message:</label>
            <input type="text" id="message" name="message" class="msg" placeholder="Message" required />
            <button class="submit_btn" type="submit">Envoyer</button>
          </form>
        </div>
        <div class="right">
          <p><?php include('php/avis_recup.php'); ?></p>
        </div>
      </div>
    </section>
    <section class="contact" id="contact_id">
      <h1>CONTACT</h1>
      <form class="form" action="php/contact_verif.php" method="post">
        <div class="screen">
          <div class="screen-body-item" style="padding-top: 2rem; padding-left: 0;">
            <div class="app-form">
              <div class="app-form-group">
                  <label for="contact_nom"></label>
                  <input type="text" class="app-form-control" id="contact_nom" name="contact_nom" placeholder="Nom" required style="width:50rem;"/>
              </div>
              <div class="app-form-group">
                <label for="contact_mail"></label>
                <input type="email" class="app-form-control" id="contact_mail" name="contact_mail" placeholder="Mail" required style="width:50rem;"/>
              </div>
              <div class="app-form-group">
                <label for="contact_num"></label>
                <input type="tel" class="app-form-control" id="contact_num" name="contact_num" placeholder="N° de téléphone" required style="width:50rem;"/>
              </div>
              <div class="app-form-group message">
                <label for="contact_msg"></label>
                <input type="text" class="app-form-control" id="contact_msg" name="contact_msg" placeholder="MESSAGE" required style="width:50rem;"/>
              </div>
              <div class="app-form-group buttons">
                <button class="app-form-button" type="submit">
                  Envoyer
                </button>
              </div>
            </div>
        </div>
       </div>
     </form>         
    </section>
  </main>
  <footer>
    <h2>Nos services</h2><br>
    <div class="services">
      <div class="service">
        <h3>Paiement en ligne</h3>
      </div>
      <div class="service">
        <h3>Satisfait ou remboursé</h3>
      </div>
    </div>
    <p id="contact">Contact : +33 6 89 85 84 83 | &copy; 2023, BE Vélo.</p>
  </footer>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <script src="app.js"></script>
</body>

</html>