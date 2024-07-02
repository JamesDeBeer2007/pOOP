<?php
class Product
{
    public $name;
    public $price;
    public $category;

    public function setName($name)
    {
        $this->name = strtolower($name);
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

$game1 = new Product();
$game1->setName("Fifa 2024");
$game1->price = 40;
$game1->setCategory("Sports");

$game2 = new Product();
$game2->setName("Call of Poop");
$game2->price = 10;
$game2->setCategory("Action");

echo "Naam: " . $game2->name . "<br>";
echo "Categorie: " . $game2->category . "<br>";
echo "Prijs zonder BTW: " . $game2->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $game2->showSalesPrice() . "<br>";

var_dump($game2);
?>
