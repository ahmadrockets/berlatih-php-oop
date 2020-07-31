<?php
class Ape extends Animal
{
    protected $yell = 'Auooo';
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function yell()
    {
        echo  $this->yell;
    }
}
?>