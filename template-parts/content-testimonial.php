<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/29/2017
 * Time: 9:58 PM
 */

?>
<?php if ( get_theme_mod('alaa_enable_testimonails') != '' ) {  ?>

<div class="alaa-testimonial al-section">
    <?php if ( get_theme_mod('alaa_testimonails_title') != '' ) {  ?>
        <header class="text-center container">
            <h2 class="testi-header entry-title section-title"><?php echo get_theme_mod('alaa_testimonails_title')  ?></h2>
            <p class="text-center"><?php echo get_theme_mod('alaa_testimonails_subtitle')  ?></p>
        </header>
    <?php  } ?>

    <div class="slider row text-center">
    <?php
    for( $i = 1; $i < 8; $i++ ){

        $image = get_theme_mod('alaa_testimonail_image'.$i);
    $name = get_theme_mod('alaa_testimonail_name'.$i) ;
    $designation = get_theme_mod('alaa_testimonail_designation'.$i) ;
    $quote = get_theme_mod('alaa_testimonail_quote'.$i) ;



        if ($image || $name) {

            ?>


            <div class="item text-center">
                <div class="testi-image "><img class="text-center" src="<?php echo esc_url($image) ?>"></div>
                <h4 class="testi-name"> <?php echo $name ?></h4>
                <h5 class="testi-design"> <?php echo $designation ?> </h5>
                <p class="testicuption">
                <blockquote><span><i class="fa fa-quote-left" aria-hidden="true"></i></span><?php echo $quote ?><span><i
                                class="fa fa-quote-right" aria-hidden="true"></i>
</span></blockquote>
                </p>
            </div>

        <?php }
    }
     ?>


    </div>

</div>


<?php  } ?>
