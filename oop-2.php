<?php
//person PARENT CLASS
class Person{
    public $name;
    public $lastname;


    public function __construct($name,$lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    //sia person che user hanno accesso a queste funzioni
    public function walk()
    {
        return "I am Walking";
    }
    public function run()
    {
        return "I am Running";
    }

}
// end person

//user CHILD CLASS
class User extends Person{
    public $nickname;
    public $email;
    public $password;

    public function __construct($name, $lastname, $nickname, $email, $password)
    {
        //estendo il constructor di person anche a user
        //e poi definisco le nuove caratteristiche
        parent::__construct($name, $lastname);

        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
    }
    //Solo user ha accesso a questa funzione
    public function subscribe()
    {
        return "Mi iscrivo alla newsletter";
    }
}
//end user
$domenico = new Person("Domenico","Santo");
$carmen = new User("Carmen","Galan","cargalan","carmen@example.it","123456");



//Polimorfismo e visibilità
class Product{
    public $name;
    protected $desc;
    protected $price;
    protected $qty;
    private $barcode = "1234";

    function __construct($name, $desc, $price, $qty)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->qty = $qty;
    }
    //rendere accessibile la descrizione (protected)
    function description()
    {
        return $this->desc;
    }
    //rendere accessibile il barcode (privato), accessibile solo
    //all'interno della classe
    function getBarCode()
    {
        return $this->barcode;
    }
}
class Car extends Product{
    function __construct($name, $desc, $price, $qty, $engine, $fuel)
    {
        parent::__construct($name, $desc, $price, $qty);
        $this->engine = $engine;
        $this->fuel = $fuel;
    }
    //polimorfismo: sovrascrivo nel child, la funzione description()
    function description()
    {
        return "Car description: ". $this->desc;
    }
}
// Istanza prodotto
$speaker = new Product("Anker", "lorem ipsum dolor", 40.99, 10);
//var_dump($speaker);

//get description (protected)
var_dump($speaker->description()); //non accessibile, accessibile tramite funzione description()

//istanza macchina
$car = new Car("Tesla X","lorem", 30000, 4, 3000, "electric");
//funzione sovrascritta
var_dump($car->description());