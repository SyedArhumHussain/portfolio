<?php
require __DIR__ . '/config/config.php';
foreach (['header','navigation'] as $c) include __DIR__."/includes/$c.php";
echo '<main>';
foreach (['hero','about','projects','skills','experience','education','contact'] as $c) include __DIR__."/includes/$c.php";
echo '</main>';
include __DIR__ . '/includes/footer.php';
