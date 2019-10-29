<!DOCTYPE html>
<html>
<head>
	<title>22WEB|| LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<?php
session_start();

if (isset($_SESSION['login'])) {
  if ($_SESSION['login']==1) {

  if ($_SESSION['chave']==1) {
    header('location:painel_adm/index.php');
  }

  if ($_SESSION['chave']==2) {
    header('location:professor.php');
  }

  if ($_SESSION['chave']==3) {
    header('location:responsavel.php');
  }
   
}
}

  ?>


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="index.php"><img src="images/img.png" alt="IMG"></a>
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Login 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nome é necessário">
						<input class="input100" type="cpf" name="pass" placeholder="Nome" id='nome'>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "CPF é necessário">
						<input class="input100" type="cpf" name="pass" placeholder="Cpf" id='cpf'>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Senha é necessária">
						<input class="input100" type="password" name="pass" placeholder="Senha" id='senha'>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="loginbutton" id='mandar'>
							Entrar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueci
						</span>
						<a class="txt2" href="#">
							a Senha
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.01
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<script type="text/javascript">
  
            $(document).ready(function(){
            $("#mandar").click(function(){

              var dados = {'nome': $('#nome').val(), 'senha': $('#senha').val(), 'cpf' : $('#cpf').val() };

               $.ajax({
                type:'POST',
                url:'ajax/login.php',
                data: dados,

                success : function(response){
                  if(response.trim() == "location.href = 'professor.php';"){
                  eval(response);
                  $('.validate').css('border-color', 'green');
                }

                if(response.trim() == "location.href = 'responsavel.php';"){
                  eval(response);
                  $('.validate').css('border-color', 'green');
                }

              if(response.trim() == "location.href = 'admin.php';"){
                  eval(response);
                  $('.validate').css('border-color', 'green');
                }

                else{
                  $('.validate').css('border-color', 'red');
                }
                }

               });
            });
          });

          </script>

</body>
</html>