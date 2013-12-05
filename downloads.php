<?php
require('banco.php');
$materia =  $mysqli->query("SELECT * FROM materia "); 
	if(@$_POST['cboMateriais'] != ""){
	
		$aquivos = $mysqli->query("SELECT * FROM materia_arquivo");
	}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DESESPERADOS - Downloads</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
	<div class="container">
	 <form action="#" role="form" method="POST" >
		<div class="row">
			<div class="col-lg-12">
				<div id='carregando' style='display:none'>
					<img alt="carregando" src="img/ajax-loading.gif">
  				</div>
  				<div id='content'>
	  				<div id='materias' class='titulo'>
	  					<h1>Downloads</h1>
						<fieldset>
							<legend>Selecione a materia:</legend>
							<select name="cboMaterias" id="cboMaterias" onChange="this.form.submit()">
								<option value="1">Selecione uma mtaeria</option>
							<?php while ($m = $materia->fetch_assoc()):  ?>
									<option value="<?php echo($m['id']); ?>"><?php echo( utf8_encode($m['titulo'])); ?></option>
							<?php endwhile; ?>
							</select>
						</fieldset>
					</div>
		    		<div id='downloads'>
			    		<h1>Lista de Arquivos:</h1>
						<?php while ($a = @$arquivos->fetch_assoc()):  ?>
							<div class="area-title"><a href="<?php echo $a['caminho']; ?>"> <?php echo $a['nome']; ?></a></div>
						<?php endwhile; ?>
					</div>
  				</div>
  			</div>
		</div>
		</form>
	</div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
	<script>
	/*	$(function() {
			getListaMaterias();
		    $("#cboMaterias")
				.change(function() {
					getListaArquivos();
			});
		});

		function getListaMaterias(){
			$('#carregando').fadeIn('slow');
			$.post('../getListaMaterias', function(resultado) {
				var linha = '';
				$.each(resultado, function() {
					linha += '<option>' + this.materias +   '</option>';
				});
				$('#cboMaterias').html(linha);
				getListaArquivos();
			});
			$('#carregando').fadeOut('slow');
		}

		function getListaArquivos(){
			$('#carregando').fadeIn('slow');
			$.post('../getListaMaterias', $('#cboMaterias').serialize() ,function(resultado) {
				var linha = '';
				$.each(resultado, function() {
					linha += '<li><a href=\'' +  this.link + '\'>' + this.titulo +   '</li>';
				});
				$('#listArquivos').html(linha);
			});
			$('#carregando').fadeOut('slow');
		}*/
	</script>
</body>
</html>