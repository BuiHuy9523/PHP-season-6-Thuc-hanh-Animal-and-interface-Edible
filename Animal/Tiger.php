<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-28
 * Time: 13:59
 */

include_once (dirname(__FILE__).'/../AbstractClass/Animal.php');
class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrr";
        // TODO: Implement makeSound() method.
    }
}
?>