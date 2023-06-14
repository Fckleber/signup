<?php
  include("conexao.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <div id="form">
      <h1 id="heading">cadastra-se</h1><br>
      <form name="form" action="signup.php" method="POST">
        <i class="fa-solid fa-user"></i>      
        <input type="text" id="user" name="user" placeholder="Nome" required><br><br>
        <i class="fa-solid fa-envelope"></i>
        <input type="email" id="email" name="email" placeholder="Email" required><br><br>
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="pass" name="pass" placeholder="Senha" required><br><br>
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="cpass" name="cpass" placeholder="Confirmar senha" required><br><br>
        <input type="submit" id="btn" value="Enviar" name ="submit"/>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>