<?php
$pageName = "View all";

include("inc/animals.php");
include("inc/functions.php");



if(isset($_GET["animal"])){
    if($_GET["animal"] == "dog"){
        $pageName = "Dogs";
    } else if($_GET["animal"] == "cat"){
        $pageName = "Cats";
    } else if($_GET["animal"] == "all"){
        $pageName = "All Animals";
    }
};

include("inc/header.php");

include("inc/footer.php");
?>