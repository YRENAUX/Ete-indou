
  <link href="css/testvideo.css" type="text/css" rel="stylesheet"/>
          <section class="video">
          <div class="lecteur_frame">
            <video id="videoPlayer" ontimeupdate="update(this)" width="600em" height="300em"
            preload="auto">
              <!--mp4 en tête de liste pour compatibilité portable -->
              <source src="img/ete.mp4" type="video/mp4">
              Si la vidéo ne s'affiche pas correctement, merci de mettre à jour votre navigateur !!
            </video>
            <div id="progressBarControl">
              <div id="progressBar" onclick="clickProgress('videoPlayer', this, event)"></div>
            </div>
          </div>
          <div class="barre">
            <div class="controls-L">
              <button id="playBtn" class="control" onclick="play('videoPlayer', this)"><i class="far fa-play-circle fa-2x" id="transportIcon"></i></button>
              <button class="control" onclick="resume('videoPlayer')"><i class="far fa-stop-circle fa-2x"></i></button>
            </div>
            <img src="img/logovid.png" class="logovid" alt="logo été indien" width="100em" height="100em"/>
            <div class="controls-R">
            <span class="volume">
                <a class="stick1" onclick="volume('videoPlayer', 0)"></a>
                <a class="stick2" onclick="volume('videoPlayer', 0.3)"></a>
                <a class="stick3" onclick="volume('videoPlayer', 0.5)"></a>
                <a class="stick4" onclick="volume('videoPlayer', 0.7)"></a>
                <a class="stick5" onclick="volume('videoPlayer', 1)"></a>
              </span>
              <button class="control" id="grdecran" onclick="fullscreen()"><i class="fas fa-compress fa-2x"></i></button>
            </div>
          </div>
        </section>
<script src="js/testvideo.js" type="text/javascript"></script>
