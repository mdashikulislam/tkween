<?php
function pp($data) {
    echo '<pre style="padding:10px;">';
    print_r($data);
    echo '</pre>';
    exit();
}