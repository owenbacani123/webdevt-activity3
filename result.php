<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}

body {                                         /* BACKGROUND SCORE*/
  background-color: #00FFFF;                  
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
}

.row {                                          /* TOTAL SCORE*/
  margin: 70px 0px;
  transform: translate(15%, -260%);
}


/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
}
</style>

<style>
.H {                                                             /* HHHHHHHHH Style */
  background-color: #DC143C;
  color: white;
  padding: 12px 50px;
  text-decoration: none;
  font-size: 20px;
  cursor: pointer;
  transform: translate(-165%, 50%);
}

.H:hover {                                                         /* hover */
  background-color: #FFD700;
}
</style>

<?php                    
function test_input($data) {
  return $data;
}

if (empty($_POST["Q1"])) { ///////////////////////////////////////////////////////// 1 
    $Q1 = "";
  } else {
    $Q1 = test_input($_POST["Q1"]);
  }

if (empty($_POST["Q2"])) {///////////////////////////////////////////////////////// 2
    $Q2 = "";
  } else {
    $Q2 = test_input($_POST["Q2"]);
  }

if (empty($_POST["Q3"])) {////////////////////////////////////////////////////////// 3
    $Q3 = "";
  } else {
    $Q3 = test_input($_POST["Q3"]);
  }

if (empty($_POST["Q4"])) {////////////////////////////////////////////////////////// 4
  $Q4 = "";
  } else {
  $Q4 = test_input($_POST["Q4"]);
  }
                                  
if (empty($_POST["Q5"])) {//////////////////////////////////////////////////////////// 5
    $Q5 = "";
  } else {
    $Q5 = test_input($_POST["Q5"]);
  }
                                  
if (empty($_POST["Q6"])) {//////////////////////////////////////////////////////////// 6
    $Q6 = "";
  } else {
    $Q6 = test_input($_POST["Q6"]);
  }
                                  
if (empty($_POST["Q7"])) {/////////////////////////////////////////////////////////// 7
    $Q7 = "";
  } else {
    $Q7 = test_input($_POST["Q7"]);
  }

if (empty($_POST["Q8"])) {//////////////////////////////////////////////////////////// 8
    $Q8 = "";
  } else {
    $Q8 = test_input($_POST["Q8"]);
  }

if (empty($_POST["Q9"])) {///////////////////////////////////////////////////////////// 9
    $Q9 = "";
  } else {
    $Q9 = test_input($_POST["Q9"]);
  }

if (empty($_POST["Q10"])) {///////////////////////////////////////////////////////////// 10
    $Q10 = "";
  } else {
    $Q10 = test_input($_POST["Q10"]);
  }

if (empty($_POST["Q11"])) {///////////////////////////////////////////////////////////// 11
    $Q11 = "";
  } else {
    $Q11 = test_input($_POST["Q11"]);
  }

if (empty($_POST["Q12"])) {///////////////////////////////////////////////////////////// 12
    $Q12 = "";
  } else {
    $Q12 = test_input($_POST["Q12"]);
  }

if (empty($_POST["Q13"])) {///////////////////////////////////////////////////////////// 13
    $Q13 = "";
  } else {
    $Q13 = test_input($_POST["Q13"]);
  }

if (empty($_POST["Q14"])) {/////////////////////////////////////////////////////////////  14
    $Q14 = "";
  } else {
    $Q14 = test_input($_POST["Q14"]);
  }

if (empty($_POST["Q15"])) {/////////////////////////////////////////////////////////////  15
    $Q15 = "";
  } else {
    $Q15 = test_input($_POST["Q15"]);
  }

if (empty($_POST["Q16"])) {/////////////////////////////////////////////////////////////  16
    $Q16 = "";
  } else {
    $Q16 = test_input($_POST["Q16"]);
  }

if (empty($_POST["Q17"])) {/////////////////////////////////////////////////////////////  17
    $Q17 = "";
  } else {
    $Q17 = test_input($_POST["Q17"]);
  }

if (empty($_POST["Q18"])) {/////////////////////////////////////////////////////////////  18
    $Q18 = "";
  } else {
    $Q18 = test_input($_POST["Q18"]);
  }

if (empty($_POST["Q19"])) {/////////////////////////////////////////////////////////////  19
    $Q19 = ""; 
  } else {
    $Q19 = test_input($_POST["Q19"]);
  }

if (empty($_POST["Q20"])) {/////////////////////////////////////////////////////////////  20
    $Q20 = "";
  } else {
    $Q20 = test_input($_POST["Q20"]);
  }
?>

<!-- MAIN (Center website) -->
<div class="main">

<h1>QUIZ RESULT</h1>
<hr>

<!-- Portfolio Gallery Grid -->
<div class="row">
<div class="column">
<div class="content">
<img src="https://uxwing.com/wp-content/themes/uxwing/download/24-sport-and-awards/trophy.png" style="width: 100px">
      
<h3><?php
      $totalScore =  (int)$Q1 + (int)$Q2 + (int)$Q3 + (int)$Q4 + (int)$Q5 + (int)$Q6 + (int)$Q7 + (int)$Q8 + (int)$Q9 + (int)$Q10 +
      (int)$Q11 + (int)$Q12 + (int)$Q13 + (int)$Q14 + (int)$Q15 + (int)$Q16 + (int)$Q17 + (int)$Q18 + (int)$Q19 + (int)$Q20;
      echo "Total Score <br> <h1>$totalScore</h1>";
?></h3>
</div>
</div>

<div class="column">
<div class="content">
<img src="https://www.shareicon.net/data/256x256/2015/09/15/101562_incorrect_512x512.png" style="width:100px">

<h3><?php
       $perfect = 20;
       $totalScore = $totalScore; 
       $incorrect = $perfect - $totalScore;
       echo "incorrect <br><h1> $incorrect</h1>";
?></h3>
</div>
</div>

<div class="row1">
<div class="column">
<div class="content">
<img src="https://icon-library.com/images/i_user_feedback_1359505.png" style="width:100px">

<h3><?php
echo "feedback";
echo "<br><br>";
      if($totalScore <=5){
        echo "<h2>!!Enemy detected!!";
      }else if($totalScore >=6 && $totalScore <=10){
        echo "<h2>We need to talk more";
      }else if($totalScore >=11 && $totalScore <= 15){
        echo "<h2>We're friends";
      }else if($totalScore >=16 && $totalScore <=20){
        echo "<h2>!!Cheater alert!!";
      }
?></h3>

<br><br>

<div>
    <button onclick="location.href='index.php'" class="H"><i ></i>PLAY AGAIN</button>
</div>

</body>
</html>