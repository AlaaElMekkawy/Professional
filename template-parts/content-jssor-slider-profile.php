<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/30/2017
 * Time: 2:26 PM
 */
?>


<style>
    /* jssor slider bullet navigator skin 05 css */
    /*
    .jssorb05 div           (normal)
    .jssorb05 div:hover     (normal mouseover)
    .jssorb05 .av           (active)
    .jssorb05 .av:hover     (active mouseover)
    .jssorb05 .dn           (mousedown)
    */
    .jssorb05 {
        position: absolute;
    }
    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        position: absolute;
        /* size of bullet elment */
        width: 16px;
        height: 16px;
        background: url('<?php echo get_template_directory_uri() .'/images/b05.png' ?>') no-repeat;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb05 div { background-position: -7px -7px; }
    .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
    .jssorb05 .av { background-position: -67px -7px; }
    .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

    /* jssor slider arrow navigator skin 22 css */
    /*
    .jssora22l                  (normal)
    .jssora22r                  (normal)
    .jssora22l:hover            (normal mouseover)
    .jssora22r:hover            (normal mouseover)
    .jssora22l.jssora22ldn      (mousedown)
    .jssora22r.jssora22rdn      (mousedown)
    .jssora22l.jssora22lds      (disabled)
    .jssora22r.jssora22rds      (disabled)
    */
    .jssora22l, .jssora22r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 40px;
        height: 58px;
        cursor: pointer;
        background: url('<?php echo get_template_directory_uri() .'/images/a22.png' ?>') center center no-repeat;
        overflow: hidden;
    }
    .jssora22l { background-position: -10px -31px; }
    .jssora22r { background-position: -70px -31px; }
    .jssora22l:hover { background-position: -130px -31px; }
    .jssora22r:hover { background-position: -190px -31px; }
    .jssora22l.jssora22ldn { background-position: -250px -31px; }
    .jssora22r.jssora22rdn { background-position: -310px -31px; }
    .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
    .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
</style>


<div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:500px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri() .'/images/loading.gif' ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:500px;overflow:hidden;">


        <!--start slider 1 -->
        <div data-b="0">
            <img data-u="image" src="<?php echo get_template_directory_uri() .'/images/present/5.png' ?>"  />


            <div data-u="caption" data-t="34" style="position:absolute;top:90px;left:200px;width:500px;height:50px;z-index:0;font-size:30px; color:#eee;font-weight:100;line-height:50px; text-align:left; font-family:  'Great Vibes', cursive, sans-serif; letter-spacing: 3px;"><i style="font-size: 20px;" class="fa fa-quote-left" aria-hidden="true"></i>
                Hi I'm Alaa Elmekkawy <i style="font-size: 20px;" class="fa fa-quote-right" aria-hidden="true"></i>
            </div>

            <h1 data-u="caption" data-t="0" style="position:absolute;top:150px;left:400px;width:400px;height:50px;z-index:0;font-size:30px; color:#eee;font-weight:700;line-height:50px; text-align:center;text-transform:uppercase; font-family: Ubuntu, sans-serif; letter-spacing: 3px;">front-end developer</h1>


            <div data-u="caption" data-t="1" style="position:absolute;top:210px;left:500px;width:200px;height:50px;z-index:0;font-size:22px; color:#eee;font-weight:400;line-height:50px; text-align:center;text-transform:uppercase; font-family: Ubuntu, sans-serif; letter-spacing: 2px;">web design</div>

            <div data-u="caption" data-t="2" style="position:absolute;top:210px;left:460px;width:280px;height:50px;z-index:0;font-size:22px; color:#eee;font-weight:400;line-height:50px; text-align:center;text-transform:uppercase; font-family: Ubuntu, sans-serif; letter-spacing: 1px;">web development</div>

            <div data-u="caption" data-t="3" style="position:absolute;top:550px;left:300px;width:600px;height:50px;z-index:0;font-size:20px; color:#eee;font-weight:400;line-height:50px; text-align:center;text-transform:capitalize; font-family: Ubuntu, sans-serif; letter-spacing: 1px;">Working as a freelancer</div>

   <div data-u="caption" data-t="4" style="position:absolute;top:550px;left:600px;width:600px;height:50px;z-index:0;font-size:25px; color:#eee;font-weight:100;line-height:50px; text-align:left; font-family:  'Great Vibes', cursive, sans-serif; letter-spacing: 3px;"><i style="font-size: 16px;" class="fa fa-quote-left" aria-hidden="true"></i>
      I love what i'm doing  and doing what I love <i style="font-size: 16px;" class="fa fa-quote-right" aria-hidden="true"></i> </div>



        </div>



        <!--start slider 2 -->

       <div data-b="1" data-p="170.00">
            <img data-u="image" src="<?php echo get_template_directory_uri() .'/images/present/02.jpg' ?>" />


            <div data-u="caption" data-t="5" data-3d="1" style="position:absolute;top:225px;left:480px;width:150px;height:50px;z-index:0;">

                <img data-u="caption" data-t="6" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/html.png' ?>" />

                <div data-u="caption" data-t="7" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">HTML5</div>
            </div>


           <div data-u="caption" data-t="8" data-3d="1" style="position:absolute;top:225px;left:480px;width:150px;height:50px;z-index:0;">
                <img data-u="caption" data-t="9" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/CSS.png' ?>" />

                <div data-u="caption" data-t="10" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">CSS3</div>
            </div>



           <div data-u="caption" data-t="11" data-3d="1" style="position:absolute;top:225px;left:480px;width:150px;height:50px;z-index:0;">
                <img data-u="caption" data-t="12" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/sass.png' ?>" />

                <div data-u="caption" data-t="13" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">SASS</div>
            </div>

           <div data-u="caption" data-t="14" data-3d="1" style="position:absolute;top:225px;left:480px;width:150px;height:50px;z-index:0;">
                <img data-u="caption" data-t="15" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/jquery.png' ?>" />

                <div data-u="caption" data-t="16" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">Jquery</div>
            </div>


     <div data-u="caption" data-t="17" data-3d="1" style="position:absolute;top:225px;left:450px;width:150px;height:50px;z-index:0;">
                <img data-u="caption" data-t="18" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/js.png' ?>" />

                <div data-u="caption" data-t="19" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">JavaScript</div>
            </div>

     <div data-u="caption" data-t="20" data-3d="1" style="position:absolute;top:225px;left:450px;width:150px;height:50px;z-index:0;">
                <img data-u="caption" data-t="21" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/wordpress.png' ?>" />

                <div data-u="caption" data-t="22" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">WordPress</div>
            </div>

 <div data-u="caption" data-t="23" data-3d="1" style="position:absolute;top:225px;left:450px;width:150px;height:50px;z-index:0;">
                <img data-u="caption" data-t="24" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/php.png' ?>" />

                <div data-u="caption" data-t="25" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">PHP</div>
            </div>

<div data-u="caption" data-t="26" data-3d="1" style="position:absolute;top:225px;left:450px;width:150px;height:50px;z-index:0;">
                <img data-u="caption" data-t="27" data-to="50% 50%" style="position:absolute;top:-103px;left:50px;width:256px;height:256px;z-index:0;" src="<?php echo get_template_directory_uri() .'/images/present/04/git.png' ?>" />

                <div data-u="caption" data-t="28" style="position:absolute;top:0px;left:2px;width:150px;height:50px;z-index:0;font-size:25px;color:#333;line-height:50px;text-align:left;">GIT</div>
            </div>




                <div data-u="caption" data-t="29" style="position:absolute;top:100px;left:450px;width:300px;height:50px;z-index:0;font-size:18px;color:#333;line-height:20px;text-align:center;">Give your site a beauty touch and make it search optimization</div>

                <div data-u="caption" data-t="30" style="position:absolute;top:170px;left:450px;width:300px;height:50px;z-index:0;font-size:30px;color:#333;line-height:50px;text-align:center;">Responsive</div>

                <div data-u="caption" data-t="31" style="position:absolute;top:220px;left:450px;width:300px;height:50px;z-index:0;font-size:30px;color:#333;line-height:50px;text-align:center;">Creative</div>

                <div data-u="caption" data-t="32" style="position:absolute;top:270px;left:450px;width:300px;height:50px;z-index:0;font-size:30px;color:#333;line-height:50px;text-align:center;">Unique</div>

                <div data-u="caption" data-t="33" style="position:absolute;top:320px;left:450px;width:300px;height:50px;z-index:0;font-size:30px;color:#333;line-height:50px;text-align:center;">SEO</div>


        </div>


    </div>


    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
        <div data-u="prototype" style="width:16px;height:16px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <!--<span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>-->
</div>