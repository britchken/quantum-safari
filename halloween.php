<!DOCTYPE HTML>
<html>
	<head>
		<title>Lights Out: A Halloween Adventure</title>
		<meta  http-equiv="Content-Type" content="application;charset=UTF-8">
		<meta name="description" content="Quantum Safari's newest release: a Halloween album that will knock your socks off and get you dancing!">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Creepster&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Permanent Marker&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Mansalva&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Londrina Solid&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Boogaloo&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Emilys Candy&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Coiny&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Eater&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css?family=Rubik Wet Paint&display=swap">
		<link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper">
			<div id="curtain">
				<div id="title">
					<font class="neonText" style="font-size:9vw;">
						Lights Out:<br>
					</font>	
					<font class="neonText" style="font-size:5vw;">
						A Halloween Adventure
					</font>	
				</div>
				<div class="start_button" onclick="move()" style="position:absolute; top:80%; left:50%; transform:translate(-50%, -50%);">
					<font color="#000" style="font-family: Creepster; font-size:8vw;">
					LET'S BEGIN</font>
				</div>
			</div>
			<div id="move_left">
				<div id="curtain_back"></div>
				<div class='rnInner'>
					<div class='rnUnit'></div><!--
				 --><div class='rnUnit'></div><!--
				 --><div class='rnUnit'></div><!--
				 --><div class='rnUnit'></div><!--
				 --><div class='rnUnit'></div><!--
				 --><div class='rnUnit'></div><!--
				--></div>
				<div id="curtain_rod"></div>
			</div>
			<div id="move_right">
				<div id="curtain_back"></div>
				<div class='rnInner'>
					<div class='rnUnit'></div><!--
					--><div class='rnUnit'></div><!--
					--><div class='rnUnit'></div><!--
					--><div class='rnUnit'></div><!--
					--><div class='rnUnit'></div><!--
					--><div class='rnUnit'></div><!--
				   --></div>
				<div id="curtain_rod"></div>
			</div><?php include("counter2.php"); ?><!--
         --><div class="main-content">
				<!-- Lyrics -->
					<div id="lyrics"><!--
  		             --><div id="lyrics1_emphasis"></div>
						<div id="current_lyrics" style="position:relative; z-index:1;">
						<div id="lyrics1" class="song">
<br><br><br>
<font class="boy">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<img alt="Boy" src="images/head.png" style="margin-left: 35px; transform: translateY(20px);"></img><br>
It's Halloween night
My one shot a year
The dark comes to life
but my bedtime draws near
Well the night has begun
Hello world, here I come 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</font>
							</div>
							<div id="lyrics2" class="song">
<br><br><br>
<font class="mom">Good night honey,
I've got candy to give out
Sweet dreams
Now I'll turn the lights out</font>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<font class="boy">
There’s only one chance a year to conquer the night,
But it’s always the same story, she turns out that dang light

So I’m stuck in here thinkin’ and dreamin’ of Halloween
Designing my own costumes that will never be seen

I know there’s something out there, a world outside this room,
Though so far I only know its reflection in the moon

Tonight will be different, I won’t go to sleep
this time around I pick trick over treat

See mom always told me, I’m her special little son
Now it’s time for someone special to have a little fun!
</font>
<br><br><br><br>
<font class="mom">
Oh honey? One more thing -

No matter how you’re feeling
Or what you’re gonna do
There will never be another
who could be a better you!
<br><br><br><br><br><br><br>
</font>
							</div>
							<div id="lyrics3" class="song">
<font class="boy">
And I'm gone.
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</font>
							</div>
							<div id="lyrics4" class="song">
<font class="host">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
Welcome to the Grooveyard
Let me introduce you
Come and meet my friends
Join the skeleton crew!


First a real-life ghost, not just a sheet with some holes
Though her love overflows, it’s oh so hard to get close
Let yourself be seen


On Halloween</font>
<br>
<font class="ghost">Helloooo helloooooooooooooooo
helooooo ooo oooooooohh helloooooooooo
ooooooohhh ho ho hoooooooooo ohello</font>
<br>
<font class="host">
Come to the trick or treat suite
Tour my spooktacular pad
Not a Wax or Wayne in sight
So come out and take over the night

He’s a late-night DJ who can lay down a groove
But he’s a great fright we’d say if the lighting improved
Let yourself be seen</font>
<br>
<font class="wolf">Time to boogie, man!</font>

<font class="host">On Halloween
Halloween</font>

<font class="wolf">Yo, I just got to thinking
that this party was a dud
But now it's clear to me that
all we needed was fresh blood</font>

<font class="host">Hope you brought your dance moves kid,
I want to see your style
So get down beside the flicker of a pumpkin's smile

Stay a while!</font>

<br><br><br><br><br><br><br>
<font class="wolf">
Happy Halloween, kid
One, two, three...</font>
<font class="ghost">Boo!</font>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


							</div>
							<div id="lyrics6" class="song">
<div class="rainbow-text" style="font-family: Boogaloo; font-size:30pt; text-shadow: 0px 0px 8px rgba(0,0,0,0.5);">It's time for the show!</div>
<font class="host">It's a good idea, but bad execution,
I'm thinking that's not a great solution!
Hey, so come and play!</font>
<font class="boy">
How do you play?
</font>
<font color="#90A0E6" style="font-family: Boogaloo;">Let's all tell 'em why they're an idiot
Hear their bright ideas and why they didn't work
Finally we see they're just a little bit dumb!</font>
<font class="boy">
What? Who would want to play-
</font>
<font color="#90A0E6" style="font-family: Boogaloo;">Tonight's first contestant is a monster of a man
One bite from a werewolf had a-blown away his plan
Da da da dum, he lost everything - got cursed by cosmic fate:
The same moon that transforms him then illuminates his face

But he wouldn't give up easily; he had too much to lose
So he plans out his revenge and waits until the next full moon
He climbs up to the highest tree and jumps into the sky
He sets his sights upon the moon with a fire in his eyes

He grabs ahold with all his power, here's the zero hour,
It's beginning
He digs his claws into the sides, his retribution satisfied,
He's grinning

And he rips it and whacks it and in one fell swoop
He sweeps it and swipes it and CRACKS it to the side
AND IT TURNS!!!!!!!!
AND AS IT DOES THE PART OF HIM
THAT GAVE HIM STRENGTH TO CLIMB AND JUMP
AND CLAW AND TEAR APART THE MOON WAS GONE!!!!!!

AND HE COULD NOT HOLD ON!!!!!!
NO HE COULD NOT HOLD ON!!!!!!!!!
<br><br>
So come on down and let's all tell ‘em why! Two, three -
It was a good idea, but bad execution
I'm thinking that's not a great solution

Hey, so come and play!

And let's all tell 'em why they're an idiot
Hear their bright ideas and why they didn't work
Finally we see they're just a little bit dumb!</font>
<font class="boy">
No, this is a terrible game-
</font>
<font color="#90A0E6" style="font-family: Boogaloo;">Next up is a lonely ghost who liked to be alive
She thought she wouldn't have to make new friends after she died
Da dum da dum. Now she's feeling down - to be alone is tough
She wants her old friends back but they're not dying fast enough!!

And there's one guy in particular she misses most of all
He was charming, he was clever, he made winter feel like fall
She died too soon to tell him and they never got to be
She sees an opportunity to fulfill destiny!

She floats back into town, dressed up in her finest gown,
She was stunning
But as she saunters past, everyone becomes aghast,
They start running

And she's moaning and wailing, in her desperation
She starts scarin’ and spookin', there's a mass migration
IT'S A GHOST TOWN!!!!!!!!
SHE STOPS THERE WRAPPED IN SPACE AND SKY
AND WONDERS HOW THE ONLY LIFE
SHE EVER KNEW AND ALL HER FRIENDS WERE GONE!!!!!!

AND SHE COULD NOT MOVE ON!!!!
NO SHE COULD NOT MOVE ON!!!!!!!!
<br>
So come on down and let's all tell her why!
Let's all tell her why!
<br><br><br><br><br>
It's the good idea hall of fame!

Doors with hinges on the bottom, a counterclockwise clock
How 'bout online cash deposit? And made-for-two-feet socks
Why not an uneven staircase to trip burglars sneakin' in
And lottery tickets without a chance to win

I'm thinkin' five finger nail clippers,
Sweaters for your fish
Individually wrapped cereal,
Or a washer for one dish! Let's hear these...

...Good ideas, with bad execution!
That's the thing we're lookin for, that's the right solution
Like a floor-mounted shower head that sprays you from below
Or a verbal traffic signal: "stop stop stop, okay go!"
No doubt about it, we've got so much more in store!</font>

<font class="boy">No! I just can't take any more!
These are NOT good ideas, and this show isn't fun
I don't wanna play, and I'm not the only one
I'm gonna unplug the music, put an end to this scene
I won't let you take away my first Halloween!</font>
<font color="#90A0E6" style="font-family: Creepster; font-size:28pt;">
You think you're in control?
You're just a little boy!

Now let's tell you why you're an idiot
Turn the spotlights on -
You're now in the thick of it!
Let's take a look at your GOOD IDEA!

Tonight's last contestant is a kid who's all alone
Wanting to feel big, he runs away from home

BA DUM BA DUM

Do you feel safe?

Isn't it obvious this was all a big mistake?

What were you thinking?

WHAT ARE YOU DOING HERE?</font>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
							</div>
							<div id="lyrics7" class="song">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<font class="wolf">
Turn the light out, don't shine it on me
Turn the light out, don't let them see

Turn the light out, don't shine it on me
Turn the light out, don't let them see

Turn the light out, don't shine it on me
Turn the light out, don't let them see

Turn the light out, don't shine it on me
Turn the light out, don't let them see</font>
<br><br><br><br><br><br><br>
<font class="pipe">

Paint the pipe, just do the world a favor
It's not alright to say you'll do it later
Paint the pipe, just do the world a favor
It's not alright to say you'll do it later</font>
<font class="wolf">
<br><br><br><br><br>
The first time someone lays their eyes on me
They run away
The next time they see me...
Well, maybe that'll happen someday
<br>
So every night I perform for myself
At least the stars come out to see
And maybe one of these days I'll find love
Intergalactically
<br>
There used to be this comet,
I would count the weeks till she flew by
But every time she would say she's still waiting
Waiting to meteorite guy!
<br><br><br><br><br><br><br><br><br>

And that jealous moon's always there
Feels like I just can't win
When it starts to grow fat in the sides
I know it's gonna happen again
<br>
So just try to like me when
You have to bare your teeth to smile
When emotion is read from a face
I can only express something vile
<br>
And society longs for an outcast
They say opposites attract
But if you take pride in your self-reliance
You won’t much impress the pack
<br><br><br><br><br><br><br><br>
Oh no, not again!
<br><br><br><br>
RARARAHRARHHRAO </font>

<font class="boy">I'm not afraid of you</font>

<font class="wolf">ARGHRARHAH</font>

<font class="boy">Don't be afraid of me!</font>

<font class="wolf">RAWRGROWR</font>

<div style="font-family: Londrina Solid"><font color="#B0916E">I </font><font color="#B0916E">s</font><font color="#B1926F">e</font><font color="#C1A27F">e </font><font color="#C2A47F">y</font><font color="#D2B48F">o</font><font color="#D3B58F">u</font><font color="#E3C59F">,</font><font color="#EFCF9F"> A</font><font color="#FFDFAF">n</font>d I'm here.</div>
<br><br><br><br><br>
							</div>
							<div id="lyrics8" class="song">
<br><br><br><br><br><br><br><br>
<font class="boy_white">
Give it a try, be part of the world that surrounds you
Open your eyes, look around, go outside
One of these days, something good's gonna find you
And life won’t pass you by</font>

<font class="ghost">When I try to meet somebody
they stare right through me
And if they feel anything
it’s only slightly gloomy

The last time that I opened up
And didn’t have a thing to hide
Was back when I was with you
But that was on the other side
The other side</font>
<br>
<font class="boy_white">
Give it a try, be part of the world that surrounds you
Open your eyes, look around, go outside
One of these days, something good's gonna find you
And life won’t pass you by</font>
<br><br><br><br><br><br>
<font class="ghost">
I must admit I don’t see
Why I need to change
And what you’re asking me to do
Well, it sounds quite strange

The last time that I opened up
And didn’t have a thing to hide
Was back when I was with you
But that was on the other side
The other side</font>
<br>
<font class="boy_white">
Give it a try, be part of the world that surrounds you
Open your eyes, look around, go outside
One of these days, something good will astound you
And life won’t pass you by

Everybody’s had some time that they felt better
Close your eyes, remember back, look inside
If you still think that your ship can’t stand the weather
Well just hop on board mine
Let's go!</font>
<br><br><br><br><br><br><br>
<font class="boy_white">
And I'm always by your side, yeah, I'm always by your side
I'll always be there for you, you can be my spirit guide

Cause so what? You died! Okay? Take it as a given
You're in the after life, why not start after livin'!

You're gonna be just fine if you give it a go
And the one thing I'll tell you's the one thing I know

NO MATTER HOW YOU'RE FEELIN'
OR WHAT YOU'RE GOING THROUGH
THERE WILL NEVER BE ANOTHER
WHO COULD BE A BETTER YOU!

NO MATTER HOW YOU'RE FEELIN'
OR WHAT YOU'RE GONNA DO
THERE WILL NEVER BE ANOTHER
WHO COULD BE A BETTER YOU!
<br><br><br><br><br><br><br><br><br>
</font>
						</div>
					</div>
				</div>

				<!-- Paintings -->
				<img alt="Artwork for each song on the album" id="art" src="images/1.jpg">

			</div> <!-- /one -->
			<div id="art_back"></div>

			<!-- Audio Player -->
			<div id="audio-player-container" onmouseup="mouse_up()" ontouchend="mouse_up()">
				<audio src="songs/1. Overture.mp3" preload="auto"></audio>
				<div style="display:flex; align-items:center;">
					<span id="current-time" class="time">0:00</span>
					<input type="range" id="seek-slider" max="100" value="0" style="z-index:500;">
					<span id="duration" class="time">0:00</span>
				</div>
				<div style="position:relative;">
					<div style="position:absolute; text-align: center; width:100%; white-space: nowrap;">
						<select id="now_playing" onchange="changeSong(this.selectedIndex+1)">
							<option>1. Overture</option>
							<option>2. Lights Out</option>
							<option>3. And I'm Gone</option>
							<option>4. Be Seen on Halloween</option>
							<option>5. Two for the Toads</option>
							<option>6. Good Idea, Bad Execution</option>
							<option>7. Echoes of the Moon</option>
							<option>8. Give it a Try</option>
							<option>9. Be Seein' You</option>
						  </select>
						<button id="prev-icon" onclick="prevSong()"><i class='material-icons'>skip_previous</i></button>
						<button id="play-icon"><i class='material-icons'>play_arrow</i></button>
						<button id="next-icon" onclick="nextSong()"><i class='material-icons'>skip_next</i></button>
						<button id="mute-icon"><i class='material-icons'>volume_up</i></button>
					</div>
				</div>
			</div>

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
		<script>
			/* Implementation of the presentation of the audio player */

			const playIconContainer = document.getElementById('play-icon');
			const audioPlayerContainer = document.getElementById('audio-player-container');
			const seekSlider = document.getElementById('seek-slider');
			const muteIconContainer = document.getElementById('mute-icon');
			const lyrics = document.getElementById('lyrics');
			const current_lyrics = document.getElementById("current_lyrics");
			const lyr1 = document.getElementById("lyrics1");
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

			/* TIMER STUFF */
			timer_interval = setInterval(timer_step, 10);
			function timer_step() {
				var now =  audio.currentTime;
				if (song == 1) {
					if (now < 197) {
						lyr1.style.visibility = "visible";
						document.body.style.backgroundColor = "#5e42a6";
						lyrics1_emphasis.innerHTML = "";
					} else if (now > 202.260) {
						lyrics1_emphasis.innerHTML = "";
					} else {
						lyr1.style.visibility = "hidden";
						if (now < 197.000) {
							document.body.style.backgroundColor = "#5e42a6";
							lyrics1_emphasis.innerHTML = "";
						} else if (now > 199.520) {
							document.body.style.backgroundColor = "#5e42a6";
							lyrics1_emphasis.innerHTML = "<font style=\"color: #c8a176; font-family: Londrina Solid\">SCENE!</font>";
						} else if (now > 199.100) {
							document.body.style.backgroundColor = "#555301";
							lyrics1_emphasis.innerHTML = "<font style=\"color: #c8a176; font-family: Londrina Solid\">THE</font>";
						} else if (now > 198.680) {
							document.body.style.backgroundColor = "#bc5423";
							lyrics1_emphasis.innerHTML = "<font style=\"color: #c8a176; font-family: Londrina Solid\">OF</font>";
						} else if (now > 198.260) {
							document.body.style.backgroundColor = "#555301";
							lyrics1_emphasis.innerHTML = "<font style=\"color: #c8a176; font-family: Londrina Solid\">PART</font>";
						} else if (now > 197.840) {
							document.body.style.backgroundColor = "#bc5423";
							lyrics1_emphasis.innerHTML = "<font style=\"color: #c8a176; font-family: Londrina Solid\">BE</font>";
						} else if (now > 197.420) {
							document.body.style.backgroundColor = "#555301";
							lyrics1_emphasis.innerHTML = "<font style=\"color: #c8a176; font-family: Londrina Solid\">WILL</font>";
						} else if (now > 197.000) {
							document.body.style.backgroundColor = "#bc5423";
							lyrics1_emphasis.innerHTML = "<font style=\"color: #c8a176; font-family: Londrina Solid\">I</font>";
						}
					}
				}
			}

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
                current_lyrics.style.top = "calc(100% - 300px - " + seekSlider.value/audio.duration*current_lyrics.clientHeight + "px)";
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

			document.getElementById("wrapper").style.setProperty("--fix-height", "100vh");

			window.addEventListener('resize', function(event){
				document.getElementById("wrapper").style.setProperty("--fix-height", window.innerHeight + "px");
			});

			/* Super cool function right here!  */
			function changeSong(s) {
				document.getElementById("wrapper").style.setProperty("--fix-height", window.innerHeight + "px");
				song = s;
				audio.src='songs/' + names[s] + '.mp3';
				audio.load();
				playState = 'play'
				updatePlayState();
				document.getElementById('art').src='images/' + s + '.jpg';
				lyr1.style.visibility = "hidden";
				lyr2.style.visibility = "hidden";
				lyr3.style.visibility = "hidden";
				lyr4.style.visibility = "hidden";
				lyr6.style.visibility = "hidden";
				lyr7.style.visibility = "hidden";
				lyr8.style.visibility = "hidden";
				current_lyrics.style.top = "calc(100% - 300px)"; // Make the lyrics come from the bottom!
				reset_animation();
				np.selectedIndex = s-1;
				if (s == 1) {
					lyr1.style.visibility = "visible";
					current_lyrics.style.height = lyr1.offsetHeight + "px";
                    current_lyrics.style.setProperty("animation", "my-animation linear " + 403 + "s infinite");
				}
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
					title: 'Lights Out: A Halloween Adventure',
					artist: 'Quantum Safari',
					album: 'Lights Out: A Halloween Adventure',
					artwork: [
						/*{ src: 'images/1/96.jpg',  sizes: '96x96',   type: 'image/png' },
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
