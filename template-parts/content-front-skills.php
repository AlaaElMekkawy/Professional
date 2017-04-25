<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/26/2017
 * Time: 5:01 PM
 */


?>
<?php $alaa_theme_options = alaa_options(); ?>

<?php if ( $alaa_theme_options['enable_skills'] != '' ) {  ?>


    <?php $title = $alaa_theme_options['skills_title'] ;
     $subtitle = $alaa_theme_options['skills_subtitle'];
     ;




     ?>


<div class="alaa-skills al-section">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 ">
                <h2 class="entry-title section-title"><?php echo $title;?></h2>
                <p class="skills-info "><?php echo $subtitle;?></p>
            </div>


            <div class="col-sm-6 skills">
                <?php for( $i = 1; $i < 8; $i++ ){
                    $skillname = get_theme_mod('alaa_skill_name'.$i, '') ;
                    $progress = get_theme_mod('alaa_skill_progress'.$i, '') ; ?>
                    <?php if($skillname != ''){ ?>
                <p class="skill-name"><?php echo $skillname;?></p>
                <div class="progress " >
            <div class="progress-bar" data-percent="<?php echo absint($progress);?>"  role="progressbar" aria-valuenow="<?php echo $progress;?>"   aria-valuemin="0" aria-valuemax="100" >
    <span class="prog"> <?php if($progress != ''){ echo $progress. '%'; }?></span>
            </div>
        </div>

     <?php   }?>
     <?php   }?>
        </div>
        </div>
    </div>
</div>

  <?php  } ?>