<?php

class Person {
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;
    private $baba;
    private $deda;

    function __construct($name, $lname, $age, $mother = null, $father = null, $deda = null, $baba = null) {
        $this->name = $name;
        $this->lastname = $lname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->deda = $deda;
        $this->baba = $baba;
        $this->hp = 100;
    }

    public function sayHi($name) {
        return "Привет, $name! Я $this->name";
    }

    function setHP($hp) {
        $this->hp += $hp;
        if ($this->hp > 100) $this->hp = 100;
    }

    function getHP() {
        return $this->hp;
    }

    function getName() {
        return $this->name;
    }

    function getMother() {
        return $this->mother;
    }

    function getFather() {
        return $this->father;
    }
    function getBaba(){
        return $this->baba;
    }

    function getDeda() {
        return $this->deda;
    }

    function getInfo() {
        return "<h3>A few words about myself: </h3> <br>" . "My name is: " . $this->name . "<br> my lastname is: " . $this->lastname . "<br> my father is: " . $this->getFather()->getName() . "<br>My mother is: " . $this->getMother()->getName()."<br>My mothers baba name is: ".$this->getMother()->getBaba()->getName()."<br>My mothers deda name is: ".$this->getMother()->getDeda()->getName(). "<br>My fathers baba name is: ".$this->getFather()->getBaba()->getName()."<br>My fathers deda name is: ".$this->getFather()->getDeda()->getName();
    }
}

$igor = new Person('Igor', 'Bakal', 85);

$baba1 = new Person('Tanya', 'Ivanova', 78);
$deda1 = new Person('Gira', 'Ivanov', 75);
$alex = new Person('Alex', 'Ivanova', 33, null, null, $baba1, $deda1);
$baba2 = new Person('Maria', 'Sidorova', 86);
$deda2 = new Person('Goga', 'Sidorov', 88);
$olga = new Person('Olga', 'Ivanova', 33, null, $igor, $baba2, $deda2);
$valera = new Person('Valera', 'Ivanov', 15, $olga, $alex);
//echo $valera->getMother()->getName();
//echo $valera->getMother()->getFather()->getName();

echo $valera->getInfo();
//echo $alex->sayHi($igor->name) . "<br>";
//$medkit = 50;
//$alex->setHP(-30);
//$alex->setHP($medkit);
//
//
//echo "<br>";
//echo $alex->getHP();
