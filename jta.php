<?php
$url = "https://api.thingspeak.com/channels/222498/feed/last.json?api_key=JEJ6JPJUJ389UERW";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$lat = $json->field1;
echo "Latitude: " . $lat;

?>
