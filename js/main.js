/**
 * Created by Alaa on 2/19/2017.
 */


jQuery(document).ready(function ($) {

// Menu dropdown on hover
    function extendnav() {
        $('#primary-nav .dropdown').hover(function () {
            // Use show(), hide() instead of fade(), fadeOut().
            // Fade causes dropdown to wobble if mouse hover activity is faster..
            // Not a bug cause fade takes time to show() or hide() the element.
            // But show(), hide() does not take time to handle the same event
            $(this).children('.dropdown-menu').stop(true, true).show().addClass('slow fadeIn');
            $(this).toggleClass('open');
        }, function () {
            $(this).children('.dropdown-menu').stop(true, true).hide().removeClass('slow fadeIn');
            $(this).toggleClass('open');
        });
    }

// search form

    $('.menu-header-search a').on('click', function(e) {
        e.preventDefault();
        $('#header-search-wrap').toggleClass('show');
        $('#header-search-wrap').addClass('animated fadeInDown');
        $('#header-search-wrap').find('input[type="search"]').focus();
    });

    $('#header-search-wrap .close').on('click', function(e) {
        e.preventDefault();
        $('#header-search-wrap').removeClass('show');
    });



// prevent direct smap scroll

    $('.contact-map')
        .click(function(){
            $(this).find('iframe').addClass('clicked')})
        .mouseleave(function(){
            $(this).find('iframe').removeClass('clicked')}
        );



/*skills bar animation*/

        $('.progress-bar').appear( function() {
            $(this).each(function() {
                var percent = $(this).data('percent');

                $(this).animate({ "width": percent + '%' },2000);

            });
        });



/*slick slider*/
    $(document).ready(function(){
        $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            responsive: [

                {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]


        });
    });


/*=======================================================
     jssor slider
* =====================================================*/


    jssor_1_slider_init = function() {
        var slider = document.getElementById('jssor_1') ;
        if(slider != null) {
            //Reference http://www.jssor.com/help/layer-animation.html
            var jssor_1_SlideoTransitions = [
                [{b: 0, d: 1200, x: 1200, e: {x: 6}}], //0 dark bar
                [{b: 1200, d: 800, x: 900, y: 60, e: {x: 12, y: 3}}], //1 image inside dark bar
                [{b: 2000, d: 800, y: -430, e: {y: 6}}, {b: 4500, d: 600, x: -600, e: {x: 5}}], //2 dress
                [{b: 2800, d: 700, x: -500, e: {x: 6}}, {b: 4500, d: 600, x: 500, e: {x: 5}}], //3 bag and shose
                [{b: 3500, d: 500, y: -240, e: {y: 6}}, {b: 4500, d: 400, y: 300, e: {y: 5}}], //4  botton

                /*second slide*/
                [{b: 0, d: 1200, x: -1200, e: {x: 6}}, {b: 5500, d: 600, x: 1200, e: {x: 5}}], //5 big sale background
                [{b: -1, d: 1, o: -1, rX: 90}, {b: 700, d: 700, o: 1, rX: -90, e: {o: 32}}, {
                    b: 5500,
                    d: 400,
                    rX: 90,
                    o: -1,
                    e: {o: 5}
                }], //6 big sale
                [{b: 1500, d: 800, x: 460, e: {y: 6}}, {b: 5500, d: 600, x: -500, e: {x: 5}}], //7 dress 2nd slide
                [{b: 2300, d: 800, x: -500, e: {x: 6}}, {b: 5500, d: 600, x: 500, e: {x: 5}}], //8 bag and shose
                [{b: 3100, d: 800, x: 460, e: {y: 6}}, {b: 5500, d: 600, x: -500, e: {x: 5}}], //9 dress 2nd slide
                [{b: 3900, d: 800, x: -500, e: {x: 6}}, {b: 5500, d: 600, x: 500, e: {x: 5}}], //10 bag and shose
                [{b: 4600, d: 500, y: -270, e: {y: 6}}, {b: 5500, d: 400, y: 300, e: {y: 5}}], //11  botton


                /* [{b:0,d:2000,x:-320,y:1200}],
                 [{b:0,d:3000,x:-320,y:1200}],
                 [{b:0,d:4000,x:-320,y:1200}],
                 [{b:20,d:20000,x:1000}],
                 [{b:20,d:1600,x:800}],
                 [{b:0,d:1000,x:-767,e:{x:6}},{b:21000,d:1000,x:-807,e:{x:5}}],
                 [{b:20,d:500,r:-360}],
                 [{b:20,d:500,r:-360}],
                 [{b:-1,d:1,o:-0.35}],
                 [{b:100,d:100,o:-1,e:{o:32}},{b:2300,d:100,o:1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:100,d:100,o:1,e:{o:32}},{b:200,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:200,d:100,o:1,e:{o:32}},{b:300,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:300,d:100,o:1,e:{o:32}},{b:400,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:400,d:100,o:1,e:{o:32}},{b:500,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:500,d:100,o:1,e:{o:32}},{b:600,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:600,d:100,o:1,e:{o:32}},{b:700,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:700,d:100,o:1,e:{o:32}},{b:800,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:800,d:100,o:1,e:{o:32}},{b:900,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:900,d:100,o:1,e:{o:32}},{b:1000,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1000,d:100,o:1,e:{o:32}},{b:1100,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1100,d:100,o:1,e:{o:32}},{b:1200,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1200,d:100,o:1,e:{o:32}},{b:1300,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1300,d:100,o:1,e:{o:32}},{b:1400,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1400,d:100,o:1,e:{o:32}},{b:1500,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1500,d:100,o:1,e:{o:32}},{b:1600,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1600,d:100,o:1,e:{o:32}},{b:1700,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1700,d:100,o:1,e:{o:32}},{b:1800,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1800,d:100,o:1,e:{o:32}},{b:1900,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:1900,d:100,o:1,e:{o:32}},{b:2000,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:2000,d:100,o:1,e:{o:32}},{b:2100,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:2100,d:100,o:1,e:{o:32}},{b:2200,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:2200,d:100,o:1,e:{o:32}},{b:2300,d:100,o:-1,e:{o:32}}],
                 [{b:-1,d:1,o:-1},{b:100,d:600,o:0.2},{b:700,d:4300,o:0.3}]*/
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $LazyLoading: 1,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions,
                    $Breaks: [
                        [{b: 4500, d: 2500}],
                        [{b: 5500, d: 2500}]

                    ]
                    //$Controls: [{r:0},{r:0},{r:0},{r:20},{r:20},{r:20},{r:20},{r:100},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100,e:2400},{r:100}]
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1500);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);

            /*responsive code end*/
        }
    };





    jssor_1_slider_init();




/*scroll Image*/
    $('.project-image').mouseenter(function() {
        var img = $(this).children('img');
        img.animate({bottom: 0 },'slow','swing');

    });

    $('.project-image').mouseleave(function() {
        var img = $(this).children('img');
        var backscroll = $(this).children('img').height()-$(this).height();

        img.animate({bottom: - backscroll }, 'slow', 'swing');

    });


/* fancybox */
    $("[data-fancybox]").fancybox({
        // Options will go here
    });




    // Dom Ready
    extendnav();


    /*=======================================================
     jssor slider Profile
     * =====================================================*/


    jssor_2_slider_init = function() {

        //Reference http://www.jssor.com/development/slider-with-slideshow-no-jquery.html
        //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html
        var jssor_2_SlideshowTransitions = [
            {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
                        {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
            {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
            {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
            {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
            {$Duration:1200,y:-1,$Cols:8,$Rows:4,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
            {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
            {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
            {$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
            {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
            {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        ];

        //Reference http://www.jssor.com/help/layer-animation.html

        var jssor_2_SlideoTransitions = [


            [{b:-1,d:1,c:{t:-400}},{b:200,d:2000,c:{t:400},e:{c:{t:6}}}],
            [{b:-1,d:1,c:{t:-300}},{b:2200,d:1500,c:{t:300},e:{c:{t:6}}},{b:3700,d:1500,c:{t:-300},e:{c:{t:6}}}],
            [{b:-1,d:1,c:{t:-280}},{b:5200,d:1500,c:{t:400},e:{c:{t:6}}}],
            [{b:-1,d:1,o:-1},{b:6700,d:1500,y:-300,o:1,e:{y:27, o:6}}],
            [{b:-1,d:1,o:-1},{b:6700,d:1500,y:-300,o:1,e:{y:27, o:6}}]



        ];

        var jssor_2_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_2_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_2_SlideoTransitions,
                $Breaks: [
                    [{d:2000,b:10000,t:2}],
                    [{d:2000,b:100,t:2}],
                    [{d:2000,b:22700}]
                ]
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var screenwd = $(window).width();
            var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, screenwd);
                jssor_2_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };



    jssor_2_slider_init();

});



