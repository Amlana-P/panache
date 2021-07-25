<?php  session_start(); 

   require "server.php";

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: register-login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
      header("location: register-login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>P A N A C H E Dashboard</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  	<!-- Latest compiled JavaScript -->
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link rel="icon" href="../logo.png" type="image/gif" sizes="100x100">
	<link href="../css/dashboard.css" rel="stylesheet" type="text/css">
	
	
</head>
<body>
	<div class="s-layout">
<!-- Sidebar -->
<div class="s-layout__sidebar">
  <a class="s-sidebar__trigger" href="#0">
     <i class="fa fa-bars"></i>
  </a>

  <nav class="s-sidebar__nav">
     <ul>
		<li>
			<!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<?php endif ?>
		</li>
        <li>
           <a class="s-sidebar__nav-link" name="home">
              <i class="fa fa-home"></i><em>Home</em>
           </a>
        </li>
        <?php if($_SESSION['role'] == 1){ ;?>
        <li>
           <a class="s-sidebar__nav-link" name="registration">
             <i class="fa fa-user"></i><em>Registrations</em>
           </a>
        </li>
        <?php } else{ ;?>
        <li>
           <a class="s-sidebar__nav-link" name="myprofile">
             <i class="fa fa-user"></i><em>My Profile</em>
           </a>
        </li>
        <?php } ;?>
        <li>
           <a class="s-sidebar__nav-link" href="dashboard.php?logout='1'">
              <i class="fa fa-sign-out"></i><em>Logout</em>
           </a>
        </li>
     </ul>
  </nav>
</div>

<!-- Content -->
<main class="s-layout__content">
   <div id="home">
   <img src="../media/panache.png">
	<h1 id="prize">Prizes worth Rs.1K to be won!</h1>
	<div class="container description">
		<h1><span>Idea :</span><br>
			This is an online event. Participants are free to put together absolutely anything which showcases their ingenuity, creativity, and innovation as long as it's closely related to the world of fashion, for example, dresses, jewelry designs, shoes, etc.<br><br>

			<span>Rules :</span><br>
			1-Participants have to take a good quality picture of their <u>finished work</u> and mail it to Fusion. A maximum of ten. They should also present a small write up clearly explaning their concept.<br>
			2-After the deadline for registration and submission is over Fusion will post all eligible submissions in its <a href="https://www.instagram.com/fusion.nitr/" style="color: #DB0053; text-decoration: none;" target="__blank"> Instagram handle</a>. Participants are required to follow it or else their registration wont be valid.<br>
			3-Once the submission are posted on our handle you are free to share that post inorder to gain likes and comments.<br>
			4-There are no restrictions to whats-so-ever except that plagiarism is strictly prohibited.<br>
			5-Any violation of the above rules will lead to disqualification.<br>
			6-Incase of any disputes the executive decision made by the Fusion club will be final and binding.<br>
			7-By registering yourself in the event you are agreeing to our rules for the event and shall abide by them at all costs.<br><br>

			<span>Judging Criteria :</span><br> 
			The participants will be awarded scores based two different criteria. One of them being the number of likes and comments on their posts whose weightage is 40%. Other 60% will be alloted by our judge, who is a distinguished Fashion Blogger, <a href="https://www.instagram.com/_painted.lady/" style="color: #DB0053; text-decoration: none;" target="__blank"><u> Priyanka Mishra</u></a>. The one having the highest score after a certain time period wins.
		</h1>
		<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-c6d5f24e-ba6e-453e-87c4-db0288bd0aec"></div>
		<div class="time">
			<h2>Time left until next Panache</h2>
			<ul>
				<li><span id="days"></span> days</li>
				<li><span id="hours"></span> Hours</li>
				<li><span id="minutes"></span> Minutes</li>
				<li><span id="seconds"></span> Seconds</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<button class="button" onclick="window.location.href='mailto:fusion.nitr@gmail.com';"><span>Submit</span></button>
			</div>
		</div>
	</div>
	<footer><p><i class="fa fa-copyright"></i> F U S I O N | All rights reserved | Designed by <a href="https://www.linkedin.com/in/amlana-pattnayak-47604b189/" target="__blank" style="text-decoration: none; color: #141414;">Amlana Pattnayak</a></p>
	</footer>
   </div>
   <div id="registration_table">
      
   </div>
   <div id="user_profile">
         
   </div>
</main>
</div>
<script>
   
$(document).ready(function() {
   $('a[name="registration"]').click(function(event) {
      $("#registration_table").css("display", "block");
      $("#home").css("display", "none");

      $.ajax({
         url:'fetchR_Data.php',
         type: 'get',

         success: function(registrationData) {
            $('#registration_table').html(registrationData);
         }
      });

   })

   $('a[name="home"]').click(function(event) {
      $("#home").css("display", "block");
      $("#registration_table").css("display", "none");
      $("#user_profile").css("display", "none");
   })

   $('a[name="myprofile"]').click(function(event) {
      $("#registration_table").css("display", "none");
      $("#user_profile").css("display", "block");
      $("#home").css("display", "none");

      $.ajax({
         url:'fetchP_Data.php',
         type: 'get',

         success: function(profileData) {
            $('#user_profile').html(profileData);
         }
      });

   })
});

// Countdown Timer
const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Sep 14, 2021 00:00:00').getTime(),
    x = setInterval(function() {    

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

	}, second)
	
</script>
</body>
</html>