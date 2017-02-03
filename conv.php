<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo '212312ahsg\ndsdfsdfsd';

		$data = file_get_contents ('https://thingspeak.com/channels/222498/field/1.json');
    $json = json_decode($data, TRUE);
		$json = json_decode($json->{'channel'});
echo "asdhajs";
    echo ('<pre> print the json ');
    print_r ($json);
    echo ('</pre>');
  ?>
	</BODY>
</HTML>
