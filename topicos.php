<?php
session_start();
require('banco.php');
$topico =  $mysqli->query("SELECT * FROM topico WHERE id_materia = ".$_GET['id']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DESESPERADOS - Fórum</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Fórum de Matérias</h1>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h3>Selecione um topico</h3><h5><a href="criar_topico.php">criar um topico</a></h5>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
		<?php  
		while ($t = $topico->fetch_assoc()):  ?>
			<div class="area-title">Dúvida: <a href="dentro_topico.php?id=<?php echo $t['id']; ?>"><?php echo utf8_encode($t['titulo']); ?></a></div>
       <?php endwhile; ?>
		<!-- <ul class="subarea">
            <li class="item"><a href="#">Matemática</a></li>
            <li class="item"><a href="#">Probabilidade e Estatística</a></li>
            <li class="item"><a href="#">Ciência da Computação</a></li>
            <li class="item"><a href="#">Astronomia</a></li>
            <li class="item"><a href="#">Física</a></li>
            <li class="item"><a href="#">Química</a></li>
            <li class="item"><a href="#">Geociências</a></li>
          </ul> -->
      </div>
    </div>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>