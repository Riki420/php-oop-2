
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
    protected $premiumMember;
    private $userPoint = 50;

    //Constructor
    public function __construct($firstname, $lastname, $email, $premiumMember)
    {
        $this->premiumMember = $premiumMember;
        parent::__construct($firstname, $lastname, $email);
    }



    //getUserPoint
    public function getUserPoint()
    {
        return $this->userPoint;
    }
}

//Istanza user
$user = new User('Manuel', 'Santi', 'maueisanti@gmail.com');

//Istanza user premium
$userPremium = new UserPremium('Joe', 'Brahimi', 'amvediquello@gmail.com', true);

//Creo classe Product
class Product
{
    public $productName;
    public $price;
    public $specs;
    private $points;

    //getProductDetail
    public function getProductDetail()
    {
        return $this->productName . ' - ' . $this->price . '€ - ' . $this->specs . ' ' . $this->points;
    }
}

//Istanza Product
$speaker = new Product();
$speaker->productName = 'Marshall Bluetooth Speaker';
$speaker->price = 19.90;
$speaker->specs = 'Bluetooth Speaker';
$speaker->point = 20;


//Echo per stampare in pagina ogni cosa
echo '<h2>Informazioni Utenti</h2>';
echo 'Utente non Premium: <br>' .  $user->getFullDetail();
echo '<br>Utente Premium: <br>' . $userPremium->getFullDetail() . ' - Punti: ' . $userPremium->getUserPoint();

//Echo prodotto 
echo '<h2>Prodotto Non Premium</h2>';
echo $speaker->getProductDetail();

//Echo prodotto premium
echo '<h2>Prodotto Premium</h2>';
echo $speaker->getProductDetail();
