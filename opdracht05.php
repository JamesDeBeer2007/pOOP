<?php
class Product
{
    public $name;
    public $price;
    public $category;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = strtolower($name);
        $this->description = $description;
    }

    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }

    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
}

$game1 = new Product("Fifa 2024", "A popular football simulation game.");
$game1->price = 40;
$game1->setCategory("Sports");

$game2 = new Product("Call of Poop", "A first-person shooter game.");
$game2->price = 10;
$game2->setCategory("FPS");

echo "Naam: " . $game2->name . "<br>";
echo "Categorie: " . $game2->category . "<br>";
echo "Beschrijving: " . $game2->description . "<br>";
echo "Prijs zonder BTW: " . $game2->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $game2->showSalesPrice() . "<br>";

var_dump($game2);
?>
