<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Keys and Values</title>
</head>
<body>
	<?php

		function first_and_last($name_array){

			end($name_array);
			$final_key =key($name_array);

			echo "There are " . count($name_array) . " keys in this array: " ;

			foreach ($name_array as $key => $value) {
				echo "$key";

				if ($key == $final_key) {
					echo "";
				}

				else {
					echo ", ";
				}
			}
			echo "<br>";

			foreach ($name_array as $key => $value) {
				echo "The value in the key '$key' is '$value'.<br>";
			}

		}

		$users['first_name'] = "Michael";
		$users['last_name'] = "Choi";

		first_and_last($users);
	?>
</body>
</html>