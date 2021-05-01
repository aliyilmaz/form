<!DOCTYPE html>
<html>
<head>
	<base href="<?=$this->base_url;?>">
	<title>File upload</title>
	<link rel="shortcut icon" href="#">
	<script src="public/mind.js"></script>
</head>
<body>

	<form id="example">
		<h4>File</h4>
		<input type="file" name="file""><br>
		<?=$_SESSION['csrf']['input'];?>
		<div id="status"></div>
		<input type="button" id="btn_file_upload" value="Upload">

	</form>
	
	<script>

		clickItem('#btn_file_upload', function(){
			// url, data, function
			actionPost("api/form", "#example", function(response){

			// element, data
			appendItem("#status", response);
			console.log(response);
			});
		});
		
			
	</script>
</body>
</html>