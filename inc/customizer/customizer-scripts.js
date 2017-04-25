jQuery(document).ready(function($) {
    "use strict";

    //FontAwesome Icon Control JS
    $('body').on('click', '.alaa-icon-list li', function(){
        var icon_class = $(this).find('i').attr('class');
        $(this).addClass('icon-active').siblings().removeClass('icon-active');
        $(this).parent('.alaa-icon-list').prev('.alaa-selected-icon').children('i').attr('class','').addClass(icon_class);
        $(this).parent('.alaa-icon-list').next('input').val(icon_class).trigger('change');
    });

    $('body').on('click', '.alaa-selected-icon', function(){
        $(this).next().slideToggle();
    });

   
});
