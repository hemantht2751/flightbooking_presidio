<?php


require_once('config.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            REGISTERATION FORM
        </title>

        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    </head>

    <body>


        <div>
            <?php 
            
            if(isset($_POST['create'])){
                $firstname  =$_POST['firstname'];
                $lastname   =$_POST['lastname'];
                $gender     =$_POST['gender'];
                $email      =$_POST['email'];
                $password   =$_POST['password'];
                $number     =$_POST['number'];


                $sql="INSERT INTO registration(firstName, lastName, gender, email, password, number) VALUES (?, ?, ?, ?, ?, ?)";
                $stmtinsert=$db->prepare($sql);
                $result=$stmtinsert->execute([$firstname, $lastname, $gender, $email, $password, $number]);
                if($result){
                    header('location:login.php');
                    echo "Succesfully Inserted";
                }else{
                    echo "Error while inserting";
                }


                // echo $firstname;

            }
            
            ?>
        </div>


        <div class="">
            <div class="container vh-100">
            <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center bg-primary text-red"><h2>Registration From</h2></div>

                <div class="card-body">
                <form action="registration.php" method="post">
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" name="firstname" required id="firstname">
                        
                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" required id="lastname">
                        
                        <label for="gender"><b>Gender (M/F)</b></label>
                        <input class="form-control" type="text" name="gender" required id="gender">
                        
                        <label for="email"><b>E-mail</b></label>
                        <input class="form-control" type="email" name="email" required id="email">
                        
                        <label for="password"><b>Password</b></label>
                        <input class="form-control" type="password" name="password" required id="password">
                        
                        <label for="number"><b>Phone Number</b></label>
                        <input class="form-control" type="text" name="number" required id="number">
                    
                        <hr class="mb-3">
                        <input type="submit" name="create" id="register" value="Sign Up" class="btn btn-primary"> 
                        <br> <br>
                        <p>Already have an account?</p>
                        <a class="btn btn-primary" href="login.php">Login Here..</a>
                    
                </form>

                </div>
            </div>
            </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script type="text/javascript">
            $(function(){
                swal.fire({
                    'title': 'Hey!!',
                    // 'text': 'This is from us',
                    'type': 'success'
                    })
            });
        </script>

    </body>
</html>