<?php
class Product
{
    public $name;
    public $price;

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
$game1->name = "Fifa 2023";
$game1->price = 40;

$game2 = new Product();
$game2->name = "Call of Poop";
$game2->price = 10;

echo "Naam: " . $game2->name . "<br>";
echo "Prijs zonder BTW: " . $game2->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $game2->showSalesPrice() . "<br>";

var_dump($game2);
?>
