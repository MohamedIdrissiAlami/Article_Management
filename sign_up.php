<?php
include('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$email = $_POST['email'];
$password = $_POST['password'];
$Name=$_POST['name'];
$query="select *from users where email='$email' and password='$password'";
$result=mysqli_query($conn,$query);
if($result&&mysqli_num_rows($result)>0)
{
  echo "username already exists ! try again later..";
}else{
  $query="insert into users (Name,role,email,password) values ('$Name','author','$email','$password');";
  mysqli_query($conn,$query);
  $query="select *from users where email='$email' and password='$password'";
  $result=mysqli_query($conn,$query);
  if($result&&mysqli_num_rows($result)>0)
  {
    echo "saved successfully!";
  }
  
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>article management</title>
  <link rel="stylesheet" href="sign_in.css">
</head>

<body>
  <div class="login-container">
    <h2>Sign up</h2>
    <form action="sign_up.php" method="POST">
    <input type="text" name="name" placeholder="Name">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>

      <button type="submit">Sign UP</button>
    </form>
  </div>
</body>

</html>