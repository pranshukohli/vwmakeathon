<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo '6:51';

		$address = "Brooklyn+NY+USA";

//set map api url
$url = "https://thingspeak.com/channels/222498/field/1.json";

//call api
$json = file_get_contents($url);
		$json = json_decode($json);
$lat = $json->channel->id;
echo "Latitude: " . $lat;
  ?>
	</BODY>
</HTML>
