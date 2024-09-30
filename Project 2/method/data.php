<?php

require_once('menu.php');
require_once('store.php');

$drink1 = new Menu('Aren Latte', 18000, '../image/aren latte.png', 'A Sip of Sweet Tradition.', 'A delightful blend of rich coffee and natural aren palm sugar, offering a unique caramel-like sweetness that’s rooted in tradition. Perfect for those seeking a taste of nostalgia in every cup.');
$drink2 = new Menu('Caffe Latte',20000,'../image/cafe latte.png' , 'Classic Comfort in Every Sip.', 'A timeless combination of smooth espresso and velvety steamed milk, creating a perfectly balanced cup that brings warmth and comfort with every sip.');
$drink3 = new Menu('Caramel Latte',24000,'../image/caramel latte.png', 'Sweetly Indulgent, Smoothly Perfect.', 'Rich espresso meets creamy milk, topped with the sweetness of caramel sauce for a perfectly indulgent treat that’s both smooth and satisfying.');
$drink4 = new Menu('Americano',15000,'../image/americano.png', 'Bold Simplicity in Every Drop.', 'Pure, bold espresso infused with hot water, delivering a smooth and robust flavor for those who appreciate the simple elegance of strong coffee.');
$drink5 = new Menu('Cappucino',22000,'../image/cappucino.png', 'A Perfect Foam Symphony.', 'A harmonious blend of espresso, steamed milk, and rich foam. The perfect balance of strong coffee flavor and velvety milk, finished with a delicate froth on top.');
$drink6 = new Menu('Butterscotch',25000,'../image/butterscotch.png', 'Smooth like butter like criminal undercover.', 'Made with a perfect combination of freshly grinded arabica coffee beans, full cream milk, and exquisite butterscotch sauce. Perfect for those who crave little bit of sweet things in their life.');

$drinks = array($drink1, $drink2, $drink3, $drink4, $drink5, $drink6);

$loc1 = new Store('Block 71','Ariobimo Sentral, South Jakarta, RT.9/RW.4, East Kuningan, Setiabudi, Jakarta, 12950');
$loc2 = new Store('Woodland Park Residence','Jl. Raya Kalibata No.22, RW.7, Rawajati, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12750');
$loc3 = new Store('IKEA Alam Sutra','Alam Sutera, Jl. Jalur Sutera Boulevard No. 45, Kunciran, Kec. Pinang, Kota Tangerang, Banten 15320');

$locations = array($loc1, $loc2, $loc3)

?>