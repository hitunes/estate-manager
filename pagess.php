<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "e-reg");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['save'])){  
if(isset($_POST['namee']) || isset($_POST['email']) || isset($_POST['estate']) || isset($_POST['apartno']) || isset($_POST['rentstar']) || isset($_POST['rentend']) || isset($_POST['utistar']) || isset($_POST['utiend']) ) {
// Escape user inputs for security

$namee = mysqli_real_escape_string($link, $_POST['namee']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$estate = mysqli_real_escape_string($link, $_POST['estate']);
$apartno = mysqli_real_escape_string($link, $_POST['apartno']);
$rentstar = mysqli_real_escape_string($link, $_POST['rentstar']);
$rentend = mysqli_real_escape_string($link, $_POST['rentend']);
$utistar = mysqli_real_escape_string($link, $_POST['utistar']);
$utiend = mysqli_real_escape_string($link, $_POST['utiend']);

 
// attempt insert query execution
$sql = "INSERT INTO tenants (namee, email, estate, apartno, rentstar, rentend, utistar, utiend) values('$namee', '$email', '$estate' , '$apartno' , '$rentstar', '$rentend', $utistar , $utiend)";
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
}
 
// close connection
mysqli_close($link);
?>