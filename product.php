<?php

class Product {

      public $id;
      public $name;
      public $category;
      public $description;
      public $price;
      public $packaging;

      

}
//class Product definisce tutte le cartatteristiche del prodotto


Class TechProduct extends Product {

      public function __construct(string $name, string $description, int $price, )
      {
            $this->category = "Tech-Product";
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            

      }

}

Class BeautyProduct extends Product {

      public function __construct(string $name, string $description, int $price, )
      {
            $this->category = "Beauty-Product";
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;

      }
    
}

$martello = new Product();

var_dump($martello);


?>


