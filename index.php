<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registros con Php Mysql y Ajax :: WebDeveloper Urian Viera</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link type="text/css" rel="shortcut icon" href="assets/img/logo-mywebsite-urian-viera.svg"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <span class="navbar-brand">
           <img src="assets/img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
             Web Developer Urian Viera
       </span>
     </nav>
    
<div class="container top">
<h3 class="text-center mt-5"> Borrar (Eliminar) Registros con PHP - MYSQL Y AJAX </h3>
<hr><br>

<?php
require_once ('config.php');
$QuerySql      = ("SELECT * FROM registros ORDER BY id");
$resultadoQuerySql  = mysqli_query($con, $QuerySql);
?>



<?php
while ($dataRegistros = mysqli_fetch_assoc($resultadoQuerySql)) { ?>
    <div class="col-md-6 col-lg-4 caja" id="registro<?php echo $dataRegistros['id']; ?>">
        <div class="drop__card">
            <div class="drop__data">
                <img src="assets/img/<?php echo $dataRegistros['imagen']; ?>" alt="" class="drop__img">
                <div>
                    <h1 class="drop__name"><?php echo $dataRegistros['nombre']; ?></h1>
                    <span class="drop__profession"><?php echo $dataRegistros['profesion']; ?></span>
                </div>
            </div>
            <div class="circulo">
                <h2><?php echo $dataRegistros['id']; ?> </h2>
            </div>            
        </div>

        <div class="barra" id="<?php echo $dataRegistros['id']; ?>">
        <a href="#" class="editar">
            <i class="zmdi zmdi-delete  zmdi-hc-lg"> </i>
            Eliminar
        </a>
    </div>

    </div>
    <?php } ?>

  <div id="resp"> </div>

  </div>

     


<script type="text/javascript" charset="utf-8" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$( ".barra" ).click(function() {
    var id = $(this).attr("id");

    var dataString = 'id='+ id;
    url = "Delete.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function(data)
            {
                $("#registro" + id).hide();
               // $("#registro" + id).remove();
                $('#resp').html(data);
            }
        }); 
    }); 
});
</script>
</body>
</html>
