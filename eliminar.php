<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
  <script src="recursos/js/jquery-3.4.1/jquery.min.js"></script>
  <script src="recursos/js/bootstrap.min.js"></script>
  
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">  
        <div class="col-sm-12">     
            <div class="row">
                    <div class="col-sm-2">
                        <div class="container">      
                            
                                <h3 style="color:white"></h3>
                            </div>
                    </div>               

                    <div class="col-sm-8">
                            <h2 style="color:white">Eliminar Pokemon</h2>
                            
                    </div>

                    <div class="col-sm-2">
                        <a href="#">Cerrar sesion</a>
                    </div>        
                        
            </div>        
        </div>
</nav> 

<br>

<div class="container">

<?php

include_once "conexion.php";

          $id=$_REQUEST['id'];

          if ($conn->connect_error) {
              die("Falla en la conexion...<br> " . $conn->connect_error);
          }

          $consulta="select * from pokemon where id_pokemon=$id";
          $res=$conn->query($consulta);

          $registro=$res->fetch_assoc();
            
?>

<div class="row">

            <div class="col-sm-6">
                
                <h2>Datos Pokemon</h2><br>

              <form action="eliminarPokemon.php?id=<?php echo $registro['id_pokemon'];?>" method="post"enctype="multipart/form-data">          

                      <div class="form-group">
                        <label for="nombre"><h5>Nombre:</h5></label>
                        <input type="text" class="form-control" id="nombre" value="<?php echo $registro['nombre'] ?>">  
                        </div>  
                      
                      <div class="form-group">
                        <label for="tipo"><h5>Tipo:</h5></label>
                        <input type="text" class="form-control" id="tipo" value="<?php echo $registro['tipo'] ?>">  
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-success">Confirmar</button>
                        <a href="index.php" class="btn btn-success" role="button">Cancelar</a>
                    
                    </form>            
            </div>

            
            <div class="col-sm-6">

            <center><h4>Imagen</h4><br><br>
            <table>
            <thead>
                <tr>
                <th><img height="400px" src="data:image/jpg;base64, <?php echo base64_encode($registro['imagen']);?>"></th>
                </tr>
              </thead>  
            </table>
            </center> 

            </div>

    </div> 

</div>

</body>
</html>