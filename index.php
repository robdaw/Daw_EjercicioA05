<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'Claseviolin.php';

      $violin1 = new ClaseViolin();
      $violin1->getColor();

      $violin2 = new ClaseViolin();
      $violin2->getColor();
      $violin2->getTamanyo();
    ?>
  </body>
</html>
