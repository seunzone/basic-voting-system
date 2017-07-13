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
            <form method="POST" action="../logics/store_setup.php" class="setup_form">
              <label for="type"> Enter Election type : </label>
              <input type="text" name="election_type" class="candidates">

              <label for="candidate1"> First candidate :</label>
              <input type="text" name="candidate1" class="candidates">

              <label for="candidate2"> Second candidate :</label>
              <input type="text" name="candidate2" class="candidates">

              <label for="candidate3"> Third candidate :</label>
              <input type="text" name="candidate3" class="candidates">

              <label for="candidate4"> Fourth candidate :</label>
              <input type="text" name="candidate4" class="candidates">

               <label for="candidate4">Comments :</label>
              <textarea name="comment" class="candidates"></textarea>

              <input type="submit" name="submit" class="votebackground_button">
            </form>
        </div>
      </div>
      
      
    </body>
</html>









