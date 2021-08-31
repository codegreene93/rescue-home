<?php
$pageName = "View all";
$section = "All";

include("inc/animals.php");
include("inc/functions.php");



if(isset($_GET["animal"])){
    if($_GET["animal"] == "dog"){
        $pageName = "Dogs";
        $section = "dog";
    } else if($_GET["animal"] == "cat"){
        $pageName = "Cats";
        $section = "cat";
    } else if($_GET["animal"] == "all"){
        $pageName = "All Animals";
    }
};

include("inc/header.php"); ?>

<h1><?php echo $pageName; ?></h1>

        <?php
          $animalType = array_category($animals, $section);
          foreach($animalType as $animal){
          echo get_item_html($animal , $animals[$animal]);
          }
        ?>
        
<?php
include("inc/footer.php");
?>