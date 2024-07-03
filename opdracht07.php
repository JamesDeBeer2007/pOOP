<?php
class Product
{
    public function __construct(
        public string $name,
        public float $price = 0.0,
        public string $category = "dranken",
        public string $description = "",
        public int $rating = 3
    ) {
        $this->name = strtolower($name);
        $this->category = strtoupper($category);
    }

    public function formatPrice(): string
    {
        return number_format($this->price, 2);
    }

    public function showSalesPrice(): string
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
}

$game1 = new Product(
    name: "Fifa 2024",
    price: 40,
    category: "Sports",
    description: "A popular football simulation game."
);

$game2 = new Product(
    name: "Call of Poop",
    price: 10,
    description: "A first-person shooter game."
);

$game3 = new Product(
    name: "Minecraft",
    price: 30,
    description: "A sandbox game about creativity and survival.",
    rating: 5
);

echo "Naam: " . $game2->name . "<br>";
echo "Categorie: " . $game2->category . "<br>";
echo "Beschrijving: " . $game2->description . "<br>";
echo "Prijs zonder BTW: " . $game2->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $game2->showSalesPrice() . "<br>";
echo "Rating: " . $game2->rating . "<br>";

var_dump($game2);
?>
