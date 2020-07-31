<?php
class Frog extends Animal
{
    protected $jump = "hop hop";
    public function __construct($name)
    {
        $this->legs = 4;
        $this->name = $name;
    }
    public function jump()
    {
        echo $this->jump;
    }
}
?>