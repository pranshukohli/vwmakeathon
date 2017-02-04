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
	$result = sqlsrv_query($conn, "SELECT TOP 1 * FROM table1 ORDER BY col1 DESC");
	$row = sqlsrv_fetch_array($result);
	if($row['col2']<10){
			echo '<h1>WELL_1_LEVEL:0'.$row['col2'].'</h1>';

	}
	else{
	echo '<h1>WELL_1_LEVEL:'.$row['col2'].'</h1>';
	}
	echo '2';
	sqlsrv_close( $conn);
?>
	</body>
	</HTML>
