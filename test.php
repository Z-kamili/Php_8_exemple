<?php 

echo 'Youhou ! PHP 8 est la !';
// compilatrot



//constructor

//Union type 

//Nullsafe Operator

$user = $product->getUser();

$Zip = $user ? $user->getZip() : null;

//php 8
$Zip =  $product->getUser()?->getZip();




//Named arguments

function convertProductPrice(int $price,?float $decimals,?bool $separator,?string $country){


//traitement

}
//php 7 
convertProductPrice(15,null,null,'Maroc');

//PHP 8
convertProductPrice(price:15,country:'Maroc');


//Str_contains

str_contains('Salut les gens','gens');
str_contains('Salut les gens','bonjour');

class Product{


    //constructor
    public function __construct(public int $price,public int $quantity){
        $this->price = $price;
        $this->quantity = $quantity;
    }
    //test 
    public function getPrice(int|float $price): int|float{


        return $price;


    }





}