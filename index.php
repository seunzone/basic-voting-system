<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/votestyle.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <h1> Voting system</h1>
      <div class="votebackground">
        <div class="setupvote_box">
          <a href="views/setupvote.php">
            <button class="votebackground_button">
              Set up voting 
            </button>
          </a>
                  </div>
        <div class="setupvote_box">

          <form action="views/vote.php" method="POST">
            <label><h4>Select election to participate in</h4></label>
              <select name="vote">
                <?php 
                  require "logics/functions.php";
                  select_candidate();
                ?>
              </select>
              <input type="submit" name="vote" value="vote" class="votebackground_button">
          </form>
        </div>
      </div>
      
      
    </body>
</html>









