<?php

echo "<!DOCTYPE html>
<html>
	<head>
	<title>Promo Platform</title>
<meta charset=\"UTF-8\">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<link href=\"theme/smurfs/style.css\" type=\"text/css\" rel=\"stylesheet\" />
	<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/bootstrap/3.3.0/css/bootstrap.min.css\">	
	</head>
	<body style=\"margin: 0px; padding: 0px; \">
	
	<body style=\"margin: 0px; padding: 0px; width:100% background-color: #1e4394;\">

<div class=\"landing\"> </div>

<div class=\"smerfowanie\">
<img src=\"theme/smurfs/img/papasmerf.png\" class='image'/>
<h2 style='color:white; top:50%;'>Smerfowanie promoplatformy...</h2>
</div>


 <div class=\"sign\">            <div class=\"login_sign\">


<a class='login' href='$authUrl'><img src=\"google-login-button-asif18.png\" alt=\"Google login using php api for your website\" title=\"login with google\" /></a>
<img id=\"speaker\" src=\"theme/smurfs/img/speaker.png\" style=\"height:30px\" />

 </div>   </div>

	<div class=\"row col-md-12\" style=\"text-align:center;\" style=\"display: table;\">
	<div style=\"display: table-cell; vertical-align: middle;\">
	<video id=\"video\" autoplay oncanplaythrough=\"canPlayThrough()\">
		  <source src=\"theme/smurfs/img/intro.mp4\" type=\"video/mp4\" >
		  

		
		</video>
		</div>
		</div>
		<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<!-- Latest compiled and minified JavaScript -->
<script src=\"https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js\"></script>

<script>
// wyciszanie filmiku
$('#speaker').click(function() {

if ($('#video').prop('muted')) 
{
$('#video').prop('muted', false); //unmute
console.log('unmute');
}
else {
$('#video').prop('muted', true); //mute
console.log('mute');
}
});
</script>

<script>
// uruchomienie filmu, div ładowania znika po sekundzie
function canPlayThrough() {
console.log('canplaythrough');
setTimeout(function() {
$('.smerfowanie').fadeOut('slow');
}, 1000);
}
</script>

<script>
// div ładowania znika zawsze po 8 sekundach
setTimeout(function() {
$('.smerfowanie').fadeOut('slow');
}, 8000);
</script>

<script>
// logowanie google wychodzi na środek po zakończeniu filmiku
$('#video').bind('ended', function() {
$('.sign').css('bottom', '40%');
});
</script>
		</body>
		</head>
		</html>
		"
		
		?>
