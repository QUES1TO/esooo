
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Views/styles/styles.css">

    <style>
    </style>
</head>
<body>
<div class="container">
        <form class="col-6" action="AdornoRegister" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-12">
            <label class="form-label" for="fname">Nombre_adorno</label>
            <input class="miInput form-control" type="text" id="fname" name="Nombre_adorno" placeholder="Nombre de el adorno">
            <label class="form-label" for="fname">Stock</label>
            <input class="miInput form-control" type="text" id="fname" name="Stock" placeholder="cabtidad de stock">
            <lobel class="form-label" for="fname">Precio</lobel>
            <input class="miInput form-control" type="text" id="fname" name="Precio" placeholder="precio del producto">
            <label for="lname">Imagen del producto:</label>
              <input type="file" name="Imagen">
              <?php
              echo '<select name="Id_categoria">';
              foreach($categorias as $categoria)
              {
                echo '<option value="'.$categoria->getId().'">'.$categoria->getNombre().'</option>';
              }
              echo '</select>';
            ?>
        </div> 
     
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

