<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
$str = file_get_contents('https://thingspeak.com/channels/222498/field/1.json');
	$json = json_decode($str, true);
$data = json_decode($jasonval, TRUE);
	echo '<pre>' . print_r($json, true) . '</pre>';
  ?>
	</BODY>
</HTML>
