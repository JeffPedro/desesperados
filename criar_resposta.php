<?php
session_start();
require('banco.php');
$materia = $mysqli->query("SELECT * FROM materia ");

$id_topico = $_GET['id'];
  if(isset($_POST['resposta'])){
    $mysqli->query("INSERT INTO topico_resposta (id_usuario,id_topico,resposta) VALUES ('".$_SESSION['id']."','".$_POST['id_topico']."','".$_POST['resposta']."');");
   $id_topico = $_POST['id_topico'];
   header("Location: dentro_topico.php?id=$id_topico");
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
        <input type="hidden" name="id_topico" value="<?php echo $id_topico; ?>">
          <h1><strong>Resposnder Topico</strong></h1>
          <hr>
          <div class="form-group">
            <label for="name" class="col-lg-2 control-label text-right">Resposta:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="resposta" name="resposta" placeholder="Aqui não é um texto em ;D" required>
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