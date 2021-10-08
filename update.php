
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <h1>Update Data</h1>
    <button class="btn btn-light"><a href="index.php">Create a User</a></button>
    <form action="./update.php" method="POST">
    <div class="form-group">
    <label>ID</label>
    <input type="number" name="id" class="form-control" placeholder="What's your ID?">
  </div>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="What's your name?">
  </div>
   <div class="form-group">
    <label>Surname</label>
    <input type="text" name="surname" class="form-control" placeholder="What's your surname?">
  </div>
   <div class="form-group">
    <label>Birthday</label>
    <input type="date" name="birthday" class="form-control">
  </div>
   <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Where do you live?">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Update</button>
</body>
</html>


<?php
    include_once 'db.php';
    if (isset($_POST['update']))
    {   
      
            $id = $_POST['id'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];;
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $update = $_POST['update'];

            $query = "UPDATE users SET id='$id', name='$name', surname='$surname', birthday='$birthday', registered_at='$address' WHERE 'id'='$id'";;

            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if ($run) 
            {
                echo "Data Updated";
            }
            else
            {
                echo "Error updating Data: " . mysqli_error($conn);
            }
   } 
    // else
    // {
    //     echo "all fields required";
    // }
    
?>
