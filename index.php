<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="php surface area and volume of a cone">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="BrandonBCode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./faviconphp34/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./faviconphp34/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./faviconphp34/favicon-16x16.png">
    <link rel="manifest" href="./faviconphp34/site.webmanifest">

    <!--MDL Crucial Code-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />

    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title for Browser Tab -->
    <title>Cone Calculations</title>
  </head>
  <body>

    <!--MDL Crucial Code-->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!--MDL Header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Volume and Surface area of a Cone</span>
        </div>
      </header>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume & Surface Area of a Cone</h1>";
			echo "<h3>This program will calculate the volume and surface area of a cone PHP.</h3>";
		?>

		<!-- form to get the height and radius from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="lblRadius">Radius (CM):</label>
      <input type="number" id="radiusAmount" placeholder="Enter length of Radius" name="radiusAmount"><br><br>
      <label for="lblHeight">Height (CM):</label>
      <input type="number" id="heightAmount" placeholder="Enter length of Height" name="heightAmount"><br><br>
      <input type="submit" value="Calculate Conversion">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="surfaceArea3" name="results">			
				The surface area of the cone is: <?php echo "$surfaceArea3" ?>cm² >
	    </iframe>

      <!-- iframe for the results to show on the web page. -->
			<iframe id="volumeCone" name="results">			
				The volume of the cone is: <?php echo "$volumeCone" ?>cm³ >
	    </iframe>

      <!--This allows us to display an image in php. -->
     <?php
      echo ' 
      <!DOCTYPE html PUBLIC>
      <html>
      <img src="./images/cone.png" width="50" height="70" title="cone" alt="cone image" />

      </html>
      ';
      ?>
	</body>
</html>