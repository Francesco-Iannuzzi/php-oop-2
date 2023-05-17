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

require __DIR__ . '/Models/Computer.php';
require __DIR__ . '/Models/Desktop.php';
require __DIR__ . '/Models/Laptop.php';
require __DIR__ . '/Database/db.php';
require __DIR__ . '/Views/Layout/head.php';
require __DIR__ . '/Views/Partials/header.php';

?>

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

<?php 

require __DIR__ . '/Views/Layout/footer.php';

?>