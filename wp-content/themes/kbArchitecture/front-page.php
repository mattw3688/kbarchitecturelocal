<?php

$image = get_field('top_image');
$picture = $image['sizes']['large-header'];
$topOverlay = get_field('top_overlay_text');


?>

<div class="page-wrapper home-page">
    <?php get_header();  ?>
    <div class="container-fluid top-image justify-content-center">

        <img class="img-fluid" src="<?php echo $picture?>" alt=""  >

        <div class="container image-overlay justify-content-center text-center">

            <?php if (have_rows('top_overlay_text')):
                while (have_rows('top_overlay_text')): the_row();
                    $heading = get_sub_field('heading');
                    $subHeading = get_sub_field('sub_heading'); ?>

                    <h1><?php echo $heading ?></h1>
                    <h2><?php echo $subHeading ?></h2>

                <?php endwhile;
            endif;

            ?>

        </div>

        <div class="section page-content">

            <?php if (have_rows('page_content')):
                while (have_rows('page_content')): the_row();

                    if (get_row_layout() == 'text_block_with_title'):

                        get_template_part('template-parts/modules/module','textwithtitle');

                    elseif (get_row_layout() == 'text_and_image_section'):

                        get_template_part('template-parts/modules/module','textwithtitle');

                    endif;


                endwhile;
            endif;



            ?>






        </div>

    </div>








    <?php get_footer(); ?>

</div>
