


<script src="<?php echo BASE_URL; ?>/Views/js/main.js"></script>
<table>
  <thead">
    <tr>
      <div >
      <th style="color: white;" >ID </th>
      <th style="color: white;" >Nombres</th>    
      <th style="color: white;">Apellido</th>    
      <th style="color: white;">Ci</th>
      <th style="color: white;">Ingreso</th>
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
      echo "<td>".$row->getApellido()."</td>";  
      echo "<td>".$row->getCi()."</td>"; 
      echo "<td>".$row->getIngreso()."</td>"; 
      echo "<td><a href=\"".BASE_URL."/userEdit/".$row->getId()."\">Editar</a>";   
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>'; 
      echo "</tr>";
      
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

