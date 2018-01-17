<?php
    function sortAndPrint($arr) {
        asort($arr);
        foreach($arr as $item) {
            echo "$item ";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Review Assignment: PHP Arrays Functions</title>
</head>
<body>
    <?php
		$animals = array("panda", "alpaca", "boa");

		sortAndPrint($animals);
    ?>
</body>
</html>