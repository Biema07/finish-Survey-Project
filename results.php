<?php
include_once('survey_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="document.css">
 
 <title>Survey results</title>
</head>
<body>

<nav>
        <label class="logo">Public Survey</label>
        <ul>
            <li><a class="active" href="menu.php">Home</a></li> 
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
  


  <?php

  //determine the number of survey
  $sql="SELECT count(id) AS total FROM survey";
  $countResult =mysqli_query($conn,$sql);
  $valueCount = mysqli_fetch_assoc($countResult);
  $num_rows=$valueCount['total'];

  echo "<script>alert('di survey tsothle $num_rows')</script>";
   
   //the age average 
   $sqlAge="SELECT ROUND(AVG(age),2) AS ageAve FROM survey";
   $ageResult =mysqli_query($conn,$sqlAge);
   $valueAge = mysqli_fetch_assoc($ageResult);
   $Ave=$valueAge['ageAve'];
  
   echo "<script>alert('avere keeee $Ave')</script>";

    //determine the oldest person
    $sqlMax="SELECT MAX(age) AS ageMax FROM survey";
    $maxResult =mysqli_query($conn,$sqlMax);
    $valueMax = mysqli_fetch_assoc($maxResult);
    $maxAge=$valueMax['ageMax'];
    echo "<script>alert('bare ke Max  $maxAge')</script>";


     //determine the youngest person
     $sqlMin="SELECT MIN(age) AS ageMin FROM survey";
     $minResult =mysqli_query($conn,$sqlMin);
     $valueMin = mysqli_fetch_assoc($minResult);
     $minAge=$valueMin['ageMin'];

     echo "<script>alert('bare ke minimum $minAge')</script>";


     //determine total of food
     $sqlFC="SELECT COUNT(food) AS foodNum FROM survey ";
     $fcResult =mysqli_query($conn,$sqlFC);
     $valueFC = mysqli_fetch_assoc($fcResult);
     $countFod=$valueFC['foodNum'];
  //   echo "<script>alert('dijo tsotlhe $countFod')</script>";

     
    echo "<script>alert('dijo tsotlhe $countFod ')</script>";
    //determine Percentage of people who like Pizza

    $sqlP="SELECT count(food) as pizza FROM survey WHERE food='pizza' ";
    $pizzaR =mysqli_query($conn,$sqlP);
    $valueP = mysqli_fetch_assoc($pizzaR);
    $countFood=$valueP['pizza'];
    echo "<script>alert('kere bona $countFood')</script>";

 //echo "<script>alert('Pizza  $countPizza and total food $countFood')</script>";
   
      //determine Percentage of people who like Pasta
      $sqlPasta="SELECT COUNT(food) AS countPasta FROM survey WHERE food = 'Pasta'";
      $pastaResult =mysqli_query($conn,$sqlPasta);
      $valuePasta = mysqli_fetch_assoc($pastaResult);
      $countPasta=$valuePasta['countPasta'];
   //   $perPasta=($countPasta/$countFood)*100;

      //Percentage of people who like Pap and Wors
      $sqlPap="SELECT COUNT(food) AS countPap FROM survey WHERE food = 'Pap and Wors'";
      $papResult =mysqli_query($conn,$sqlPap);
      $valuePap = mysqli_fetch_assoc($papResult);
      $countPap=$valuePap['countPap'];
   //   $perPap=($countPap/$countFood)*100;

       //The number of rows
       $sqlRows="SELECT COUNT(ID) AS rowCount FROM survey";
       $rowsResult =mysqli_query($conn,$sqlRows);
       $valueRows = mysqli_fetch_assoc($rowsResult);
       $countRows=$valueRows['rowCount'];
       

       //The average of people who like to eat out:
       $sqlEat="SELECT ROUND(AVG(eat_Out),2) AS countEat FROM survey";
       $eatResult =mysqli_query($conn,$sqlEat);
       $valueEat = mysqli_fetch_assoc($eatResult);
       $aveEat=$valueEat['countEat'];
    

        //determine the average of people like to watch movies:
        $sqlMov="SELECT ROUND(AVG(watch_TV),2) AS countMovies FROM survey";
        $movResult =mysqli_query($conn,$sqlMov);
        $valueMov = mysqli_fetch_assoc($movResult);
        $aveMov =$valueMov['countMovies'];
        

        //determine the average of people like to watch TV:
        $sqlWat="SELECT ROUND(AVG(watch_Movies),2) AS countTV FROM survey";
        $resultTV =mysqli_query($conn,$sqlWat);
        $valueTV = mysqli_fetch_assoc($resultTV);
        $aveTV=$valueTV['countTV'];
       

        //determine the average of people like to listen to the radio:
        $sqlRadio="SELECT ROUND(AVG(listen_Radio),2) AS radioCount FROM survey";
        $radioResult =mysqli_query($conn,$sqlRadio);
        $valueRadio = mysqli_fetch_assoc($radioResult);
        $aveRadio=$valueRadio['radioCount'];
        echo "<script>alert('ava ya radio $aveRadio')</script>";

       
  ?>

<div  class="wrapper""><h1>The results of the surveys</h1><br>
<div  class="wrapper">
<h3>Total number of surveys:<?php echo $num_rows ?></h3>
<h3>Average age:<?php echo $Ave ?></h3>
<h3>Oldest person who participated in survey:<?php echo $maxAge ?></h3>
<h3>Youngest person who participated in survey:<?php echo $minAge ?></h3>
<br>
<br>
<h3>Percentage of people who like Pizza:<?php echo round($perPizza) ?> % </h3>
<h3>Percentage of people who like Pasta:<?php echo round($perPasta) ?> % </h3>
<h3>Percentage of people who like Pap and Wors: <?php echo round($perPap) ?> % </h3>
<br>
<br>
<h3>People like to eat out :<?php echo $aveEat ?></h3>
<h3>People like to watch movies :<?php echo $aveMov ?></h3>
<h3>People like to watch TV : <?php echo $aveTV ?></h3>
<h3>People like to listen to the radio:<?php echo $aveRadio ?></h3>
<br>
<br>
<br>
<button class="btn" onclick="resultsToHome()">OK</button>

<script>
    function resultsToHome()
        {
            window.location = "menu.php";
        }
</script>
           
</div>
</body>
</html>