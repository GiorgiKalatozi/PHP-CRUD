<?php
    include_once "db.php";
?>

<?php

    $query = "SELECT * FROM users";
    $perform = mysqli_query($conn, $query);
    $performCheck = mysqli_num_rows($perform);

    if ($performCheck > 0)
    {
        while($row = mysqli_fetch_assoc($perform))
        {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. "   Birthday: " . $row["birthday"]. "  Address: " . $row["registered_at"].   "<br>";
        }
    } 
    else
    {
        echo "0 results";
    }


?>