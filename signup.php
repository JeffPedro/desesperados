<?php
session_start();
require('banco.php');
$faculdade = $mysqli->query("SELECT * FROM escola ");
$curso =  $mysqli->query("SELECT * FROM curso ");

  if(isset($_POST['name'])){
    $mysqli->query("INSERT INTO usuario (nome,login,senha,id_escola,id_curso) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['university']."','".$_POST['course']."' );");
		?><script>alert("Cadastro Realizado com Sucesso!!!");</script><?php
	header("Location: index.php");
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DESESPERADOS - Cadastro</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="img/favicon.png">

  <style>
    body {
      background: #505050;
      color: #ffffff;
    }
    .control-label{
      margin-top: 5px;
    }
    .form-control{
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <form action="#" role="form" method="POST" >
          <h1><strong>Cadastro de Usuários</strong></h1>
          <hr>
          <div class="form-group">
            <label for="name" class="col-lg-2 control-label text-right">Nome Completo:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-lg-2 control-label text-right">Email:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="email" name="email" placeholder="name@email.com" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-lg-2 control-label text-right">Senha:</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group">
            <label for="university" class="col-lg-2 control-label text-right">Universidade:</label>
            <div class="col-lg-10">
              <select name="university" id="university" name="university" class="form-control">
                <?php
                    while ($f = $faculdade->fetch_assoc()) {
                      ?><option value="<?php echo($f['id']); ?>"><?php echo( utf8_encode($f['titulo'])); ?></option><?php
                    }              
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="course" class="col-lg-2 control-label text-right">Curso:</label>
            <div class="col-lg-10">
              <select name="course" id="course" name="course" class="form-control">
               <?php
               while ($c = $curso->fetch_assoc()) {
                   ?><option value="<?php echo($c['id']); ?>"><?php echo( utf8_encode($c['titulo'])); ?></option><?php
                }              
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Lembrar-me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-lg btn-danger">Submit</button>
              <button type="reset" class="btn btn-lg btn-info">Clear</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>