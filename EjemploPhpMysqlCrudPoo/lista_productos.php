<?php   
    require_once "procesos_php/procesos.php";
    //instacia de clase procesos_productos 
    $busquedapuesto = new procesos_productos();
    //llama al método que realiza la busqueda y obtiene el resultado 
    $datos = $busquedapuesto->buscar();
    
?> 

     <h2 class="text-center">Lista de Existentes </h2>   
     
     <table class="table table-hover"> 
        <thead>
            <tr class="text-center"> 
                <th> Código </th> 
                <th> Nombre </th>
                <th> Tipo </th>
                <th> Precio Unitario </th>
                <th> Precio Distribución</th>
                <th>Acciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($datos as $row): ?> 
            <form>
            <tr class="text-center">
               
                <td>
                    <?php echo $row['id_prod']; ?>
                    <input type="hidden" name="txtcode" id="txtcode" value="<?php echo $row['id_prod']; ?>"> </input>
                </td> 
               <td><?php echo $row['nom_prod']; ?></td>
               <td><?php echo $row['tipo_prod']; ?></td>
               <td class="text-right"><?php echo number_format($row['precio_uni'],2,'.',','); ?></td>
               <td class="text-right"><?php echo number_format($row['precio_dist'], 2, '.',','); ?></td>
               <td>
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    
                    <input type="button" class="btn btn-primary" href="javascript:;" onclick="Eliminar(<?php echo $row['id_prod']; ?>);return false;" value="E"/>
                    
                    

                    
               </td>
               
               
            </tr>
            </form>
            <?php endforeach ?>
        </tbody>
        
         
                 
                  
        </table> 
         
        
 