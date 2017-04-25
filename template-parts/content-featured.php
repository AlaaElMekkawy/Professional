<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/25/2017
 * Time: 9:48 AM
 */


$alaa_page = '';
$alaa_page_array = get_pages();
if(is_array($alaa_page_array)){
    $alaa_page = $alaa_page_array[0]->ID;
}
?>

<section id="al-featured-post-section" class="al-section">
	<div class="container">
			<?php
			$alaa_enable_featured_link = get_theme_mod('alaa_enable_featured_link', true);
            $alaa_featured_page_title =get_theme_mod('alaa_featured_page_title','');
            $alaa_featured_page_subtitle =get_theme_mod('alaa_featured_page_subtitle','');

            if($alaa_featured_page_title){?>
                <header class="row text-center section-header">
                        <h2 class="entry-title section-title"><?php echo $alaa_featured_page_title; ?></h2>

                    <P class="text-center"><?php echo $alaa_featured_page_subtitle; ?></P>
                </header>
            <?php  }?>

            <div class="al-featured-post-wrap al-clear">

		<?php	for( $i = 1; $i < 4; $i++ ){
                $alaa_featured_page_id = get_theme_mod('alaa_featured_page'.$i, '' );
                $alaa_featured_page_icon = get_theme_mod('alaa_featured_page_icon'.$i, 'fa-bell');
                $alaa_featured_title =get_theme_mod('alaa_featured_title'.$i,'');
                $alaa_featured_subtitle =get_theme_mod('alaa_featured_subtitle'.$i,'');



                if( $alaa_featured_title){
                    $args = array( 'page_id' => $alaa_featured_page_id, );

                            ?>
                            <div class="al-featured-post text-center <?php echo 'al-featured-post'.$i; ?>">
                                <div class="al-featured-icon"><i class="fa <?php echo esc_attr( $alaa_featured_page_icon ); ?>"></i></div>
                                <h3><?php echo $alaa_featured_title; ?></h3>
                                <div class="al-featured-excerpt">
                                    <?php echo excerpt_letter( $alaa_featured_subtitle, 160);?>

                                </div>
                                <?php
                                if($alaa_enable_featured_link){
                                    ?>
                                    <a href="<?php echo get_permalink( $alaa_featured_page_id); ?>" class="al-featured-readmore "><i class="fa fa-link "></i></a>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                }
            }
			?>
</div>
</div>
</section>