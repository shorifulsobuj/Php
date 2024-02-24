<?php
class testClass {
    public $name = "Asif Abir";
    protected $age = 27;
    private $email = "sobuj@srl.cs";
    public const dob = "1998-01-01";

    public function myFunction()
    {
        return $this->name . " " . $this->email;
    }

    public function __construct()
    {
        echo "This is constructor<br>";
    }

    public function __destruct()
    {
        echo "<br>This is destructor";
    }
}

$testObject = new testClass;
echo $testObject->name;
echo "<br>";
echo testClass::dob;
echo "<br>";
echo $testObject::dob . "<br>";
// echo $testObject->name;


class otherTestClass extends testClass
{
    public function myOtherFunction()
    {
        return $this->name . " " . $this->age;
    }
}

$testObject = new otherTestClass;
?>