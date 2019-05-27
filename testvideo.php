
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="testvideo.css" type="text/css" rel="stylesheet" />

            <div class="lecteur_frame">
              <video id="videoPlayer" preload="auto">
                <!--mp4 en tête de liste pour compatibilité portable -->
                <source src="img/ete.mp4" type="video/mp4">
                Si la vidéo ne s'affiche pas correctement, merci de mettre à jour votre navigateur !!
              </video>
              <div class="barre">
                <button id="playBtn" class="control" onclick="play('videoPlayer', this)"><i
                    class="far fa-play-circle fa-2x" id="transportIcon"></i></button>
                <button class="control" onclick="resume('videoPlayer')"><i
                    class="far fa-stop-circle fa-2x"></i></button>
                <span class="volume">
                  <a class="stick1" onclick="volume('videoPlayer', 0)"></a>
                  <a class="stick2" onclick="volume('videoPlayer', 0.3)"></a>
                  <a class="stick3" onclick="volume('videoPlayer', 0.5)"></a>
                  <a class="stick4" onclick="volume('videoPlayer', 0.7)"></a>
                  <a class="stick5" onclick="volume('videoPlayer', 1)"></a>
                </span>
                <img src="img/logoo.png" alt="logo été indien" width="50em" height="50em" />
              </div>
            </div>

  <script>
    function volume(idPlayer, vol) {
      var player = document.querySelector('#' + idPlayer);

      player.volume = vol;
    }
  </script>

  <script src="testvideo.js" type="text/javascript"></script>
