<?php
class House
{
    public $door;
    public $windows;
    public $rooms;
    public $size;
    //the value of door is actually not a value but an object.
    public function __construct(Door $door, $size)
    {
        $this->door = $door;
        $this->size = $size;
    }
    public function houseInfo(){
        return "My doors are made out of ".$this->door->material." and I am a ".$this->size." house.";
    }
}
?>