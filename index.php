
<html>
<head>
<title>
	Makeathon
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>qasdfghjkl</h1>
<br><br>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<div ng-app="">
 
<p>Input something in the input box:</p>
<p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
<h2>Hello {{name}}</h2>

</div>

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
	$result = sqlsrv_query($conn, "select * from table1");
	echo '2j';
	while( $row = sqlsrv_fetch_array($result) ) {
    echo $row['col1'].", ".$row['col2']."<br>";
}
	echo '3';
	sqlsrv_close( $conn);
?>
	
	<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/222498/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

	<h1>TESTNG TESTING 123</h1>
</body>
  
  
</html>
