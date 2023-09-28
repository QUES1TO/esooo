
<?php include ("admi/cabecera.php");?>
<?php include ("admi/cabecera2.php");?>
<h1 style="color: #192327;">aaaaaaaaaa </h1>

        
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/styles.css">    
    <style>
    </style>
</head>
<body>
<script src="<?php echo BASE_URL; ?>/Views/js/main.js"></script>
<table>
  <thead">
    <tr>
      <div >
      <th style="color: white;" >ID </th>
      <th style="color: white;" >Nombres</th>    
      <th style="color: white;">Descripcion</th>    
      <th style="color: white;">Precio</th>
      <th style="color: white;">Modelo</th>
      <th style="color: white;">Stock</th>
      <th style="color: white;">Cilindrada</th>
      </div>
    </tr>
  </thead>
  <tbody style="color: white;">
    <?php
    foreach($data as $row)
    
    {
      echo '<tr class="fila-Tipo" data-id="'.$row->getId().'">';
      echo "<td>".$row->getId()."</td>";
      echo "<td>".$row->getNombre()."</td>";  
      echo "<td>".$row->getDescripcion()."</td>";  
      echo "<td>".$row->getPrecio()."</td>"; 
      echo "<td>".$row->getModelo()."</td>"; 
      echo "<td>".$row->getStock()."</td>"; 
      echo "<td>".$row->getCilindrada()."</td>"; 
     // echo "<td><a href=\"".BASE_URL."/userEdit/".$row->getId()."\">Editar</a>";   
     // echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>'; 
     // echo "</tr>";
      
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

