<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login-CI Login Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body>

    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Please do Login here</h3>
                </div>
                

                <div class="panel-body">
                    <?php echo form_open('User/getData',['name'=>'login_form'])?>
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Enter E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Password" name="user_password" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                        </fieldset>
                    </form>
                <center><b>You are not registered ?</b> <br></b> <?php echo anchor('User/load_register', 'Register');?> </center><!--for centered text-->

                </div>
            </div>
        </div>
    </div>
</div>


  </body>
</html>