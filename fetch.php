<?php
 // setting connection variables
 $server = "localhost";
 $username ="root";
 $password = "";
 $database = "trip";

 // creating a database connection
 $con = mysqli_connect($server ,$username ,$password, $database);

 // check for connection success
 if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
 }
//  echo "success connecting to the db";

// while($data = mysqli_fetch_assoc($result)){
//     echo $data["sno"] ." ".$data["name"]."  " .$data["gender"]."  " .$data["age"] ."  ".$data["email"]."  " .$data["phone"]."  " .$data["other"] ."<br>";

// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fetch data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="m-4">
    <table class="table table-bordered ">
        <thead>
            <tr class="bg-secondary text-light">
                <th>S NO.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Other</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
                <?php
                while ($data=mysqli_fetch_assoc($result)) {
           echo " <tr>
                    <td>". $data['sno']."</td>
                    <td>". $data['name']."</td>
                    <td>". $data['gender']."</td>
                    <td>". $data['age']."</td>
                    <td>". $data['email']."</td>
                    <td>".$data['phone']."</td>
                    <td>". $data['other']."</td>
                    <td ><a href='update.php?sno=$data[sno]'class='btn btn-primary btn-sm' >Edit</a></td>
                    <td ><a href='delete.php?sno=$data[sno]'class='btn btn-danger btn-sm' name='delete'>Delete</a></td>

                   

            </tr>
            ";
                }
                ?>
        </thead>
    </table>

