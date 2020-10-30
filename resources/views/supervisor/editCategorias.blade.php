<!DOCTYPE html>
<html lang="es"><!-- en lang cambiamos el idioma de la pagina en mi caso le puse es de Español-->
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- aqui el bootstrap por defecto agrego un estilo y controlo de archivos-->
    <link rel="stylesheet" href="static/css/estilos.css">
    <script src="https://kit.fontawesome.com/d9d3a529fe.js" crossorigin="anonymous"></script>
    </head>
    <body><!-- aqui agreegue una imagen para que toda la pagina fuera capaz de visualizarse-->
    <style>
    .formulario {color: #0000CC; background-color: #FFFF99;}
    </style>
    <form class="form-group" method="GET" action="/Categorias" enctype="multipart/form-data">
            <div ALIGN=CENTER><h1>Categoria - Editar</h1></div>
            <div ALIGN=CENTER class="form-group">
            <label for="">Código</label>
            <input type="text" name="name"  class="form-control">
            </div>
            <br>
            <div ALIGN=CENTER class="form-group">
            <label for="">Producto</label>
            <input type="text" name="name"  class="form-control">
            </div>
            <br>
            <div ALIGN=CENTER class="form-group">
            <label for="">Concepto</label>
            <input type="text" name="desc" class="form-control">
            </div>
            <br>
            <div ALIGN=CENTER>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
    </form>
</body>
</html>