<?php 

class Animal
{
    public $category;

    public function __construct(string $category){
        $this->$category = $category;
    }

}

class Product 
{
    public $animal;
    public $price;
    public $type;
    public $image;

    public function __construct(Animal $animal, int $price, string $type, string $image) {
        $this->animal = $animal;
        $this->price = $price;
        $this->type = $type;
        $this->image = $image;

    }

}


$animale1 = new Animal('Cane');
var_dump($animale1);

$prodotto1 = new Product($animale1, 25, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
var_dump($prodotto1);