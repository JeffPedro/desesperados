<?php
session_start();
require('banco.php');
$materia = $mysqli->query("SELECT * FROM materia ");

  if(isset($_POST['titulo'])){
    $mysqli->query("INSERT INTO topico (titulo,descricao,id_materia,id_usuario) VALUES ('".$_POST['titulo']."','".$_POST['descricao']."','".$_POST['id_materia']."','".$_SESSION['id']."' );");
	 $id_materia = $_POST['id_materia'];
   header("Location: topicos.php?id=$id_materia");
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
          <h1><strong>Cadastro de Topico</strong></h1>
          <hr>
          <div class="form-group">
            <label for="name" class="col-lg-2 control-label text-right">titulo:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Aqui não é um texto em ;D" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-lg-2 control-label text-right">descricao:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="O que está aflingindo esse seu coraçãozinho???" required>
            </div>
          </div>
          <div class="form-group">
            <label for="course" class="col-lg-2 control-label text-right">Materia:</label>
            <div class="col-lg-10">
              <select  id="id_materia" name="id_materia" class="form-control">
               <?php
               while ($m = $materia->fetch_assoc()) {
                   ?><option value="<?php echo($m['id']); ?>"><?php echo( utf8_encode($m['titulo'])); ?></option><?php
                }              
                ?>
              </select>
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