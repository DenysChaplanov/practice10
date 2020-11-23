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
  <h3>Форма регистрации</h3><br>
   <form action="check.php" method="post">
      Name: <input type="text" name="first_name"><br>
      Surname: <input type="text" name="last_name"><br>
      Id role (1-admin, 2-user): <input type="text" name="id_role"><br>
      Password: <input type="password" name="password"><br>
       <input type="submit" class="btn">
   </form>

  <p align = "right"><a href = 'login.php'>Авторизация</a></p>

</div>

</body>
</html>