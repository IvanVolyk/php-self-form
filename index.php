<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Using $_SERVER['PHP_SELF'] for Feedback Forms</title>
  <link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
  <div class="container">
    <?php

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      echo "Your name : <b> $name </b>";
    } else {
      echo "Enter your name";
    ?>
      <form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="text" name="name" autocomplete="off">
      <br>
      <br>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    }
    ?>

    
    
    


  </div>


</body>
</html>