<?php


$id = 10;
$name = "Maeed";
$cgpa = 3.80;


/*
$std = array(1, 3.5, "maeed");
$std = [1, 3.8, "maeed"];

$std[1];

$stds = [
    [1, 3.5, "maeed"],
    [2, 3.5, "maeed"],
    [3, 3.5, "maeed"]
];

$stds[2][2];


$std = ['id' => 1, 'cgpa' => 3.5, 'name' => 'maeed'];
$std = ['name'];


$stds = [

    ['id' => 1, 'cgpa' => 3.5, 'name' => 'maeed'],
    ['id' => 2, 'cgpa' => 2.5, 'name' => 'abir'],
    ['id' => 3, 'cgpa' => 1.5, 'name' => 'eshika']

];

$stds[2]['cgpa'];


$stds = [

    's1' => ['id' => 1, 'cgpa' => 3.5, 'name' => 'maeed'],
    's2' => ['id' => 2, 'cgpa' => 2.5, 'name' => 'abir'],
    's3' => ['id' => 3, 'cgpa' => 1.5, 'name' => 'eshika']

];



$stds['s2']['name'];

function abc($a=0 , $b=20)
{
    return $a+$b;
}

$c = abc();

for($i =0; $i<10; $i++)
{

}


foreach($std as $v)
{

}


if()
{

}else
{

}
*/


echo "Hello PHP". $id;
echo "<br>";
print($id);
echo "<br>";
echo "<br>";


//calculate the area and perimeter of a Rectangle
function area($length, $width)
{
    return $length*$width;
}
echo "Area = ". area(10,10);
echo"<br>";


echo "<br>";
//PERIMETER
function perimeter($length, $width)
{
    return 2*($length+$width);
}

echo "Perimeter = ". perimeter(10,10);   
echo "<br>";

echo "<br>";

//script to calculate the VAT (Value Added Tax) over an amount
function vat($amount){
    return .15*$amount + $amount;
}
echo "Value added tax = ". vat(10);
echo "<br>";

echo "<br>";

//script to find whether a given number is odd or even
$number = 9;
if($number % 2==0) {
    echo "$number is Even <br>";
} else{
    echo "$number is Odd <br>";
}
echo "<br>"; 

//script to find the largest number from three given numbers

$a=9;
$b=15;
$c=7;

if($a>$b && $a>=$c) {
    echo "$a is Greatest <br>";
}else if($b>$a && $b>$c) {
    echo "$b is Greatest <br>";
}
else{
    echo "$c is Greatest <br>";
}

echo "<br>";



//script to print all the odd numbers between 10 to 100  

for ($i= 10; $i<100; $i++) {
    if($i % 2!= 0) {
        echo " $i,";
    }
}

echo"<br>";
echo"<br>";


//script to search an element from an array

$name = ['maeed', 'abir', 'eshika', 'mahim', 'arif'];
$search = 'maeed';
$found = false;
foreach($name as $name)
{
    if($name == $search)
    {
        $found = true;
        break;
    }
}
if($found){ echo "$search  is found.<br>";
}else{ echo "$search is not found.<br>";}



// 


?>