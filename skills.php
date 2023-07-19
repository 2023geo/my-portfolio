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
    <title>Document</title>
</head>
<body>
    <h3>My skills</h3>
   <?php
    $query ="SELECT * FROM skills";
    $result = mysqli_query($conn, $query);
    $n=1;
    if(mysqli_num_rows($result)>0){
        echo "<table ><thead><tr><td>#</td><td>Skill title</td><td>SKill Description</td></tr></thead><tbody>";
           
        while($row = mysqli_fetch_assoc($result)){
           $title = $row['skill_title'];
           $desc = $row['skill_description'];
           echo "<tr><td>$n</td><td>$title</td><td>$desc</td></tr>";
       

           echo "";
           $n++;
       }
       echo "<tbody></table>";
    }else{
        echo "No skills found";
    }

   ?>


   <style>
    table, th, td{
       
        border: 1px solid black;
        border-collapse: collapse;
    }
    tr:hover{
       color: black; 
       background-color: #ade7ff;
       
   }
   </style>
</body>
</html>