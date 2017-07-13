<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="script.php" method="post">
        
        <h1>Welcome to the Online Voting System</h1>
        
        <fieldset>
          

          <legend><h3 align="center">Select Whom You want to be President</h3></legend>
          
          <input type="checkbox" id="femi" name="femi">
          <legend><img src="img1.jpg">Femi Kuti</legend>

          <input type="checkbox" id="sunday" name="sunday">
          <legend><img src="img2.jpg">Sunday John</legend>

          <input type="checkbox" id="emeka" name="emeka">
          <legend><img src="img3.jpg">Chukwu Emeka</legend>

          <input type="checkbox" id="tobi" name="tobi">
          <legend><img src="img4.jpg">Tobi Musa</legend> <br>

          <legend>Drop a Comment</legend>
          <textarea id="bio" name="info"></textarea>
          
         
        
        </fieldset>
          
        <button type="submit">Vote</button>
        
      </form>
      
    </body>
</html>









