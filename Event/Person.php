<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 17/3/29
 * Time: 下午9:44
 */

include "Component.php";

class Person extends Component
{
    const FEED_EVENT = 'feed';

    public function feed()
    {
        $this->trigger(self::FEED_EVENT); // 触发Person::FEED_EVENT事件
    }
}