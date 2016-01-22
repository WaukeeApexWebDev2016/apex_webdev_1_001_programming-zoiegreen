<head>
<title>Calculate Area</title>
</head>
<body>
<?php
if ($_GET['calc'] == "yes")
  {
$width = $_GET['width'];
$length = $_GET['length'];
$area = $width*$length;
print "<h2>Results</h2>";
print "The area of a rectangle $width x $length is $area <p>";
}
?>
<h2>Calculate Area</h2>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>"
method = "GET">
Width: <input type = "text" name = "width" size=4>
<br/>
Length: <input type = "text" name = "length" size=4>
<br>
<input type="hidden" name="calc" value ="yes">
<input type = "submit" name = "Calculate"/>
</form>
</body>
</html>
