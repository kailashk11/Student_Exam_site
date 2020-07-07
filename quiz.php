<?php
session_start();
if(!isset($_SESSION['temp'])){
  header("location:index.php");
}
?>
<!DOCTYPE HTML>

<html>
<head>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style1.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script> 

</head><style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: black;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav-right{
    float:right;
  }
}
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

  

   .but{
        background-color: orange;
         display: inline-block;
        font-size: 20px;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  }

.form-inline { 
padding:10px 10px; 
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  padding-left:10px;
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  width:150px;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 40px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}
body {
  background-image: url('b2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {font-size: 12px;}
</style>

<body>

<div class="topnav" id="myTopnav">
   
 
  
<a style="float:right" href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
     <a style="float:right" href="sprof.php"><?php 
          
  
      $conn = mysqli_connect("localhost","id14262474_localhost","SHlF2WXCI#9IOn?C","id14262474_stud");
$s2=$_SESSION['temp'];
$s3=$_SESSION['temp1'];

  $query2 = "SELECT name FROM stud where roll = '$s2'AND name= '$s3'";
  $is_query_run = mysqli_query($conn,$query2);
  $row2 = mysqli_fetch_array($is_query_run);

    echo "welcome, ".$row2['name']; ?></a>
</div>
    <center><h1>Quiz Questions</h1></center>
    <div>Time : <span id="time">10:00</span> minutes!</div>

    <script>
    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var OneMinutes = 60 * 10,
        display = document.querySelector('#time');
    startTimer(OneMinutes, display);
};
</script>
    <p>
    <form name="quiz">
    <p>
        <b>Question 1.
        <br>The Food Synthesised By The Plants Is Stored As<br></b>
        <blockquote>
    <input type="radio" name="q1" value="Starch">Starch<br>
    <input type="radio" name="q1" value="Protein"> Protein<br>
    <input type="radio" name="q1" value="Vitamins">Vitamins<br>
    </blockquote>

<p><b>
<hr>
Question 2.
<br>In Non-Green Plants And Animals, Their Mode Of Nutrition Is <br></b>
<blockquote>
<input type="radio" name="q2" value="Saprophytic">Saprophytic<br>
<input type="radio" name="q2" value="Parasitic">Parasitic<br>
<input type="radio" name="q2" value="Heterotrophic">Heterotrophic<br>
</blockquote>
<p><b>
<hr>
Question 3.
<br>Pitcher Plant Traps Insects Because It<br></b>
<blockquote>
<input type="radio" name="q3" value="Is a heterotroph">Is a heterotroph<br>
<input type="radio" name="q3" value="Grows in soils which lack in nitrogen">Grows in soils which lack in nitrogen<br>
<input type="radio" name="q3" value="Does not have chlorophyll">Does not have chlorophyll<br>
</blockquote>
<p><b>
<hr>
Question 4.
<br>Farmers Do Not Apply Nitrogenous Fertilizers In The Cultivation Of Pulses Plant. Why?<br></b>
<blockquote>
<input type="radio" name="q4" value="Pulses plant already have stored much nitrogenous compound.">Pulses plant already have stored much nitrogenous compound.<br>
<input type="radio" name="q4" value="Pulses plant do not need the compound of nitrogen because they are autotrophs.">Pulses plant do not need the compound of nitrogen because they are autotrophs.<br>
<input type="radio" name="q4" value=" Pulses plant derive nutrition from the symbiotic association."> Pulses plant derive nutrition from the symbiotic association.<br>
</blockquote>
<p><b>
<hr>
Question 5.
<br>What Would Happen, If A Goat Eats Away All The Leaves Of A Small Plant<br></b>
<blockquote>
<input type="radio" name="q5" value="Remaining leaves and branches will help to sustain the plant.">Remaining leaves and branches will help to sustain the plant.
<br>
<input type="radio" name="q5" value="The small plant survived on the food stored in the stem and roots.">The small plant survived on the food stored in the stem and roots.<br>
<input type="radio" name="q5" value="Soil nutrients will help to survive the plant once again.">Soil nutrients will help to survive the plant once again.<br>
</blockquote>
<p><b>
<hr>
Question 6.
<br>The process of conversion of sugar into alcohol is known as__<br></b>
<blockquote>
<input type="radio" name="q6" value="Budding">Budding<br>
<input type="radio" name="q6" value="Fusion">Fusion<br>
<input type="radio" name="q6" value="Fermentation">Fermentation<br>
</blockquote>
<p><b>
Question 7.
<br>What does our body produce to fight the invader when a disease-carrying microbe enters our body?<br></b>
<blockquote>
<input type="radio" name="q7" value="Antigens">Antigens<br>
<input type="radio" name="q7" value="Antobodies">Antobodies<br>
<input type="radio" name="q7" value="Antibiotics">Antobiotics<br>
</blockquote>
<p><b>
<hr>
Question 8.
<br>Chicken pox is caused by<br></b>
<blockquote>
<input type="radio" name="q8" value="cholera">cholera<br>
<input type="radio" name="q8" value="chikcken pox">chikcken pox<br>
<input type="radio" name="q8" value="Maleria">Maleria<br>
</blockquote>
<p><b>
<hr>
Question 9.
<br>Whose reactivity is highest amoung the following metals?<br></b>
<blockquote>
<input type="radio" name="q9" value="Copper">Copper<br>
<input type="radio" name="q9" value="Potassium">Potassium<br>
<input type="radio" name="q9" value="iron">iron<br>
</blockquote>
<p><b>
<hr>
Question 10.
<br>A metal which is found liquid at room temperature is ?<br></b>
<blockquote>
<input type="radio" name="q10" value="Mercury">mercury<br>
<input type="radio" name="q10" value="zinc">zinc<br>
<input type="radio" name="q10" value="aluminium">aluminium<br>
</blockquote>
<p><b>
<hr>


<input type="button"value="Grade Me"onClick="getScore(this.form);">
<input type="reset" value="Clear"><p>
Number of score out of 15 = <input type= text size 15 name= "mark" >
Score in percentage = <input type=text size=15 name="percentage"><br>

</form>
  

</body>


<script>
    var numQues = 10;
var numChoi = 3;
var answers = new Array(15);
    answers[0] = "Starch";
    answers[1] = "Heterotrophic";
    answers[2] = "Grows in soils which lack in nitrogen";
    answers[3] = " Pulses plant derive nutrition from the symbiotic association.";
    answers[4] = "The small plant survived on the food stored in the stem and roots.";
    answers[5] = "Fermentation";
    answers[6] = "Antobodies";
    answers[7] = "Maleria";
    answers[8] = "Potassium";
    answers[9] = "mercury";
    
      function getScore(form) {

   var score = 0;
  var currElt;
  var currSelection;
  for (i=0; i<numQues; i++) {
    currElt = i*numChoi;
    answered=false; 
    for (j=0; j<numChoi; j++) {
      currSelection = form.elements[currElt + j];
      if (currSelection.checked) {
        answered=true;
        if (currSelection.value == answers[i]) {
          score++;
          break;
        }
      }
    }
    if (answered ===false){alert("Do answer all the questions, Please") ;return false;}
  }

  var scoreper = Math.round(score/numQues*100);
  form.percentage.value = scoreper + "%";
  form.mark.value=score;


}
    </script>

</html>