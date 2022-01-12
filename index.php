<?php

require 'functions/functions.php';

require 'views/layouts/head.view.php';


// Content
if (isset($_GET['page'])) {

   require 'controler/' . $_GET['page'] . '.php';

    products($_GET['page']);
}

require 'views/landingpage.view.php';

require 'views/header.view.php';

require 'views/shoppingCart.view.php';

require 'views/items.view.php';

require 'views/footer.view.php';



require 'views/layouts/bottom.view.php';