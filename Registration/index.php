<?php
include('partials/connection.php');
if(isset($_POST['register'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hash = password_hash($password,PASSWORD_DEFAULT);
  $confirm_password = $_POST['confirm_password'];

/// EXIST QUERY
$select_data = "Select * from `user_data` where username='$username'";
$result = mysqli_query($con, $select_data);
$num_rows = mysqli_num_rows($result);


  if($username=="" or $password =="" or  $confirm_password =="" ){
    echo "<script>alert('Please fill all the fields')</script>";
    echo "<script>window.open('index.php','_self')</script>";
    exit();
  }


   if($num_rows > 0){
    echo "<script>alert('User Already Exist')</script>";

  }
  //query for inserting
  else if($password != $confirm_password){
    echo "<script>alert('Password do not match')</script>";
  }else {
  $insert_query = "insert into `user_data` (username, password) values ('$username','$password_hash') ";
  $result = mysqli_query($con, $insert_query);

  if($result){
    echo "<script>alert('You are registered successfully')</script>";
    echo "<script>window.open('signin.php','_self')</script>";
  }
  }

}
?>

<!doctype html>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="css/style.css" />

<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">

<script
      src="https://kit.fontawesome.com/954d9fe781.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <style>
      :root{
    --primary: rgb(233, 81, 106);
    --white: #fff
}
      body,html{
    background-image: url("./css/river-g84c0b5cc1_1280.jpg");
    background-repeat: no_repeat; ;
    height: 100% 
  }  
  .container{
    height: 100%;
    width: 100%;
  }
  .card{
    width: 400px;
    height: 350px;
    background-color: rgba(0,0,0,0.4)
  }
  .mt{
    margin-top : 0%
  }

  .card-header >h3{
    color: var(--white);
  }
  
  .input-group > span{
    background-color: var(--primary);
    border:0;
    color: var(--white)
  }

  input:focus{
    outline: 0 0 0 0 !important;
    box-shadow: 0 0 0 0 !important;

  }

  .signup_btn{
    color: var(--white);
    background-color: var(--primary);
  }

  .signup_btn:hover {
    color: black;
    background-color: var(--white);
  }

  .signup > a{
    color: var(--primary);
    text-decoration: none
  }
    </style>

</head>
<body>
    <div class="mt container d-flex align-items-center justify-content-center">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Sign Up</h3>
          </div>

          <div class="card-body">
            <form action="" method="post"> 
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="username" required autocomplete="off" aria-label="Username" aria-describedby="basic-addon1">
           </div>

           <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
            <input type="password" class="form-control" placeholder="Enter Your Password" name="password" required autocomplete="off" aria-label="password" aria-describedby="basic-addon1">
           </div>

           <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required autocomplete="off" aria-label="confirm_password" aria-describedby="basic-addon1">
           </div>

          <div class="form-group"> 
            <input type="submit" class="btn signup_btn"  name="register" value="Sign Up">
          </div>

            </form>
          </div>
          
          <div class="card-footer text-center text-light signup">
            Already have an account ? <a href="signin.php">Sign In</a>
          </div>

      </div>
  </div>
</body>
</html>