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

    public function getProduct()
    {
        return [
            'name' => $this->name,
            'price' => $this->formatPrice(),
            'category' => $this->category,
            'description' => $this->description,
            'sales_price' => $this->showSalesPrice()
        ];
    }
}

$game1 = new Product("Fifa 2024", "A popular football simulation game.");
$game1->price = 40;
$game1->setCategory("Sports");

$game2 = new Product("Call of Poop", "A first-person shooter game.");
$game2->price = 10;
$game2->setCategory("FPS");

$productDetails = $game2->getProduct();

echo "Product Details:<br>";
echo "Naam: " . $productDetails['name'] . "<br>";
echo "Categorie: " . $productDetails['category'] . "<br>";
echo "Beschrijving: " . $productDetails['description'] . "<br>";
echo "Prijs zonder BTW: " . $productDetails['price'] . "<br>";
echo "Prijs inclusief BTW: " . $productDetails['sales_price'] . "<br>";

var_dump($game2);
?>
