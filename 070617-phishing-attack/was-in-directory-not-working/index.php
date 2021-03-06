<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elevated Aerial Barre</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="_scripts/custom-modernizr.js?<?php echo time(); ?>"></script>
	<link rel="stylesheet" href="styles.css?<?php echo time(); ?>">	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">

</head>
<body onload="document.forms[0].name.focus();">
<div id="bg-div-one">
  <img src="_images/under-construction-opacity.png" alt="Under Construction">
</div>
<div id="wrapper">
<header>
	<h1>Elevated Aerial Barre</h1>
	<img src="_images/under-construction.png" alt="Under Construction">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
    function recaptchaCallback() {
        $('#confirm').addClass('display');
        $('#send').removeAttr('disabled');
        $('#send').removeClass('display');
    };
  </script>
</header>
<section id="left-side">

<h2>Activate feelings of strength and synchronicity</h2>
	<ul>
	<li>Aerial Yoga Class</li>
	<li>Aerial Barre Class</li>
	<li>Flying Tots</li>
	<li>Yoga Class</li>
  <li>Barre Class</li>
  <li>Aerial Foundation Class</li>
	<li>Facility Rental: Birthdays, Team Building, Bachelorette Parties, etc.</li>
  <li>Infrared Sauna</li>
	</ul>

</section>
<section id="right-side">
	<p class="right-center">While our Website is under construction please feel free to <a class="email-text" href="mailto:johneyquest@comcast.net">email us</a> for more information.</p>
    <!-- <form action="mail-to-me.php" method="post" id="contactForm">
        
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" required tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" required tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" required tabindex="30"></textarea>
        </li>
        <li>
          <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LeFDCEUAAAAAM_wtfecx9ysVUZp618q_sMbD1Ej"></div>
        </li>
        <li>
            <button id="confirm" disabled>Check Captcha above to enable Send</button>
            <button id="send" class="display" disabled>Send</button>
            -->
            <!-- <input id="send" type="submit" value="Send" tabindex="40" disabled /> -->
      <!--   </li>
        
    </ul> 
    
    </form> --> 

</section>

<?php include '_includes/footer.php' ?>

</div><!-- #wrapper -->

<script type="text/javascript" src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>