<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/29/2017
 * Time: 9:58 PM
 */

?>
<?php if ( get_theme_mod('alaa_enable_projects') != '' ) {  ?>

    <div class="alaa-projects al-section">
    <div class="container">
        <?php if ( get_theme_mod('alaa_projects_title') != '' ) {  ?>
            <header class="text-center">
                <h2 class="testi-header entry-title section-title"><?php echo get_theme_mod('alaa_projects_title')  ?></h2>
                <p class="text-center"><?php echo get_theme_mod('alaa_projects_subtitle')  ?></p>
            </header>
        <?php  } ?>

        <div class="projects row text-center">

            <?php
            for( $i = 1; $i < 8; $i++ ){

                $image = get_theme_mod('alaa_project_image'.$i);
                $name = get_theme_mod('alaa_project_name'.$i) ;



                if ($image || $name) {

                    ?>


                    <div class="col-sm-6 text-center ">
                    <div class="project ">
                        <h4 class="project-name"> <?php echo $name ?></h4>
                        <a href="<?php echo esc_url($image) ?>" data-fancybox data-caption="<?php echo $name ?>"><div class="project-image "  data-width="2048" data-height="1365"><img  class="text-center" src="<?php echo esc_url($image) ?>"></div></a>

                    </div>
                    </div>

                <?php }
            }
            ?>

        </div>
        </div>

    </div>


<?php  } ?>
