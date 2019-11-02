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
                            <h2 style="color:white">Pagina Login</h2>
                                    
                            </div>

                            <div class="col-sm-2">
                                <a href="#">cerrar sesion</a>
                            </div>        
                                
                    </div>        
                </div>
        </nav> >

        <br>

        <div class="container">

        <div class="container">


          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <h2><center>Login</center></h2><br>
            <form action="/action_page.php">
                <div class="form-group">
                  <br>
                  <input type="text" class="form-control" id="usuario" placeholder='ingrese usuario'>  
                </div>

                <div class="form-group">
                    <br>
                    <input type="password" class="form-control" id="pwd" placeholder='ingrese password'>
                </div>

                <div class="form-group form-check">
                    <label class="form-check-label"><input class="form-check-input" type="checkbox"> Remember me</label>
                </div>
                  <center><button type="submit" class="btn btn-success">Login</button>
                  <br>
                  <a href='registro.php'>registrarme</a>
                  </center>
             </form>
            
            </div>
            <div class="col-sm-4"></div>
          </div>
        
     </div>

    </div>
    </body>
</html>