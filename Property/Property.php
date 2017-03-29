<?php

class Obj
{
    public function __get($name)
    {
        $fun_name = 'get' . $name;
        if (method_exists($this, $fun_name)) {
            return $this->$fun_name();
        }
    }

    public function __set($name, $value)
    {
        $setter = 'set' . $name;
        if (method_exists($this, $setter)) {
            $this->$setter($value);
        }
    }

}

class A extends Obj
{
    private $_name;

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }
}


$a = new A();
$a->Name = 'thomas';
var_dump($a->Name);
