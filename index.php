<!DOCTYPE HTML>
<html>
	<head>
		<title>Quantum Safari</title>
		<meta  http-equiv="Content-Type" content="application;charset=UTF-8">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Creepster">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent Marker">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mansalva">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Londrina Solid">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Boogaloo">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Emilys Candy">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Coiny">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Eater">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik Wet Paint">
	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper" style="position:relative; width:100%; height:100vh; overflow:hidden; text-align:center;">
		<h1 style="position:absolute; top:25%; width:100%; text-align: center;">
			<font class="ghost">ooooohhhh hellooooooooo helloooo ohh ho hoooo hellooooooo<br><br><br></font>
			<font class="boy">Welcome to Quantum Safari.com. This is my home page!<br>
			There's not much here right now, but click below to hear the new album!</font><br><br>
			<font class="neonText"><a href="halloween.html">Lights Out: A Halloween Adventure</a></font><br><br>
			<font class="boy">I'll continue to update this page until it's officially released,<br>
			so make sure to check back often!</font>
		</h1>
		<?php include("counter.php"); ?>	
	    </div> <!-- /wrapper -->
		<audio src="songs/1. Overture.mp3" preload="auto"></audio>
		<audio src="songs/2. Lights Out.mp3" preload="auto"></audio>
		<audio src="songs/3. And I'm Gone.mp3" preload="auto"></audio>
		<audio src="songs/4. Be Seen on Halloween.mp3" preload="auto"></audio>
		<audio src="songs/5. Two for the Toads.mp3" preload="auto"></audio>
		<audio src="songs/6. Good Idea, Bad Execution.mp3" preload="auto"></audio>
		<audio src="songs/7. Echoes of the Moon.mp3" preload="auto"></audio>
		<audio src="songs/8. Give It a Try.mp3" preload="auto"></audio>
		<audio src="songs/9. Be Seein' You.mp3" preload="auto"></audio>

		<!--///////////////////////////////////////////////////////////////////-->
		<!--///////////////////////////////////////////////////////////////////-->
		<!--/////////////////////////// CODE //////////////////////////////////-->
		<!--///////////////////////////////////////////////////////////////////-->
		<!--///////////////////////////////////////////////////////////////////-->

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
			/* Implementation of the presentation of the audio player */

			const playIconContainer = document.getElementById('play-icon');
			const audioPlayerContainer = document.getElementById('audio-player-container');
			const seekSlider = document.getElementById('seek-slider');
			const muteIconContainer = document.getElementById('mute-icon');
			const lyrics = document.getElementById('lyrics');
			const current_lyrics = document.getElementById("current_lyrics");
			const lyr2 = document.getElementById("lyrics2");
			const lyr3 = document.getElementById("lyrics3");
			const lyr4 = document.getElementById("lyrics4");
			const lyr6 = document.getElementById("lyrics6");
			const lyr7 = document.getElementById("lyrics7");
			const lyr8 = document.getElementById("lyrics8");
			const np = document.getElementById("now_playing");
			const names = ["",
							"1. Overture",
							"2. Lights Out",
							"3. And I'm Gone",
							"4. Be Seen on Halloween",
							"5. Two for the Toads",
							"6. Good Idea, Bad Execution",
							"7. Echoes of the Moon",
							"8. Give It a Try",
							"9. Be Seein' You"];
			let playState = 'play';
			let muteState = 'unmute';
			let song = 1;


			/* Preload all the images so they load smoothly */
			var images = [];
			
			preload(
	    	"images/1.jpg",
				"images/2.jpg",
				"images/3.jpg",
				"images/4.jpg",
				"images/5.jpg",
				"images/6.jpg",
				"images/7.jpg",
				"images/8.jpg",
				"images/9.jpg"
			)
			function preload() {
			    for (var i = 0; i < arguments.length; i++) {
			        images[i] = new Image();
			        images[i].src = preload.arguments[i];
			    }
			}
			const updatePlayState = () => {
				if(playState === 'play') {
					audio.play();
					current_lyrics.style.animationPlayState = 'running';
					requestAnimationFrame(whilePlaying);
					playIconContainer.innerHTML = "<i class='material-icons'>pause</i>";
					playState = 'pause';
				} else {
					audio.pause();
					current_lyrics.style.animationPlayState = 'paused';
					cancelAnimationFrame(raf);
					playIconContainer.innerHTML = "<i class='material-icons'>play_arrow</i>";
					playState = 'play';
				}
			}

			playIconContainer.addEventListener('click', () => {
				updatePlayState();
			});

			muteIconContainer.addEventListener('click', () => {
				if(muteState === 'unmute') {
					audio.muted = true;
					muteIconContainer.innerHTML = "<i class='material-icons'>volume_off</i>";
					muteState = 'mute';
				} else {
					audio.muted = false;
					muteIconContainer.innerHTML = "<i class='material-icons'>volume_up</i>";
					muteState = 'unmute';
				}
			});

			const showRangeProgress = (rangeInput) => {
				temp = 60*(rangeInput.value/audio.duration)-20;
				seekSlider.style.setProperty("--nudgeFactor", temp + "px");
				audioPlayerContainer.style.setProperty('--seek-before-width', rangeInput.value / rangeInput.max * 100 + '%');
			}

			seekSlider.addEventListener('input', (e) => {
				showRangeProgress(e.target);
			});

			/* Implementation of the functionality of the audio player */
			const audio = document.querySelector('audio');
			const durationContainer = document.getElementById('duration');
			const currentTimeContainer = document.getElementById('current-time');
			let raf = null;

			const calculateTime = (secs) => {
				const minutes = Math.floor(secs / 60);
				const seconds = Math.floor(secs % 60);
				const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
				return `${minutes}:${returnedSeconds}`;
			}

			function displayDuration () {
				durationContainer.textContent = calculateTime(audio.duration);
			}

			const setSliderMax = () => {
				seekSlider.max = Math.floor(audio.duration);
			}

			const displayBufferedAmount = () => {
				bufferedAmount = 0;
				if (audio.buffered.length >= 1) {
					bufferedAmount = Math.floor(audio.buffered.end(audio.buffered.length - 1));
				}
				audioPlayerContainer.style.setProperty('--buffered-width', `${(bufferedAmount / seekSlider.max) * 100}%`);
			}

			const whilePlaying = () => {
				seekSlider.value = audio.currentTime;
				currentTimeContainer.textContent = calculateTime(Math.floor(seekSlider.value));
				var temp;
				temp = 60*(audio.currentTime/audio.duration)-20;
				seekSlider.style.setProperty("--nudgeFactor", temp + "px");
				audioPlayerContainer.style.setProperty('--seek-before-width', `${(seekSlider.value / seekSlider.max) * 100}%`);
				raf = requestAnimationFrame(whilePlaying);
			}

			const nextSong = () => {
				if (song == 9) {
					updatePlayState();
				} else {
					song++;
					changeSong(song);
				}
				seekSlider.value = Math.floor(audio.currentTime);
				currentTimeContainer.textContent = calculateTime(seekSlider.value);
				audioPlayerContainer.style.setProperty('--seek-before-width', `${seekSlider.value / seekSlider.max * 100}%`);
				raf = requestAnimationFrame(whilePlaying);
			}

			const prevSong = () => {
				if (song == 1) {
					changeSong(song);
					updatePlayState();
				} else {
					if (audio.currentTime < 1) {
						song--;
					}
					changeSong(song);
				}
				seekSlider.value = Math.floor(audio.currentTime);
				currentTimeContainer.textContent = calculateTime(seekSlider.value);
				audioPlayerContainer.style.setProperty('--seek-before-width', `${seekSlider.value / seekSlider.max * 100}%`);
				raf = requestAnimationFrame(whilePlaying);
			}

			if (audio.readyState > 0) {
				displayDuration();
				setSliderMax();
				displayBufferedAmount();
			} else {
				audio.addEventListener('loadedmetadata', () => {
					displayDuration();
					setSliderMax();
					displayBufferedAmount();
				});
			}

			function reset_animation() {
 			 var el = document.getElementById('current_lyrics');
			 el.style.animation = 'none';
			 el.offsetHeight; /* trigger reflow */
			}

			audio.addEventListener('durationchange', () => {
				displayDuration();
				setSliderMax();
				displayBufferedAmount();
			});

			function updateAnimation() {
				reset_animation();
        current_lyrics.style.top = "calc(100% - 200px - " + seekSlider.value/audio.duration*current_lyrics.clientHeight + "px)";
				var calc = audio.duration;
				current_lyrics.style.setProperty("animation", "my-animation linear " + calc + "s infinite");
				if(playState === 'play') {
					current_lyrics.style.animationPlayState = 'paused';
				} else {
					current_lyrics.style.animationPlayState = 'running';
				}
			}

			audio.addEventListener('progress', displayBufferedAmount);

			audio.addEventListener('ended', nextSong);

			seekSlider.addEventListener('input', () => {
				current_lyrics.style.animationPlayState = 'paused';
				currentTimeContainer.textContent = calculateTime(seekSlider.value);
				if(!audio.paused) {
					cancelAnimationFrame(raf);
				}
				updateAnimation();
			});

			// Restart the animation when let go of the mouse (or touch!)
			function mouse_up() {
				if (playState == "pause") {
					current_lyrics.style.animationPlayState = 'running';
				}
			}

			seekSlider.addEventListener('change', () => {
				audio.currentTime = seekSlider.value;
				if(!audio.paused) {
					requestAnimationFrame(whilePlaying);
				}
			});


			function deleteCurtains() {
				document.getElementById("move_left").remove();
				document.getElementById("move_right").remove();
			}

			function move() {
				document.getElementById("move_left").style.left = "-55%";
				document.getElementById("move_right").style.left = "105%";
				document.getElementById("curtain").remove();
				setTimeout(deleteCurtains, 5500); // For performance!
				changeSong(1);
			}

			/* Super cool function right here!  */
			function changeSong(s) {
				song = s;
				audio.src='songs/' + names[s] + '.mp3';
				audio.load();
				playState = 'play'
				updatePlayState();
				document.getElementById('art').src='images/' + s + '.jpg';
				lyr2.style.visibility = "hidden";
				lyr3.style.visibility = "hidden";
				lyr4.style.visibility = "hidden";
				lyr6.style.visibility = "hidden";
				lyr7.style.visibility = "hidden";
				lyr8.style.visibility = "hidden";
				current_lyrics.style.top = "calc(100% - 200px)"; // Make the lyrics come from the bottom!
				reset_animation();
				np.selectedIndex = s-1;
				if (s == 2) {
					lyr2.style.visibility = "visible";
					current_lyrics.style.height = lyr2.offsetHeight + "px";
					current_lyrics.style.setProperty("animation", "my-animation linear " + 152 + "s infinite");
				}
				else if (s == 3) {
					lyr3.style.visibility = "visible";
					current_lyrics.style.height = lyr3.offsetHeight + "px";
					current_lyrics.style.setProperty("animation", "my-animation linear " + 203 + "s infinite");
				}
				else if (s == 4) {
					lyr4.style.visibility = "visible";
					current_lyrics.style.height = lyr4.offsetHeight + "px";
					current_lyrics.style.setProperty("animation", "my-animation linear " + 216 + "s infinite");
				}
				else if (s == 6) {
					lyr6.style.visibility = "visible";
					current_lyrics.style.height = lyr6.offsetHeight + "px";
					current_lyrics.style.setProperty("animation", "my-animation linear " + 332 + "s infinite");
				}
				else if (s == 7) {
					lyr7.style.visibility = "visible";
					current_lyrics.style.height = lyr7.offsetHeight + "px";
					current_lyrics.style.setProperty("animation", "my-animation linear " + 300 + "s infinite");
				}
				else if (s == 8) {
					lyr8.style.visibility = "visible";
					current_lyrics.style.height = lyr8.offsetHeight + "px";
					current_lyrics.style.setProperty("animation", "my-animation linear " + 242 + "s infinite");
				}
				else {
				}

			}

			/* Implementation of the Media Session API */
			if('mediaSession' in navigator) {
				navigator.mediaSession.metadata = new MediaMetadata({
					title: 'Halloween Album',
					artist: 'Quantum Safari',
					album: 'Lights Out: A Halloween Adventure',
					artwork: [
/*						{ src: 'images/1/96.jpg',  sizes: '96x96',   type: 'image/png' },
						{ src: 'images/1/128.jpg', sizes: '128x128', type: 'image/png' },
						{ src: 'images/1/192.jpg', sizes: '192x192', type: 'image/png' },
						{ src: 'images/1/256.jpg', sizes: '256x256', type: 'image/png' },
						{ src: 'images/1/384.jpg', sizes: '384x384', type: 'image/png' },
						{ src: 'images/1/512.jpg', sizes: '512x512', type: 'image/png' },*/
					]
				});
				navigator.mediaSession.setActionHandler('play', () => {
					if(playState === 'play') {
						audio.play();
						requestAnimationFrame(whilePlaying);
						playState = 'pause';
					} else {
						audio.pause();
						cancelAnimationFrame(raf);
						playState = 'play';
					}
				});
				navigator.mediaSession.setActionHandler('pause', () => {
					if(playState === 'play') {
						audio.play();
						requestAnimationFrame(whilePlaying);
						playState = 'pause';
					} else {
						audio.pause();
						cancelAnimationFrame(raf);
						playState = 'play';
					}
				});
				navigator.mediaSession.setActionHandler('nexttrack', (details) => {
					nextSong();
				});
				navigator.mediaSession.setActionHandler('previoustrack', (details) => {
					prevSong();
				});
				navigator.mediaSession.setActionHandler('seekbackward', (details) => {
					audio.currentTime = audio.currentTime - (details.seekOffset || 10);
				});
				navigator.mediaSession.setActionHandler('seekforward', (details) => {
					audio.currentTime = audio.currentTime + (details.seekOffset || 10);
				});
				navigator.mediaSession.setActionHandler('seekto', (details) => {
					if (details.fastSeek && 'fastSeek' in audio) {
					audio.fastSeek(details.seekTime);
					return;
					}
					audio.currentTime = details.seekTime;
				});
				navigator.mediaSession.setActionHandler('stop', () => {
					audio.currentTime = 0;
					seekSlider.value = 0;
					audioPlayerContainer.style.setProperty('--seek-before-width', '0%');
					currentTimeContainer.textContent = '0:00';
					if(playState === 'pause') {
						cancelAnimationFrame(raf);
						playState = 'play';
					}
				});
			}
			</script>


	</body>
</html>