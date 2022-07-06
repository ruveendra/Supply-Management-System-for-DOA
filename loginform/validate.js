function validate()
{
  var UserName = document.getElementById("UserName").value;
  var Password = document.getElementById("Password").value;

  if(UserName=="Admin" && Password=="1234")
  {
    alert("yay");
    // Header(Location = webkitCancelAnimationFrame.php);
  }

  else
  {
    alert("Login Failed. Try Again!!");
  }
}