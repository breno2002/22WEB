<!DOCTYPE html>
<html lang="en">
  <head>

    <?php session_start(); include 'conexao.php'; ?>
    <title>22 Web | Colégio 22 de Abril</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style_blog.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
            	<a href="#"><img src="images/logo.png" class="brand-logo" height="150"></a>
            	<a href="#"><img src="images/titulo.png" class="img-fluid menu-header"></a>
              <!--<a href="index.php"><span class="text-white">Colégio 22 de Abril</a>-->
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="index.php#home-section" class="font-size-18 nav-link">A Escola</a></li>
                  <li><a href="index.php#about-section" class="font-size-18 nav-link">Local</a></li>
                  <li><a href="index.php#discover-section" class="font-size-18 nav-link">Galeria</a></li>
                  <li><a href="index.php#contact-section" class="font-size-18 nav-link">Contato</a></li>
                  <li><a href="blog.php" class="font-size-18 nav-link">Blog</a></li>
                  <li>
                  <a href="login.php"><button type="button" class="btn btn-warning btn-lg"><b>Login</b></button></a>
	                      </a>
	                      </li>
                </ul>
              </nav>
          
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

<div class="fundo">
<div class="jumbotron jumbotron-fluid" style="background: url('images/hero_1_no-text-22.jpg') fixed;">
  <div class="container">
    <h1 class="display-4"><img src="images/blog.png" class="image-fluid"></h1>
    <p class="lead"></p>
  </div>
</div>


  <div class="container">



    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->

<?php


if (isset($_POST['procurar'])){

  $proc = $_POST['procurar'];
  $sql_proc = 'select cd_post, LEFT(ds_desc, 20) as ds_desc, dt_criacao, id_administrador, ds_titulo, ds_foto_post from tb_post where ds_titulo like "%'.$proc.'%" ';

  echo 'Mostrando todos os resultados para "'.$proc.'" ';

  $query_proc = $mysqli->query($sql_proc);

  while ($row_proc = $query_proc->fetch_array()) {

    echo '<div class="card mb-4">
          <img class="card-img-top" src='.$row_proc['ds_foto_post'].' alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">'.$row_proc['ds_titulo'].'</h2>
            <p class="card-text">'.$row_proc['ds_desc'].'...</p>
            <a href="#" class="btn btn-primary">Ler mais &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            
            <a href="#">Administração</a>
          </div>
        </div>';
      }

  }

else{
  if (!empty($_GET['categoria'])){

    $c=0;
 
      $sql = 'SELECT cd_post, LEFT(ds_desc, 20) as ds_desc, dt_criacao, id_administrador, ds_titulo, ds_foto_post FROM tb_post where cd_post > '.$c.' and id_categoria = '.$_GET['categoria'].' LIMIT 5';

      $query = $mysqli->query($sql);

      while ($row_post = $query->fetch_array()) {
        echo '<div class="card mb-4">
          <img class="card-img-top" src='.$row_post['ds_foto_post'].' alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">'.$row_post['ds_titulo'].'</h2>
            <p class="card-text">'.$row_post['ds_desc'].'...</p>
            <a href="#" class="btn btn-primary">Ler mais &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Postado em '.$row_post['dt_criacao'].' by
            <a href="#">Administração</a>
          </div>
        </div>';
      }

      }

      else{

        $c=0;
 
      $sql = 'SELECT cd_post, LEFT(ds_desc, 20) as ds_desc, dt_criacao, id_administrador, ds_titulo, ds_foto_post FROM tb_post where cd_post > '.$c.' LIMIT 5';

      $query = $mysqli->query($sql);

      while ($row_post = $query->fetch_array()) {
        echo '<div class="card mb-4">
          <img class="card-img-top" src='.$row_post['ds_foto_post'].' alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">'.$row_post['ds_titulo'].'</h2>
            <p class="card-text">'.$row_post['ds_desc'].'...</p>
            <a href="#" class="btn btn-primary">Ler mais &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Postado em '.$row_post['dt_criacao'].' by
            <a href="#">Administração</a>
          </div>
        </div>';
      }
    }
}     

?>
        <!-- Pagination -->
        <nav aria-label="...">
          <ul class="pagination justify-content-center">
            <li class="page-item seta disabled">
              <a class="page-link" href= <?php if(isset($_GET['id'])){echo 'blog.php?id='.$c--;} else{} ?> tabindex="-1">Anterior</a>
            </li>
            <li class="page-item" id="seta"><a class="page-link" href="?id=1">1</a></li>
            <li class="page-item">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Próximo</a>
            </li>
          </ul>
        </nav>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <form method="POST">
        <div class="card my-4">
          <h5 class="card-header">Procurar</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" name="procurar" placeholder="O que você está buscando?">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
          </div>
        </div>
        </form>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                  <?php 

                  $sql_cat = 'select * from tb_categoria_post';

                  $query_cat = $mysqli->query($sql_cat);

                  while ($row_cat = $query_cat->fetch_array()) {
                    echo '<a href="blog.php?categoria='.$row_cat['cd_categoria_post'].'"><li>'.$row_cat['nm_categoria_post'].'</li></a>';
                  }

                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

  </div>
  </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">22 de Abril</h2>

                <p>Texto texto texto texto texto texto texto texto. Endereço aqui, endereço aqui n°1000 11740-000 | Itanhaém - São Paulo. 
                <br>Telefone: XXXX-XXX</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Continue conosco:</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="mb-5">
              <div class="mb-5">
                <h2 class="footer-heading mb-4">Some Paragraph</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nostrum libero iusto dolorum vero atque aliquid.</p>
              </div>
              </div>

          </div>
        </div>


        
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
           
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>