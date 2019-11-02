
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
                            
                                <h3 style="color:white">POKEDEX</h3>
                            </div>
                    </div>               

                    <div class="col-sm-6">
                            
                            <div class="container">                
                                    <form class="form-inline" action="buscar.php">
                                    <input class="form-control mr-sm-1" type="text" placeholder="Buscar">
                                    <button class="btn btn-success" type="submit">Buscar</button>  
                                  </form>
                                           
                            </div>
                            
                    </div>

                    <div class="col-sm-2">
                    <a href="login.php">Iniciar sesion</a>
                    </div>

                    <div class="col-sm-2">
                        <a href="#">Cerrar sesion</a>
                    </div>        
                        
            </div>        
        </div>
</nav> 
    
<br>
<div class="container"><h2>Lista de Pokemons</h2><br>

  <div class="table-responsive">          
    <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                  <th>Imagen</th>
                  <th>Acciones</th>
                </tr>
              </thead>

      <tbody>

aqui se debe mostrar informacion del pokemon buscado o 
si no existe la lista de todos..
 
            
        </tbody>    
      </table>
    </div><br><br>
      <a href="agregar.php" class="btn btn-success" role="button">Agregar</a>
  </div>   

</body>

</html>

