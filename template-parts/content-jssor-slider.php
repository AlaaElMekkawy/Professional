<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 3/30/2017
 * Time: 2:26 PM
 */
?>


<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;">

    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url(<?php echo get_template_directory_uri().'/images/slideshow/loading.gif'?>) no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>


    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden; background:url(<?php echo get_template_directory_uri() . '/images/slideshow/03.jpg' ?> ) no-repeat;background-size: cover ">

        <div data-b="0">
            <div style="position:absolute;top:100px;left:0px;width:100%;height:150px;z-index:0;">
                <img data-u="caption" data-t="0" style="position:absolute;top:0px;left:-100%;width:100%;height:150px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/1-021.png' ?>" />

                <div data-u="caption" data-t="1" style="position:absolute;top:-20px;left:-300px;width:290px;height:75px;z-index:0; font-size: 40px;color:#333; text-transform: uppercase; font-weight: 700; text-align: center ; margin-bottom: 0; line-height: 30px;">summer 2017 <br><span style="font-size: 25px;color:#eee; margin-right: -100px; text-align: right"><cite>collection</cite></span></div>
            </div>

            <img data-u="caption" data-t="3" style="position:absolute;top:280px;right:-300px;width:250px;height:230px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/1-051.png'?>" />

            <a href="http://www.alaaelmekkawy.com" data-u="caption" data-t="4" style="display:block; position:absolute;bottom:-70px;left:650px;width:200px;height:60px;z-index:0;">
                <div class="btn" style="width:100%;height:100%; border:1px solid #aaa; text-align: center; color:#ccc; font-size:16px;line-height:40px;"  >New Collection</div>
            </a>

            <img data-u="caption" data-t="2" style="position:absolute;bottom:-300px;left:200px;width:260px;height:280px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/2-2.png'?>" />
        </div>


     <div data-b="1">
           <!-- <img data-u="image" data-src2="<?php /*echo get_template_directory_uri() . '/images/slideshow/03.jpg' */?>" />-->
            <div  data-u="caption" style="position:absolute;top:100px;left:0px;width:100%;height:150px;z-index:0;">
                <img data-u="caption" data-t="5" style="position:absolute;top:0px;right:-100%;width:100%;height:150px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/1-021.png' ?>" />
                <div data-u="caption" data-t="6" style="position:absolute;top:25px;left:600px;width:290px;height:75px;z-index:0; font-size: 60px;color:#333; text-transform: uppercase; font-weight: 700; text-align: center ; line-height: 30px;"><span style="font-size: 25px;color:#eee; margin-left: -130px; text-align: left;margin-bottom:5px;display: inline-block"><cite>big</cite></span> <br>sale</div>


            </div>

            <img data-u="caption" data-t="8" style="position:absolute;top:50px;right:-300px;width:250px;height:230px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/tshirt.png'?>" />

            <img data-u="caption" data-t="10" style="position:absolute;top:350px;right:-300px;width:250px;height:230px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/watch1.png'?>" />

            <a href="http://www.alaaelmekkawy.com" data-u="caption" data-t="11" style="display:block; position:absolute;bottom:-70px;left:650px;width:200px;height:60px;z-index:0;">
                <div class="btn" data-u="caption"  style="width:100%;height:100%; border:1px solid #aaa; text-align: center; color:#ccc; font-size:16px;line-height:40px;"  >See Our Sales</div>
            </a>
            <img data-u="caption" data-t="7" style="position:absolute;top:50px;left:-300px;width:220px;height:240px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/dress.png'?>" >
         <img data-u="caption" data-t="9" style="position:absolute;top:350px;left:-300px;width:220px;height:240px;z-index:0;" data-src2="<?php echo get_template_directory_uri() .'/images/slideshow/1-051.png'?>" />
        </div>







        <a data-u="any" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;" data-autocenter="1">
        <div data-u="prototype" style="width:15px;height:15px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
</div>

