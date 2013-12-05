<?php 
require('banco.php');
$materia =  $mysqli->query("SELECT * FROM materia ");
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
        <h3>Selecione a área do conhecimento</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
		<?php  
		while ($m = $materia->fetch_assoc()):  ?>
			<div class="area-title"><a href="topicos.php?id=<?php echo $m['id']; ?>"><?php echo utf8_encode($m['titulo']); ?></a></div>
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