
<?php session_start(); ?>

<?php 

$email=$_POST['email'];
$password=$_POST['password'];

$con=new mysqli("localhost","root","","hema_proj");
if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}else{
    $stmt=$con->prepare("select * from registration where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0){
        $data=$stmt_result->fetch_assoc();
        if($data['email']=="adminsrm@gmail.com"){
            header('location:hix.php');
        }
        elseif($data['password']==$password){

            $_SESSION['email'] = $email;
            header('location:index.php');
            echo "<h2>Login Successfull<h2>";
        }else{
            header('location:login.php');
            echo "<h2>Invalid Email or Password</h2>";
        }
    }else{
        header('location:login.php');
        echo "<h2>Invalid Email or Password</h2>";
    }
}
?>