<?php
class Vehicle 
{
    //wheels, doors and colors can only be filled if you know what kind of vehicle it is, hence why I marked them as protected.
    protected $wheels;
    protected $doors;
    protected $color;
    public function hasRoof(){
        return "Most vehicles have a roof";
    }

    public function __construct($wheels, $doors, $color)
    {
        $this->wheels = $wheels;
        $this->doors = $doors;
        $this->color = $color;
    }
    protected function childFunction(){
        return "I am a child class from vehicle";
    }

}
?>