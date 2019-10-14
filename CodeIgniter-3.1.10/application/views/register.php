<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Please do Registration here</h3>
                  </div>
                  <div class="panel-body">

                 

                      <form role="form" method="post">
                      <!-- <form role="form" method="post" action="../models/User_model.php">-->
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter Name" name="user_name" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter E-mail" name="user_email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Password" name="user_password" type="password" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Age" name="user_age" type="number" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter 10 digit Mobile No" name="user_mobile" type="number" value="">
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >

                          </fieldset>
                      </form>
                      <center><b>You have Already registered ?</b> <br></b><?php echo anchor('User/load_login', 'Login');?> </center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>