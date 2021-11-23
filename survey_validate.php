<?php
include_once('survey_connect.php');


        if(isset($_POST['submit']))
        {


            $firstName= $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $Age=$_POST['age'];
            $Date=$_POST['dDate'];
            $food=$_POST['food'];
            $Sb=implode(',',$food);
            $eat_Out=$_POST['eat_out'];
            $watch_Movies=$_POST['watch_Movies'];
            $watch_TV=$_POST['watch_Tv'];
            $listen_Radio=$_POST['listen_Radio'];
          
             
            if($Age <5 || $Age >121)
            {
                echo "<script> alert('Crazy Age');
                window.location='survey.php'</script>";
            }
            else
            {
                $query="INSERT INTO survey(fName,surname,age,dDate,Food,eat_Out,watch_Movies,watch_TV,listen_Radio) values('$firstName', '$lastName', '$Age','$Date','$Sb'
                ,'$eat_Out','$watch_Movies','$watch_TV','$listen_Radio')";
              
                
              if(mysqli_query($conn,$query))
              {
            
                echo "<script> alert('Thanks for comp');
                window.location='menu.php'</script>";
            
              }
            }
        
           
        }



?>