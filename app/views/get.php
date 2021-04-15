<!DOCTYPE html>
<html>
<head>
	<base href="<?=$this->base_url;?>">
	<title>Get</title>
	<link rel="shortcut icon" href="#">
	<script src="public/mind.js"></script>
</head>
<body>
    <div id="status"></div>
    <script>
		// url, function
		actionGet("api/get", function(response){
				// element, data
				appendItem("#status", response);
				console.log(response);
			});
			
	</script>
</body>
</html>

