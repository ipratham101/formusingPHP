<?php
$inserted = false;
if(isset($_POST['name'])){

    //set connection variables
$server = "localhost";
$username = "root";
$password = "";


//create a connection
$con = mysqli_connect($server, $username, $password);


//check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

// echo "Success connecting to the db";


//collect post variables
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$desc = $_POST['desc'];




$sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";


//execute the query
if($con->query($sql)==true){
  //flag for successful insertion
    $inserted = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}


//close the database connection
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>
            Welcome to Travel Form
        </h3>
        <p>
            enter your details to confirm your participation in your trip
        </p>

        <?php
        if($inserted == true){
          echo "<p class='display1'>
                form is successfully submitted
             </p>";
        }
        
         ?>



        <form action="index1.php" method="post">
            <!-- 
in case of the forms we generally use "post" method as a request (ya jab bhi hame passwords wagera se deal karna ho toh)
and in case of the search engines we generally use "get" method as a request
 -->
 

            <input type="text" name="name" id="name" placeholder="enter your name here">
            <input type="number" name="age" id="age" placeholder="enter your age here">
            <input type="text" name="gender" id="gender" placeholder="enter your gender here">
            <input type="email" name= "email" id="email" placeholder="enter your email here">
            <input type="number" name="phone" id="phone" placeholder="enter your phone here">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here">
            </textarea>
            <button class="btn">
                Submit
            </button>
        </form> 

    </div>
    <script src="index.js"></script>
    
</body>
</html>
