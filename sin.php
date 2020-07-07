  <?php
session_start();
 ?>
 <?php
 
    $conn = mysqli_connect("localhost","id14262474_localhost","SHlF2WXCI#9IOn?C","id14262474_stud");

    $un = $_GET['contact'];
    $pw = $_GET['aadhar'];
    
   $_SESSION['contact']=$un;
   $_SESSION['aadhar']=$pw;
    	$_SESSION['temp']=$pw;
            $_SESSION['temp1']=$un;
    $q1 = "SELECT name,roll FROM stud WHERE name='$un' AND roll='$pw'";
    if(!isset($_COOKIE["member_login1"])){
    	$q1 .="AND roll= '" . $pw . "'";
    }
    
    $result=mysqli_query($conn,$q1);

    $user=mysqli_fetch_array($result);
	   if ($user) {
	   $_SESSION["roll"] = $user["roll"];

	   	
		
	       echo "<script type='text/javascript'>alert('Login Successfully');window.location.href='quiz.php';</script>";
        
        
      
	   }
	   else {
	       echo "<script type='text/javascript'>alert('Invalid Credentials'); window.location.href='index.php';</script>";
}
  
    ?>