
<?php
/* Make connection with database*/
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Library Management System</title>

    <!-- Bootstrap Core CSS -->
        <?php include('../home/cssScripts.php'); ?>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                        <a href="Register.php">Sign up</a>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="username" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Log in">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
       <?php include('../home/jsScripts.php'); ?>
</body>

</html>

<?php 

    if(isset($_POST['login'])){
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        
     echo $check="select id from std_register where username ='$username' and password ='$password'";
      $result=mysqli_query($conn,$check);
      if(mysqli_num_rows($result)>0){
        header('location:'.SITE_PATH.'/home/index.php');
      }else{

        header('location:'.SITE_PATH.'/loginRegister/Register.php');
      }
    }


?>