<!-- Descrizione
Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi. -->

<?php
/**
 * Parent class
 */

 class User {
     protected $first_name;
     protected $last_name;
     protected $age;
     protected $discount;

     public function __construct($first_name, $last_name, $age)
     {
         $this->first_name = $first_name;
         $this->last_name = $last_name;
         $this->age = $age;
     }

     public function getUserInfo() {
         return $this->first_name . ' ' . $this->last_name;
     }
 }

 class PremiumUser extends User {
     protected $discount;

     public function setDiscount() {
         return $this->discount = 15 . "{%}";
     }
 }

 class Merch {
     public $price;
     public $availability;
 }

 class Book extends Merch {
     public $subject;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <main>
        
    </main>
</body>
</html>