<?php

// Section 1
class helloClass{
    public function greeting() {
        echo "Hello World";
    }
}

$sayHelloClass = new helloClass();
$sayHelloClass->greeting();

echo '<br><br>';


// Section 2
$name = "Justin Weber";
$age = 38;
$person = [$name, $age, "name"=>$name, "age"=>$age];

echo "My name is $name and my age is $age.<br>";

// #1
echo "Name: $name, Age: $age <br>";

// #2
echo 'Name: $name, Age: $age <br>'; // The variabes do not get evaluated in single quotes.

// #3
echo $person[0].", ".$person[1]."<br>";

// #4
echo $person['name'].", ".$person['age'];

// #5
$age = null;
echo $age; /* Nothing displays to the screen.*/

// #6
unset($name); // This will destroy the variable.
echo $name; /* Notice: Undefined variable: name in /var/www/html/myframework/Week1/activity1-1.php on line 33 */


// Section 3
function letterGradeIssued($number=0) {
    $letterGrade = null;
    if ($number < 60) {
       $letterGrade = "F";
    } elseif ($number <= 69) {
        $letterGrade = "D";
    } elseif ($number <= 79) {
        $letterGrade = "C";
    } elseif ($number <= 89) {
        $letterGrade = "B";
    } else {
        $letterGrade = "A";
    }
    return $letterGrade;
}

echo "<br>1. 94 = ".letterGradeIssued(94)."<br>";
echo "2. 54 = ".letterGradeIssued(54)."<br>";
echo "3. 89.9 = ".letterGradeIssued(89.9)."<br>";
echo "4. 60.01 = ".letterGradeIssued(60.01)."<br>";
echo "5. 102.1 = ".letterGradeIssued(102.1)."<br><br>";


// Section 4
$numArray = [0=>"Red", 1=>"Rose Red", 2=>"Blue", 3=>"Sky Blue", 4=>"Green", 5=>"Lime Green", 6=>"Yellow", 7=>"Canary Yellow", 8=>"Orange", 9=>"Burnt Orange"];

foreach($numArray as $x => $x_value) {
    echo "Color $x is $x_value <br>";
}

?>