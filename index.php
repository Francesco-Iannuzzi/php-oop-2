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
    public $case;
    public $keyboard;
    public $mouse;
}

class Laptop extends Computer{
    public $battery;

}

//$imac = new Desktop();
//$macbook = new Laptop();

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







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- /Bootstrap script -->
</body>

</html>