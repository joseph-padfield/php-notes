<?php

$name = "Joseph";
$surname = "Padfield";
$age = 36;
$money = 3.14;
$awake = true;

echo $name;
echo "<br>";
echo $surname;
echo "<br>";
echo $age;
echo "<br>";
echo $money;
echo "<br>";
echo $awake;
echo "<br>";

echo $name . " " . $surname . " is " . $age . " years old.";
echo "<br>";

function awake($name, $surname, $awake)
{
    if ($awake===true)
    {
        echo $name . " " . $surname . " is awake.";
    }
    else{
        echo $name . " " . $surname . " is not awake.";
    }
}

awake($name, $surname, $awake);

$awake = false;

echo "<br>";

awake($name, $surname, $awake);

$randomNumber = rand(-100, 100);

echo "<br>";

if ($randomNumber<0)
{
    echo $randomNumber . " is negative.";
}
else
{
    echo $randomNumber . " is positive.";
}

echo "<br>";
$fruits = ['apple','pear','orange','banana','peach','strawberry'];

foreach ($fruits as $fruit)
{
    echo $fruit . "<br>";
}

foreach (range(1,10) as $i)
{
    echo $i;
}

echo "<br>";

foreach (range(10,1) as $i)
{
    echo $i;
}
echo "<br>";
foreach ($fruits as $i=>$fruit)
{
    echo $i+1 . " : " . $fruit . "<br>";
}
echo "<br>";echo "<br>";

function circleArea($radius)
{
    $area = round(3.14159 * $radius**2, 2);
    echo 'The area of a circle with a radius of ' . $radius . 'm is  '.$area .'m squared <br>';
}

circleArea(26);
circleArea(46);
circleArea(23);
circleArea(145);
circleArea(356795);

echo "
<form>
<input type='text' placeholder='Type something here' name='text'>
<input type='submit' name='submit' value='Submit'>
</form>
";

echo $_GET['text'];


