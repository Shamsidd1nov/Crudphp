<?php
    include("connect.php");

    if(isset($_POST["btn"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $age = $_POST["age"];

        $sql = "INSERT INTO users(name,email,phone,age) 
        VALUES('$name','$email','$phone','$age')";

        $result = mysqli_query($con,$sql);

        if($result){
            header("location: display.php");
        }

    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    

<div class="container">
    <form class="row g-3" method="POST">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="name">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputPassword4" name="email">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Phone</label>
        <input type="text" class="form-control" id="inputEmail4" name="phone">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Age</label>
        <input type="text" class="form-control" id="inputPassword4" name="age">
    </div>

    <div class="col-12">
        <button type="submit" name="btn" class="btn btn-primary">Add New</button>
    </div>
    </form>
</div>






</body>
</html>