
<?php include ("admi/cabecera.php");?>
<?php include ("admi/cabecera2.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Título de la página</title>
</head>
</d>
<body>


<form class="col-6" action="create" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-12">
            <label class="form-label" for="fname">Nombre</label>
            <input class="miInput form-control" type="text" id="fname" name="Nombre" placeholder="Nombre">
            <label class="form-label" for="fname">Descripcion</label>
            <input class="miInput form-control" type="text" id="fname" name="Descripcion" placeholder="Descripcion">
            
              
        </div>           
              <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
</body>
</html>
