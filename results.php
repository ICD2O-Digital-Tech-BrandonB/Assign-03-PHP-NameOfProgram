<?php
	// get the radius and height
	$radius = $_POST['radiusAmount'];
	$height = $_POST['heightAmount'];

	// calculate surface area and volume
	$surfaceArea1 = echo pow($radius, 2) echo pow($height, 2); 
    $surfaceArea2 = sqrt($surfaceArea1) + $radius;
    $surfaceArea3 = $surfaceArea2 * echo PI() * $radius;
    $volumeCone = $height / 3 * echo PI() * echo pow($radius, 2);

    // prints the surface area and volume on the website
?>
<h3>Results:</h3>
The surface area of the cone is: <?php echo "$surfaceArea3" ?>cm² >
<h3>Results:</h3>
The volume of the cone is: <?php echo "$volumeCone" ?>cm³ >