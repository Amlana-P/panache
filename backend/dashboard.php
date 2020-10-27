<?php  session_start(); 

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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
   

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>P A N A C H E Dashboard</title>
	  <link rel="icon" href="../logo.png" type="image/gif" sizes="100x100">
	<style>
		/* Primary Styles */
*, *::before, *::after {
   box-sizing: border-box;
}

body {
   font-family: sans-serif;
   font-size: 1em;
   color: #333;
}

h1 {
  font-size: 1.4em;
}

em {
   font-style: normal;
}

a {
   text-decoration: none;
   color: inherit;
} 

/* Layout */
.s-layout {
   display: flex;
   width: 100%;
   min-height: 100vh;
}

.s-layout__content {
   display: flex;
   justify-content: center;
   flex: 1;
}

/* Sidebar */
.s-sidebar__trigger {
   z-index: 2;
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   height: 4em;
   background: #192b3c;
}

.s-sidebar__trigger > i {
   display: inline-block;
   margin: 1.5em 0 0 1.5em;
   color: #f07ab0;
}

.s-sidebar__nav {
   position: fixed;
   top: 0;
   left: -15em;
   overflow: hidden;
   transition: all .3s ease-in;
   width: 15em;
   height: 100%;
   background: #243e56;
   color: rgba(255, 255, 255, 0.7);
}

.s-sidebar__nav:hover,
.s-sidebar__nav:focus,
.s-sidebar__trigger:focus + .s-sidebar__nav,
.s-sidebar__trigger:hover + .s-sidebar__nav {
   left: 0;
}

.s-sidebar__nav ul {
   position: absolute;
   top: 4em;
   left: 0;
   margin: 0;
   padding: 0;
   width: 15em;
}

.s-sidebar__nav ul li {
   width: 100%;
}

.s-sidebar__nav ul li p {
   margin-left: 10%;
}

.s-sidebar__nav-link {
   position: relative;
   display: inline-block;
   width: 100%;
   height: 4em;
}

.s-sidebar__nav-link em {
   position: absolute;
   top: 50%;
   left: 4em;
   transform: translateY(-50%);
}

.s-sidebar__nav-link:hover {
   background: #4d6276;
}

.s-sidebar__nav-link > i {
   position: absolute;
   top: 0;
   left: 0;
   display: inline-block;
   width: 4em;
   height: 4em;
}

.s-sidebar__nav-link > i::before {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
}

/* Mobile First */
@media (min-width: 42em) {
   .s-layout__content {
      margin-left: 4em;
   }
   
   /* Sidebar */
   .s-sidebar__trigger {
      width: 4em;
   }
   
   .s-sidebar__nav {
      width: 4em;
      left: 0;
   }
   
   .s-sidebar__nav:hover,
   .s-sidebar__nav:focus,
   .s-sidebar__trigger:hover + .s-sidebar__nav,
   .s-sidebar__trigger:focus + .s-sidebar__nav {
      width: 15em;
   }
}

@media (min-width: 68em) {
   .s-layout__content {
      margin-left: 15em;
   }
   
   /* Sidebar */
   .s-sidebar__trigger {
      display: none
   }
   
   .s-sidebar__nav {
      width: 15em;
   }
   
   .s-sidebar__nav ul {
      top: 1.3em;
   }
}

#registration_table, #user_profile {
   display: none;
}

.content-table {
   border-collapse: collapse;
   margin: 25px 0;
   font-size: 0.9em;
   min-width: 400px;
   border-radius: 5px 5px 0 0;
   overflow: hidden;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
   background-color: #009879;
   color:#ffffff;
   text-align:left;
   font-weight: bold;
}

.content-table th,
.content-table td {
   padding: 12px 15px;
} 

.content-table tbody tr {
   border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
   background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
   border-bottom: 2px solid #009879;
}

.member-box {
    position: relative;
    max-width: 300px;
    margin: 100px auto;
    font-family: 'Raleway', sans-serif;
}
.member-box .shape {
    width: 200px;
    height: 200px;
    background: var(--primary);
    opacity: 0.2;
    position: absolute;
    top: 0;
    right: -100px;
    transform: rotate(45deg);
}

.member-box .card-img-top {
    position: relative;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: 20px auto;
    text-align: center;
    box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
    transition: box-shadow 0.3s ease;
}

.member-box:hover .card-img-top {
    box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1)
}

.member-box .member-degignation {
    color: var(--green);
}

.member-box .member-title {
    
}

.member-box small {
    font-size: 12px;
}

.member-box .social a {
    font-size: 15px;
    color: var(--green);
    padding: 10px;
}

.member-box .card-footer {
    background-color: transparent;
    border: 0;
}

	</style>
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
           <a class="s-sidebar__nav-link" href="register-login.php?logout='1'">
              <i class="fa fa-sign-out"></i><em>Logout</em>
           </a>
        </li>
     </ul>
  </nav>
</div>

<!-- Content -->
<main class="s-layout__content">
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

      $.ajax({
         url:'fetchR_Data.php',
         type: 'get',

         success: function(registrationData) {
            $('#registration_table').html(registrationData);
         }
      });

   })

   $('a[name="home"]').click(function(event) {
      $("#registration_table").css("display", "none");
      $("#user_profile").css("display", "none");
   })

   $('a[name="myprofile"]').click(function(event) {
      $("#registration_table").css("display", "none");
      $("#user_profile").css("display", "block");

      $.ajax({
         url:'fetchP_Data.php',
         type: 'get',

         success: function(profileData) {
            $('#user_profile').html(profileData);
         }
      });

   })
});
</script>
</body>
</html>