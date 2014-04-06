<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml-stict.dtd">

<?php


require 'dbconnection.php';

$action = (isset($_POST['upload']) && $_POST['upload'] === 'Upload') ? 'upload' : 'view';
switch($action) {
case 'upload':


//check file upload success
if($_FILES['image']['error'] !== 0) {
die('Error uploading file. Error code '. $_FILES['image']['error']);
}


//connect to MongoDB sevrer
$mongo = DBConnection::instantiate();


//get a MongoGridFS instance
$gridFS = $mongo->database->getGridFS();
$filename = $_FILES['image']['name'];
$filetype = $_FILES['image']['type'];
$tmpfilepath = $_FILES['image']['tmp_name'];
$caption = $_POST['caption'];


//storing the uploaded file
$id = $gridFS->storeFile($tmpfilepath, array('filename' => $filename,
'filetype' => $filetype,
'caption' => $caption));
break;
default:
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="Shortcut Icon" href="favicon.ico">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="20 Eyes In Development" />
<meta name="keywords" content="development" />
<meta name="author" content="Patrick White" />
<link rel="stylesheet" type="text/css" href="../style.css" media="screen"/>
<title>20 Eyes Dot Org</title>
</head>
        <body>
                <div id="wrapper">

<?php include('../includes/header.php'); ?>
<?php include('../includes/nav.php'); ?>
<?php include('../includes/sidebar.php'); ?>

<div id="content">
<h1>Upload Image</h1>
<?php if($action === 'upload'): ?>
<h3>File Uploaded.<br><br>
 Id <?php echo $id; ?> Caption <?php echo $caption; ?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">
Upload another?
</a>
</h3>
<?php else: ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"
method="post"
accept-charset="utf-8"
enctype="multipart/form-data">
<h3>Enter Caption&nbsp;
<input type="text" name="caption"/>
<h3/>
<p>
<input type="file" name="image" />
</p>
<p>
<input type="submit" value="Upload"
name="upload"/>
</p>
</form>
<?php endif; ?>
<a href="index.php">Return to Image List</a>

</div>


<?php include('../includes/footer.php'); ?>

        </body>

</html>
