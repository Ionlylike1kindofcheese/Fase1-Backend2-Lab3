<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulier V1.2</title>
  <link rel="stylesheet" href="loginForm.css">
</head>
<body>
  <div id="container">
    <h1>De ingevulde gegevens zijn:</h1>
    E-mail: <?php $email = '';
    if (strpos($_POST["email"], '@') && strpos($_POST["email"], '.')) {
      if (strpos($_POST["email"], '<') || strpos($_POST["email"], '>')) {
        $email = '';
      } else {
        $email = $_POST["email"];
      }
    }
    echo $email; ?><br>
    Wachtwoord: <?php echo '*******'; ?>
  </div>
</body>
</html>