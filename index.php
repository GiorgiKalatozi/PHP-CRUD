<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body>
    <h1>Create an Account</h1>
    <button class='btn btn-light'><a href="select.php">Check info</a></button>
    <button class="btn btn-light"><a href="update.php">Update info</a></button>
    <button class="btn btn-light"><a href="delete.php">Delete info</a></button>
<form action="./insert.php" method="POST">
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
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
