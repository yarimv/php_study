<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>책입력하기</title>
  </head>
  <body>
    <p>안녕하세요, <?php echo $_GET['id']; ?>님</p>

    <?php
    echo file_get_contents("data/".$_GET['id']);
     ?>
  </body>
</html>
