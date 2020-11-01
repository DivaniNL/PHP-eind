<?php

Class Scooter extends Vehicle{
    //roof is overrided, since most vehicles have a roof, but not a scooter. It is not fun driving in the rain with a scooter.
    public function hasRoof(){
        return "A scooter has no roof";
    }
    public function useHorn(){
        return "The scooter goes eh eh";
    }
    public function showProtected(){
        echo $this->childFunction();
    }
}
?>