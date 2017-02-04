<?php
$a = array (1, 2, array ("a", "b", "c"));

function d($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
}

d($a);

?>
