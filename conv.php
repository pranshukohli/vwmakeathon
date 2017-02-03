<HTML>
	<HEAD>
		<TITLE>
			JSONTOARRAY
		</TITLE>
	</HEAD>
	<BODY>
<?php
		echo 'ahsg';
$data = file_get_contents('https://thingspeak.com/channels/222498/field/1.json');
	echo json_encode($data);
  ?>
	</BODY>
</HTML>
