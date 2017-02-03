<HTML>
	<HEAD>
		<TITLE>
			sdfgh
		</TITLE>
		</HEAD>
	<body>
		<?php
if( $_GET["q1"] || $_GET["q2"] ) {
	echo 'startk';
$connectionInfo = array("UID" => "vwserver@vwserver", "pwd" => "PKazure28", "Database" => "store", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vwserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	if( $conn ) {
     echo "Connection established.<br>";
}else{
     echo "Connection could not be established.<br>";
	}
	$jsonval = https://thingspeak.com/channels/222498/field/1.json;
	echo $jsonval;
$data = json_decode($jasonval, TRUE);

	$sql = "INSERT INTO table1 (col1, col2) VALUES (?, ?)";
	$params = array($_GET["q1"], $_GET["q2"]);

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
}
?>
	</body>
</HTML>


