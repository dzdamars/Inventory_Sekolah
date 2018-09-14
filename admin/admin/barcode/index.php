<?php									// PHP: Barcode user interface
if (!isset($_GET['bar']))						// Do we know what we should output?
  echo '<body onLoad="document.f.bar.focus()"><form name="f" action="index.php">
        Bar Code:<input type=text name=bar><input type=submit>';
else {        									// 
  include 'bar128.php';							// Our Library of Barcode Functions
  echo bar128(stripslashes($_GET['bar']));		// Ask for a barcode     
}