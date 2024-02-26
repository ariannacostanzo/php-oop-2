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
            $this->icon = $category;
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