<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP For Beginners</title>
  </head>
  <body>
    <?php

      //  Single - line comment
      #   Single - line comment
      /*  Multi-line
          Comment
      */


      // Variables

      $name = "Ibrahim Rehman";
      $age = 20;
      $height = 6.5;
      $isMale = true;
      $salary = null;
      echo "Hello World"."<br>";
      echo $name." ".$age." ".$isMale;

      echo gettype($height);
      var_dump($name);

      echo is_string($name);
      echo isset($addr);


      define('e', 2.72); // constants
      echo e;

      echo PHP_INT_MAX;


      // Numbers

      echo '<br><br>';
      $a = 1;

      $b = 2.5;
      $a++;
      $a--;
      ++$a;
      --$a;
      echo $a + 10;

      echo is_float($a);

      $b = (int)$b;
      echo gettype($b);

      // Some number functions are abs, pow, sqrt, min, max

      echo '<br>';

      echo number_format(123456, 0, ',', ' ');
    ?>
  </body>
</html>
