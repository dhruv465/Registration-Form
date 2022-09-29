
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "database");  //database = Add your Own database_Name

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//Column name = mysqli_real_escape_string($link, $_REQUEST['Html name']);
$First_Name = mysqli_real_escape_string($link, $_REQUEST['First_Name']);            
$Last_name = mysqli_real_escape_string($link, $_REQUEST['Last_name']);  
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['Gen']);
$Phone_Number = mysqli_real_escape_string($link, $_REQUEST['Phone_Number']);
$Password = mysqli_real_escape_string($link, $_REQUEST['Password']);
$Confirm_Password = mysqli_real_escape_string($link, $_REQUEST['Confirm_Password']);
 
// Attempt insert query execution
$sql = "INSERT INTO test (First_Name, Last_name, Email, Gender, Phone_Number, Password, Confirm_Password) VALUES        
('$First_Name', '$Last_name', '$Email','$Gender','$Phone_Number', '$Password', '$Confirm_Password')";
if(mysqli_query($link, $sql)){
    //echo "Message has been sent.";
    readfile("welcom.html");
} else{
   //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   readfile("Error.html");
}
 
// Close connection
mysqli_close($link);
?>