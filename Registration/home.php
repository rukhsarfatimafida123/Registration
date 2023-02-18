<?php
session_start();
?>

<!doctype html>
<html>
<head>
<title>Welcome <?php echo $_SESSION['username'] ?></title>
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
    
    </style>

</head>
<body>
    <div class="container-fluid py-5 text-center">
        <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
        <p>Explore my website</p>
        <a href = "logout.php"><button class="btn btn-danger">LogOut</button></a>
    </div>
</body>
</html>