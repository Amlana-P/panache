<?php if(!isset($_SESSION)) 
{ 
    session_start(); 
} ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P A N A C H E Registration/Login Portal</title>
	  <link rel="icon" href="../logo.png" type="image/gif" sizes="100x100">
    <link rel="stylesheet" type="text/css" href="../css/register-login.css"> 
</head>
<body>
<script>
  const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};
  </script>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="../media/logo.png" alt="" /></div>
        <div class="formBx">
          <form action="./server.php" method="post">
            <h2>Sign In</h2>
            <?php include('errors.php') ;?>
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required/>
            <input type="submit" name="user_login" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="./server.php" method="post">
            <h2>Create an account</h2>
            <?php include('errors.php') ;?>
            <input type="text" name="username" placeholder="Username" required />
            <input type="text" name="college" placeholder="College name" required/>
            <input type="text" name="contact" placeholder="Contact number" required/>
            <input type="email" name="email" placeholder="Email Address" required/>
            <input type="text" name="insta_id" placeholder="Instagram ID" required/>
            <input type="password" name="password" placeholder="Create Password" required/>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required/>
            <input type="submit" name="user_reg" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="../media/logo.png" alt="" /></div>
      </div>
    </div>
  </section>
</body>
</html>