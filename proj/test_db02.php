<?php

require __DIR__. '/partials/init.php';

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 10");

while($r = $stmt->fetch()){
    echo "<p>{$r['sid']}: {$r['name']}</p>";
}
