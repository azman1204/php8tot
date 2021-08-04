<?php
class PropertyTest
{
    private $data = array();

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
       return $this->data[$name];
    }
}

$obj = new PropertyTest;
$obj->a = 1;
echo $obj->a . "\n\n"; // output : 1

$obj->hello = 'hi';
echo $obj->hello . "\n\n"; // output : hi