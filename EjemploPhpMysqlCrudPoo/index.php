<!DOCTYPE html> 
 <html> 
 <head> 
    <title>Productos</title> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!--con esto se llama al script-->
    <script src="js/productos.acciones.js"></script>

    
 </head> 
 <body> 
    
    <div class="row  bg-primary">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="text-center">LISTA DE PRODUCTOS</h1>
        </div>
    </div>


    <div class="row">
    <div class="col-md-4"> <!--inicio columna 1-->
        
        <div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <h2 class="text-center">Ingreso de Productos </h2>
            
            <form id="FormIngreso">
            
            <div class="form-group">
                <label>Código</label>
                <input type="text" class="form-control" id="txtcod_prod" placeholder="código">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="txtnom_prod" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="tipo_prod">Tipo producto</label>
                <input type="text" class="form-control" id="txttipo_prod" placeholder="Tipo producto">
            </div>
            <div class="form-group">
                <label for="precio_uni">Precio unitario</label>
                <input type="text" class="form-control" id="txtprecio_prod" placeholder="Precio unitario">
            </div>
            <div class="form-group">
                <label for="precio:dist">Precio Distribución</label>
                <input type="text" class="form-control" id="txtprecio_dist" placeholder="Precio distribución">
            </div>
            
            <input type="button" class="btn btn-primary btn-block" href="javascript:;" onclick="AlmacenaryCargar($('#txtcod_prod').val(), $('#txtnom_prod').val(), $('#txttipo_prod').val(), $('#txtprecio_prod').val(), $('#txtprecio_dist').val());return false;" value="Guardar"/>

            
            </form>
        </div>
        </div>

    </div> <!--fin columna 1-->

    <div class="col-md-8" id="detalle"> <!--inicio columna 2-->
        <?php 
            include ('lista_productos.php');
         ?>
        
    </div><!--fin columna 2-->
    </div><!--fin fila-->
    
    <script src="jquery/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body> 
 </html> 