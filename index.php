<?php

    include("inc/header.php");
    include("inc/animals.php");
    include("inc/functions.php");
?>

<div class="main">
    <h2 class="main-subheading">Have a look at some of our pets up for adoption today</h2>
    <div class="main-animals">
        <ul class="animals">
            <?php
            foreach($animals as $id => $animal){
                echo get_item_html($id, $animal);
            }
            ?>
        </ul>
    </div>
</div>

<?php  include("inc/footer.php");?>
   