
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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
      <?php include('../home/../home/cssScripts.php'); ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign up</h3>
                        <a href="login.php">Login</a>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="FirstName" name="firstname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="LastName" name="lastname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="UserName" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" name="email" type="email" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="contact" name="contact" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="sem" name="sem" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="uid" name="uid" type="text" value="">
                                </div>
                                 <div class="form-group">
                                    <label>User Type:</label>
                                    <select name="user_type" class="form-control">
                                        <option name="Student" name="Student">Student</option>
                                        <option name="Librarian" name="Librarian">Librarians</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <input  name="Gender" type="checkbox" value="male">
                                    <label>Male</label>
                                    <input  name="Gender" type="checkbox" value="female">
                                    <label>Female</label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type='submit' class="btn btn-lg btn-success btn-block" id="signup" name="signup">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <?php include('../home/jsScripts.php'); ?>

</body>

</html>
<?php
 
    if(isset($_POST['signup'])){
       
        
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $sem=$_POST['sem'];
        $uid=$_POST['uid'];
        $user_type=$_POST['user_type'];
        $gender=$_POST['Gender'];
        $insert="insert into std_register(firstname,lastname,username,password,email,contact,sem,uid,gender,user_type)  values('$firstname','$lastname','$username','$password','$email','$contact','$sem','$uid','$gender','$user_type')";

        $result=mysqli_query($conn,$insert);

        if($result){
                
                echo "
                        <script>
                        alert('your registration is completed thank you');
                        </script>
                     ";
                        ?> 
                           <script>
                                   window.location.href = "login.php"; 
                           </script>
                    <?
         }else{
                 echo mysqli_error($conn);
                     

       }

    }

?>