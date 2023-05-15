<?php 

$text = $_POST['testo'];
$new_text = str_replace('censura','***',$text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>atterraggio</title>
</head>
<body>

<h1><?php echo $new_text ?></h1> 

</body>
</html>