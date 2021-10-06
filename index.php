
<?php
// Creo le classi necessarie per creare uno shop online
//Strutturare le classi gestendo l'ereditarietà dove necessario; 
//ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi


//creo una classe utente
class User
{
    public $firstname;
    public $lastname;
    public $email;
}


//creo una classe utente premiumù
class UserPremium extends User
{
    public $point = 50;
}

//istanza user
$user = new User();

//istanza user premium
$userPremium = new UserPremium();







var_dump($user, $userPremium);
