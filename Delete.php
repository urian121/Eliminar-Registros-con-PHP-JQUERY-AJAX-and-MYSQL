<?php
include('config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM drag_drop WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);

?>