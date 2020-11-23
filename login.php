<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
            width: 410px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">

<div class="container">
  <?php 
  if($_COOKIE['user'] == ''):
  ?>
  <h3>Форма авторизации</h3><br>
   <form action="acc.php" method="post">
       Name: <input type="text" name="first_name"><br>
       Surname: <input type="text" name="last_name"><br>
       Password: <input type="password" name="password"><br>
       <input type="submit" class="btn">
   </form>
  <p align = "right"><a href = 'register.php'>Регистрация</a></p>
<?php else: ?>
  <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a
    href="exit.php">здесь</a>.</p>
<?php endif;?>

</div>

</body>
</html>