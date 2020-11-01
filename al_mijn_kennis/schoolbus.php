<?php
Class Schoolbus extends Bus{
    public function useHorn(){
        return "de toeter van de schoolbus gaat toet toet toet";
    }
    public function showProtected(){
        echo $this->childFunction();
    }
}
?>