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

include("inc/header.php"); ?>

<h1><?php echo $pageName; ?></h1>

    <ul> <?php
        foreach($animals as $animal){
            echo "<li><a href='#'>" 
            . "<img src=" . $animal['img'] . " />" 
            . "<br>" . $animal["name"] 
            . "<br>" 
            . "<p>View my Bio</p>" 
            . "</a></li>";
        }
        ?>
    </ul>

<?php
include("inc/footer.php");
?>