<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../images/logo.png" type="image/x-icon"/>    
    <title>Zalego | Student</title>
</head>
<body>
  <?php
  
  session_start();
  if(! $_SESSION['email']   !$_SESSION['name']){
    header('location: ../../zalego');

  }else{

  
  ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar" style=" background-color: #c73620;">
        <a class="navbar-brandn ml-5" href="index.php"><img src="../images/logo.png" height="30" width="30" alt="Zalego"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <ul class="navbar-nav ml-auto mr-5">
            <li>
            <span class="nav-link mr-5 " style="color: white; font-weight: bold; font-size:20px;"><?php echo $_SESSION['name']; ?></span>
            </li>
          
            <li class="nav-item">
              <form action="../files/authentication.php" method="GET">
                <button class="btn btn-group-sm btn-outline-danger" name="logout" style="color: white;">Logout</button>
              </form>
              
            </li>
          </ul>
           </div>
      </nav>
<br><br><br>
      <!-- content -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-center">Register Students</h3>
            <hr>
            <form autocomplete="off" action="../files/manage.php" method="POST">
                    <div class="form-group">
                        <label for="Name">Names</label>
                        <input type="text" class="form-control" id="Name" name="name" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="course">Course</label>
                        <input type="course" class="form-control" id="course" name="course" required>
                    </div>
                    <div class="form-group mt-3">                      
                        <button type="submit" class="btn btn-primary btn-smfloat-left" name="addstudent" >Add Student</button>
                                              
                    </div>
                    
                </form>
          </div>
          <div class="col-md-8">
            <?php
            require_once('../files/dbconnection.php');
            require('../files/manage.php');
            $students=array();            
            $students = getStudents($dbc);
            $countStudents = count($students);
            if($countStudents > 0){  
            
            ?>
          <h3 class="text-center">Students' Records</h3>
          <table class="table table-sm table-hover">
            <thead class="thead-dark">
              <th>#</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Course</th>
              <th>Adm Date</th>
              <th>Action</th>
           
            </thead>
            <tbody>
            <?php
					
					foreach($students as $student)
					{
        ?>
         <tr>
            <td><?php echo $student['id'];?></td>
		        <td><?php echo $student['name'];?></td>
		        <td><?php echo $student['phone'];?></td>
		        <td><?php echo $student['course'];?></td>
            <td><?php echo $student['date'];?></td>
            <td>
              <a href="index.php" class="btn btn-sm btn-success" data-toggle="modal" data-target="#<?php echo $student['id'];?>">Update</a>
              <a href="?id=<?php echo $student['id'];?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this record ??')">Delete</a></td>

               <!-- update modal -->
    <div class="modal fade" id="<?php echo $student['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Update Student</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
							<form action="../files/manage.php" method="POST">
								<div class="form-group">
								  <label for="studentid">Id</label>
								  <input type="text" class="form-control" id="studentid" name="id" readonly value="<?php echo $student[''];?>">
                </div>
                <div class="form-group">
								  <label for="name">Names</label>
								  <input type="text" class="form-control" id="phone" name="name" value="<?php echo $student['ne'];?>">
								</div>
								<div class="form-group">
								  <label for="phonenumber">Phone Number</label>
								  <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $student['phe'];?>">
								</div>
								<div class="form-group">
								  <label for="course">Course</label>
								  <input type="text" class="form-control" id="course"  name="course" value="<?php echo $student['crse'];?>">
								</div>
								<button type="update" class="btn btn-default" name="updateStudent">Update</button>
							</form>

				      </div>
				    </div>
				  </div>
        </div>
        
        </tr>
      
            </tbody>
          </table>
          <?php } ?>
          </div>
        </div>
      </div>
      
   
<!-- footer -->
<footer class="mt-5 fixed-bottom">
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
        <a class="navbar-brandn ml-5" href="index.php"><img src="../images/logo.png" height="30" width="30" alt="Zalego"><span class="ml-4"> Zalego</span></a>
          <div class="col-10">
          <ul class="navbar-nav ml-auto mr-5 float-right">
            <li class="nav-item">
            &copy;<script>document.write(new Date().getFullYear())</script>, Made by  <a href="https://www.zalegoinstitute.ac.ke" target="_blank">Zalego</a>        
            </li>        
          </ul>
           </div>
      </nav>
      </footer>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
  <?php }?>