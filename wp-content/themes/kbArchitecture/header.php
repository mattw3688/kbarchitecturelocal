<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <script src="//code.jquery.com/jquery-latest.js"></script>

    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<?php get_template_part('template-parts/modules/module', 'header');

