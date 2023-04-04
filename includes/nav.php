<?php

?>
</head>
<body>
    <header class="top-header">
        <a href="./" class="brand-details">
            <i class="fa fa-brush"></i>
            <h1 class="brand-name">Mary Saloon</h1>
        </a>
        <nav class="nav-bar">
            <ul class="nav-wrap">
                <li><a href="./" class="nav-link">Home</a></li>
                <li><a href="./dishes" class="nav-link">hairstyles</a>
                    <ul class="nav-dropdown">
                        <li><a href="#dishes" class="nav-link">Local</a></li>
                        <li><a href="#dishes" class="nav-link">Foreign</a></li>
                        <li><a href="#dishes" class="nav-link">Intercontinental</a></li>
                    </ul>
                </li>
                <li><a href="./order" class="nav-link">Order</a></li>
            </ul>
         </nav>
         <div class="top-extra">
            <a href="./user" class="nav-link"><i class="fa fa-user"></i></a>
            <a href="#dishes" class="nav-link"><i class="fa fa-search"></i></a>
            <a href="./cart" class="nav-link"><i class="fa fa-shopping-bag" ></i></a>
        <?php
            if(isset($_SESSION['user_id'])) echo '<a href="./logout" class="nav-link"><i class="fa fa-sign-out" ></i></a>';
        ?>
            <span class="nav-toggle"><i class="fa fa-bars"></i></span>
        </div>
    </header>