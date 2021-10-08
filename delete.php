
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>
    <button class="btn btn-light"><a href="index.php">Create a User</a></button>
    <h1>Delete Data by ID</h1>
    <form action="./delete.php" method="POST">
    <div class="form-group">
    <label>ID</label>
    <input type="number" name="id" class="form-control" placeholder="Enter ID">
  </div>
  <button type="submit" name="delete" class="btn btn-danger">Delete</button>
</body>
</html>

<?php

    include_once "db.php";
    if (isset($_POST['delete']))
        {
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id='$id'";;

        $perform = mysqli_query($conn, $query);

        if ($perform) 
            {
                echo "data DELETED";
            }
            else
            {
                echo "error";
            }


            mysqli_close($conn);


   
    }


