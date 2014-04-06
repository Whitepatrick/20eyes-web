<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml-stict.dtd">


<?php
require 'dbconnection.php';
$mongo = DBConnection::instantiate();
$gridFS = $mongo->database->getGridFS();
$objects = $gridFS->find();
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="Shortcut Icon" href="favicon.ico">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="20 Eyes In Development" />
<meta name="keywords" content="development" />
<meta name="author" content="Patrick White" />
<link rel="stylesheet" type="text/css" href="../style.css" media="screen"/>

<!-- lightbox scripts -->
<script src="../scripts/jquery-1.11.0.min.js"></script>
<script src="../scripts/lightbox.min.js"></script>
<link href="lightbox.css" rel="stylesheet" />

<title>20 Eyes Dot Org</title>
</head>
        <body>
                <div id="wrapper">

<?php include('../includes/header.php'); ?>
<?php include('../includes/nav.php'); ?>
<?php include('../includes/sidebar.php'); ?>

<div id="content">

<h1>Uploaded Images</h1>
<table class="table-list" cellspacing="0" cellpadding="0">
<thead>
<tr>
<th align="left" width="40%">Caption</th>
<th align="left" width="30%">Filename</th>
<th align="left" width="*">Size</th>
</tr>
</thead>
<tbody>
<?php while($object = $objects->getNext()): ?>
<tr>
<td>
<?php echo $object->file['caption'];?>
</td>
<td>
<a href="image.php?id=<?php echo $object->file['_id'];?>" 
data-lightbox="<?php echo $object->file['caption'];?>">
<?php echo $object->file['filename'];?>
</a>
</td>
<td>
<?php echo ceil($object->file['length'] / 1024).' KB';?>
</td>
</tr>
<?php endwhile;?>
</tbody>
</table>
<br>
<br>
<a href="upload.php">Upload More</a>

</div>

<?php include('../includes/footer.php'); ?>

        </body>

</html>
