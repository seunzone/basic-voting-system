

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="../css/votestyle.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <h1> Voting system</h1>
      <div class="votebackground">
        <div class="setupvote_form_box">
            <form method="POST" action="../logics/store_vote.php" class="setup_form">
              
              <label for="candidate4"> Your Name : </label>
              <input type="text" name="voter_name" class="candidates">

               <label for="candidate4">Comments :</label>
              <textarea name="comment" class="candidates"></textarea>

              <input type="submit" name="submit" class="votebackground_button">
            </form>
        </div>
      </div>
      
      
    </body>
</html>









