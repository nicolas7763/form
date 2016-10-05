<?php
$ot = 0;
   $not = 0;
      if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}

       if (isset($_POST['name'])) {
      	$text1 = htmlspecialchars($_POST['name']);}
      	$text = $text1 . ' поздравляем! Тест пройден!';
      if ($ot > $not) {
      include "image.php";
      }else{
      	echo $text1 ." Тест не пройден!";
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><a href="list.php">Попробовать снова!</a></p>
<p>Правильных ответов: <?php echo $ot; ?></p>
<p>Неправильных ответов: <?php echo $not; ?></p>

</body>
</html>