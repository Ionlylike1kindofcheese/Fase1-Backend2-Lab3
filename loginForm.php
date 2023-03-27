<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulier V2.0</title>
</head>
<body>
  <form method="post">
    <div class="container">
      <label for="email"><b>E-mail: </b></label>
      <input type="text" placeholder="E-mail *" name="email" required>
  
      <label for="password"><b>Wachtwoord: </b></label>
      <input type="password" placeholder="Wachtwoord *" name="password" required>
  
      <button type="submit" name="submitButton">Login</button>
    </div>
  </form>
  <div class="container">
    <?php
    if (isset($_POST['submitButton'])) {
      $email = '';
      if (strpos($_POST["email"], '@') && strpos($_POST["email"], '.')) {
        if (strpos($_POST["email"], '<') || strpos($_POST["email"], '>')) {
          $email = '';
        } else {
          $email = $_POST["email"];
        }
      }
      echo "<h1>De ingevulde gegevens zijn:</h1>";
      echo "E-mail: " . $email . "<br>";
      echo "Wachtwoord: *******";
    }
    ?>
  </div>
  <style>
  <?php include "loginForm.css"; ?>
  </style>
</body>
</html>