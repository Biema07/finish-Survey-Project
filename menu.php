<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="document.css">
    <title>Document</title>
    
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

    
    <div class="wrapper">
       <div class="item" >
       <button class="btn" onclick="homeToSurver()" > Survey</Button>
       <br>
       <br>
       <a class="res" href="results.php">Results</a>

     
        </div>
        <script>
           function homeToSurver()
          {
            window.location = "survey.php";
           
    
         }
        </script>

     
      </div>
      <br>
      <br>
      <h3>
        Sponsored by <br>
        Tshimologong APP Factory :
      </h3>
     
      <br>
      <address>

        Tshimologong Precinct, 41 Juta St,<br>
        Braamfontein, Johannesburg, 2001
      </address>
      <br>
      <br>
      
          <aside>

            <i src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d459128.51156758436!2d27.83041282400742!3d-25.96995898413242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-25.7276234!2d28.170779!4m5!1s0x1e950c1b6c0d6957%3A0xfbe0d8fbd0b2ad62!2sTshimologong%20Precinct%2C%2041%20Juta%20St%2C%20Johannesburg%2C%202001!3m2!1d-26.194694!2d28.031909499999998!5e0!3m2!1sen!2sza!4v1636472951074!5m2!1sen!2sza" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


          </aside>
        
</body>
</html>