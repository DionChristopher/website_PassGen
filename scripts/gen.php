<?php 

	function passGen($opt1, $opt2, $opt3, $opt4, $length) {

		$charset_one = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$charset_two = "abcdefghijklmnopqrstuvwxyz";
		$charset_three = "0123456789";
		$charset_four = "@-:$/()?!";

		$charset_array = [];
		$active_charset = "";
		$result = "";

		if($opt1 == true) {

			$active_charset .= $charset_one;

		}
		if($opt2 == true) {

			$active_charset .= $charset_two;

		}
		if($opt3 == true) {

			$active_charset .= $charset_three;

		}
		if($opt4 == true) {

			$active_charset .= $charset_four;

		}

		$charset_array = str_split($active_charset);

		for ($i=0; $i < $length ; $i++) { 
			
			$randItem = array_rand($charset_array);
			$result .= $charset_array[$randItem];

		}

		return $result;

	}

 ?>