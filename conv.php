<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo '6:47';

		$address = "Brooklyn+NY+USA";

//set map api url
$url = "http://maps.google.com/maps/api/geocode/json?address=$address";

//call api
$json = file_get_contents($url);
		$json = json_decode($json);
$lat = $json->results[0]->geometry->location->lat;
echo "Latitude: " . $lat;
  ?>
	</BODY>
</HTML>
