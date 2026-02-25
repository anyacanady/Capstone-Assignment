<?php
//HTML page and database
include 'Background.html';
include 'db.php';
//Assign the values from the form
if (isset($_GET['submit_button'])) {
    $first_name=$_GET["first_name"];
    $last_name=$_GET["last_name"];
    $email=$_GET["email"];
    $phone=$_GET["phone"];
    $hdate =$_GET["hyear"];
    $hdate .="-";
    $hdate .=$_GET["hmonth"];
    $hdate .="-";
    $hdate .=$_GET["hday"];

//Add the data to the database
$results = mysqli_query($conn, $sql1);

$sql = "INSERT INTO applicant (email,first_name, Birth_Date,last_name,phone) 
VALUES ('$email','$first_name','$hdate','$last_name','$phone')";
   
}

?>

