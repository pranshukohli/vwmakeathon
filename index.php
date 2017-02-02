

<html>
<head>
<title>
TESTING AZURE
</title>
</head>

<body>
<h1>qasdfghjkl</h1>
<br><br>
<h1>TESTNG TESTING 123</h1>
</body>
  
  
</html>

<?php
$connectionInfo = array("UID" => "vwserver@vwserver", "pwd" => "PKazure28", "Database" => "store", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vwserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
$result = mysqli_query("select * from store where 1",$conn);

while ($row = mysqli_fetch_array($result)){
	echo '1';
	echo $row['col1'];
  echo $row['col2'];
}
?>
