<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo '6:26';

		$address = "Brooklyn+NY+USA";

//set map api url
$url = "http://maps.google.com/maps/api/geocode/json?address=$address";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$lat = $json->result[0]->address_components[0]->long_name;

echo "Latitude: " . $lat;
  ?>
	</BODY>
</HTML>
