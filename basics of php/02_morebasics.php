<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: rgb(179, 204, 214);
        margin: auto;
        padding: 24px;
    }
</style>

<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status is here:</p>
        <?php
            $age = 34;
            if($age>18){
                echo "you can go to the party";
            }
            else if($age==7){
                echo "you are 7 years old";
            }
            else{
                echo "you cannot go to the party";
            }
            echo "<br>";

            // ------------ARRAYS IN PHP------------
            $languages = array("python", "c++", "php", "nodejs");
            // echo $languages[1];
            // echo count($languages);
            // for(int i=0 , i<sizeof($languages) , i++){
            //     echo $languages[i];
            // }

            // ---------------LOOPS IN PHP----------------
          
            // ---------------ITERATING ARRAYS IN PHP USING WHILE----------------
            $a=0;
            while ($a <= 10) {
                echo " <br> the value of a is:";
                echo $a;
                $a++;
            }

            $a=0;
            while ($a < count($languages)) {
                echo " <br> the value of languages is:";
                echo $languages[$a];
                $a++;
            }
            echo "<br>";

            // -- ---------------ITERATING ARRAYS IN PHP USING FOR----------------
            for($a=0;$a<10;$a++){
                echo " <br> the value of a is:";
                echo $a;
            }
            for($a=0;$a<count($languages);$a++){
                echo " <br> the value of languages using for loop is:";
                echo $languages[$a];
            }
            echo "<br>";

            // using for each
            foreach ($languages as $value) {
                echo "<br> the value is:";
                echo $value;
            }
            echo "<br>";

            // functions in php
            function print5(){
                echo" five";
            }
            print5();
            function print_num($num){
                echo "<br> your no is:";
                echo $num;
            }
            print_num(28);
            print_num(44);

        ?>
            

    </div>
</body>

</html>