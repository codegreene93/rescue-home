<?php

function get_item_html($id, $animal){
    $output =  "<li><a href='#'><img src='"
                . $animal["img"] . "' alt='" 
                .$animal["name"] . "'/>" 
                . "<p> View Details </p>"
                . "</a></li>"; 
        return $output;
};


function array_category($animals,$category) {
        if ($category === null) {
            return array_keys($animals);
        }
        $output = array();
        
        foreach ($animals as $id => $item) {
            if (strtolower($category) == strtolower($item["animalType"])) {
                $output[] = $id;            
            }
        }
        
        return $output;
    }