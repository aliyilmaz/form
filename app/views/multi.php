<!DOCTYPE html>
<html>
<head>
	<base href="<?=$this->base_url;?>">
	<script src="public/mind.js"></script>
	<title>JavaScript & PHP file upload</title>
	<link rel="shortcut icon" href="#">
</head>
<body>

	<form id="example">
		<h4>input (text)</h4>
		<input type="text" name="username" id="username" placeholder="text"><br>
		
		<h4>input (password)</h4>
		<input type="password" name="password" id="password" placeholder="password"><br>
		
		<h4>input (date)</h4>
		<input type="date" name="created_at"><br>

		<h4>input (checkbox)</h4>
		<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
		<label for="vehicle1"> I have a bike</label><br>
		<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
		<label for="vehicle2"> I have a car</label><br>
		<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
		<label for="vehicle3"> I have a boat</label><br>

		<h4>input (radio)</h4>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>

		<h4>input (file)</h4>
		<input type="file" name="file""><br>

		<h4>input (file(s))</h4>
		<input type="file" name="files[]" multiple>

		<h4>select</h4>
		<select name="cars" id="cars">
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="mercedes">Mercedes</option>
			<option value="audi">Audi</option>
		</select>
		
		<h4>textarea</h4>
		<textarea name="content"></textarea><br>
		<div id="status"></div>
		<input type="button" id="btn_multi" value="Send">

	</form>
	
	<script>
	clickItem('#btn_multi', function(){
		// url, data, function
		actionPost("api/form", formSerialize("#example"), function(response){

		// element, data
		appendItem("#status", response);
		console.log(response);
		});
	});
			
	</script>
</body>
</html>