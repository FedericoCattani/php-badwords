<?php

$frase = $_GET['frase'];
$parola = $_GET['parola'];
$testoCensurato = str_replace($frase, 'xxx', $parola);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style-form.css">

  <title>Pagina atterraggio form</title>
</head>

<body>
  <h1>Frase e parola censurata:</h1>
  <ul>
    <li><?php echo $frase ?></li>
    <li><?php echo $testoCensurato ?></li>
  </ul>

</body>

</html>