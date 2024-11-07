<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorials</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: grey; 
            margin: auto;
            padding: 34px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's Learn about PHP</h1>
        <p>Your party status is here</p>
        <?php
        $age = 34;
        if($age>18){
            echo "You can go to the party";
        }
        else{
            echo "You cannot go to the party";
        }
        
        // Array in Python
        $languages = array("Python", "C++", "node js");
        // echo $languages[0];

        // Loops in php 
        $a = 0;
        while($a <= 10){
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }

        // Iterating arrays in PHP using while loop 
        $a = 0;
        $languages = array("Python", "C++", "node js");
        while($a < count($languages)){
            echo "<br>The value of languages is: ";
            echo $languages[$a];
            $a++;
        }

        // Iterating arrays in PHP using do while loop 
        $a = 0;
        do{
            echo "<br> The value of language is: ";
            
            echo $a;
            $a++;
        }
        while($a < 10);

        // For loop 
        // $a = 0;
        for ($a=0; $a < 10; $a++) { 
            echo "<br>The value of a by using for loop is: ";
            echo $a;
        }

        foreach($languages as $value){
            echo "<br>The value is: ";
            echo $value;

        }

        function print5(){
            echo "<br>FIVE";
        }
        print5();

        function print_number($number){
            echo "<br>Your number is: "
            echo $number;
        }
        print_number(45);
        
        ?>

    </div>
</body>
</html>