
<html>
<head>
<title>
	Makeathon
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="main.css">

<script>
function refr() {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "http://virtualworld.azurewebsites.net/createdata.php", true);
        xmlhttp.send();
    
}
</script>
</head>

<body>
	<h1 style="text-align:center">Makeathon 2K17</h1>
<h1 style="text-align:center">Water Level In Wells</h1>
<br><br>
	
	<div class="row">
		<div class="col-md-3"><span>Well 1</span>	
	  <iframe width=auto height=auto style="border: 1px solid #cccccc;" src="http://virtualworld.azurewebsites.net/conv.php"></iframe>
</div>
		<div class="col-md-3">	<span>Well 2</span>
	  <iframe width=auto height=auto style="border: 1px solid #cccccc;" src="http://virtualworld.azurewebsites.net/conv.php"></iframe>
</div>
		<div class="col-md-3">	<span>Well 3</span>
	  <iframe width=auto height=auto style="border: 1px solid #cccccc;" src="http://virtualworld.azurewebsites.net/conv.php"></iframe>
</div>
		<div class="col-md-3">	<span>Well 4</span>
	  <iframe width=auto height=auto style="border: 1px solid #cccccc;" src="http://virtualworld.azurewebsites.net/conv.php"></iframe>
</div>
  
</div>
	<br>
	<div>
		<button type="button" onclick="refr()">Refresh</button>
	</div>
	<br>
	<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/222498/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
<br>
		<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="http://virtualworld.azurewebsites.net/getlast.php"></iframe>
<br>
	
</body>
  
  
</html>
