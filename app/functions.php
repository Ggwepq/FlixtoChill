<?php

// Use this to debug stuff Dump and Die
function dd($value = null)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

?>
