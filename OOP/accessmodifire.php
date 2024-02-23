<?php
class tastClass {
    public $name = "Asif Abir";
    protected $age = 27;
    private $address = "Dubai";

    public function myFunction()
    {
        return $this->name . " " . $this->age;
    }
}
$testObject = new otherTestClass;
echo $testObject->name;
echo "<br>";
echo $testObject->name;


class otherTestClass extends tastClass
{
    public function myOtherTestClass()
    {
        return $this->age . " " . $this->age;
    }
}

$testObject = new otherTestClass;
?>