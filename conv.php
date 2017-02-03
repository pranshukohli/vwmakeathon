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
$url = "https://thingspeak.com/channels/222498/field/1.json";

//call api
$json = {"channel":{"id":222498,"name":"adddata","latitude":"0.0","longitude":"0.0","field1":"col1","field2":"col2","created_at":"2017-02-03T15:35:21+05:30","updated_at":"2017-02-03T17:48:53+05:30","last_entry_id":57},"feeds":[{"created_at":"2017-02-03T15:36:10+05:30","entry_id":1,"field1":"0"},{"created_at":"2017-02-03T15:43:04+05:30","entry_id":2,"field1":"0"},{"created_at":"2017-02-03T15:43:21+05:30","entry_id":3,"field1":"0"},{"created_at":"2017-02-03T15:46:32+05:30","entry_id":4,"field1":null},{"created_at":"2017-02-03T15:52:10+05:30","entry_id":5,"field1":"1"},{"created_at":"2017-02-03T15:53:35+05:30","entry_id":6,"field1":"0"},{"created_at":"2017-02-03T15:55:54+05:30","entry_id":7,"field1":"0"},{"created_at":"2017-02-03T15:57:56+05:30","entry_id":8,"field1":"43"},{"created_at":"2017-02-03T15:59:21+05:30","entry_id":9,"field1":"144"},{"created_at":"2017-02-03T16:00:12+05:30","entry_id":10,"field1":"0"},{"created_at":"2017-02-03T16:01:37+05:30","entry_id":11,"field1":"10"},{"created_at":"2017-02-03T16:02:29+05:30","entry_id":12,"field1":"4"},{"created_at":"2017-02-03T16:02:45+05:30","entry_id":13,"field1":"0"},{"created_at":"2017-02-03T16:03:36+05:30","entry_id":14,"field1":"0"},{"created_at":"2017-02-03T16:05:01+05:30","entry_id":15,"field1":"0"},{"created_at":"2017-02-03T16:08:09+05:30","entry_id":16,"field1":"0"},{"created_at":"2017-02-03T16:08:25+05:30","entry_id":17,"field1":"0"},{"created_at":"2017-02-03T16:12:25+05:30","entry_id":18,"field1":"0"},{"created_at":"2017-02-03T16:13:34+05:30","entry_id":19,"field1":"0"},{"created_at":"2017-02-03T16:14:24+05:30","entry_id":20,"field1":"0"},{"created_at":"2017-02-03T16:15:15+05:30","entry_id":21,"field1":"0"},{"created_at":"2017-02-03T16:16:40+05:30","entry_id":22,"field1":"9"},{"created_at":"2017-02-03T16:20:06+05:30","entry_id":23,"field1":"12"},{"created_at":"2017-02-03T16:22:57+05:30","entry_id":24,"field1":"11"},{"created_at":"2017-02-03T16:25:48+05:30","entry_id":25,"field1":"11"},{"created_at":"2017-02-03T16:26:05+05:30","entry_id":26,"field1":"10"},{"created_at":"2017-02-03T16:26:21+05:30","entry_id":27,"field1":"12"},{"created_at":"2017-02-03T16:26:38+05:30","entry_id":28,"field1":"10"},{"created_at":"2017-02-03T16:32:37+05:30","entry_id":29,"field1":"10"},{"created_at":"2017-02-03T16:33:28+05:30","entry_id":30,"field1":"9"},{"created_at":"2017-02-03T16:36:36+05:30","entry_id":31,"field1":"8"},{"created_at":"2017-02-03T16:39:11+05:30","entry_id":32,"field1":"9"},{"created_at":"2017-02-03T16:42:52+05:30","entry_id":33,"field1":"10"},{"created_at":"2017-02-03T16:43:09+05:30","entry_id":34,"field1":"91"},{"created_at":"2017-02-03T16:44:33+05:30","entry_id":35,"field1":"9"},{"created_at":"2017-02-03T16:45:24+05:30","entry_id":36,"field1":"9"},{"created_at":"2017-02-03T17:17:56+05:30","entry_id":37,"field1":"0"},{"created_at":"2017-02-03T17:18:13+05:30","entry_id":38,"field1":"0"},{"created_at":"2017-02-03T17:19:48+05:30","entry_id":39,"field1":"5"},{"created_at":"2017-02-03T17:21:14+05:30","entry_id":40,"field1":"0"},{"created_at":"2017-02-03T17:21:57+05:30","entry_id":41,"field1":"0"},{"created_at":"2017-02-03T17:22:13+05:30","entry_id":42,"field1":"0"},{"created_at":"2017-02-03T17:22:39+05:30","entry_id":43,"field1":"7"},{"created_at":"2017-02-03T17:23:17+05:30","entry_id":44,"field1":"0"},{"created_at":"2017-02-03T17:25:30+05:30","entry_id":45,"field1":"0"},{"created_at":"2017-02-03T17:25:56+05:30","entry_id":46,"field1":"0"},{"created_at":"2017-02-03T17:26:55+05:30","entry_id":47,"field1":"8"},{"created_at":"2017-02-03T17:28:38+05:30","entry_id":48,"field1":"7"},{"created_at":"2017-02-03T17:29:11+05:30","entry_id":49,"field1":"8"},{"created_at":"2017-02-03T17:31:11+05:30","entry_id":50,"field1":"7"},{"created_at":"2017-02-03T17:36:38+05:30","entry_id":51,"field1":"0"},{"created_at":"2017-02-03T17:40:02+05:30","entry_id":52,"field1":"0"},{"created_at":"2017-02-03T17:41:28+05:30","entry_id":53,"field1":"0"},{"created_at":"2017-02-03T17:42:02+05:30","entry_id":54,"field1":"0"},{"created_at":"2017-02-03T17:47:12+05:30","entry_id":55,"field1":"0"},{"created_at":"2017-02-03T17:47:28+05:30","entry_id":56,"field1":"0"},{"created_at":"2017-02-03T17:48:53+05:30","entry_id":57,"field1":"0"}]}
$json = json_decode($json);
$lat = $json->channel->id;
echo "Latitude: " . $lat;
  ?>
	</BODY>
</HTML>
