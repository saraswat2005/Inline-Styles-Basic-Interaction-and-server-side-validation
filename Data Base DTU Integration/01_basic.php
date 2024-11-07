<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
            echo "Hello World this is printed using  php";

            // Search Algorithm
            $variable1 = 34;
            $variable2 = 45;
            echo $variable1;
            echo $variable2;

            echo $variable1 + $variable2;

            // Operators in php
            // Arithmetic Operators
            echo "<br>";
            echo "The value of Variable1 and Varible 2: ";
            echo $variable1 + $variable2;
            echo "<br>";
            // Assignment Operators
            $newVar = $variable1;
            echo "The value of newVar is: ";
            echo $newVar;
            echo "<br>";
            // Comparison Operators
            echo "The value of 1==4 is: ";
            echo var_dump(1==4);
            echo "<br>";
            // Increment/Decrement Operators
            // Logical Operators
            $myVar = (true) and (true);
            echo var_dump($myVar);
            // Search Algorithm
        ?>
    </div>
</body>
</html>