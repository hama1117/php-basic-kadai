<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>

<body>
  <p>
    <?php
    $vegetable_datas = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($vegetable_datas as $index => $value) {
      echo "{$index} : {$value}<br>";
    }
    ?>
  </p>
  </body>

  </html>