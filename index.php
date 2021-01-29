<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registros con Php - Ajax y Mysql :: WebDeveloper Urian Viera</title>
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
<h3 class="text-center mt-5"> Borrar (Eminar) Registros con PHP - AJAX Y MYSQL </h3>
<hr><br>

<?php
require_once ('config.php');
$Querydrag_drop      = ("SELECT * FROM drag_drop ORDER BY posicion");
$resultadodrag_drop  = mysqli_query($con, $Querydrag_drop);
?>



<?php
while ($dataDrag_Drop = mysqli_fetch_assoc($resultadodrag_drop)) { ?>
    <div class="col-md-6 col-lg-4 caja" id="registro<?php echo $dataDrag_Drop['id']; ?>">
        <div class="drop__card">
            <div class="drop__data">
                <img src="assets/img/<?php echo $dataDrag_Drop['imagen']; ?>" alt="" class="drop__img">
                <div>
                    <h1 class="drop__name"><?php echo $dataDrag_Drop['nombre']; ?></h1>
                    <span class="drop__profession"><?php echo $dataDrag_Drop['profesion']; ?></span>
                </div>
            </div>
            <div class="circulo">
                <h2><?php echo $dataDrag_Drop['id']; ?> </h2>
            </div>            
        </div>

        <div class="barra" id="<?php echo $dataDrag_Drop['id']; ?>">
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
