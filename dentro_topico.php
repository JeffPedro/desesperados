<?php
session_start();
require('banco.php');
$topico =  $mysqli->query("SELECT t.*, u.nome FROM topico as t INNER JOIN usuario as u ON u.id = t.id_usuario where t.id =".$_GET['id']);
$resposta = $mysqli->query("SELECT tr.*, u.nome FROM topico_resposta as tr INNER JOIN usuario as u on u.id = tr.id_usuario where tr.id_topico =".$_GET['id']);

$t = $topico->fetch_assoc();

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
        <h1><?php echo $t['titulo']; ?></h1>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h5><a href="criar_resposta.php?id=<?php echo $t['id']; ?>">Escrever resposta</a></h5>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
			   <div class="area-title"><?php echo utf8_encode($t['nome']); ?>: <?php echo utf8_encode($t['descricao']); ?></div>
      <?php while ($r = $resposta->fetch_assoc()):  ?>
         <div class="area-title"><?php echo utf8_encode($r['nome']); ?>: <?php echo utf8_encode($r['resposta']); ?></div>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>