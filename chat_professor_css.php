<!DOCTYPE html>
<html lang="en">
<head>

  <?php 

  session_start();
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
  include('includes/links.php');
  include('conexao.php');

   if (isset($_SESSION['login'])) {
  if ($_SESSION['login']==1) {

   if ($_SESSION['chave']==1) {
    header('location:admin.php');
  }

  if ($_SESSION['chave']==3) {
    header('location:responsavel.php');
  }
   
}
}

else{
  header('location:login.php');
}

  ?>

	<title>Perfil e Recados</title>
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

</head>
<body>
	
	
<center>
			<div class="wrap-login100" id='telinha'>
				

	<div class="row">
	<div class="col-md-6" id="perfil">
    <?php
          include('includes/select_foto_professor.php');
          ?>
	</div>
		 <div class="col-md-6" id="info">
                   <?php 

        include('includes/select_inform_professor.php');

        ?>
		
		</div>
	</div>
	<div class="row">
			<div class="recadosgeral">
        <div class="col-md-12" id="recados">
            <p>
              <?php include 'includes/select_mensagens_professor.php'; ?>
            </p>

            <p class="row">
              <li><textarea id='txt' name='recado' class="col-md-6"></textarea>

              <select name='select_tipo' id='tipo' class="custom-select col-md-6">

                <?php
                  include('includes/select_tipoderecado.php');    
                ?>

            </select>  </li>
            </p>
</div>
			</div> 
	   </div>	



</div>
</center>
	<script src="js/main.js"></script>

</body>
<style type="text/css">
body{
	background-color: #FF8C00;
}


p{
	color: black;
}
h5{
    color: black;
}


#info{
  text-align: left;
}


#recados{
	background-color: grey;
	margin-top: 10%;
	margin-left: 40%;
 	width: 200%;
	height: 90%;
	position: relative;
	float: right;
	overflow: scroll;
	opacity: 0.6;
  text-align: left;
 }	


 #recadosaviso{
	margin-top: 1%;
	margin-right: -10%;
 	width: 34%;
	height: 90%;
	position: relative;
	float: left;
	overflow: scroll;
	opacity: 0.9;
  text-align: left;
 	
 }

::-webkit-scrollbar {
  width: 11px;
  height: 11px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #e1e1e1;
  border: 0px none #ffffff;
  border-radius: 27px;
}
::-webkit-scrollbar-thumb:hover {
  background: #ffffff;
}
::-webkit-scrollbar-thumb:active {
  background: #000000;
}
::-webkit-scrollbar-track {
  background: #666666;
  border: 12px none #ffffff;
  border-radius: 57px;
}
::-webkit-scrollbar-track:hover {
  background: #666666;
}
::-webkit-scrollbar-track:active {
  background: #333333;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>
</style>
</html>