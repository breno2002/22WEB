<?php 

if (isset($_GET['id'])) {

		$delete = 'delete from tb_atividade where cd_atividade = "'.$_GET['id'].'" ';

if($query_delete = $mysqli->query($delete)){

	
	      }

else{
	echo "<script>alert('Exclua as notas relacionadas à essa atividade.');</script>";
}

	  }

?>