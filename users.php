<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flights</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">


</head>

<body style="margin: 50px";>
<!-- <a href="index.php">Home</a> -->
<div class="btn-group">
<a href="hix.php" class="btn btn-primary">Flights</a>
<a href="logout.php" class="btn btn-primary">Log Out</a>
</div>
<h1>USERS</h1>
<br>

<table id="display" class="table">
    <thead>
        <tr>
            <th>S.No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>E-mail</th>
            <th>Phone Number</th>
        </tr>


        <tbody>
            <?php

            $connection=new mysqli("localhost","root","","hema_proj");

            if($connection->connect_error){
                die("Connection Failed: ".$connection->connect_error);
            }

            $sql = "SELECT * FROM registration";
            $result=$connection->query($sql);

            if(!$result){
                die("Invalid Query: ".$connection->error);
            }

            while($row=$result->fetch_assoc()){

                echo
                "<tr>
                    <td> ".$row["id"]. "</td>
                    <td> ".$row["firstName"]."</td>
                    <td> ".$row["lastName"]. "</td>
                    <td> ".$row["gender"]. "</td>
                    <td> ".$row["email"]. "</td>
                    <td> ".$row["number"]. "</td>
                    
                </tr>";
            

            }
            
            ?>
            
        </tbody>


    </thead>
</table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>




<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#display').DataTable();
});
</script>




</body>

</html>