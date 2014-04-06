<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml-stict.dtd">

<?php
$action = (!empty($_POST['login']) &&
($_POST['login'] === 'Log in')) ? 'login'
: 'show_form';
switch($action)
{
case 'login':
require('session.php');
require('user.php');
$user = new User();
$username = $_POST['username'];
$password = $_POST['password'];
if ($user->authenticate($username, $password)) {
header('location: profile.php');
exit;
} else {
$errorMessage = "Username/password did not match.";
break;
}
case 'show_form':
default:
$errorMessage = NULL;
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

<h1>Log in here</h1>

<form id="login" action="index.php" method="post" accept-charset="utf-8">
<ul>
<?php if(isset($errorMessage)): ?>
<li><?php echo $errorMessage; ?></li>
<?php endif ?>
<li>
<label>Username </label>
<input class="textbox" tabindex="1" type="text" name="username" autocomplete="off"/>
</li>
<li>
<label>Password </label>
<input class="textbox" tabindex="2" type="password" name="password"/>
</li>
<li>
<input id="login-submit" name="login" tabindex="3" type="submit" value="Log in" />
</li>
<li class="clear"></li>
</ul>
</form>

</div>

<?php include('../includes/footer.php'); ?>

        </body>

</html>
