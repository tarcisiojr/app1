<?php

function print_in_table($object) {
    echo "<div class='center'>";
    echo "<table class='center'>";
    foreach ($object as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    echo "</div>";
}

print_in_table($_REQUEST);

print_in_table($_ENV);

print_in_table($_SERVER);

phpinfo();