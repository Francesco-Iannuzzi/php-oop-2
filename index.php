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

class Computer{

    public function __construct(public string $name, public string $monitor, public string $hardDisk, public string $cpu,) {
        $this->name = $name;
        $this->monitor = $monitor;
        $this->hardDisk = $hardDisk;
        $this->cpu = $cpu;

    }

}

class Desktop extends Computer{
    public function __construct($name, $monitor, $hardDisk, $cpu, public string $case, public string $keyboard, public string $mouse,) {
        parent::__construct($name, $monitor, $hardDisk, $cpu);
        $this->case = $case;
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;

    }
    
}

class Laptop extends Computer{
    public function __construct($name, $monitor, $hardDisk, $cpu, public string $battery) {
        parent::__construct($name, $monitor, $hardDisk, $cpu);
        $this->battery = $battery;

    }

}

$imac = new Desktop('IMac 24', 'Display Retina 24" 4.5k', 'hardisk IMac 24', '8-core', 'no case', 'Magic Keyboard con Touch ID', 'Magic Mouse');
$macbook = new Laptop('MacBook Air(M2)', 'Display Liquid Retina 13.6" 4k', 'hardisk MacBook Air ', '8-core', 'Batteria ai polimeri di litio da 52,6 wattora');

array_push($desktops, $imac);
array_push($laptops, $macbook);

foreach ($desktops as $desktop) {
    
};

foreach ($laptops as $laptop) {
    
};


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
                    <div class="col">
                        <div class="card desktop" style="width:18rem;">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                class="card-img-top">
                            <div class="card-body">

                                <h5 class="card-title"><?= $desktop->name ?></h5>
                                <!-- /card-title -->

                                <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->monitor ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->hardDisk ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->cpu ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->case ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->keyboard ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $desktop->mouse ?></h6>
                                <!-- /card-subtitle -->

                                <p class="card-text"></p>
                                <!-- /card-text -->

                            </div>
                        </div>
                        <!-- /card desktop -->
                    </div>
                    <!-- /col -->

                    <div class="col">
                        <div class="card laptop" style="width:18rem;">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                class="card-img-top">
                            <div class="card-body">

                                <h5 class="card-title"><?= $laptop->name ?></h5>
                                <!-- /card-title -->

                                <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->monitor ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->hardDisk ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->cpu ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted "><?= $laptop->battery ?></h6>
                                <!-- /card-subtitle -->

                                <p class="card-text"></p>
                                <!-- /card-text -->

                            </div>
                        </div>
                        <!-- /card laptop -->
                    </div>
                    <!-- /col -->

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