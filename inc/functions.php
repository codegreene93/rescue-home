<?php

function get_item_html($id, $animal){
    $output = "<li><a href='animals.php?id="
                .$animal."'><img src='"
                . $animal["img"] . "' alt='" 
                .$animal["name"] . "'/>" 
                . "<p> View Details </p>"
                . "</a></li>";
        return $output;
}

?>