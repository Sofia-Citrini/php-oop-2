<?php 

require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/Food.php";
require_once "./Models/Kennel.php";
require_once "./Models/Toy.php";
include "./data.php";

$products = [
    new Kennel (
        "Cuccia Cortina",
        "Pet Boutique",
        new Category ("dog"),
        "É realizzato in cotone soft touch e alcantara. Questo modello presenta il cuscino double face che la rendono maggiormente versatile",
        79.50
    ),
    new Kennel(
        "Trasportino No stress",
        "Pet around you",
        new Category ("cat"),
        "Questo trasportino si apre comodamente dall'alto e la chiusura è resa ancora più agevole grazie a 2 grandi clip.",
        25.90
    ),
    new Food (
        "All Breeds Adult",
        "Monge",
        new Category ("dog"),
        "Alimento secco completo e bilanciato per cani adulti di tutte le razze che necessitano di alimenti ad alta digeribilità.",
        19.99,
        2.5,
        "Agnello, riso e patate"
    ),
    new Food(
        "Kitten",
        "Royal Canin",
        new Category ("cat"),
        "Alimento secco per gatti ideale per accompagnare il tuo gattino nella prime fasi di vita. La crescita, infatti, è una fase essenziale nella vita del tuo gatto",
        81.70,
        10,
        "Tacchino" 
    ),
    new Toy (
        "Kong",
        "KONG",
        new Category ("dog"),
        "Salta e rimbalza in modo del tutto imprevedibile. Una sfida irresistibile per l'istinto di gioco e di caccia di ogni cane",
        21.30,
        9,
        "100% plastica"
    ),
    new Toy (
        "Tiragraffi",
        "Trixie",
        new Category ("cat"),
        "Graffiatoio ad albero composto da ben 4 ripiani",
        142.45,
        "23",
        "fodera in peluche e tronchetti rivetiti in juta",
    )
];

// var_dump($prodotti);


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-oop-2</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
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
                        <div class="card bg-light" style="height: 26rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getName() ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->getBrand() ?></h6>
                                <p class="card-text"><?php echo $product->getDescription() ?></p>

                                <div class="py-3 <?php echo (method_exists($product, "getIngredient") ? 'd-block' : 'd-none') ?>">
                                    <h6 class="mb-0">Inredienti:</h6>
                                    <?php echo (method_exists($product, "getIngredient") ? $product->getIngredient() : '') ?>
                                </div>

                                <div class="py-3 <?php echo (method_exists($product, "getQty") ? 'd-block' : 'd-none') ?>">
                                    <h6 class="mb-0">Quantità:</h6>
                                    <?php echo (method_exists($product, "getQty") ? $product->getQty() : '') ?>
                                </div>

                                <div class="py-3 <?php echo (method_exists($product, "getMaterial") ? 'd-block' : 'd-none') ?>">
                                    <h6 class="mb-0">Quantità:</h6>
                                    <?php echo (method_exists($product, "getMaterial") ? $product->getMaterial() : '') ?>
                                </div>

                                <div class="bg-danger d-inline-block rounded-pill p-2 px-4">
                                    <h6 class="m-0 text-white"><?php echo $product->getPrice() ?></h6> 
                                </div>
                            </div>
                        </div>
                    </div>  
                <?php } ?>    
            </div>
        </div>
    </main> 
</body>
</html>