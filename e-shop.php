


<?php 
// ----------------------------------------------


/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...

1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto)
*/ 

class EShop {

    public $name;
    public $address;
    public $mail;
    public $products = [];
    public $customers = [];
    public $premiumCustomers = [];

    public function __construct(string $name, string $address, string $mail)
    {
          $this->name = $name;
          $this->address = $address;
          $this->mail = $mail;
    }

    public function addProduct(Product $nameProduct)
    {
          $this->products[] = $nameProduct;
    }

    //public function removeProduct(Product $nameProduct)
    //{
    //      $this->products[] = $nameProduct;
    //} ---TODO RIVEDERE ANIMALS MATTINA

    public function getProducts()
    {
          return $this->products;
    }



}



// ---------------------------------------------

class Product {

      public $nameProduct;
      public $category;
      public $description;
      public $price;


}

Class TechProduct extends Product {

}

Class BeautyProduct extends Product {
    
}

// ---------------------------------------------

class User {

    public $sconto = 0;

}

class PremiumUser {

    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.
    public $sconto = 50;


}

// ----------------------------------------------


/*
1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto)
*/ 