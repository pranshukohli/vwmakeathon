<HTML>
	<HEAD>
	<TITLE>
		QWERTYUJKKK
		</TITLE>
	</HEAD>
	


<body>
<?php
	echo 'start';
$connectionInfo = array("UID" => "vwserver@vwserver", "pwd" => "PKazure28", "Database" => "store", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vwserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	if( $conn ) {
     echo "Connection established.<br>";
}else{
     echo "Connection could not be established.<br>";
     die( print_r( sqlsrv_errors(), true));
}
	$result = sqlsrv_query($conn, "SELECT * FROM table1 WHERE value_1 > 0 ORDER BY value_1 DESC LIMIT 1");
	echo '2j';
$row = sqlsrv_fetch_array($result)
    echo $row['col1'].", ".$row['col2']."<br>";

	echo '3';
	sqlsrv_close( $conn);
?>
	</body>
	</HTML>
