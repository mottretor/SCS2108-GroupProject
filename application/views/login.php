<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Samikta Constructions | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php eco base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php eco base_url()?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Samikta Constructions</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
           
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Account Login</h1>
          </div>
         
        </div>
      </div>
      
    </header>
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active"><a href="#"><span class="glyphicon glyphicon-home"> Home</span></a></li>
        </ol>
      </div>
    </section>
    
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="" class="well">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
              </div>
                <center>
                  <button type="submit" class="btn btn-default">Login</button>
                </center>
            </form>
          
          </div>
        </div>
      </div>
    </section>

   
    <footer id="footer">
      <p>Copyright &copy</p>
      
    </footer>
    <!--ckeditor-->
    <script>
      CKEDITOR.replace( 'pagebody' );
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php eco base_url()?>assets/s/jquery.min.js"></script>
    <script src="<?php eco base_url()?>assets/js/bootstrap.min.js"></script>
    
  </body>
</html>