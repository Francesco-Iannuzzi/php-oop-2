<?php

echo "<pre>";

$desktops = [];
$laptops = [];

$imac = new Desktop('IMac 24', 'Display Retina 24" 4.5k', 'hardisk IMac 24', '8-core', 'desktop', 'no case', 'Magic Keyboard con Touch ID', 'Magic Mouse');
$macPro = new Desktop('Mac PRO', 'no monitor', 'hardisk MAC PRO', '28-core', 'desktop', 'Mac Pro Case', 'Magic Keyboard con Touch ID (argento e nero)', 'Magic Mouse (argento e nero)');
$macbookAir = new Laptop('MacBook Air(M2)', 'Display Liquid Retina 13.6" 4k', 'hardisk MacBook Air ', '8-core', 'laptop', 'Batteria ai polimeri di litio da 52,6 wattora');
$macbookPro = new Laptop('MacBook PRO', 'Display Liquid Retina XDR 14.2" 4k', 'hardisk MacBook PRO ', '10-core', 'laptop', 'Batteria ai polimeri di litio da 70 wattora');


array_push($desktops, $imac, $macPro);
array_push($laptops, $macbookAir, $macbookPro);


echo "</pre>";