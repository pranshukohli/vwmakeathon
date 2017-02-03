<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo '6:39';

		$address = "Brooklyn+NY+USA";

//set map api url
$url = "https://thingspeak.com/channels/222498/field/1.json";

//call api
$json = '{"channel":{"id":"ok"}}';
		$json = json_decode($json);
$lat = $json->id;
echo "Latitude: " . $lat;
  ?>
	</BODY>
</HTML>
