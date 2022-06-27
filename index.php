<?php

if (isset($_POST['name'])) {


$server="localhost";
$username="root";
$password="";  
$con=mysqli_connect($server,$username,$password);

if (!$con) {
    die("connection to this database failed due to".mysqli_connect_error());
}
// else{
//     echo "Connection established to the database";
// }

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql=" INSERT INTO `us_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

// INSERT INTO `trip` (`Sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES (NULL, 'kanhaiya kumar', '45', 'male', 'kanhaiya@gmail.com', '9999999999', 'kanhai is aihis ahs kaahsnsihs kh.', current_timestamp());


// echo $sql;
    
if ($con->query($sql)==true) {
    // echo "Successfully inserted";
    echo "<p style='color:green; font-size: 20px;'> Thanks for submitting your form. We are happy to see you joining us for the us trip</p> ";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <img class="bg " src="Capture2.jpg" alt="IIT Kharagpur">

    <div class="container">
        <h1>Welcome to the Chandigarh University us Trip Form</h1>
        <p>Enter your details and submit this form to confirm Your participation in the trip</p>
        <!-- <p class="submitMsg" >Thanks for submitting your form. We are happy to see you joining us for the us trip</p> -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">

            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <button class="btn ">Submit</button>
            <!-- <button class="btn">Reset</button> -->



        </form>

    </div>
    <script src="index.js"></script>



   
</body>

</html>