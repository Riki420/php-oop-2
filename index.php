
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


    //getFullDetail
    public function getFullDetail()
    {
        return $this->lastname . ' ' . $this->firstname . ' ' .  $this->email;
    }
}


//Creo una classe utente premiumù
class UserPremium extends User
{
    private $userPoint = 50;
    //getUserPoint
    public function getUserPoint()
    {
        return $this->userPoint;
    }
}

//Istanza user
$user = new User();
$user->firstname = 'Marshall';
$user->lastname = 'Reader';
$user->email = 'marshder@gmail.com';

//Istanza user premium
$userPremium = new UserPremium();
$userPremium->firstname = 'Frank';
$userPremium->lastname = 'Amadeus';
$userPremium->email = 'frankdeus@gmail.com';

//Creo classe Product
class Product
{
    public $productName;
    public $price;
    public $specs;

    //getProductDetail
    public function getProductDetail()
    {
        return $this->productName . ' ' . $this->price . ' ' . $this->specs;
    }
}

//Istanza Product
$speaker = new Product();
$speaker->productName = 'Marshall Bluetooth Speaker';
$speaker->price = 19.90;
$speaker->specs = 'Bluetooth Speaker';


//echo per stampare in pagina ogni cosa
echo '<h2>Informazioni Utenti</h2>';
echo 'Utente non Premium: <br>' .  $user->getFullDetail();
echo '<br>Utente Premium: <br>' . $userPremium->getFullDetail() . ' ' . $userPremium->getUserPoint();
echo '<h2>Informazioni Prodotti</h2>';
echo $speaker->getProductDetail();
