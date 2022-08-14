<?php session_start(); ?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center bg-primary text-red"><h2>LOGIN FORM</h2></div>

                    <div class="card-body">

                        <form action="loginn.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label> 
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div> <br>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div> <br>
                            <input type="submit" class="btn btn-primary w-100" name="" value="Login" id="login">
                        </form>
                        <br>
                        <p>Don't hvae an account?</p><a class="btn btn-primary" align="center" href="registration.php">Sign Up...</a>

                    </div>
            
                    <div class="card-footer text-right">
                        <small>&copy; Booking</small>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>