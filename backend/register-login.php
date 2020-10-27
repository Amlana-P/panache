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
    <style>
        * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

:root {
  --active-color: #fff;
  --active-bg-color: #0a0a0a;
}
html {
  font-size: 62.5%;
}

body {
  text-align: center;
  color: var(--active-color);
  font-family: sans-serif;
  background-color: var(--active-bg-color);
}

a {
  text-decoration: none;
  color: var(--active-color);
}

.main-container {
  display: none;
  height: 100vh;
  background-color: var(--active-bg-color);
  position: relative;
  opacity: 1;
  -webkit-filter: blur(0);
  filter: blur(0);
  -webkit-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

.input-box-cont {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.heading1 {
  font-size: 2rem;
  text-align: center;
  margin: 5rem;
}
.reg-btn-label {
  position: absolute;
  top: 3rem;
  right: 3rem;
  color: var(--active-color);
  font-size: 2rem;
  z-index: 1000;
}

.reg-btn-label:hover {
  cursor: pointer;
}
.reg-btn[type = "checkbox"] {
  display: none;
}
.reg-btn[type = "checkbox"]:checked ~ .main-container {
  -webkit-filter: blur(10px);
  filter: blur(10px);
}
.reg-btn[type = "checkbox"]:checked ~ .reg-container {
  opacity: 0.9;
  z-index: 1;
}
.reg-btn[type = "checkbox"]:checked ~ .reg-btn-label span::after {
  transform: rotate(45deg);
}

.reg-btn-label span {
  padding-right: 0;
  -webkit-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

.reg-btn-label span::after {
  content: "+";
  position: absolute;
  opacity: 0;
  top: -0.5rem;
  right: -2rem;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  font-size: 3rem;
}
.reg-btn-label:hover span {
  padding-right: 2.5rem;
}

.reg-btn-label:hover span::after {
  opacity: 1;
  right: 0;
}

.form-cont {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 40rem;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.form-cont input {
  margin: 1rem;
  height: 5rem;
  width: 90%;
  outline: none;
  border-radius: 0;
}
.form-cont input:focus {
  background-color: var(--active-bg-color);
}
.form-cont input[type = "name"],
.form-cont input[type = "insta_id"],
.form-cont input[type = "college"],
.form-cont input[type = "contact"],
.form-cont input[type = "email"],
.form-cont input[type = "password"],
.form-cont input[type = "text"] {
  border: none;
  border-bottom: 1px solid var(--active-color);
  background-color: var(--active-bg-color);
  color: var(--active-color);
  font-size: 1.6rem;
  padding: 0 2rem;
}

.form-cont input[type = "name"]:hover::-webkit-input-placeholder,
.form-cont input[type = "insta_id"]:hover::-webkit-input-placeholder,
.form-cont input[type = "college"]:hover::-webkit-input-placeholder,
.form-cont input[type = "contact"]:hover::-webkit-input-placeholder,
.form-cont input[type = "email"]:hover::-webkit-input-placeholder,
.form-cont input[type = "password"]:hover::-webkit-input-placeholder,
.form-cont input[type = "text"]:hover::-webkit-input-placeholder {
  font-size: 2rem;
}
::-webkit-input-placeholder {
  color: var(--active-color);
  font-size: 1.6rem;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.submit-btn {
  max-width: 50%;
  border: none;
  border-bottom: 1px solid var(--active-color);
  background-color: var(--active-bg-color);
  color: var(--active-color);
  font-size: 1.6rem;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  border-radius: 0;
}

.submit-btn:hover {
  cursor: pointer;
  font-size: 2.5rem;
}

.reg-container {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  background-color: #0a0a0a;
  height: 100vh;
  width: 99vw;
  opacity: 0;
  -webkit-transition: opacity 2s;
  -o-transition: opacity 2s;
  transition: opacity 2s;
}

@media only screen and (max-width: 900px) {
  .form-cont {
    width: 30rem;
  }
}
    </style>
</head>
<body>
<input type="checkbox" class="reg-btn" id="reg-btn">
<label for="reg-btn" class="reg-btn-label"><span>Registration</span></label>
<div class="reg-container" id="nav-cont">
  <div class="input-box-cont">
    <h1 class="heading1">Panache Registration</h1>
    <form action="register-login.php" class="form-cont" method="post">
      <input type="name" class="input-box" required autocomplete="off" name="username" placeholder="Name" id="name">
      <input type="insta_id" class="input-box" required autocomplete="off" name="insta_id" placeholder="Instagram ID" id="insta_id">
      <input type="college" class="input-box" required autocomplete="off" name="college" placeholder="College" id="college">
      <input type="contact" class="input-box" required autocomplete="off" name="contact" placeholder="Contact" id="contact">
      <input type="email" class="input-box" required autocomplete="off" name="email" placeholder="Email" id="email">
      <input type="password" class="input-box" required autocomplete="off" name="password" placeholder="Password" id="first-pass">
      <input type="password" class="input-box" required autocomplete="off" name="password" placeholder="Repeat password" id="second-pass">
      <input type="submit" value="Registration" class="submit-btn" id="reg-btn-active" name="user_reg" disabled>
    </form>
  </div>
</div>
<div class="main-container" id="main-cont">
  <div class="input-box-cont">
    <h1 class="heading1">Panache Login</h1>
    <form action="register-login.php" class="form-cont" method="post">
      <?php include('errors.php') ;?>
      <input type="email" class="input-box" required autocomplete="off" name="email" placeholder="Email">
      <input type="password" class="input-box" required autocomplete="off" name="password" placeholder="Password">
      <input type="submit" value="Login" class="submit-btn" name="user_login">
    </form>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    document.getElementById("main-cont").style.display = "block";
document.getElementById("first-pass").maxLength = "255";
document.getElementById("first-pass").minLength = "8";
document.getElementById("second-pass").maxLength = "255";
document.getElementById("second-pass").minLength = "8";
const regbtn = document.getElementById("reg-btn-active");

$("#first-pass").on("keyup", function() {
  var password = $("#first-pass").val();
  if (password.length < 8) {
    $("#first-pass").css("color", "red");
  } else if (password.length >= 8 && password.length < 15) {
    $("#first-pass").css("color", "yellow");
  } else {
    $("#first-pass").css("color", "green");
  }
  enable();
});

$("#second-pass").on("keyup", function() {
  var password = $("#second-pass").val();
  if (password.length < 8) {
    $("#second-pass").css("color", "red");
  } else if (password.length >= 8 && password.length < 15) {
    $("#second-pass").css("color", "yellow");
  } else {
    $("#second-pass").css("color", "green");
  }
  enable();
});

$("#email").on("keyup", function() {
  enable();
});

function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function enable() {
  let email = $("#email").val();
  let pass1 = document.getElementById("first-pass").value;
  let pass2 = document.getElementById("second-pass").value;
  if (validateEmail(email) == true && pass1.length >= 8 && pass1 == pass2) {
    regbtn.removeAttribute("disabled");
  }
}

</script>
</body>
</html>