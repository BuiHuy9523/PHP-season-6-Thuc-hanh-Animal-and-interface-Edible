<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-28
 * Time: 14:10
 */
include ('Animal/Tiger.php');
include ('Animal/Chicken.php');//include ('Fruit/Apple.php');
//include ('Fruit/Orange.php');
echo "----Animals<br>";
$animal[0] = new Tiger();
$animal[1] = new Chicken();
foreach ($animal as $animal)
{
    echo $animal->makeSound()."<br>";
    if ($animal instanceof Chicken)
    {
        echo $animal->howtoEat();
    }
}
//$fruit[0] = new Apple();
//$fruit[1] = new Orange();
//foreach ($fruit as $fruit)
//{
//    echo $fruit->howtoEat();
//}
?>