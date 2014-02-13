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

<h1>Work In Progress</h1>

<h2>CURRENT: Jenkins-CI Installation and configuration</h2>

<a href="http://jenkins-ci.org/" target="_blank"><img src="images/jenkins.png"></a> 

<p>Put the MongoDB work off for another week (it's actually not 
supposed to be started until later in the schedule but I was getting antsy
to try figuring out the PHP funtions for it). This week I installed <a href="http://jenkins-ci.org/a" target="_blank">Jenkins Continuous Integration</a>
and have been working on a Build that will poll my <a href="http://www.github.com/Whitepatrick" target="_blank">GitHub</a> every
10 minutes and if any changes are made the build is supposed to be published to my production server. However in my 
experience nothing ever works the first time so I will keep plugging away.</p>

<p><b>Good signs from Jenkins:</b> While monitoring all the logs, everything is working except the actual transfer of the files 
which is probably the most important step in the build process BUT at least all other processes are going off without
a hitch. SSH connection is smooth, Jenkins is connecting to GitHub and getting polling accurately. I'm still not sure if the scheduler
is working as it should but I can sort that detail out after I start getting consistant successful builds.</p>

<h2>Past:</h2>

<h3>MongoDB + PHP</h3>

<p>After looking over several different login scripts for MongoDB
in PHP I finally started developing one of my own to be custom fit
to 20eyes.org unique infrastructure. After watching some of the logs
while sending some DB traffic to the server I'm VERY excited about
what I saw. Will have this problem fixed in the next day or so.</p>
<p><b>Update:</b> Just got a script working that allows user to
enter username and pw on main page and script enters that info in to
mongodb collection. Next step is write script to authenticate user after
information entry</p>

<h3>Back end work</h3>

<p>Now working on a feature for the site that will allow
the user to create an account, upload an image, and submit a
comment with the image. All managed by mongodb, scripted
with php. It will be a new git branch to be merged after testing.</p>

<h3> Site Creation</h3>

<p>Now creating all pages and setting up working links. By the end of tonight (January 24th) I would like to have a bare bones site to accomodate forthcoming content that will document my contiuous deployment project. Very Excited!</p>

</div>

<?php include('includes/footer.php'); ?>

                </div>  <!--end #wrapper -->

        </body>

</html>
