// Video.js
import videojs from 'video.js';
import 'videojs-youtube';

import 'video.js/dist/video-js.css';

// Get the container element for the video player
var container = document.getElementById('jsVideoContainer');

// Create a new video element
var video = document.createElement('video');
video.id = 'jsVideo';
video.className = 'video-js';
video.controls = true;
video.preload = 'auto';
// video.width = 640;
// video.height = 264;

// Add a source element to the video element
var source = document.createElement('source');
source.type = 'video/mp4';
video.appendChild(source);

if (container) {
  // Add the video element to the container element
  container.appendChild(video);

  const player = videojs('jsVideo', {
      autoplay: false,
      controls: true,
      muted: true,
      responsive: true,
      techOrder: ['youtube', 'html5'],
      sources: [{
          src: 'https://www.youtube.com/watch?v=CkFI1kzWWSI',
          type: 'video/youtube'
      }],
  });

  // If you want to use some of the options in the config you have to use `player.ready`:
  player.ready(() => {
      const options = player.options();
  });


  // animate button on click
  const playVideoButton = document.getElementById('jsPlayVideo');
  const modalCloseButton = document.getElementById('JsModalClose');

  playVideoButton.addEventListener('click', function() {
      playVideoButton.classList.add('animate__animated', 'animate__bounce');
      setTimeout(function() {
          playVideoButton.classList.remove('animate__animated', 'animate__bounce');
      }, 1000);

      // play video
      player.play();
  });

  modalCloseButton.addEventListener('click', function() {
      player.pause();
      player.time.createTimeRange(0, 0);
  });
}

