<?php include "files/dbconnection.php" ?>
<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fname'];
$email=$_POST['email']; 
$phone=$_POST['phone'];
$password=md5($_POST['password']); 
$sql="INSERT INTO  users(fullname,email,phone,password) VALUES(:fullname,:email,:phone,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullame',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}

?>


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon"/>    
    <title>Zalego | Signup</title>
</head>
<body>
    <!-- nav -->

<br>
<!-- content -->
<div class="container">
    <div class="row mt-5">      
        <div class="col-md-5 ml-auto mr-auto">            
            
            <div class="card">
                <div class="card-header">
                    <h3>Signup</h3>
                </div>
                <div class="card-body">         
                <form  method="post" name="signup" onSubmit="return valid();">
                    <div class="form-group">
                        <label for="fname">Full Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group mt-3">                      
                        <button type="submit" class="btn btn-primary btn-smfloat-left" style="width: 200px;" name="signup">Signup</button>
                        <a href="login.php" class=" page-link btn-sm float-right">I already have an Account?</a>                       
                    </div>
                    
                </form>
        
            </div>
        </div>
        
    </div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>    
</body>
</html>