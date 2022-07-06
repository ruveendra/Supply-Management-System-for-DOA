<?php
  include_once 'header.php';
?>

<div class="loginbox">
    <img src="./download.jpg" class="avatar">
    
    <h1>Form Login</h1>

    <form action = "p.php" method="POST">
      <p>Enter Username</p>
      <input type="text" name="UserName" placeholder="Enter Username Here" required>

      <p>Enter Password</p>
      <input type="Password" name="Password" placeholder="Enter Password Here" required>

      <input type = "submit" value="Login">

      <p id="middle">Dont have an account?<br> <a href="#">Sign up here</a></p>

    </form>
 
  </div>

<?php
include_once 'footer.php';
?>
