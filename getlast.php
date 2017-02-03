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
	$result = sqlsrv_query($conn, "SELECT TOP 1 * FROM Table ORDER BY col1 DESC");
	echo sqlsrv_fetch_array($result)['col1'];
	sqlsrv_close( $conn);
?>
	</body>
	</HTML>
