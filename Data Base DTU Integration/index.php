
<?php
$insert = false;
if(isset($_POST['name'])){
    echo "Hello World";
    // Set Connection Variables
    $server = "localhost";
    
    $username = "root";
    $password = "";

    // Create a database connection 
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success 
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables 
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $age = $_POST['age'];

    $sql = "INSERT INTO `trip'.'trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `other`, `dd`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successfull insertion
        $insert = true;

    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection 
    $con->close();
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="bg.png" alt="DTU" class="bg">
    <div class="container">
        <h1>Welcome to DTU US trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert==true){
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining for the US Trip with us</p>";}

?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your contact number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here">

            </textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`S.no`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `other`, `dd`) VALUES ('2', 'trickname', '24', 'male', 'this@this.com', '7896375463', 'This is my database entry this makes me feel so confident in my programming skills now', current_timestamp()); -->
</body>
</html>