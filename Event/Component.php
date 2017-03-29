<?php

/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 17/3/29
 * Time: 下午9:43
 */
class Component
{
    private $_event;

    public function trigger($name)
    {
        foreach ($this->_event[$name] as $key => $value) {
            $obj = $value[0];
            $method = $value[1];
            $obj->$method();
        }
    }

    public function on($name, $callback)
    {
        $this->_event[$name][] = $callback;
    }

}