<?php 

if (isset($_GET['id'])) {

		$delete = 'delete from tb_nota where cd_nota = "'.$_GET['id'].'" ';

if($query_delete = $mysqli->query($delete)){
	
	      }

else{
	echo "<script>alert('Não foi possível excluir a nota');</script>";
}

	  }

?>