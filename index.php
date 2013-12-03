<?php
/*require("banco.php");
require("session.php");
  if(isset($_POST['email'])){
      $result = $mysqli->query("SELECT * FROM usuario WHERE login = '".$_POST['email']."' AND senha = '".$_POST['password']."' ");
      if($result->num_rows > 0 ){
        $campos = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $_SESSION["nome"] = $campos['nome'];
        header('Location: homepage.php');
      }
  }*/
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DESESPERADOS</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
  <div class="homepage">
    <div class="vert-text">
      <h1>Desesperados</h1>
      <br>
      <div class="container">
        <div class="row form">
          <div class="col-lg-8 col-lg-offset2 text-center">
            <form action="#" id="form_login" name="form_login" class="form-horizontal" role="form" method="POST">
              <div class="form-group">
                <div class="col-lg-12">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <a href="#"  id="login" class="btn btn-lg btn-danger"><strong>LOGIN</strong></a>
                </div>
              </div>
              <small><a href="signup.php" class="signup_link">Ainda não é cadastrado? Clique aqui.</a></small>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>