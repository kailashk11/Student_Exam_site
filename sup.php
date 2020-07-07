<?php

$fname = $_GET['fname'];
$contact = $_GET['fcontact'];

$faddress = $_GET['faddress'];


$pin = $_GET['fpin'];



$conn = mysqli_connect("localhost","id14262474_localhost","SHlF2WXCI#9IOn?C","id14262474_stud");



$sql = "INSERT INTO `stud`(name,roll,std,mob) VALUES ('$fname', '$contact', '$faddress', '$pin')";
   

$view=mysqli_query($conn, $sql);

if($view){
    echo "<script type='text/javascript'>alert('Registered successfully please login to your account');window.location.href='index.php'</script>";

	

}
else{
    echo "try again";
}

?>