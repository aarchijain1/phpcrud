<?php
$insert= false;
if (isset($_POST['submit'])) {
    // setting connection variables
    $server = "localhost";
    $username ="root";
    $password = "";
    $database = "trip";

    // creating a database connection
    $con = mysqli_connect($server ,$username ,$password , $database);

    // check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "success connecting to the db";
   // Collect post variables
   $name = $_POST['fname'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];
   $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
$result= mysqli_query($con, $sql);
   //    echo $sql;


//   executing the query -> this is object operator
   if($result){
    // echo "successfully inserted";

    // Flag for successful insertion
    $insert = true;
   }
   else {
    echo "ERROR: the recored was not inserted successfuly" . mysqli_error($con);
   }

//    close the database connectivity
   $con -> close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Travel Form</h1>
        <p>Enter your details and submit this form to confirm your participation</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the trip</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="fname" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
                <input type="submit" class="btn" name="submit" value="Submit">
                <!-- <button class="btn">Submit</button> -->
            <!-- <button class="btn">Reset</button> -->

        </form>

    </div>

</body>

</html>

