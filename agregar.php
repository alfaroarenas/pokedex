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
                    <h2 style="color:white">Agregar Pokemon</h2>
                            
                    </div>

                    <div class="col-sm-2">
                        <a href="#">cerrar sesion</a>
                    </div>        
                        
            </div>        
        </div>
</nav> 

<br>

<div class="container">

<div class="row">

            <div class="col-sm-6">
                    <h2>Ingrese Datos de Pokemon</h2>
                    <br>
                    <form action="agregarPokemon.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder='Nombre de Pokemon' required="Ingrese nombre">  
                        </div><br>  
                        <div class="form-group">
                        <input type="text" class="form-control" name="tipo" placeholder="Tipo de Pokemon" required="ingrese tipo">  
                        </div><br>
                        
                        <input type="file"  name="imagen" required="seleccione un archivo">  
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Agregar</button>
                        <a href="index.php" class="btn btn-success" role="button">Cancelar</a>

                    </form>
            </div>

            <div class="col-sm-6"><center><h2>Pokemon</h2></center>
            <center>aqui se debe ver la imagen</center>
            </div>

          </div>



  </tbody>
  </table>
  
  </div>

</div>


</body>
</html>