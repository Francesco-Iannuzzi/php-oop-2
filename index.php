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

        <div class="container py-5">
            <div class="row">
                <?php foreach ($computers as $computer) : ?>
                <div class="col d-flex justify-content-center">
                    <div class="card border-0 desktop mb-4" style="width:18rem;">
                        <img src="<?= $computer->image ?>" class="card-img-top">
                        <div class="card-body">

                            <div>
                                <h5 class="card-title"><?= $computer->name ?></h5>
                            </div>
                            <!-- /card-title -->

                            <ul class="list-unstyled">
                                <li class="mb-2 text-muted "><?= $computer->monitor ?></li>
                                <li class="mb-2 text-muted "><?= $computer->hardDisk ?></li>
                                <li class="mb-2 text-muted "><?= $computer->cpu ?></li>
                                <?php if ($computer->getType() == 'Desktop') : ?>
                                <li class="mb-2 text-muted "><?= $computer->case ?></li>
                                <li class="mb-2 text-muted "><?= $computer->keyboard ?></li>
                                <li class="mb-2 text-muted "><?= $computer->mouse ?></li>
                                <?php elseif ($computer->getType() == 'Laptop'): ?>
                                <li class="mb-2 text-muted "><?= $computer->battery ?></li>
                                <?php endif; ?>
                            </ul>
                            <!-- /card-subtitle -->

                            <span
                                class="badge <?= $computer->getType() == 'Desktop' ? 'text-bg-primary' : 'text-bg-danger'; ?> p-2"><?= $computer->getType() ?></span>
                            <!-- /info type badge -->

                        </div>
                    </div>
                    <!-- /card desktop -->
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