<?php 

//importo le classi
require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/Food.php";
require_once "./Models/Kennel.php";
require_once "./Models/Toy.php";
include "./data.php";

$cat = new Category ("cat", 'fa-cat');
$dog = new Category ("dog", 'fa-dog');
// var_dump($cat, $dog);

$products = [
    $cuccia = new Kennel (
        "Cuccia Cortina",
        "Pet Boutique",
        $dog,
        79.50,
        "É realizzato in cotone soft touch e alcantara. Questo modello presenta il cuscino double face che la rendono maggiormente versatile",
    ),
    $trasportino = new Kennel(
        "Trasportino No stress",
        "Pet around you",
        $cat,
        25.90,
        "Questo trasportino si apre comodamente dall'alto e la chiusura è resa ancora più agevole grazie a 2 grandi clip.",
    ),
    $croccantini = new Food (
        "All Breeds Adult",
        "Monge",
        $dog,
        19.99,
        "Alimento secco completo e bilanciato per cani adulti di tutte le razze che necessitano di alimenti ad alta digeribilità.",
        2.5,
        ['Agnello', 'Riso', 'Patate']
    ),
    $mangime = new Food(
        "Kitten",
        "Royal Canin",
        $cat,
        81.70,
        "Alimento secco per gatti ideale per accompagnare il tuo gattino nella prime fasi di vita. La crescita, infatti, è una fase essenziale nella vita del tuo gatto",
        10,
        ['Pollo', 'Tacchino']
    ),
    $kong = new Toy (
        "Kong",
        "KONG",
        $dog,
        21.30,
        "Salta e rimbalza in modo del tutto imprevedibile. Una sfida irresistibile per l'istinto di gioco e di caccia di ogni cane",
        9,
        ['100% Plastica']
    ),
    $tiragraffi = new Toy (
        "Tiragraffi",
        "Trixie",
        $cat,
        142.45,
        "Graffiatoio ad albero composto da ben 4 ripiani",
        "23",
        ['Fodera in peluche', 'Tronchetti rivestiti in juta']
    )
];

var_dump($products);
// var_dump($cat->getIconHTML());

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-oop-2</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <header>
        <div class="container py-5">
            <h1 class="text-center">PET SHOP</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($products as $product) { ?> 
                    <div class="col-4 mb-3">
                        <?php $product->printCard($product) ?>
                    </div>  
                <?php } ?>    
            </div>
        </div>
    </main> 
</body>
</html>