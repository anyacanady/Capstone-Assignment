<?php
//HTML page and database
include 'Education.html';
include 'db.php';
//Assign the values from the form
if (isset($_GET['submit_button'])) {
    $School_type=$_GET["School"];
    $School_Name=$_GET["SName"];
    $School_Address=$_GET["SStreet"];
    $State=$_GET["SState"];
    $City =$_GET["SCity"];
    $Zipcode =$_GET["SZip"];
    $Employer_Name =$_GET["EName"];
    $Employer_Address =$_GET["EStreet"];
    $E_City =$_GET["ECity"];
    $E_Zipcode =$_GET["EZip"];
    $hdate =$_GET["hyear"];
    $hdate .="-";
    $hdate .=$_GET["hmonth"];
    $hdate .="-";
    $hdate .=$_GET["hday"];

//Add the data to the database
$results = mysqli_query($conn, $sql1);

$sql = "INSERT INTO Education (School_Type,School_Name, School_Address,State,City,Zip) 
VALUES ('$School_type','$School_Name','$School_Address','$State','$City','$Zipcode')";

$sql = "INSERT INTO Employment (Employer_Name,Employer_Street,City,State,Zip, HireDate) 
VALUES ('$Employer_Name','$Employer_Address','$E_City','$E_State','$E_Zipcode','$hdate')";
   
}

?>