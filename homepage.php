<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DESESPERADOS - Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="img/favicon.png">
  <style>
    
  </style>
</head>
<body>
  <div class="container">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="row">
        <div class="col-lg-8">
          <h1><strong>Bem vindo, <?php echo $_SESSION["nome"]; ?>.</strong></h1>
        </div>
        <div class="col-lg-4 search">
          <form action="#" role="search">
            <div class="form-group col-lg-10">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <div class="col-lg-2">
              <button type="submit" class="btn btn-danger">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-6">
          <button class="btn btn-lg btn-block btn-danger main-menu" id="btn_forum">
            <span class="glyphicon glyphicon-comment"></span>
            FÓRUM
            </button>
        </div>
      <div class="col-lg-6">
        <button class="btn btn-lg btn-block btn-danger main-menu" id="btn_profile">
          <span class="glyphicon glyphicon-user"></span>
          PERFIL
          </button> 
        </div>   
      </div>
      <br>
      <div class="row">
        <div class="col-lg-6">
          <button class="btn btn-lg btn-block btn-danger main-menu" id="btn_downloads">
            <span class="glyphicon glyphicon-cloud-download"></span>
            DOWNLOADS
          </button>
        </div>
        <div class="col-lg-6">
          <button class="btn btn-lg btn-block btn-danger main-menu" id="btn_uploads">
            <span class="glyphicon glyphicon-cloud-upload"></span>
            UPLOADS
          </button> 
        </div>   
      </div>
    </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    function $(id){
      return document.getElementById(id);
    }
    window.onload=function(){
      $('btn_forum').onclick = function(){
        window.location="forum.php";
      }
      $('btn_profile').onclick = function(){
        window.location="profile.html";
      }
      $('btn_downloads').onclick = function(){
        window.location="downloads.php";
      }
      $('btn_uploads').onclick = function(){
        window.location="uploads.html";
      }
    }
  </script>
</body>
</html>