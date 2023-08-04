<?php
include('connection.php')
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

    <div class="container">
        <h1>Form Validation</h1>
    <form action="form.php" class="form-group" method="post">
    
          <label for="id"> Id </label>
          <input type="number" name="id" class="form-control">
          <br>
          <br>
          <label for="name"> Name </label>
          <input type="text" name="name" class="form-control">
          <br>
          <br>
          <label for="age"> Age </label>
          <input type="number" name="age" class="form-control">
          <br>
          <br>
          <label for="gender"> Gender </label>
          <input type="text" name="gender" class="form-control">
          <br>
          <br>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    

<?php

if(isset($_POST['submit'])){
    
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];


    $query = "INSERT INTO `b3` (`id`, `Name`, `Age`, `Gender`) VALUES ('$id', '$name', '$age', '$gender')";

    $result = mysqli_query($connection, $query);
} 
    
?>
</div>

</body>
</html>