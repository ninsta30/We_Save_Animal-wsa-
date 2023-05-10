


<?php
// retrieve form data

// connect to database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'wesave';
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$ph = $_POST['ph'];
$email=$_POST['email'];

// insert data into table
$sql = "INSERT INTO form (fname, lname,ph_num, email) VALUES ('$fname','$lname','$ph', '$email')";
if (mysqli_query($conn, $sql)) {
    echo 'Thank you for registering with us, we will contact you soon!!';
} else {
    echo 'Error inserting data: ' . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>