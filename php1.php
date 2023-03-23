<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP - Hello, World!</title>
</head>
<body>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

$x = "Hello world!";
$x = null;
var_dump($x);
define("x",44);
echo x;
echo "<br>";

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "110") {
echo "it is $t";
} else {
  echo "Have a good night!";
}

?>
</body>
</html>