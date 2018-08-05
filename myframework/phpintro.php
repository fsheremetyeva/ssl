<?
/*
$myArray = ["num"=>1, "age"=>25,"another"=>[1,2,"3"]];

var_dump($myArray);

foreach($myArray as $item){
  var_dump($item);
  echo "--------- <br>";
}

for($i=0; $i<5; $i++){

echo "Hello <br>";

}
*/

/*
include "/bin/myclass.php"
*/
class myclass{

  public function __construct($number=0){
    echo "my constructor" . $number;
  }

  public function myMethod($name=""){
  //  echo "Hello from the class " . $name;
  //var_dump($_REQUEST);
  echo "name: ". $_REQUEST["name"];
  }

}
$mynewclass = new myclass(1353);

$mynewclass ->myMethod("Michael");
?>
