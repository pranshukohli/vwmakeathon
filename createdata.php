<HTML>
	<HEAD>
		<TITLE>
			sdfgh
		</TITLE>
		</HEAD>
	<body>
		<?php
if( $_GET["q1"] || $_GET["q2"] ) {
	echo 'start';
$connectionInfo = array("UID" => "vwserver@vwserver", "pwd" => "PKazure28", "Database" => "store", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vwserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	if( $conn ) {
     echo "Connection established.<br>";
}else{
     echo "Connection could not be established.<br>";
     die( print_r( sqlsrv_errors(), true));



	echo '2j';
	}
	echo '3';
	sqlsrv_close( $conn);
}
?>
	</body>
</HTML>


