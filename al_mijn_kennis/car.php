<?php
Class Car extends Vehicle{
    public function carInfo(){
        return "I am a car with ".$this->wheels." wheels, ".$this->doors." doors and I am ".$this->color;
    }
    public function showProtected(){
        echo $this->childFunction();
    }
    public function useHorn(){
        return "The car goes beep";
    }
    
}
?>