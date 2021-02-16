<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<section>
<?php
$dirname = "img/";
$images = glob($dirname . "*.jpg");

foreach ($images as $image) {
    echo '<img src="' . $image . '" /><br />';
}
?>
  </section>  


</body>
</html>



