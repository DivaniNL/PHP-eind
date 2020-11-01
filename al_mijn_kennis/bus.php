<?php
Class Bus extends Vehicle{
    public function useHorn(){
        return " the toeter van de bus gaat toet toet toet";
    }
    public function showProtected(){
        echo $this->childFunction();
    }
}
?>