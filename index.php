<?php
if (isset($_GET['login'])) {
  
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div  class="container con mt-3">
        
            <form action="valida_login.php"  class="card " method="post">
                <a class="login">Log in</a>
                <div class="inputBox">
                    <input name="email" type="text" required="required">
                    <span class="user">Username</span>
                </div>

                <div class="inputBox">
                    <input name="senha" type="password" required="required">
                    <span>Password</span>
                </div>

                <?php
                  if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                ?>
                  <div class="text-danger text-center mb-2 mt-2">
                    Usuário ou senha inválido(s)
                  </div>
                <?php }?>
                <?php
                  if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                ?>
                  <div class="text-danger text-center mb-2 mt-2">
                    Faça login antes de acesar as paginas
                  </div>
                <?php }?>

                <button type="submit" class="enter">Enter</button>
            </form>
        
    </div>
    </div>
  </body>
</html>