<?php

if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdRepeat"];


  require_once 'db.inc.php';
  require_once 'functions.inc.php';


  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.html?error=emptyinput");
	exit();
  }

}
else {
	header("location: ../signup.html");
	exit();
}
