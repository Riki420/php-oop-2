
<?php
// Creo le classi necessarie per creare uno shop online
//Strutturare le classi gestendo l'ereditarietà dove necessario; 
//ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi


//Creo una classe utente
class User
{
    public $firstname;
    public $lastname;
    public $email;
}


//Creo una classe utente premiumù
class UserPremium extends User
{
    public $point = 50;
}

//Istanza user
$user = new User();

//Istanza user premium
$userPremium = new UserPremium();

var_dump($user, $userPremium);

//Creo classe Product
class Product
{
    public $productName;
    public $price;
    public $specs;
}

//Istanza Product
$product = new Product();

var_dump($product);
