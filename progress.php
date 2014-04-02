<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<h1>Work In Progress</h1>

<!-- blah blah blah -->

<h2>CURRENT: PHP + GridFS = The most fun I've had with MongoDB!</h2>

<img src="images/gridfs.png" alt="MongoDB"><br>

<p>Started a new branch on my <a href="https://github.com/Whitepatrick/20eyes-web/tree/gridfs-upload">GitHub</a> repo for this project that will be a photo upload to MongoDB's GridFS using PHP. Had tried this previously but screwed up the branching on my Git repo, so this is the real deal! I wont make this feature live until I link the authentication section I made previously in PHP and MongoDB. Very excited about PHP and MongoDB!<br><br>Truly wish I would have done different school project that I'm currently working on in MongoDB instead of MySQL. Considering the use case Mongo would have been a better fit and far less complex.

<h2>PAST:</h2>

<h3>Great Success!</h3>

<p>After beating my head against the wall trying to get the SSH transfer job to work in Jenkins for a few weeks, the job is finally completing all steps and builds are stable!<br><b>Console output below:</b></p>
<img src="images/console_success.jpg" alt="jenkins success"></br>

<p>The journey from the previous errors I was getting and the first stable job was a long and winding one. The job is using the publish over SSH plugin. The build actively polls my GitHub repository frequently throughout the day.
Whenever Jenkins notices a new push that has been made to the repository it triggers the build. Jenkins gathers all files from the repo and builds them in the workspace. After the build the SSH plugin sends all files on the
workspace to my production server and then the files are live.</p>

<h3>Hitting some road blocks!</h3>

<p>I've been ending up stumped on getting Jenkins to actually transfer the files that have been changed after polling GitHub. I am getting everything else right; Build is successfull, SSH connection made, but then 0 files transfer. Here is output:</p>
<br><img src="images/jenkins-error.jpg" alt="jenkins error"></br>

<p>I'm considering a different method of deploying as well as wrapping my brain around the transfer set issue in Jenkins. After <b>MUCH</b> googling I see that others have the same issue as me and it could be a configuration issue with the way my project is set up. This isn't a huge problem since there are other tools that can fill its place. Currently looking in to <a href="https://travis-ci.org/">Travis-CI</a> which seems to be tailor made for GitHub deployment and operates off git hooks.</p>

<p>Another issue raised here is that I'm about a week behind schedule. I can try making up the time but next week I need to attempt to stand up <a href="http://puppetlabs.com/">Puppet</a>. Hoopefully I can extend puppet beyond what I originally planned and make up some time.</p>


<h3>Jenkins-CI Installation and configuration</h3>

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

<h3>MongoDB + PHP</h3>

<a href="http://docs.mongodb.org/ecosystem/drivers/php/" target="_blank"><img src="images/mongophp.png"></a>

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

