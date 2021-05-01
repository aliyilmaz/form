<!DOCTYPE html>
<html>
<head>
	<base href="<?=$this->base_url;?>">
	<script src="public/mind.js"></script>
	<title>File(s) upload</title>
	<link rel="shortcut icon" href="#">
</head>
<body>

	<form id="example">
		
		<h4>File(s)</h4>
		<input type="file" name="files[]" multiple>
		<?=$_SESSION['csrf']['input'];?>
		<div id="status"></div>
		<input type="button" id="btn_files_upload" value="Upload">
	</form>

	<script>
		clickItem('#btn_files_upload', function(){
			// url, data, function
			actionPost("api/form", "#example", function(response){

				// element, data
				appendItem("#status", response);
				console.log(response);
			});
		})
	</script>
</body>
</html>