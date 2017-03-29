<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 17/3/29
 * Time: 下午9:41
 */

include "Cat.php";
include "Dog.php";
include "Person.php";

class IndexController
{
    public function index()
    {
        $person = new Person();
        $cat = new Cat();
        $dog = new Dog();
        $person->on(Person::FEED_EVENT, [$dog, 'run']); // doe的run方法绑定到事件Person::FEED_EVENT上
        $person->on(Person::FEED_EVENT, [$cat, 'shout']);// 绑定事件
        $person->feed(); // 执行person的方法
    }

}

$animal = new IndexController();
$animal->index();