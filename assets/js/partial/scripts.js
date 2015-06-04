$(document).ready(function(){

    /////////// gallery portfolio hover
    $('.portfolio ul').on('mouseover', function(e) {
        $('.portfolio ul li').css("opacity", "0.3");
        $(this).css("opacity", "1");
    });
    $('.portfolio').on('mouseout', function(e) {
        $('.portfolio ul li').css("opacity", "1");
    });

    /////////// lightbox/popup gallery preview
    $('.venobox').venobox();

    //////////// popup preview
    $(".assets__preview").click(function(event) {
        event.preventDefault();
        var ahref_preview = $(this).attr("href");
        $(ahref_preview).removeClass("popup--hide").addClass("popup--show");
    });    
    //////////// close popup preview
    $(".popup__preview--close").click(function(event) {
        $('.popup--wrapper ,'+ $(this).attr('href')).removeClass("popup--show").addClass("popup--hide");
    });

    //////////// toggle menu responsive
    $('.responsive__wrapper').click(function(){        
        if($(".menu-header-menu-container").hasClass("active__responsive")&&($(".responsive__wrapper").hasClass("box-shadow"))){
            $(".responsive__wrapper").removeClass("box-shadow");
            $(".menu-header-menu-container").removeClass("active__responsive");
        }
        else{
            $(".responsive__wrapper").addClass("box-shadow");
            $(".menu-header-menu-container").addClass("active__responsive");
        }
    });

    //////////// toggle comment
    $('.comment__toggle').click(function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        $(link).fadeToggle();
    });

    //////////// tab ccw
    $(".tablink--ul li:first").addClass("tablink--li--active");
    $(".tablink--ul li a").click(function(event) {
        event.preventDefault();
        $(this).closest('li').addClass("tablink--li--active").siblings().removeClass("tablink--li--active");
        var tab = $(this).attr("href");
        $(".tabcontent").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    ///////////// option themes
    $('.all_options').slideUp();
    $('.input_title h3').click(function(){
    if($(this).parent().next('.all_options').css('display')=='none'){    
        $(this).removeClass('inactive');
        $(this).addClass('active');
        $(this).children('img').removeClass('inactive');
        $(this).children('img').addClass('active');
    }
    else{
        $(this).removeClass('active');
        $(this).addClass('inactive');
        $(this).children('img').removeClass('active');
        $(this).children('img').addClass('inactive');
    }
    $(this).parent().next('.all_options').slideToggle('slow');
    });

    ///////////// map
    function initialize() {
        var myLatlng = new google.maps.LatLng(-6.183137, 106.8249);
        var mapOptions = {
            zoom: 15,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'ARTOTEL'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});
