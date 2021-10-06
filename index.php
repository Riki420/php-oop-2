
<?php
// Creo le classi necessarie per creare uno shop online
//Strutturare le classi gestendo l'ereditarietà dove necessario; 
//ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi


//Creo una classe utente
class User
{
    protected $firstname;
    protected $lastname;
    protected $email;

    //Constructor
    public function __construct($firstname, $lastname, $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    //getFullDetail
    public function getFullDetail()
    {
        return $this->lastname . ' ' . $this->firstname . ' - ' .  $this->email;
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
$user = new User('Manuel', 'Santi', 'maueisanti@gmail.com');

//Istanza user premium
$userPremium = new UserPremium('Joe', 'Brahimi', 'amvediquello@gmail.com');

//Creo classe Product
class Product
{
    public $productName;
    public $price;
    public $specs;

    //getProductDetail
    public function getProductDetail()
    {
        return $this->productName . ' - ' . $this->price . '€ - ' . $this->specs;
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
echo '<br>Utente Premium: <br>' . $userPremium->getFullDetail() . ' - Punti: ' . $userPremium->getUserPoint();
echo '<h2>Informazioni Prodotti</h2>';
echo $speaker->getProductDetail();
