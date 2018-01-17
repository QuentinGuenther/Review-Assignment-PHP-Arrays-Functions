<?php
    function sortAndPrint($arr) {
        asort($arr);
        echo '<p>';
        foreach($arr as $item) {
            echo "$item ";
        }
        echo '</p>';
    }

    function add($item, $arr) {
        $item = strtolower($item);

        if(!in_array($item, $arr)) {
            echo "<p>adding $item...</p>";

            array_push($arr, $item);
        } else {
            echo "<p>$item is already in the array.</p>";
        }

        return $arr;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Review Assignment: PHP Arrays Functions</title>
</head>
<body>
    <?php
		$animals = array('panda', 'alpaca', 'boa');
		sortAndPrint($animals);
        $animals = add('Goat', $animals);
        sortAndPrint($animals);

        $cupcakeFlavors = array('grasshopper' => 'The Grasshopper',
                                'maple' => 'Whiskey Maple Bacon',
                                'carrot' => 'Carrot Walnut',
                                'caramel' => 'Salted Caramel Cupcake',
                                'velvet' => 'Red Velvet',
                                'lemon' => 'Lemon Drop',
                                'tiramisu' => 'Tiramisu');
        foreach($cupcakeFlavors as $key => $value) {
            echo '<input type="checkbox" name="flavors[]" value="'.$key.'"> '.$value.'<br>';
        }
    ?>
</body>
</html>