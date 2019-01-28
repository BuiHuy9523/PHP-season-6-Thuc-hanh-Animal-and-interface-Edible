<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-28
 * Time: 14:46
 */

include (dirname(__FILE__).'/../AbstractClass/Fruit.php');
class Orange extends Fruit
{
    public function howtoEat()
    {
        return "Orange could be juied";
        // TODO: Implement howtoEat() method.
    }
}
?>