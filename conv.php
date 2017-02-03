<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo '7:12';

		$address = "Brooklyn+NY+USA";

//set map api url
$url = "https://thingspeak.com/channels/222498/feed.json";

//call api
		$json = file_get_contents($url);

//$json = '{"channel":{"id":222498,"name":"adddata","latitude":"0.0","longitude":"0.0","field1":"col1","field2":"col2","created_at":"2017-02-03T15:35:21+05:30","updated_at":"2017-02-03T18:56:12+05:30","last_entry_id":58},"feeds":[{"created_at":"2017-02-03T15:36:10+05:30","entry_id":1,"field1":"0"},{"created_at":"2017-02-03T15:43:04+05:30","entry_id":2,"field1":"0"},{"created_at":"2017-02-03T15:43:21+05:30","entry_id":3,"field1":"0"}]}';
		$json = json_decode($json, True);
$lat = $json->feeds[0]->field1;
echo "Latitude: " . $lat;
  ?>
	</BODY>
</HTML>
