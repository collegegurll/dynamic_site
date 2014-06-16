<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL',' jhudson112310@gmail.com');
	define('MESSAGE_SUBJECT','feedback from your website');
	define('REPLY_TO', 'jhudson112310@gmail.com');
	define('FROM_ADDRESS', 'jhudson112310@gmail.com');
	define('REDIRECT_URL', 'http://google.com/');
	
	require_once('validation.php');

?>





<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="index.css" rel="stylesheet" type="text/css">
</head>

<body>


<header>
<nav>

<center><ul>
<li><a href="index.html">Home</a></li>
<li><a href="bio.html">Bio</a></li>
<li><a href="sales.html">Sales</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="contact.html">Contact</a></li>
</ul></center>










</nav></header>

<div id="form">
<br>
<div id="title">
<h1><center>Want To Know More?</center></h1>
</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
   
         <legend><h3>Contact</h3></legend>
   <p>
   <label for="name">Name:</label><?php echo $name_error; ?>
   <input type="text" name="name" placeholder="name" 
   value=""/>
   <?php echo $email_error; ?>
    </p>
   
   <p>
   <label for="email">Email</label><?php echo $email_error; ?>
 <input type="email" name="email" placeholder="email" 
 value="" class="required" />
     </p>
     
     <p>
     <label for="message">Message: </label>
	 <?php echo $message_error; ?>
       <textarea name="message" rows="8" cols="45" placeholder="message" /> 
        </textarea>
     </p>
     
     <p>
 <input type="submit" name="submitted" value="Contact Us" />
 </p>
 
   </fieldset>
   </form>
</div>

<center><img src="images/juosteles lubiniai.jpg" height="300" width="1000"></center>














<p>Visit Our Social Media Sites By <u>Clicking</u> The Links <b>BELOW!</b> </p>


<a href="http://wwww.facbook.com/"><img src="images/facebook-icon.png" height="50" width="50"></a>

<a href="http://www.twitter.com/"><img src="images/twittericon.jpg" height="50" width="50"></a>







<footer>This interactive media project was created by students for educational purposes at The Art Institute of Atlanta and is in no way intended for commercial gain or as a source of public information.</footer>



























<script src="java/java.js">










</body>
</html>
