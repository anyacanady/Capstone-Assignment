<?php
//HTML page and database
include 'Other.html';
include 'db.php';
//Assign the values from the form
if (isset($_GET['submit_button'])) {
    $Position=$_GET["position"];
    $Work=$_GET["Work"];
    $Employment_Type=$_GET["Employement"];
    $Pay=$_GET["Pay"];
    $Applied =$_GET["Applied"];
    $Previous_Work =$_GET["PWorked"];
    $Hear =$_GET["Hear"];
    $Bonded =$_GET["Bonded"];
    $Refuse_Bond =$_GET["RBonded"];
    $E_Zipcode =$_GET["EZip"];
    $IfDate =$_GET["Ifyear"];
    $IfDate .="-";
    $IfDate .=$_GET["Ifmonth"];
    $Resign =$_GET["Resign"];
    $Employed =$_GET["Employed"];
    $Present_Employer =$_GET["PEmployer"];
    $handling =$_GET["handling"];
    $Describe =$_GET["Describe"];
    $Schedule =$_GET["Schedule"];
    $RName =$_GET["RName"];
    $RAddressn =$_GET["RAddress"];
    $RCity =$_GET["RCity"];
    $RState =$_GET["RState"];
    $RZip =$_GET["RZip"];
    $RNumber =$_GET["RNumber"];


//Add the data to the database
$results = mysqli_query($conn, $sql1);

$sql = "INSERT INTO Other (Position,Work, Employment_Type,Pay,Applied,Previous_Work,Hear,Bonded,Refuse_Bond,If_Date,handling, Describe, Schedule) 
VALUES ('$Position','$Work','$Employment_Type','$Pay','$Applied','$Previous_Work','$Hear','$Bonded','$Refuse_Bond','$IfDate','$handling','$Describe, $Schedule)";
$sql = "INSERT INTO Reference (Ref_Name,Ref_Address, Ref_City,Ref_State,Ref_Zip,Ref_Number) 
VALUES ('$RName','$RAddress','$RCity','$RState','$RZip','$RNumber')";
   
}

?>