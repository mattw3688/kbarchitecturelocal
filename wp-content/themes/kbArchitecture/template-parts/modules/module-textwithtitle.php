<?php
$title = get_sub_field('title');
$text = get_sub_field('text_block');
$colour = get_sub_field('background_colour');

?>

<div class="text-with-title__module" style="background-color: <?php echo $colour ?>">
    <div class="row">
        <div class="container">
            
            <h1><?php echo $title ?></h1> <br/>
            <hr color="black" width="30%"> <br/>

        </div>



        <div class="container">

            <h3><?php echo $text ?></h3>

        </div>



    </div>






</div>
