<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<link rel="Shortcut Icon" href="eye.ico">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="20 Eyes Active Projects" />

<meta name="keywords" content="active projects" />

<meta name="author" content="Patrick White" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>

<title>20 Eyes Dot Org</title>

</head>

        <body>

                <div id="wrapper">


<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">

<a href="diagrams.php"><h3>Diagrams located here</h3></a>

<?php
$rawTime = "docs/raw_time";
$fh = fopen($rawTime, 'r');
$theData = fread($fh, filesize($rawTime));
fclose($fh);
echo $theData;
?>

</div>

<?php include('includes/footer.php'); ?>

                </div>  <!--end #wrapper -->

        </body>

</html>
