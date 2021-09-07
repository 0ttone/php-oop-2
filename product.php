<?php

class Product {

      //public $id;
      public $name;
      public $category;
      public $description;
      public $price;
      //public $packaging; usa come esterna (boolean)

      

}
//class Product definisce tutte le cartatteristiche del prodotto

//copiare diretttamente nell file e-shop  TODO ---riveder uso di public private 
Class TechProduct extends Product {

      public function __construct(string $name, string $description, int $price)
      {
            $this->category = "Tech-Product";
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            

      }

}
//copiare diretttamente nell file e-shop  TODO ---riveder uso di public private 
Class BeautyProduct extends Product {

      public function __construct(string $name, string $description, int $price)
      {
            $this->category = "Beauty-Product";
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;

      }
    
}

$martello = new Product();




?>


