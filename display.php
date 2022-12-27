<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    

        <div class="container">

        
            <a href="user.php" class="btn btn-primary">Add Users</a>
        
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Age</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($con,$sql);

                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            $age = $row['age'];

                            echo "
                            <tr>
                            <th scope='row'>$id</th>
                            <td>$name</tdl>
                            <td>$email</td>
                            <td>$phone</td>
                            <td>$age</td>
                            <td>
                                <a href='edit.php?editid=".$id."' class='btn btn-success'>Edit</a>
                            </td>
                            <td>
                                <a href='delete.php?deleteid=".$id."' class='btn btn-danger'>Delete</a>
                            </td>
                            </tr>
                            ";
                        }
                    }
                ?>
                    
                    
                    
                </tbody>
            </table>
        </div>

                    
                    

</body>
</html>