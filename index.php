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
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
      integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
      crossorigin=""
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.cdnfonts.com/css/rounded-elegance"
      rel="stylesheet"
    />
    <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet" />
    <title>Document</title>
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
              <p>Nom station:</p>
              <p>Etat:</p>
              <p>Vélos dispo:</p>
              <p>Places dispo:</p>
            </div>
          </div>
        </div>
      </section>
      <section class="avis" id="avis_id">
        <h1>LES AVIS</h1>
        <div class="content">
          <div class="left">
            <form class="avis_form" method="post">
              <label for="nom">nom:</label>
              <input
                type="text"
                id="nom"
                name="nom"
                class="psd"
                placeholder="Pseudo"
                required
              />
              <label for="message">Message:</label>
              <input
                type="text"
                id="message"
                name="message"
                class="msg"
                placeholder="Message"
                required
              />
              <button class="submit_btn" type="submit">Envoyer</button>
            </form>
          </div>
          <div class="right">messages</div>
        </div>
      </section>
      <section class="contact" id="contact_id">
        <h1>CONTACT</h1>
        <form class="form" method="post">
          <div class="screen">
            <div class="screen-body">
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <label for="contact_nom"></label>
                    <input
                      class="app-form-control"
                      placeholder="Nom"
                      id="contact_nom"
                      required
                    />
                  </div>
                  <div class="app-form-group">
                    <label for="contact_nom"></label>
                    <input
                      class="app-form-control"
                      placeholder="Mail"
                      id="contact_mail"
                      required
                    />
                  </div>
                  <div class="app-form-group">
                    <label for="contact_nom"></label>
                    <input
                      class="app-form-control"
                      placeholder="N° de téléphone"
                      id="contact_num"
                      required
                    />
                  </div>
                  <div class="app-form-group message">
                    <label for="contact_nom"></label>
                    <input
                      class="app-form-control"
                      placeholder="MESSAGE"
                      id="contact_msg"
                      required
                    />
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button" type="submit">
                      Envoyer
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>
    </main>
    <footer class="footer">
      <div class="container">
        <img class="logo" src="assets/footer_logo.png" alt="" />
        <div class="col-menu">Menu footer</div>
        <div class="col-social">Réseau Sociaux</div>
        <div class="col-news">Newsletter</div>
      </div>
    </footer>
    <script
      src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
      integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
      crossorigin=""
    ></script>
    <script src="app.js"></script>

    <?php
    include('avis_recup.php');
    ?>
  </body>
</html>