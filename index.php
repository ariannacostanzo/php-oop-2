<?php 

//?animal
require __DIR__ . '/models/animal/animal.php';
//?product
require __DIR__ . '/models/product/product.php';

//*tipi di animali
$dog = new Dog('dog');
$cat = new Cat('cat');
$bird = new Bird('bird');
$fish = new Fish('fish');

//*istanze di prodotti

$prodotto1 = new Product($dog, 'Royal Canin Mini Adult', 25, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
$prodotto2 = new Product($dog, 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 15, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
$prodotto3 = new Product($cat, 'Almo Nature Cat Daily Lattina', 18, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$prodotto4 = new Product($fish, 'Mangime per Pesci Guppy in Fiocchi', 10, 'cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg' );
$prodotto5 = new Product($bird, 'Voliera Wilma in Legno', 180, 'accessorio', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$prodotto6 = new Product($fish, 'Cartucce Filtranti per Filtro EasyCrystal', 45, 'accessorio', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');
$prodotto7 = new Product($dog, 'Kong Classic', 4, 'gioco', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
$prodotto8 = new Product($cat, 'Topini di peluche Trixie', 7, 'gioco', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');
$prodotto9 = new Product($bird, 'Spirale in corda', 11, 'gioco', 'https://shop-cdn-m.mediazs.com/bilder/spirale/in/corda/3/400/36183_PLA_Seilspirale_3_3.jpg');
$prodotto10 = new Product($cat, 'Tiragraffi Casetta di pan di zenzero con scala', 111, 'gioco', 'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/casetta/di/pan/di/zenzero/con/scala/3/400/72124_pla_knusperhaeuschen_beige_fg_9492_3.jpg');
$prodotto11 = new Product($fish, 'Tetra Pond Sticks', 19, 'cibo', 'https://shop-cdn-m.mediazs.com/bilder/tetra/pond/sticks/4/400/23513_pla_tetrapond_teichfischfutter_sticks_15l_hs_01_5_4.jpg');
$prodotto12 = new Product($bird, 'Ponte in legno naturale da appendere', 3, 'accessorio', 'https://shop-cdn-m.mediazs.com/bilder/met/prezzo/ponte/in/legno/naturale/da/appendere/4/400/50550_pla_haengebruecke_aus_naturholz_fg_9143_4.jpg');

//* array dei prodotti
$products = [$prodotto1, $prodotto2, $prodotto3, $prodotto4, $prodotto5, $prodotto6, $prodotto7, $prodotto8, $prodotto9, $prodotto10, $prodotto11, $prodotto12];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <link rel="icon" href="favicon.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
    <!-- stile -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>I nostri prodotti: </h1>
        <div class="row">
            <?php foreach($products as $product): ?>
                <div class="card">
                    <div class="content">
                        <h3 class="title"><?= $product->getTitle() ?></h3>
                        <figure>
                            <img class="product-img" src="<?= $product->getImage()?>" alt="<?= $product->title ?>">
                        </figure>
                        <p class="product-for">Prodotto per: <?= $product->animal->icon ?></p>
                        <p class="price"> Prezzo: <strong><?= $product->getPrice() ?></strong></p>
                        <p class="product-type">Tipo di articolo: <i><?= $product->getType() ?></i></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>