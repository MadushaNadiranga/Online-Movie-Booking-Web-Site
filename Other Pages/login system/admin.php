<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h1>Welcome <span>Admin</span></h1>
      <p>This is admin page</p><br>
      <p>Admin Data Management Center</p>
      <div class="manage">
         <a href="/WEB SITE/Other Pages/movie manage/create.php">Add Movies</a><br>
         <a href="/WEB SITE/Other Pages/movie manage/index.php">Remove Movies</a><br>
         <a href="/WEB SITE/Other Pages/movie manage/index.php">Upadate Movies</a><br>
         <a href="/WEB SITE/Other Pages/movie manage/index.php">Manage Showtimes</a><br>
         <a href="/WEB SITE/Other Pages/movie manage/index.php">View Movies</a><br><br>
         </div>



      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>