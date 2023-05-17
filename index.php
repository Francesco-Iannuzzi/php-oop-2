<?php 

/*

Immaginiamo le classi per modellizzare un personal computer.
- Un computer desktop é un computer.
- Un computer portatile é un computer.

Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.

Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.

Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.

BONUS:
- pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
- aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari).

*/

echo "<pre>";

$desktops = [];
$laptops = [];

require __DIR__ . '/Models/Computer.php';
require __DIR__ . '/Models/Desktop.php';
require __DIR__ . '/Models/Laptop.php';

$imac = new Desktop('IMac 24', 'Display Retina 24" 4.5k', 'hardisk IMac 24', '8-core', 'desktop', 'no case', 'Magic Keyboard con Touch ID', 'Magic Mouse');
$macPro = new Desktop('Mac PRO', 'no monitor', 'hardisk MAC PRO', '28-core', 'desktop', 'Mac Pro Case', 'Magic Keyboard con Touch ID (argento e nero)', 'Magic Mouse (argento e nero)');
$macbookAir = new Laptop('MacBook Air(M2)', 'Display Liquid Retina 13.6" 4k', 'hardisk MacBook Air ', '8-core', 'laptop', 'Batteria ai polimeri di litio da 52,6 wattora');
$macbookPro = new Laptop('MacBook PRO', 'Display Liquid Retina XDR 14.2" 4k', 'hardisk MacBook PRO ', '10-core', 'laptop', 'Batteria ai polimeri di litio da 70 wattora');


array_push($desktops, $imac, $macPro);
array_push($laptops, $macbookAir, $macbookPro);


echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap Style -->
    <title>PHP OOP 2</title>
</head>

<body>



    <header></header>
    <!-- /header -->

    <main>
        <section>

            <div class="container">
                <div class="row">
                    <?php foreach ($desktops as $desktop) : ?>
                    <div class="col d-flex justify-content-center">
                        <div class="card desktop" style="width:18rem;">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                class="card-img-top">
                            <div class="card-body">

                                <div>
                                    <h5 class="card-title"><?= $desktop->name ?></h5>
                                </div>
                                <!-- /card-title -->

                                <div>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->monitor ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->hardDisk ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->cpu ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->case ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->keyboard ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->mouse ?></h6>
                                </div>
                                <!-- /card-subtitle -->


                                <div>
                                    <p class="card-text"></p>
                                </div>
                                <!-- /card-text -->

                                <span class="badge text-bg-primary"><?= $desktop->type ?></span>
                                <!-- /info type badge -->

                            </div>
                        </div>
                        <!-- /card desktop -->
                    </div>
                    <!-- /col -->
                    <?php endforeach; ?>

                    <?php foreach ($laptops as $laptop) : ?>
                    <div class="col d-flex justify-content-center">
                        <div class="card laptop" style="width:18rem;">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                class="card-img-top">
                            <div class="card-body">

                                <div>
                                    <h5 class="card-title"><?= $laptop->name ?></h5>
                                </div>
                                <!-- /card-title -->

                                <div>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->monitor ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->hardDisk ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->cpu ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->battery ?></h6>
                                </div>
                                <!-- /card-subtitle -->

                                <div>
                                    <p class="card-text"></p>
                                </div>
                                <!-- /card-text -->

                                <span class="badge text-bg-primary"><?= $laptop->type ?></span>
                                <!-- /info type badge -->

                            </div>
                        </div>
                        <!-- /card laptop -->
                    </div>
                    <!-- /col -->
                    <?php endforeach; ?>

                </div>
            </div>

        </section>
        <!-- /section -->
    </main>
    <!-- /main -->

    <footer></footer>
    <!-- /footer -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- /Bootstrap script -->
</body>

</html>