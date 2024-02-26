<?php 
//*animale
class Animal
{
    public $icon;
    public $category;

    public function __construct($category){
        $this->category = $category;
        $this->setIcon($category);
    }
    
    public function setIcon($category) {
        if($category == 'dog') {
            $this->icon = '<i style="color: brown"; class="fa-solid fa-dog"></i>';
        } else if ($category == 'cat') {
            $this->icon = '<i style="color: #cc7b39"; class="fa-solid fa-cat"></i>';
        } else if ($category == 'bird') {
            $this->icon = '<i style="color: #3b76d4"; class="fa-solid fa-kiwi-bird"></i>';
        } else if ($category == 'fish') {
            $this->icon = '<i style="color: red"; class="fa-solid fa-fish-fins"></i>';
        } else {
            $this->icon = 'animale sconosciuto';
        }
    }

}

//*classi animali
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

//*prodotti
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

    public function getTitle() {
        if (strlen($this->title) > 25) {
            $this->title = substr($this->title, 0, 25) . '...';
        }
        return $this->title;
    }

}

//*tipi di animali
$dog = new Dog('dog');
$cat = new Cat('cat');
$bird = new Bird('bird');
$fish = new Fish('fish');

//*istanze di prodotti

$prodotto1 = new Product($dog, 'Royal Canin Mini Adult', 25, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
$prodotto2 = new Product($dog, 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 15, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
$prodotto3 = new Product($cat, 'Almo Nature Cat Daily Lattina', 18, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$prodotto4 = new Product($fish, 'Mangime per Pesci Guppy in Fiocchi', 10, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg' );
$prodotto5 = new Product($bird, 'Voliera Wilma in Legno', 180, 'accessorio', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$prodotto6 = new Product($fish, 'Cartucce Filtranti per Filtro EasyCrystal', 45, 'accessorio', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');
$prodotto7 = new Product($cat, 'Kong Classic', 4, 'gioco', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
$prodotto8 = new Product($cat, 'Topini di peluche Trixie', 7, 'gioco', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');

$products = [$prodotto1, $prodotto2, $prodotto3, $prodotto4, $prodotto5, $prodotto6, $prodotto7, $prodotto8];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
    <!-- stile -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product): ?>
                <div class="card">
                    <div class="content">
                        <h3 class="title"><?= $product->getTitle() ?></h3>
                        <figure>
                            <img class="product-img" src="<?= $product->image?>" alt="<?= $product->title ?>">
                        </figure>
                        <p class="product-for">Prodotto per: <?= $product->animal->icon ?></p>
                        <p class="price"> Prezzo: <?= $product->getPrice() ?></p>
                        <p class="product-type">Tipo di articolo: <?= $product->getType() ?></p>
                    </div>
                </div>
            <?php endforeach ?>
            
        </div>
    </div>
</body>
</html>