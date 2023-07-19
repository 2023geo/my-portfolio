<?php
    $HOST = "localhost";
    $USER = "root";
    $PASS ="";
    $DATABASE = "my-portfolio";
    $conn = new mysqli($HOST, $USER, $PASS, $DATABASE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <h3>My projects</h3>
    <p>The following are some of my projects</p>
   <?php
    $query ="SELECT * FROM projects";
    $result = mysqli_query($conn, $query);
    $n=1;
    if(mysqli_num_rows($result)>0){
        echo "<table><thead><tr><td>#</td><td>projects title</td><td>projects Description</td></tr></thead><tbody>";
       while($row = mysqli_fetch_assoc($result)){
           $title = $row['project_title'];
           $desc = $row['project_description'];

           echo "<tr><td>$n</td><td>$title</td><td>$desc</td></tr>";
           $n++;
       }
       echo "<tbody></table>";
    }else{
        echo "No projects found";
    }

   ?>
</body>
</html>