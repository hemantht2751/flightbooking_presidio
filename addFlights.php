<?php session_start(); ?>
<?php require_once('config.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flights</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>
<body background="C:\wamp64\www\him/flight.jpg">


<div>

<?php

    if (isset($_POST['enter'])){
        $airlines  =$_POST['airlines'];
        $from  =$_POST['from'];
        $to  =$_POST['to'];
        $dep_time  =$_POST['dep_time'];
        $arriv_time  =$_POST['arriv_time'];
        $date  =$_POST['date'];
        $fare  =$_POST['fare'];

        $sql="INSERT INTO flights(flightName, fromm, too, dep_time, arriv_time, date, Fare) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$airlines, $from, $to, $dep_time, $arriv_time, $date, $fare]);
        if($result){
            header('location:hix.php');
        }else{
            echo "Error while entering";
        }
    }

?>


</div>



<div class="">
            <div class="container vh-100">
            <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center bg-primary text-red"><h2>Add Flights</h2></div>

                <div class="card-body">
                <form action="addFlights.php" method="post">
                        <hr class="mb-3">
                        <label for="airlines"><b>Airlines</b></label>
                        <input class="form-control" type="text" name="airlines" required id="airlines">
                        
                        <label for="from"><b>From</b></label>
                        <input class="form-control" type="text" name="from" required id="from">
                        
                        <label for="to"><b>To</b></label>
                        <input class="form-control" type="text" name="to" required id="to">
                        
                        <label for="dep_time"><b>Departure Time</b></label>
                        <input class="form-control" type="time" name="dep_time" required id="dep_time">
                        
                        <label for="arriv_time"><b>Arrival Time</b></label>
                        <input class="form-control" type="time" name="arriv_time" required id="arriv_time">
                        
                        <label for="date"><b>Date of Travel</b></label>
                        <input class="form-control" type="date" name="date" required id="date">

                        <label for="fare"><b>Fare</b></label>
                        <input class="form-control" type="number" name="fare" required id="fare">
                    
                        <hr class="mb-3">
                        <input type="submit" name="enter" id="register" value="Enter" class="btn btn-primary">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="hix.php">Back</a>
                        <br> <br>
                    
                </form>

                </div>
            </div>
            </div>
            </div>
        </div>
    
</body>
</html>