<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>     

    <div class="container justify-content-center">
        <?php

        $userprofile = $_SESSION['email'];
        if($userprofile == true){
            echo "<b>Welcome!! </b>  "."<b>".$_SESSION['email']."</b>";
        }else{
            header('location:login.php');
        }
        ?>
        <a href="logout.php" class="btn btn-primary">Log Out</a>

        <form action="connect.php" method="POST">
            <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
            <div class="card-header text-center bg-primary text-bloack"><h2>Flight Booking</h2></div>
<div class="card-body">
<hr class="mb-3">
                    <label>From </label>
                    <input type="text" name="from_place" id="from_place" class="form-control"/>
                    <label>To </label>
                    <input type="text" name="to_place" id="to_place" class="form-control"/>
               
            
                <label for="">Date Of Travel</label>
                <input type="date" name="departure_date" class="form-control" id="">
            
            
            <label>Kids </label>
            <input type="number" name="Kids" id="Kids" class="form-control"/>
            
            <label>Adults </label>
            <input type="number" name="Adults" id="Adults" class="form-control"/>
            
            <label>Seniors </label>
            <input type="number" name="Seniors" id="Seniors" class="form-control"/>
            <hr class="mb-3">
            <button type="submit" name="save_data" class="btn btn-primary">Save</button>
            <a href="search_flights.php" class="btn btn-primary" style="left: 100%;">Search Flights</a>
            
            </div>

            </div>

            </div>
            
        </form>
    </div>



</body>
</html>