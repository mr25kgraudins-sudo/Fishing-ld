<?php require("Register/register.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      $user = new RegisterUser($_POST['username'], $_POST['password']);
   }
?>

<?php require("Register/login.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      $user = new LoginUser($_POST['username'], $_POST['password']);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register form</title>
   <link rel="stylesheet" href="Register/Register.css">
</head>

</html>
<body>
   
<div class="container">
<form class="input" action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="Virsraksts2">Fishing LD</div>
 
      <input type="text" name="username" type="text" placeholder="Enter Username" required>
      <input type="text" name="password" type="password" placeholder="Enter Password" required>
      <main class="main">
        <div>
        <button class="btn" type="submit" name="submit" >Register</button>
        
        </div>
    </main>
  
 
      <p> <?php echo @$user->error ?></p>
   </form>
</div>
</body>