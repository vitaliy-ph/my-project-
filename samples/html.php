<?php

if (1 > 0) {
    echo '<h1>test</h1>';
}


?>

<ul>
    <li>testik 1</li>
    <li>testik 2</li>
    <li>testik 3</li>
    <?php if (isset($_GET['p1']) && $_GET['p1'] % 2 === 0) : ?>
    <li>TEST 5</li>
    <?php endif; ?>
</ul>




