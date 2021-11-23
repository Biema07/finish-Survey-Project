
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="document.css">
 
    <title>Survey</title>
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
    <div id="error"></div>
    <div class="wrapper">
        <h2>Complete Form</h2>
        <form id="form" action="survey_validate.php" method="post">
            



          <div class="input-box">
            <input type="text" placeholder="Enter your last name"  name="lastName" required>
          </div>

         

          <div class="input-box">
            <input type="text" placeholder="Enter your first name"  name="firstName" required >
          </div>

         

          <div class="input-box">
            <input type="number" placeholder="Enter your age"  name="age" >
          </div>

          

          <div class="input-box">
            <input type="date" placeholder="enter date"  name="dDate" required >
          </div>
          <br>
          <h3>What is your favourite food? (You can choose more than 1 answer)</h3>
          <br>
          <div class="policy">
            <input type="checkbox" value="Pizza"  name="food[]">
            <h3>Pizza</h3>
          </div>
          <div class="policy">
            <input type="checkbox" value="Pasta"   name="food[]">
            <h3>Pasta</h3>
          </div>
          <div class="policy">
            <input type="checkbox" value="Pap & wors"   name="food[]">
            <h3>Pap & Wors</h3>
          </div>
          <div class="policy">
            <input type="checkbox" value="Chicken Stir fry"   name="food[]">
            <h3>Chicken Stir fry</h3>
          </div>
          <div class="policy">
            <input type="checkbox" value="Beef Stir Fry"   name="food[]">
            <h3>Beef Stir Fry</h3>
          </div>
          <div class="policy">
            <input type="checkbox" value="Other"  name="food[]">
            <h3>Other</h3>
          </div>
          <br>
          <h3>What is your favourite food? (You can choose more than 1 answer)</h3>

         
          <div>
            <table  >

 

              <tr>
             
              <th></th>
             
              <th>Strongly Agree (1)</th>
             
              <th>Agree (2)</th>
             
              <th>Neutral (3) </th>
             
              <th>Disagree (4)</th>
             
              <th>Strongly disagree (5)</th>
             
              </tr>
             
             
               <tr>
             
              <td>I like to eat out</td>
             
              <td>
                <input type="radio" value="1" name="eat_out"
                id="scale" required>

              </td>
             
              <td>
                <input type="radio" value="2" name="eat_out"
                 id="scale">

              </td>
             
              <td>
                <input type="radio" value="3" name="eat_out"
              id="scale" required>
              </td>
             
              <td>
                
                <input type="radio" value="4" name="eat_out"
                id="scale" required>
                 </td>
             
              <td>
                <input type="radio" value="5" name="eat_out"
              id="scale" required>
              </td>
              </tr>
             
              <tr>
             
              <td>I like to watch movies</td>
             
              <td>
                <input type="radio" value="1" name="watch_Movies"
                id="scale" required>

              </td>
             
              <td>
                <input type="radio" value="2" name="watch_Movies"
                 id="scale" required>

              </td>
             
              <td>
                <input type="radio" value="3" name="watch_Movies"
              id="scale" required>
              </td>
             
              <td>
                
                <input type="radio" value="4" name="watch_Movies"
                id="scale" required>
                 </td>
             
              <td>
                <input type="radio" value="5" name="watch_Movies"
              id="scale" required>
             
              </td>
             
            </tr>
             
             
            <tr>
              <td>I like to watch TV</td>
             
              <td>
                <input type="radio" value="1" name="watch_Tv"
                id="scale" required>

              </td>
             
              <td>
                <input type="radio"value="2" name="watch_Tv"
                 id="scale" required>

              </td>
             
              <td>
                <input type="radio" value="3" name="watch_Tv"
              id="scale" required>
              </td>
             
              <td>
                
                <input type="radio" value="4" name="watch_Tv"
                id="scale" required>
                 </td>
             
              <td>
                <input type="radio" value="5" name="watch_Tv"
              id="scale" required>
             
              </td>
             
            </tr>
             
             
             <tr>
              <td>I like to listen to the radio</td>
             
              <td>
                <input type="radio" value="1" name="listen_Radio"
                id="scale" required>

              </td>
             
              <td>
                <input type="radio" value="2" name="listen_Radio"
                 id="scale" required>

              </td>
             
              <td>
                <input type="radio" value="3" name="listen_Radio"
              id="scale" required>
              </td>
             
              <td>
                
                <input type="radio" value="4" name="listen_Radio"
                id="scale" required>
                 </td>
             
              <td>
                <input type="radio" value="5" name="listen_Radio"
              id="scale" required>
             
              </td>
             
              </tr>
             
              
             
              </table>

          </div>
          <div class="input-box button">
            <input type="Submit" name="submit"  value="Submit">
            <script>
        
        </script>
          </div>
        </form>
      </div>
      
</body>

