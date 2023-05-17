<?php

echo "<pre>";

$desktops = [
    new Desktop('IMac 24', 'Display Retina 24" 4.5k', 'hardisk IMac 24', '8-core', 'desktop', './assets/img/imac_24.png', 'no case', 'Magic Keyboard con Touch ID', 'Magic Mouse'),
    new Desktop('Mac PRO', 'no monitor', 'hardisk MAC PRO', '28-core', 'desktop', './assets/img/mac_pro.png', 'Mac Pro Case', 'Magic Keyboard con Touch ID (argento e nero)', 'Magic Mouse (argento e nero)'),
];

$laptops = [
    new Laptop('MacBook Air(M2)', 'Display Liquid Retina 13.6" 4k', 'hardisk MacBook Air ', '8-core', 'laptop', './assets/img/macbook_air.png', 'Batteria ai polimeri di litio da 52,6 wattora'),
    new Laptop('MacBook PRO', 'Display Liquid Retina XDR 14.2" 4k', 'hardisk MacBook PRO ', '10-core', 'laptop', './assets/img/macbook_pro.png', 'Batteria ai polimeri di litio da 70 wattora'),
];

echo "</pre>";