<!--<div class="row justify-content-center" style="background-color: #292929;">-->
<!---->
<!--    <div class="container top-banner col-2 justify-content-center text-center" style="padding: 0; background-color: #292929; border-radius: 15px">-->
<!--        -->
<!--        <div class="container logo-container" style="padding-top: 5vh; max-width: 50%">-->
<!---->
<!--            <img src="../../../wp-content/themes/kbArchitecture/assets/images/calibriwhite.svg" alt="">-->
<!--            -->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<nav class="navbar navbar-expand-lg navbar-dark  sticky-top" style="background-color: #5893cd;">
    <div class="container-fluid align-items-baseline">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="../../../wp-content/themes/kbArchitecture/assets/images/calibriwhite.svg" alt="Kevin Bezant Architecture"></a>

            <?php
            wp_nav_menu( array(
                'theme_location'    => 'top-menu',
                'depth'             => 1,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'top-menu',
                'menu_class'        => 'nav navbar-nav navbar-center',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </div>
</nav>



<?php ?>
<!--</div>-->