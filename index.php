<!DOCTYPE html>
<html lang="en">
  <?php require 'partials/head.php'; ?>
  <body>
    <?php
//  Single - line comment
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

// $name = "Ibrahim";

// if ($name === "Ibrahim"){
//   echo 1;
// }else{
//   echo 0;
// }

// echo $name ?: "Usman";

// switch($name){
//   case "Usman":
//     echo 1;
//     break;

//   default:
//     echo 2;
// }

// // Loops

// $counter = 0;
// do{
//   echo $counter;
//   $counter++;
// }
// while ($counter < 10);

// for ($counter = 0; $counter <body 10; $counter++){
//   break;
//   continue;
// }

// foreach (['Usman', "Ibrahim"] as $index => $name){
//   echo $name;
//   echo $index;
// }

// // Functions

// function hello(...$hello){

//   $str = implode("", $hello);
//   return "$str World";
// }

// echo hello('h', 'e', 'l', 'l', 'o');

// $arrow = fn() =>
//   "<br>Hello World";

// echo $arrow();

// Dates

// echo date('Y-m-d H:i:s');
// echo time();

// File System

// mkdir("test");
// rename("test", "test2");
// rmdir("test2");
// echo file_get_contents("./partials/head.php");

// var_dump(scandir("./"));

// echo filesize("./partials/head.php");

// OOP

// class Person extends Person{
//   public string $name;
//   private int $age;
//   protected float $height;
//   public static string $staticStr;

//   public function __construct($name, $age)
//   {
//     parent::__construct($name, $age);
//    $this->name = $name;
//    $this->age = $age;
//    Person::$staticStr = "Ibrahim";
//   }
// }

// $p = new Person('Ibrahim', 10);

// CURL

// $res = curl_init('https://my-json-server.typicode.com/typicode/demo/posts');

// curl_setopt_array($res, [
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POST => true,
//     CURLOPT_HTTPHEADER => ['content-type: application/json'],
//     CURLOPT_POSTFIELDS => json_encode(['posts' => [1, 2]]),
// ]);

// $result = curl_exec($res);
// echo $result;

// Connecting to MySQL

// $pdo = new PDO(
//     'mysql:host=localhost;port=3306;dbname=mydatabase',
//     'root',
//     ''
// );
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// var_dump($_SERVER);

// if ($_SERVER["REQUEST_METHOD"] === "POST"){
//   $title = $_POST['title'];

//   $statement = $pdo->prepare("INSERT INTO videos VALUES (:title)");
//   $statement->bindValue(":title", $title);

// }

// move_uploaded_file();

// header('Location: index.php');

// $statement = $pdo->prepare('SELECT * FROM videos');
// $statement->execute();
// $videos = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($videos);

// /** @var $pdo \PDO */

// require_once 'app/Email.php';
?>
  </body>
</html>
