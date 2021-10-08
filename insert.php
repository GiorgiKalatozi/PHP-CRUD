<?php
     include_once 'db.php';
?>

<?php
if ($conn->connect_error)
{
    die("Connection Failed : " . $conn->connect_error);
}
else
{
            $name = $_POST['name'];
            $surname = $_POST['surname'];;
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $submit = $_POST['submit'];

             $query = "INSERT INTO users (id, name, surname, birthday, registered_at) VALUES (null, '$name', '$surname', '$birthday', '$address');";

             $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

             if($run) 
             {
                 echo "From submitted successfully";
             }

             else
             {
                 echo "Form is not submitted";
             }

}
 


    



    
   

