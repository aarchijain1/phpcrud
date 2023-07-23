<?php
$sno = $_GET['sno'];
// echo $sno;
 // setting connection variables
 $server = "localhost";
 $username ="root";
 $password = "";
 $database = "trip";
$con = mysqli_connect($server ,$username ,$password , $database);
$sql = "SELECT * FROM `trip` where sno ='$sno'";
$result = mysqli_query($con , $sql);
$data= mysqli_fetch_assoc($result); 

if (isset($_POST["fname"])) {
  
   // Collect post variables
$sno = $_GET['sno'];
   $name = $_POST['fname'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];
   $q="UPDATE `trip`.`trip` set sno='$sno' name='$name',age='$age', gender='$gender',email='$email', phone='$phone' , other='$desc' where sno ='$sno'"  ;
   echo $q;
   $result= mysqli_query($con, $q);


   if($result){
    echo "successfully inserted";
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
        <h1>Update Travel Form</h1>
        <p>Update your details and submit this form </p>
        <form action="index.php" method="post">
            <input type="text" value="<?php echo $data['name'];?>" name="fname" id="name" placeholder="Enter your name">
            <input type="text" value="<?php echo $data['age'];?>" name="age" id="age" placeholder="Enter your age">
            <input type="text" value="<?php echo $data['gender'];?>" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" value="<?php echo $data['email'];?>" name="email" id="email" placeholder="Enter your email">
            <input type="phone" value="<?php echo $data['phone'];?>" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc"  id="desc" cols="30" rows="10"><?php echo $data['other'];?></textarea>
            <input type="submit" class="btn" name="update" value="Update">
            <!-- <button class="btn">Reset</button> -->

        </form>
    </div>
</body>

</html>

<?php
$insert= false;

?>


