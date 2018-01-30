<?php  
	date_default_timezone_set('Europe/Amsterdam');		
	$time = date("H:i");
	if($time >="00:00" && $time <"06:00"){
		echo '<h1 id="groet">Goede nacht!</h1>';
		echo '<p id="text">Het is nu <script src="liveclock.js"></script></p>';
		echo '<body style="background-image: url(foto/night.png)"';			
	}
	else if($time >="06:00" && $time <"12:00"){
		echo '<h1 id="groet">Goede morgen!</h1>';
		echo '<p id="text">Het is nu <script src="liveclock.js"></script></p>';
		echo '<body style="background-image: url(foto/morning.png)"';			
	}
	else if($time >="12:00" && $time <"18:00"){
		echo '<h1 id="groet">Goede middag!</h1>';
		echo '<p id="text">Het is nu <script src="liveclock.js"></script></p>';
		echo '<body style="background-image: url(foto/afternoon.png)"';			
	}
	else if($time >="18:00" && $time <="23:59"){			
		echo '<h1 id="groet">Goede avond!</h1>';
		echo '<p id="text">Het is nu <script src="liveclock.js"></script></p>';
		echo '<body style="background-image: url(foto/evening.png)"';			
	}		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Goede dag</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onLoad="show_clock()"></body>
</html>