

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/styles.css">  
  <title>Título de la página</title>
</head>

<body>


<form class="col-6" action="create" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-12">
            <label class="form-label" for="fname">Modelo</label>
            <input class="miInput form-control" type="text" id="fname" name="Modelo" placeholder="Modelo">

            <label class="form-label" for="fname">Precio</label>
            <input class="miInput form-control" type="text" id="fname" name="Precio" placeholder="Precio">
            
            <label class="form-label" for="fname">Precio-original</label>
            <input class="miInput form-control" type="text" id="fname" name="Precio-original" placeholder="Precio-original">

            <label class="form-label" for="fname">Stock</label>
            <input class="miInput form-control" type="text" id="fname" name="Stock" placeholder="Stock">

            <label class="form-label" for="fname">Img</label>
            <input class="miInput form-control" type="text" id="fname" name="Img" placeholder="Img">

             
        </div>           
              <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
</body>
</html>