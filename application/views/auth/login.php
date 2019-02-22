
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <title></title>
</head>
<body>
    <header>
     <img src="<?php echo base_url();?>/imagen/logo.png" name="img" width="350" height="100">

    </header>
  <div class="container">
    <div class="row">
       <div class="col-md-4">
       </div>
      <div class="col-md-4">
        <h1>Prueba HTML</h1>
        <h1>Login</h1>
        <p>Please login with your email/username and password below.</p>

        <div id="infoMessage"></div>

        <form action="http://localhost:8080/sistema/index.php/auth/login" method="post" accept-charset="utf-8">

          <p>
            <label for="identity">Email/Username:</label>          
              <input  type="text" name="identity" value="" id="identity"></p>

          <p>
            <label for="password">Password:</label>        
                <input type="password" name="password" value="" id="password"></p>

          <p>
            <label for="remember">Remember Me:</label>           
             <input type="checkbox" name="remember" value="1" id="remember"></p>


          <p><input class="btn btn-primary" type="submit" name="submit" value="Login"></p>

        </form>
        <p><a href="forgot_password">Forgot your password?</a></p>     
       </div>
        <div class="col-md-4">
        </div>
    </div>
  </div>
  <FOOTER>
    <h5>Elaborado 1071 Digital</h5>
  </FOOTER>
</body>
</html>