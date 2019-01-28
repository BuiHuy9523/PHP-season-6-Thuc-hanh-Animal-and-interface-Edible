<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-28
 * Time: 14:05
 */


include_once (dirname(__FILE__).'/../AbstractClass/Animal.php');
include (dirname(__FILE__).'/../InterfaceClass/Edible.php');
class Chicken extends Animal
{
    public function makeSound()
    {
        return "Chicken: cluck clucl";
        // TODO: Implement makeSound() method.
    }
    public function howtoEat()
    {
        return "Could be fried.";
    }
}

?>