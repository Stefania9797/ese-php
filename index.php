<?php 
// getters and setters
class Car
{
    public $make;
    public $model;
    public $price;

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice(int $price)
    {
        //l'attributo price è uguale a quello passato dall'utente
        $this->price = $price;
    }
}
$tesla = new Car();
$tesla->make = "Tesla";
$tesla->model = "X";
$tesla->setPrice(5000);



$alfa = new Car();
$alfa->make = "Alfa";
$alfa->model = "Giulietta";
$alfa->price = 2000;

//class constructior
class Product {
    public $name;
    public $desc;
    public $price;
    public $instock;

    function __construct(string $name, string $desc, float $price, bool $instock = false) 
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->instock = $instock;

    }
};
$laptop = new Product("Asus","lorem ipsum",500,);
var_dump($laptop);
?>