<?php

use App\Helpers\Utils;
?>

<div class="divMenu">
    <ul class="nav nav-tabs d-flex align-items-center">
        <li class="nav-item">
            <a class="<?= Utils::getActiveClass('home') ?>"
                href="/home.php">Facturas</a>
        </li>
    </ul>
</div>
<div class="view-content">
    <!-- View content here -->