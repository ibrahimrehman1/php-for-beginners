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

      // $name = "Ibrahim Rehman";
      // $age = 20;
      // $height = 6.5;
      // $isMale = true;
      // $salary = null;
      // echo "Hello World"."<br>";
      // echo $name." ".$age." ".$isMale;

      // echo gettype($height);
      // var_dump($name);

      // echo is_string($name);
      // echo isset($addr);


      // define('e', 2.72); // constants
      // echo e;

      // echo PHP_INT_MAX;


      // // Numbers

      // echo '<br><br>';
      // $a = 1;

      // $b = 2.5;
      // $a++;
      // $a--;
      // ++$a;
      // --$a;
      // echo $a + 10;

      // echo is_float($a);

      // $b = (int)$b;
      // echo gettype($b);

      // // Some number functions are abs, pow, sqrt, min, max

      // echo '<br>';

      // echo number_format(123456, 0, ',', ' ');


      // strings

      // $name = "Ibrahim Rehman";
      // echo substr($name, 0, 5);

      // $longText = "<h1>Hello</h1>
      // World
      // Hi ";

      // echo nl2br(htmlentities($longText)); // preserves html code and line breaks

      // arrays

      // $fruits = ['Banana', "Orange"];
      // $name = 'Hello World';
      // $fruits[] = 'Apple';
      // array_push($fruits, 'Watermelon');
      // var_dump($fruits);

      // echo implode(', ', $fruits);

      // var_dump(explode(' ', $name));



      // Associative Arrays i.e. objects in PHP 

      // $personObj = ["firstKey" => 1, "secondKey" => 2];

      // echo $personObj['firstKey'];


      // $personObj['thirdKey'] ??= 3;

      // var_dump($personObj);


      // Conditionals

      $name = "Ibrahim";

      if ($name === "Ibrahim"){
        echo 1;
      }else{
        echo 0;
      }


      echo $name ?: "Usman";


      switch($name){
        case "Usman":
          echo 1;
          break;

        default:
          echo 2;
      }


      // Loops

      $counter = 0;
      do{
        echo $counter;
        $counter++;
      }
      while ($counter < 10);


      for ($counter = 0; $counter < 10; $counter++){
        break;
        continue;
      }


      foreach (['Usman', "Ibrahim"] as $index => $name){
        echo $name;
        echo $index;
      }


      // Functions

      function hello(...$hello){

        $str = implode("", $hello);
        return "$str World";
      }

      echo hello('h', 'e', 'l', 'l', 'o');


      $arrow = fn() => 
        "<br>Hello World";
      

      echo $arrow();
    ?>
  </body>
</html>
