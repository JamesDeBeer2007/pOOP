<?php
class Product
{
    public $name;
    public $price;
    public $category;
    public $description;
    public $rating;

    public function __construct($name, $description, $category = "dranken", $rating = 3)
    {
        $this->name = strtolower($name);
        $this->description = $description;
        $this->category = strtoupper($category);
        $this->rating = $rating;
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

$game1 = new Product(name: "Fifa 2024", description: "A popular football simulation game.", category: "Sports");
$game1->price = 40;

$game2 = new Product(name: "Call of Poop", description: "A first-person shooter game.");
$game2->price = 10;

$game3 = new Product(name: "Minecraft", description: "A sandbox game about creativity and survival.");
$game3->price = 30;
$game3->rating = 5;

echo "Naam: " . $game2->name . "<br>";
echo "Categorie: " . $game2->category . "<br>";
echo "Beschrijving: " . $game2->description . "<br>";
echo "Prijs zonder BTW: " . $game2->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $game2->showSalesPrice() . "<br>";
echo "Rating: " . $game2->rating . "<br>";

var_dump($game2);
?>
