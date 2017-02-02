
<html>
<head>
<title>
TESTING AZURE
</title>
</head>

<body>
<h1>qasdfghjkl</h1>
<br><br>


<?php
	echo 'start';
$connectionInfo = array("UID" => "vwserver@vwserver", "pwd" => "PKazure28", "Database" => "store", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vwserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
	$result = sqlsrv_query($conn, "select * from table1");
	echo '2j';
	while( $obj = sqlsrv_fetch_object( $result )) {
		echo $obj;
		echo 's';
              echo $obj->col1.'<br>';
		echo $obj->col2.'<br>';
        }
	echo '3';
?>
	<h1>TESTNG TESTING 123</h1>
</body>
  
  
</html>
