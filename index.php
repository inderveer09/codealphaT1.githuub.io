<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURVEY FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">REGISTRATION FORM</div>
        <div class="form">

            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" >
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname">
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="Password" class="input" name="pass">
            </div>

            <div class="input_field">
                <label>Confirm Password</label>
                <input type="Password" class="input" name="cpass">
            </div>

            <div class="input_field">
                <label>Gender</label>
                <select name="gbox">
                    <option value="not selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                
            <div class="input_field">
                <label>Email</label>
                <input type="text" class="input" name="email" >
            </div>

            <div class="input_field">
                <label>Phone</label>
                <input type="text" class="input" name="phn">
            </div>

            <div class="input_field">
                <input type="Submit" value="Register" class="btn" name="register">
            </div>

            </div>
        </div>
        </form>
    </div>
</body>
</html>


<?php
if(isset($_POST['register'])){
    // Assuming you have a valid database connection named $connection
    
    // Sanitize and escape user input to prevent SQL injection
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $pass = mysqli_real_escape_string($connection, $_POST['pass']);
    $cpass = mysqli_real_escape_string($connection, $_POST['cpass']);
    $gbox = mysqli_real_escape_string($connection, $_POST['gbox']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phn = mysqli_real_escape_string($connection, $_POST['phn']);
    // $add = mysqli_real_escape_string($connection, $_POST['add']);

    // Create the INSERT query using placeholders and correct column names
    $query = "INSERT INTO SURVEYFORM VALUES ('$fname', '$lname', '$pass', '$cpass', '$gbox', '$email', '$phn')";

    // Execute the query
    $data = mysqli_query($connection, $query);

    if($data){
        echo "Data inserted successfully";
    }
    else{
        echo "Failed to insert data: " . mysqli_error($connection);
    }
}
?>
