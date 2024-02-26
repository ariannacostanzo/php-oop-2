<?php 

class Animal
{
    protected $icon;
    public $category;

    public function __construct($category){
        $this->category = $category;
        $this->setIcon($category);
    }
    
    public function setIcon($category) {
        if($category == 'dog') {
            $this->icon = '<i class="fa-solid fa-dog"></i>';
        } else if ($category == 'cat') {
            $this->icon = '<i class="fa-solid fa-cat"></i>';
        } else if ($category == 'bird') {
            $this->icon = '<i class="fa-solid fa-kiwi-bird"></i>';
        } else if ($category == 'fish') {
            $this->icon = '<i class="fa-solid fa-fish-fins"></i>';
        } else {
            $this->icon = 'animale sconosciuto';
        }
    }

}

class Dog extends Animal 
{
    public function __construct($category) {
        parent::__construct($category);
    }
}
class Cat extends Animal 
{
    public function __construct($category) {
        parent::__construct($category);
    }
}
class Bird extends Animal 
{
    public function __construct($category) {
        parent::__construct($category);
    }
}
class Fish extends Animal 
{
    public function __construct($category) {
        parent::__construct($category);
    }
}

class Product 
{
    public $animal;
    private $price;
    public $type;
    public $image;
    public $title;

    public function __construct(Animal $animal, string $title, int $price, string $type, string $image) {
        $this->animal = $animal;
        $this->title = $title;
        $this->price = $price;
        $this->type = $type;
        $this->image = $image;

    }

    public function getPrice() {
        return '€' . $this->price;
    }

    public function getType() {
        return ucfirst($this->type);
    }

}


$dog = new Dog('dog');
$cat = new Cat('cat');
$bird = new Bird('bird');
$fish = new Fish('fish');

$prodotto1 = new Product($dog, 'Royal Canin Mini Adult', 25, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
var_dump($prodotto1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
    <!-- stile -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <p><?= $prodotto1->title ?></p>
                <img class="product-img" src="<?= $prodotto1->image?>" alt="<?= $prodotto1->title ?>">
                <p> Prezzo: <?= $prodotto1->getPrice() ?></p>
                <p>Tipo di articolo: <?= $prodotto1->getType() ?></p>
            </div>
        </div>
    </div>
</body>
</html>