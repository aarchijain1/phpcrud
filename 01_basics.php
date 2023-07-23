<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>learning</title>
</head>
<body>
    <h1>this is my first php</h1>
    <?php
    define('pi', 3.14);
    echo "hello world and this is printed using php";
    // hello single line comment

    $variable =34;
    $variable1 =54;
    $sum= $variable + $variable1;
    echo $sum;
    echo $variable + $variable1;

    //----------- operaators in php ------------
    // arithmetic,
    echo"<br>";
    echo"the value of variable + variable1 is";
    echo$variable + $variable1;
     echo"<br>";
    echo"the value of variable - variable1 is";
    echo$variable - $variable1;
     echo"<br>";
    echo"the value of variable * variable1 is";
    echo$variable * $variable1;
     echo"<br>";
    echo"the value of variable / variable1 is";
    echo$variable / $variable1;
     echo"<br>";


    // assignment,
    $newVar = $variable;
    $newVar+=1;
    // $newVar-=1;
    // $newVar*=1;
    // $newVar/=1;

    echo"the value of new variable is";
    echo $newVar;
    echo"<br>";

    // comparision,
    echo "<h1> comparision operator </h1>";
    echo "the value of 1==4 is";
    echo var_dump(1==4); 
    echo"<br>";
     echo "the value of 1!=4 is";
    echo var_dump(1!=4); 
    echo"<br>";
     echo "the value of 1>=4 is";
    echo var_dump(1>=4); 
    echo"<br>";
     echo "the value of 1<=4 is";
    echo var_dump(1<=4); 
    echo"<br>";

    // increment,decrement,
    echo $variable++;
    echo"<br>";
    echo $variable;
    // echo $variable--;
    // echo ++$variable;
    // echo --$variable;

    // logical operaators
    // and(&&)
     echo"<br>";
    $myVar = (true and true);
    echo var_dump($myVar);
     echo"<br>";
    $myVar = (false and true);
    echo var_dump($myVar);
     echo"<br>";
    $myVar = (false and false);
    echo var_dump($myVar);

    // or(||)
     echo"<br> or operator";
    $myVar = (true) or (false);
    echo var_dump($myVar);
    // xor
    echo"<br>";
    $myVar = (false xor false);
    echo var_dump($myVar);
    // not(!)



    // ------------DATA TYPES IN PHP------------------
    // 1.string
    echo "<br><h1>data types in php</h1>";
    $var = "this is a string";
    echo var_dump($var);
    echo "<br>";
    
    // 2.integer
    $var = 55;
    echo var_dump($var);
    echo "<br>";
    
    // 3.float
    $var = 55.5;
    echo var_dump($var);
    echo "<br>";

    // 4.boolean
    $var = true;
    echo var_dump($var);
    echo "<br>";
    
    // 5.array
    // 6.object

    // defining constants
    echo pi;
    ?>
</body>
</html>