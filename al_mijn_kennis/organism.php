<?php
//putting all classes under the namespace Life
namespace Life;
class Organism 
{
//make properties for class Organism
    //using encapsulation, make everything private so we cannot mess up the values for these properties easily.
    private $age;
    private $organism_type = "human";
    private $firstname;
    private $lastname;
    private $teenager;
    private $private = "I am private";
    //initialize properties once a new instance is made (constructor)
    public function __construct($age, $firstname, $lastname)
    {
        $this->age = $age;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    //a private method can only be called from inside of the class
    private function teenagerYesorNo()
    {
        if ($this->age < 20 && $this->age >= 10) {
            $this->setTeenager("is a teenager");
        
        } else if ($this->age >= 20 || $this->age < 10) {
            $this->setTeenager("is not a teenager");
        }
        return $this->firstname . " " . $this->lastname . " " . $this->teenager;
    }
    private function introduceYourself()
    {
        if ($this->organism_type == "human") {
            return "I am a " . $this->organism_type . " of " . $this->age . " years old. My name is " . $this->firstname . " " . $this->lastname;
        } else {
            return "Ik am a " . $this->organism_type . " of " . $this->age . " years old.";
        }
    }
    //a public method, can be called outside of a class
    public function greetMe()
    {
        return "Hello " . $this->firstname . " " . $this->lastname . ". You are " . $this->age . " years old and a " . $this->organism_type . "<br>";
    }
    //setter
    public function setTeenager($teenager)
    {
        $this->teenager = $teenager;
    }
    //getter
    public function getTeenager()
    {
        return $this->teenager;

    }
    public function allAboutOrganism()
    {

        //this way you can use a private method, combining private methods into a public method
        echo $this->introduceYourself();

        echo "<br>";
        echo $this->teenagerYesorNo();
        echo "<br>";
        echo $this->setTeenager("I set the teenager value to a weird string");
        echo $this->getTeenager();
        echo "<br>";
        echo $this->private;
    }

}
?>