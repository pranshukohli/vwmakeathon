<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo 'ahsg\n';
$data = file_get_contents('https://thingspeak.com/channels/222498/field/1.json');
	$data2 = json_encode($data,True);
		echo $data2;
  ?>
	</BODY>
</HTML>
