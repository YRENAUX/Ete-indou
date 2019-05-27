/* dé-commenter pour activer la lecture automatique de la vidéo
au chargement de la page */

//$('#video-principale')[0].play();

var player = document.querySelector('#videoPlayer');
/* fonction qui permet de lancer la video */

var getBtn = document.getElementById('playBtn');
var getIcon = document.getElementById('transportIcon');

getBtn.addEventListener('click', function () {
    if (getIcon.className === 'far fa-play-circle fa-2x') {
        getIcon.setAttribute('class', 'far fa-pause-circle fa-2x');
    } else {
        getIcon.setAttribute('class', 'far fa-play-circle fa-2x');
    }
});


function play(idPlayer, control) {
  var player = document.querySelector('#' + idPlayer);

    if (player.paused) {
      player.play();
    } else {
      player.pause();
    }
}



/* fonction qui arrête la video et la ré-initialise à 0 */
  function resume(idPlayer) {
    var player = document.querySelector('#' + idPlayer);

    player.currentTime = 0;
    player.pause();
  }
/* fonction qui gère le volume */
  function volume(idPlayer, vol) {
    var player = document.querySelector ('#' + idPlayer);

    player.volume = vol;
  }


  