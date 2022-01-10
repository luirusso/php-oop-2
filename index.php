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

     public function __construct($first_name, $last_name, $age, $discount = 'nessuno sconto disponibile.')
     {
         $this->first_name = $first_name;
         $this->last_name = $last_name;
         $this->age = $age;
         $this->discount = $discount;
     }

     public function getUserInfo() {
         return $this->first_name . ' ' . $this->last_name;
     }

     public function getDiscount() {

        return $this->discount;
    }
 }

 class PremiumUser extends User {
     protected $discount;

     public function setDiscount() {
         $this->discount = "è disponibile uno sconto Premium del " . 15 . "%.";
     }

     public function getDiscount() {
         $this->setDiscount();

         return $this->discount;
     }
 }

 class Merch {
     public $name;
     public $price;
     public $availability;

     public function __construct($name, $price, $availability)
     {  
         $this->name = $name;
         $this->price = $price;
         $this->availability = $availability;
     }

     public function getMerchInfo() {
        return $this->name . ' ' . $this->price . '€,' . ' ' . $this->availability;
    }
 }

 class Book extends Merch {
     public $subject;

     public function __construct($name, $price, $availability, $subject)
     {
         parent::__construct($name, $price, $availability);

         $this->subject = $subject;
     }

     public function getSubject() {
         return $this->subject;
     }

     public function getBookInfo() {
        return $this->name . ' ' . $this->subject . ' ' . $this->price . '€,' . ' ' . $this->availability;
    }
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
        <section>
            <?php 
                $user1 = new User('Luigi', 'Russo', 26);
            ?>

            <h3><?php echo 'Utente: ' . $user1->getUserInfo() . '<br>' . 'Sconto: ' . $user1->getDiscount() ?></h3>

            <?php 
                $user2 = new PremiumUser('Mario', 'Rossi', 47);
            ?>

            <h3><?php echo 'Utente: ' . $user2->getUserInfo() . '<br>' . 'Sconto: ' . $user2->getDiscount() ?></h3>
        </section>
        <section>
            <?php 
                $book1 = new Book('Cooking for Dummies,', '35', 'disponibile', 'libro di cucina,');

                $book2 = new Book('Gardening for Dummies,', '56', 'non disponibile', 'libro di giardinaggio,');
            ?>

            <h2>Oggetti disponibili:</h2>
            <ul>
                <li>
                    <?php echo $book1->getBookInfo() ?>
                </li>
                <li>
                    <?php echo $book2->getBookInfo() ?>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>