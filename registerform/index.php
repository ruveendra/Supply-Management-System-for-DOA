<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container">
      <h2>Registration form</h2>
        <form action="login.php" method="post">
            
          <label for="userName">User Name</label>
          <input type="text" id="userName" placeholder="Enter UserName">

          <label for="email">User Email</label>
          <input type="text" id="email" placeholder="Enter Email">

          <select name="role" >
          <option  value="" SELECTED>Select Role</option>
          <option value="DOA">DOA</option>
          <option value="Keels">Keels</option>
          </select>


          <br>
          <br>
          <label for="Password">Password</label>
          <input type="password" id="password" placeholder="Enter Password">

          <label for="Password2">Confirm Password</label>
          <input type="password" id="password2" placeholder="Confirm Password">

          <input type="submit" name="submit" value="Register">
        </form>
        
        <!-- <script src="script.js"></script> -->
    </div>
</body>
</html>

<!-- <?php
if(isset($_POST["submit"]))
{ 
  echo "it works";
}
else
{
  header("location: index.php");
}






?> -->








<!-- </body>
</html>

// $con = mysqli_connect ('localhost','root','','login');
// if(isset($_POST['submit']))
// {
//   $username = $_POST['UserName'];
//   $email = $_POST['Email'];
//   $role = $_POST['Role'];
//   $password = $_POST['Password'];
//   $cPassword = $_POST['ConfirmPassword'];

//   if($mysqli->query("insert into registration(UserName,Email,Role,Password,ConfirmPassword) values('$username','$email','$role','$password','$cPassword')")=== true)
//   {
//     echo 'Registrtation Successful';
//   }
 
//   else{
//     echo 'Registration failed';
//   }
// }
 -->




<!-- // ?> -->  