<?php

$connection = mysqli_connect("localhost","root","","2210b3");
if(!$connection){
    die("Connection Failed");
}

$sqlquery = "Select * From `b3`";
$data = mysqli_query($connection, $sqlquery);

// header('Location:http://localhost:82/2210B3/allusers.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<title>Form Validation using PHP</title>

</head>
<body>
    <table class="table table-bordered text-center">
        <thead class="table table-dark">
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </thead>
        <tbody>

            <?php
            while($row = mysqli_fetch_assoc($data)){
    
            ?>
            <tr>
                <td><?php echo $row['Id']?></td>
                <td><?php echo $row['Name']?></td>
                <td><?php echo $row['Age']?></td>
                <td><?php echo $row['Gender']?></td>
                
            </tr>

            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>