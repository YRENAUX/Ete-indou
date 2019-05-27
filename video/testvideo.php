<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Vidéo</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
  integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
  <link href="testvideo.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<header>
</header>

<main>
  <div class="container-fluid"> <!-- conteneur général de la page -->
    <div class="sitecontent">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h1 class="site-title text-center">Votre vidéo ici !</h1>
          <div class="lecteur_frame">
            <video id="videoPlayer" ontimeupdate="update(this)" width="600em" height="300em"
            poster="gym.jpg" preload="auto">
              <!--mp4 en tête de liste pour compatibilité portable -->
              <source src="coray.mp4" type="video/mp4">
              <source src="coray.webm" type="video/webm">
              Si la vidéo ne s'affiche pas correctement, merci de mettre à jour votre navigateur !!
            </video>
            <div id="progressBarControl">
              <div id="progressBar"></div>
            </div>
          </div>
          <div class="barre">
            <div class="controls-L">
              <button id="playBtn" class="control" onclick="play('videoPlayer', this)"><i class="far fa-play-circle fa-2x" id="transportIcon"></i></button>
              <button class="control" onclick="resume('videoPlayer')"><i class="far fa-stop-circle fa-2x"></i></button>
              <span class="volume">
                <a class="stick1" onclick="volume('videoPlayer', 0)"></a>
                <a class="stick2" onclick="volume('videoPlayer', 0.3)"></a>
                <a class="stick3" onclick="volume('videoPlayer', 0.5)"></a>
                <a class="stick4" onclick="volume('videoPlayer', 0.7)"></a>
                <a class="stick5" onclick="volume('videoPlayer', 1)"></a>
              </span>
            </div>
            <img src="logoo.png" alt="logo été indien" width="50em" height="50em"/>
            <div class="controls-R">
              <button class="control" onclick="fullscreen()"><i class="fas fa-compress fa-2x"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>
</footer>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="testvideo.js" type="text/javascript"></script>
</body>
</html>
