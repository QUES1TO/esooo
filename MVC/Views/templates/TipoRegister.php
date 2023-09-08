

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
            <label class="form-label" for="fname">Nombre</label>
            <input class="miInput form-control" type="text" id="fname" name="Nombre" placeholder="Nombre">
            <label class="form-label" for="fname">Descripcion</label>
            <input class="miInput form-control" type="text" id="fname" name="Descripcion" placeholder="Descripcion">
            
              <?php
              echo '<select name="Id_categoria">';
              foreach($categorias as $categoria)
              {
                echo '<option value="'.$categoria->getId().'">'.$categoria->getNombre().'</option>';
              }
              echo '</select>';
            ?>
        </div>           
              <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
</body>
</html>