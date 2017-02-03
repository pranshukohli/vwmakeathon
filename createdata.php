<HTML>
	<HEAD>
		<TITLE>
			sdfgh
		</TITLE>
		</HEAD>
	<body>
		<?php

	echo 'startk';
$connectionInfo = array("UID" => "vwserver@vwserver", "pwd" => "PKazure28", "Database" => "store", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vwserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	if( $conn ) {
     echo "Connection established.<br>";
}else{
     echo "Connection could not be established.<br>";
	}
	

$url = "https://api.thingspeak.com/channels/222498/feed/last.json?api_key=JEJ6JPJUJ389UERW";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$lat = $json->field1;
echo "Latitude: " . $lat;

	$sql = "INSERT INTO table1 (col2) VALUES (?)";
	$params = array($lat);

	$stmt = sqlsrv_query( $conn, $sql, $params);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
		echo "Record add successfully";
	}


	echo '2j';
	
	echo '3ghhg';
	sqlsrv_close( $conn);

?>
	</body>
</HTML>


