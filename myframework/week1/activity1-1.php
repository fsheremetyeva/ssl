<?
include "hello.php";
echo "1) <br>";
/*
Create a test file in your Week1 folder, activity1-1.php %5

Set variables for your name ($name as a string), and age ($age as an integer). %5

Create an array $person that contains index 0 as name, and index 1 as age. %10

Also, create associative key/value pairs within $person that contain name and age. %20
*/

$name = "Fatima";
$age = 32;
$person = ["Fatima", 32, "pet"=>["name"=>"Bianca", "age"=>4] ];

//Instantiate a class
$helloAgain = new helloclass();


echo "<br>2)<br>";
//Echo out $name and $age using double quotes (%5)
$helloAgain->printFunction($name, $age);

//Echo out $name and $age using single quotes (%5)
echo 'My name is '.$name. ' and age is '. $age . '<br>';

//Echo out $name and $age using $personindex 0 and 1 (%10)
$helloAgain->printFunction($person[0], $person[1]);

//Echo out name and age using key/value pairs in$person (%10)
$helloAgain->printFunction($person['pet']['name'], $person['pet']['age']);

//Set the $age to null and echo out age – what is the result? (%10) - Nothing is printed
$age =null;

echo "The age is " .$age;

//unset() the $name variable, and echo out name – What is the result? (%10) - get an error "Undefined variable:"

unset($name);

echo "My name is " . $name . "<br>";


echo "<br>3)<br>";
/*
3)Assign letter grades based on points earned. Using if/else/elseif statements, create a function that returns a letter grade based on the following point breakdowns when called:

100-90=A, 80-89=B, 79-70=C, 69-60=D, <60=F

To test your function, try it with these 5 point values and echo the result back out from the value returned from the function:

1. 94
2. 54
3. 89.9
4. 60.01
5. 102.1
*/

function gradeIt($num){
  if($num > 100){
    echo "Please enter a correct number <br>";
  }
  elseif($num >= 90){
    echo "The grade is A <br>";
  }elseif($num >= 80){
    echo "The grade is B <br>";
  }elseif($num >= 70){
    echo "The grade is C <br>";
  }elseif($num >= 60){
    echo "The grade is D <br>";
  }else{
    echo "The grade is F <br>";
  }
}

gradeIt(94); //Result: A
gradeIt(54); //Result: F
gradeIt(89.9); //Result: B
gradeIt(60.01); //Result: D
gradeIt(102.1); // Result: Please enter a correct number

echo "<br>4)<br>";
/*
4) Create an array indexed by integers. Create 5 solid color values for the even numbers (starting at 0, through 9), then a shade of that color for the successive odd number.

E.g., [0] => "Red", [1] => "Pink", [2] => "Blue", [3] => "Baby Blue", [4] => "Green", [5] => "Lime"

Loop through the colors of the array and display the index number and color name.
*/

$colors = ["White", "Ivory", "Blue", "Teal", "Yellow", "Mustard", "Red", "Fusia", "Green", "Lime"];

for($i=0; $i<count($colors); $i++){

  echo "Color ". $i . " is " . $colors[$i] . "<br>";

}
?>
