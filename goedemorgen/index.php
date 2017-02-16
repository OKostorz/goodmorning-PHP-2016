<?php
			date_default_timezone_set("Europe/Amsterdam");
			$t = date("H:i");

				$message= "";
					if ($t < "06:00" ) {
							$message = "Goedenacht";

						} 	else if ($t < "12:00") {
					 			$message = "Goedemorgen";

							}	else if ($t < "18:00") {
									$message = "Goedemiddag";

						 		} 	else {
							 			$message = "Goedenavond";
			 		}

			 	$message2 = "<br>Het is nu " . $t;
			 		
		?>
		
		<?php echo "<h3>" . $message . "</h3>"; ?>
		<?php echo "<h3>" . $message2 . "</h3>"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Goede PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="test.css">
	<link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">

</head>

<body class="<?php echo $message;?>">
		
</body>
</html>