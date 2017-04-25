<?php
/**
 * Displays footer site info
 *
 */

?>


    <div class="row footer-social">

        <?php $alaa_theme_options = alaa_options(); ?>

        <?php if ( $alaa_theme_options['contact_checkbox_footer'] != '' ) { ?>
            <div class="col-sm-7 text-left">
           <?php alaa_contact_icons(); ?>
        </div>
         <?php } else { ?>
        <div class="col-sm-7 text-left">
        <div class="copyright " >Copyright
            <a href="<?php echo esc_url( __( 'https://alaaelmekkawy.com/', 'alaa' ) ); ?>"><?php printf( __( ' &copy; %s', 'alaa' ), 'alaa elmekkawy' ); ?></a>
        </div>
        </div>

        <?php }?>


        <div class="col-sm-5 ">
            <div class="text-right">
        <?php if ($alaa_theme_options ['social_checkbox_footer'] != '' ) { alaa_social_icons(); } ?>
        </div>
        </div>

    </div>

