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
<a href="addFlights.php" class="btn btn-primary">Add Flights</a>
<a href="users.php" class="btn btn-primary">Users</a>
<a href="logout.php" class="btn btn-primary">Log Out</a>
</div>
<h1>Available Flights</h1>
<br>

<table id="display" class="table">
    <thead>
        <tr>
            <th>Airlines</th>
            <th>From</th>
            <th>To</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
            <th>Date</th>
            <th>Fare</th>
            <th></th>
        </tr>


        <tbody>
            <?php

            $connection=new mysqli("localhost","root","","hema_proj");

            if($connection->connect_error){
                die("Connection Failed: ".$connection->connect_error);
            }

            $sql = "SELECT * FROM flights";
            $result=$connection->query($sql);

            if(!$result){
                die("Invalid Query: ".$connection->error);
            }

            while($row=$result->fetch_assoc()){

                echo
                "<tr>
                    <td> ".$row["flightName"]."</td>
                    <td> ".$row["fromm"]. "</td>
                    <td> ".$row["too"]. "</td>
                    <td> ".$row["dep_time"]. "</td>
                    <td> ".$row["arriv_time"]. "</td>
                    <td> ".$row["date"]. "</td>
                    <td> ".$row["Fare"]. "</td>
                    
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