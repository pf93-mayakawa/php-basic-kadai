<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta cherset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      function sort_2way($nums, $order) {
        if($order) {
          echo '昇順にソートします。<br>';
          sort($nums);
            foreach ($nums as $num) {
                echo $num . '<br>';
            }
        } else {
          echo '降順にソートします。<br>';
          rsort($nums);
            foreach ($nums as $num) {
                echo $num . '<br>';
          }
        }
      }

      $nums = [15, 4, 18, 23,10];
      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);
     ?>
    </p>
  </body>
</html>