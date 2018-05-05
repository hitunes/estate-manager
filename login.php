<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

  <section class="login__banner">
          
              <span class="admin--icon-span">
                  <a href="index.php">
                      <img src="assets/img/home icon.svg" class="admin--icon" height="32px" alt="">
                    </a>
              </span>
            <div class="row login_row">
              <div class="col-md-4">
                <form id="login" action="login.php"  method = "post" class="well--login">
                <?php include('errors.php'); ?>
                    <h3 class="cards--title">Welcome Back!</h3>
                      <div class="form-group">
                        <input type="text" class="form-control--login" placeholder="Email" name = "username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control--login" placeholder="Password" name = "password">
                      </div>
                      <button type="submit" class="btn btn-primary--login btn-block" name="login_user">Login</button>
                  </form>
              </div>
            </div>
    
  </section>

    

  <!-- <script>
     CKEDITOR.replace( 'editor1' );
 </script> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
