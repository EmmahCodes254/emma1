<?php 

include_once('dbconnection.php');

//search for duplicate data
        function duplicateUsers($email, $dbc){
            $search="SELECT * FROM `users` WHERE email= '$email'";
            $result = $dbc->query($search);
            $rows=$result->num_rows;
            if ($rows>0) {
                return true;
            }else{
                return false;
                }
            }

            function registerUsers($fullname,$email,$phone,$password,$dbc){

                $hashed_password = password_hash($password,PASSWORD_DEFAULT);

                $insert = "INSERT INTO `users` (name,email, number,password, date)
                VALUES ('$fullname', '$email', '$phone', '$hashed_password', Now())"

                if(duplicateUsers($email,$dbc) === true){
              
                    echo '<script> alert(\'A user with that email already exist.\')</script>';
                    echo '<script> window.open(\'../signup.php\',\'_self\')</script>';
                   
                else{
                    if($dbc->query($insert) === true ){
                        echo '<script> alert(\'Account created successfully, proceed to login.\')</script>';
                        echo '<script> window.open(\'../login.php\',\'_self\')</script>';
                    }else{
                        $serror = 'Error during signup.. try again later';
                    
                        $_SESSION['signup_error']= $serror;
                        echo "Error: " . $insert . "<br>" . $dbc->error;
                    }
                }
		}}


            function loginUser($email, $password, $dbc){
                $get_user = "SELECT `email`, `password`, `fullname` FROM users WHERE email = '$email'"
                $result = $dbc->query($get_user);
                $rows=$result->num_rows;
                if ($rows <= 0) {
                    echo '<script> alert(\'username or password incorrect.\')</script>';
                    echo '<script> window.open(\'../login.php\',\'_self\')</script>';
                }else{

                    while($row = $result->fetch_assoc()){                   

                    $verifyPass = password_verify($password, $row['password']);
            
                    if($verifyPass){
                        session_start();
                        $_SESSION['email']= $row['mail'];
                        $_SESSION['name'] = $row['name'];   
                        
                        header('location: ../student/?login successful');
                        }else{
                        echo '<script> alert(\'password is incorrect.\')</script>';
                        echo '<script> window.open(\'../login.php\',\'_self\')</script>';

                        }
                    }
                }
            }
// logout user
            function logout(){
                session_start();
                if(session_destroy()){
                    header('location: ../../');
                }
                
            }

// call on action
            if(isset($_POST['signup'])){
                $fname = $_POST['fname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                registerUsers($fname,$email,$phone,$password, $dbc);
            }

            if(isset($_POST['login'])){

                $email = $_POST['email'];
                $password = $_POST['password'];
                loginUser($email, $password, $dbc);
              

            }

            if(isset($_GET['logout'])){
                logout();
            }