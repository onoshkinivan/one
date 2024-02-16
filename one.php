<?php
      echo <img src="img/kakao.jpg" alt="Вкусное какао">
      $result = null;
      $text = $POST['text'] ?? '';
 
      if (!empty($text)) {
         $datetime = date(DATE_ATOM);
         $isWrote = file_put_contents('feedback.txt', $datetime . PHP_EOL . $text . PHO_EOL, FILE_APPEND) !== false;
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комментарий к картинке</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<?php if ($result !== null):?>
    echo <img src="onetwofree/kakao.jpg" alt="Вкусное какао">
        <div>
            <b><?php $result ?></b>
        </div>
        <?php endif ?>
    <form action="one.php" method="post">
        <label for="">
            Введите ваш текст: '<br>';
            <textarea name="text" id="text" cols="50" rows="5"></textarea>
        </label>
        <input type="submit">
    </form>
</body>
</html>