<?php include ("admi/cabecera.php");?>
<?php include ("admi/cabecera2.php");?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Título de la página</title>
</head>

<body>
<h1 style="color:  #192327;">aaaaaaaaaa </h1>

<form class="col-6" action="create" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-12">
            <label class="form-label" for="fname">Modelo</label>
            <input class="miInput form-control" type="text" id="fname" name="Modelo" placeholder="Modelo">

            <label class="form-label" for="fname">Precio</label>
            <input class="miInput form-control" type="text" id="fname" name="Precio" placeholder="Precio">
            
            <label class="form-label" for="fname">Original</label>
            <input class="miInput form-control" type="text" id="fname" name="Original" placeholder="Original">

            <label class="form-label" for="fname">Stock</label>
            <input class="miInput form-control" type="text" id="fname" name="Stock" placeholder="Stock">

            <label class="form-label" for="fname">Img</label>
            <input class="miInput form-control" type="text" id="fname" name="Img" placeholder="Img">

             
        </div>           
              <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
</body>
</html>