<?php  

//*prodotti
class Product 
{
    public $animal;
    private $price;
    private $type;
    private $image;
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
    public function getImage() {
        return $this->image;
    }

}