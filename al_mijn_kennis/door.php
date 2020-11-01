<?php


class Door
{
    private $name = "name";
    public function __construct($material, $w, $h)
    {
        $this->material = $material;
        $this->w = $w;
        $this->h = $h;
    }
    public function show()
    {
        return "I am a door made out of ".$this->material." and i am ".$this->w." cm long and ".$this->h." cm tall.";
    }
}
?>