<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MND TRCK</title>

	<meta name="description" content="MND TRCK is a Bochum based soul/jazz/R&B/younameit band.">
	<meta name="author" content="MND TRCK, Ruben Philipp">

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i|Proza+Libre:400,400i,500" rel="stylesheet">

	<!-- Pure.css -->
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">

	<link rel="stylesheet" href="styles/basic.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

	<center>
		<div id="cover-photo">
			<img src="images/mndtrckfriends.png" alt="MND TRCK and friends" />
		</div>
	</center>

	<center><div class="line1"></div></center>

	<center>
		<section id="player">
			<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=4248105612/size=large/bgcol=ffffff/linkcol=333333/tracklist=false/artwork=small/track=2209764668/transparent=true/" seamless><a href="http://mndtrck.bandcamp.com/album/lstn">LSTN! by MND TRCK</a></iframe>
		</section>
	</center>

	<center><div class="line1"></div></center>

	<center>
		<section id="tour-dates">
			<!--<h2 style="color:rgb(0,0,0);">Tour Dates</h2>-->
	          <center style="color:rgb(0,0,0);">
	            <a href="http://www.songkick.com/artists/8767809" class="songkick-widget" data-theme="light" data-detect-style="true" data-background-color="transparent"></a>
	            <script src="//widget.songkick.com/widget.js"></script>
	          </center>
		</section>
	</center>

	<center><div class="line1"></div></center>

	<center>
		<section id="social-icons">
			<h3>dig into our universe on…</h3>
	        <a href="http://facebook.com/mndtrck/" title="Facebook">Facebook</a>
	        <a href="http://soundcloud.com/mndtrck" title="SoundCloud">SoundCloud</a>
	        <a href="https://play.spotify.com/artist/7FlDuXegcfInlbJjyp88me" title="Spotify">Spotify</a>
	        <a href="https://itun.es/de/k-kJcb" title="Apple Music">Apple Music</a>
		</section>
	</center>

	<center>
		<section id="copyright-notice">
		<p>&copy; <?= date("Y") ?> by MND TRCK — <a href="http://www.rubenphilipp.com/imprint.php" id="imprint" title="imprint">Imprint</a></p>
		</section>
	</center>

</body>

</html>