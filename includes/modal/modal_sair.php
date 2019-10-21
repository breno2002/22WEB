

  <!-- Modal Structure -->
  <div id="modal_sair" class="modal">
    <div class="modal-content">
      <h4><center>Você deseja mesmo sair?</center></h4>
    </div>
      <center>
      	<form method="post" name='deslogar'>
      	<button name='deslogar' class="waves-effect waves-green btn-flat">Sair</button>
      	</form>
          </center>
  </div>

  <?php 

  if (isset($_POST['deslogar'])) {
  	session_destroy();

  echo ' <meta http-equiv="refresh" content="0.1" />';
  }

  ?>