<!DOCTYPE html>
<html lang="en">
  <head>
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

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

<?php
include('conexao.php');
session_start();

  ?>
    
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
              <!--<a href="index.html"><span class="text-white">Colégio 22 de Abril</a>-->
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="#home-section" class="font-size-18 nav-link">A Escola</a></li>
                  <li><a href="#about-section" class="font-size-18 nav-link">Local</a></li>
                  <li><a href="#discover-section" class="font-size-18 nav-link">Galeria</a></li>
                  <li><a href="#contact-section" class="font-size-18 nav-link">Contato</a></li>
                  <li><a href="blog.php" class="font-size-18 nav-link">Blog</a></li>

                  <?php

                  if(isset($_SESSION['login'])){echo '<li><a href="login.php"><button type="button" class="btn btn-warning btn-lg"><b>Bem-vindo</b></button></a></li>';}
                  	else{ echo '<li><a href="login.php"><button type="button" class="btn btn-warning btn-lg"><b>Login</b></button></a></li>';}
                  	?>
                  
                </ul>
              </nav>
          
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>



    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hero_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/hero_2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="site-section bg-image" style="background-image: url('images/hero_1_no-text.jpg');" id="home-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 mb-4">
            <figure class="figure" data-aos="fade" id="img-about">
                <img src="images/hero_1_no-text-2.jpg" class="figure-img img-fluid rounded" alt="Image">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto align-self-lg-center">
            <img src="images/escola.png" class="img-fluid menu-header">
            <p class="text-white">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut, praesentium magnam, pariatur quae, necessitatibus</p>
            <p class="text-white">Dolor, eligendi voluptate ducimus itaque esse autem perspiciatis sint! Recusandae dolor aliquid inventore sit,</p>
            <p class="text-white">Dolor, eligendi voluptate ducimus itaque esse autem perspiciatis sint! Recusandae dolor aliquid inventore sit,</p>
          </div>
        </div>
       
      </div>
    </div>


    <div class="site-section bg-light counter" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
              <a href="#"><img src="images/local.png" class="img-fluid" height="100"></a>
              <p>Estamos na Rua dos Fundadores nº 345, Praia do Sonho.</p>
          </div>
        </div>
        <div class="row mb-5 justify-content-center">
        	 <div class="mapouter"><div class="gmap_canvas"><iframe width="915" height="288" id="gmap_canvas" src="https://maps.google.com/maps?q=col%C3%A9gio%2022%20de%20abril&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">best wordpress themes</a></div><style>.mapouter{position:relative;text-align:right;height:288px;width:915px;}.gmap_canvas {overflow:hidden;background:none!important;height:288px;width:915px;}</style></div>
         </div>    
					    
         		         <div class="row"> 
					  <div class="column">
					    <img id="myImg" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local1.jpg">
					    					    <div id="myModal" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img01">
							  <div id="caption" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal = document.getElementById("myModal");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img = document.getElementById("myImg");
									var modalImg = document.getElementById("img01");
									var captionText = document.getElementById("caption");
									img.onclick = function(){
									  modal.style.display = "block";
									  modalImg.src = this.src;
									  captionText.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span = document.getElementsByClassName("close")[0];

									// When the user clicks on <span> (x), close the modal
									span.onclick = function() { 
									  modal.style.display = "none";
									}
							</script>
					 



					    <img id="myImg2" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local2.jpg">
					    	<div id="myModal2" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img02">
							  <div id="caption2" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal2 = document.getElementById("myModal2");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img2 = document.getElementById("myImg2");
									var modalImg2 = document.getElementById("img02");
									var captionText2 = document.getElementById("caption2");
									img2.onclick = function(){
									  modal2.style.display = "block";
									  modalImg2.src = this.src;
									  captionText2.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span2 = document.getElementsByClassName("close")[1];

									// When the user clicks on <span> (x), close the modal
									span2.onclick = function() { 
									  modal2.style.display = "none";
									}
							</script>
					  </div>
					  
					  <div class="column">
					    <img id="myImg3" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local3.jpg">
					    <div id="myModal3" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img03">
							  <div id="caption3" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal3 = document.getElementById("myModal3");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img3 = document.getElementById("myImg3");
									var modalImg3 = document.getElementById("img03");
									var captionText3 = document.getElementById("caption3");
									img3.onclick = function(){
									  modal3.style.display = "block";
									  modalImg3.src = this.src;
									  captionText3.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span3 = document.getElementsByClassName("close")[2];

									// When the user clicks on <span> (x), close the modal
									span3.onclick = function() { 
									  modal3.style.display = "none";
									}
							</script>


					    <img id="myImg4" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local4.jpg">
					    <div id="myModal4" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img04">
							  <div id="caption4" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal4 = document.getElementById("myModal4");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img4 = document.getElementById("myImg4");
									var modalImg4 = document.getElementById("img04");
									var captionText4 = document.getElementById("caption4");
									img4.onclick = function(){
									  modal4.style.display = "block";
									  modalImg4.src = this.src;
									  captionText4.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span4 = document.getElementsByClassName("close")[3];

									// When the user clicks on <span> (x), close the modal
									span4.onclick = function() { 
									  modal4.style.display = "none";
									}
							</script>

					  </div>
					  
					  <div class="column">
					    <img id="myImg5" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local5.jpg">
					     <div id="myModal5" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img05">
							  <div id="caption5" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal5 = document.getElementById("myModal5");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img5 = document.getElementById("myImg5");
									var modalImg5 = document.getElementById("img05");
									var captionText5 = document.getElementById("caption5");
									img5.onclick = function(){
									  modal5.style.display = "block";
									  modalImg5.src = this.src;
									  captionText5.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span5 = document.getElementsByClassName("close")[4];

									// When the user clicks on <span> (x), close the modal
									span5.onclick = function() { 
									  modal5.style.display = "none";
									}
							</script>


					    <img id="myImg6" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local6.jpg">
					     <div id="myModal6" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img06">
							  <div id="caption6" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal6 = document.getElementById("myModal6");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img6 = document.getElementById("myImg6");
									var modalImg6 = document.getElementById("img06");
									var captionText6 = document.getElementById("caption6");
									img6.onclick = function(){
									  modal6.style.display = "block";
									  modalImg6.src = this.src;
									  captionText6.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span6 = document.getElementsByClassName("close")[5];

									// When the user clicks on <span> (x), close the modal
									span6.onclick = function() { 
									  modal6.style.display = "none";
									}
							</script>
					  </div>

					  <div class="column">
					    <img id="myImg7" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local7.jpg">
					    <div id="myModal7" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img07">
							  <div id="caption7" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal7 = document.getElementById("myModal7");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img7 = document.getElementById("myImg7");
									var modalImg7 = document.getElementById("img07");
									var captionText7 = document.getElementById("caption7");
									img7.onclick = function(){
									  modal7.style.display = "block";
									  modalImg7.src = this.src;
									  captionText7.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span7 = document.getElementsByClassName("close")[6];

									// When the user clicks on <span> (x), close the modal
									span7.onclick = function() { 
									  modal7.style.display = "none";
									}
							</script>

							<img id="myImg8" class="myImg" alt="Snow" style="width:100%;max-width:300px" src="images/local8.jpg">
					    <div id="myModal8" class="modal">
							  <span class="close">&times;</span>
							  <img class="modal-content" id="img08">
							  <div id="caption8" class="caption"></div>
							</div>

							<script type="text/javascript">
																	// Get the modal
									var modal8 = document.getElementById("myModal8");

									// Get the image and insert it inside the modal - use its "alt" text as a caption
									var img8 = document.getElementById("myImg8");
									var modalImg8 = document.getElementById("img08");
									var captionText8 = document.getElementById("caption8");
									img8.onclick = function(){
									  modal8.style.display = "block";
									  modalImg8.src = this.src;
									  captionText8.innerHTML = this.alt;
									}

									// Get the <span> element that closes the modal
									var span8 = document.getElementsByClassName("close")[7];

									// When the user clicks on <span> (x), close the modal
									span8.onclick = function() { 
									  modal8.style.display = "none";
									}
							</script>
					  </div>
					  </div>
		</div>
	</div>




    <div class="site-section" id="discover-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
              <a href="#"><img src="images/galeria.png" class="img-fluid menu-header">
              <p></p>
          </div>
        </div>

        <div class="container">
  <div class="carousel slide" data-ride="carousel" id="multi_item">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-sm"><img class="d-block w-100" src="images/galeria1.jpg" alt="1 slide"></div>
          <div class="col-sm"><img class="d-block w-100" src="images/galeria2.jpg" alt="2 slide"></div>
          <div class="col-sm"><img class="d-block w-100" src="images/galeria3.jpg" alt="3 slide"></div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-sm"><img class="d-block w-100" src="images/galeria4.jpg" alt="4 slide"></div>
          <div class="col-sm"><img class="d-block w-100" src="" alt="5 slide"></div>
          <div class="col-sm"><img class="d-block w-100" src="" alt="6 slide"></div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
  <br><br>
</div>


<script type="text/javascript">
	$('.carousel').carousel();
	$('.carousel').carousel({
interval: 2000
})
</script>

      </div>
    </div>

    
    
   


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <a href="#"><img src="images/form.png" class="img-fluid" height="100"></a>
            <p>Caso queira nos conhecer melhor, deixe sua dúvida e entraremos em contato por telefone ou email ;)<br></p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-5">
            <form method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Nome completo" name='nome_completo_contato' id='nome_completo'>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Telefone" name='telefone_contato' id='telefone'>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email" name='email_contato' id='email'>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="duvida_contato" id="duvida" class="form-control" placeholder="O que gostaria de saber?" cols="30" rows="10"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <button class="btn btn-block btn-primary text-white py-3 px-5" id='mandar'>
                  	Mandar Formulário
                  </button>
                </div>
              </div>
            </form>

            <?php


            			if (isset($_POST['nome_completo_contato'])) {
            			
            			if (isset($_POST['telefone_contato'])) {
            				
            			if (isset($_POST['email_contato'])) {
            				
            			if (isset($_POST['duvida_contato'])) {
            			
							$nome = $_POST['nome_completo_contato'];
							$tel = $_POST['telefone_contato'];
							$email = $_POST['email_contato'];
							$duvida = $_POST['duvida_contato'];

							$sql_duvida = 'insert into tb_formulario_interesse values(null, "'.$nome.'", "'.$tel.'", "'.$email.'", "'.$duvida.'")';
							$query_duvida = $mysqli->query($sql_duvida);
								echo 'O seu formulário foi cadastrado com sucesso.';

										
									}
								}
							}
						}	

			?>

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
                <h2 class="footer-heading mb-4">Acompanhe-nos:</h2>
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

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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