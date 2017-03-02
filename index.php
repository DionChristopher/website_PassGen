<?php
	
	require 'scripts/gen.php';

	if(isset($_POST['opt1'])) {
    	$opt1 = true;
	}

	if(isset($_POST['opt2'])) {
    	$opt2 = true;
	}

	if(isset($_POST['opt3'])) {
    	$opt3 = true;
	}

	if(isset($_POST['opt4'])) {
    	$opt4 = true;
	}

	$result = passGen($opt1, $opt2, $opt3, $opt4, $_POST['length']);

?>

<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" href="styles/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<title>PassGen</title>
	</head>


	<body>

			<div class="col-lg-4 col-lg-offset-4">

					<div class="container">

						<form action="index.php" method="POST">
							
							<div class="checkbox">
  								<label><input type="checkbox" name="opt1" value="true">Uppercase Letters</label>
							</div>
							<div class="checkbox">
  								<label><input type="checkbox" name="opt2" value="true">Lowercase Letters</label>
							</div>
							<div class="checkbox">
  								<label><input type="checkbox" name="opt3" value="true">Numbers</label>
							</div>
							<div class="checkbox">
  								<label><input type="checkbox" name="opt4" value="true">Special Characters</label>
							</div>
							
							<div class="input-group col-lg-3">
								<span class="input-group-addon">Length</span>
								<input type="text" class="form-control" name="length"></input>
							</div>
							
							<input class="btn btn-success" type="submit" value="Generate"></input>
							
						</form>
						
						<label><?php echo $result?></label>

					</div>

				</div>
		
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<script src="scripts/btt.js"></script>

	</body>

</html>