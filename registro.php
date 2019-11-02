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
                            <h2 style="color:white">Pagina de registro</h2>
                                    
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

            <div class="col-sm-8">
                    <h2>Registro</h2>

                    <form action="/action_page.php">

                        <div class="form-group">
                        <input type="text" class="form-control" id="nombre" placeholder='ingrese nombre'>  
                        </div><br>  
                        <div class="form-group">
                        <input type="text" class="form-control" id="usuario" placeholder='ingrese usuario'>  
                        </div><br>
                        <div class="form-group">
                        <input type="text" class="form-control" id="mail" placeholder='ingrese ingrese mail'>  
                        </div><br>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder='ingrese password'>
                        </div><br>
                        <button type="submit" class="btn btn-success">Registrar</button>

                    </form>
            </div>

            <div class="col-sm-4"><center><h2>Login</h2></center>
            <center><a href='login.php'>Soy usuario</a></center>
            </div>

          </div>       


        </div>
    </body>
</html>