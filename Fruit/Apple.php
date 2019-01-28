<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-28
 * Time: 14:43
 */
include (dirname(__FILE__).'/../AbstractClass/Fruit.php');
class Apple extends Fruit
{
     public function howtoEat()
    {
        return "Aplle could be filed";
        // TODO: Implement howtoEat() method.
    }
}
?>