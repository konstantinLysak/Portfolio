document.onscroll = my_func;
    function my_func() {
        var sc = jQuery(document).scrollTop();
         if(sc > 1500){
            jQuery("#up").slideDown(1000);
        }else{
            jQuery("#up").slideUp(500);
        }
    }

    function up () {
        var root = jQuery(document);
        var sc = root.scrollTop();
        sc -= 25;
        root.scrollTop(sc);
        if (sc > 0){
            setTimeout(up, 1)
        }
    }

$(document).ready(function(){
    $("#menu_block").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 750);
    });
});

$(document).ready(function ($) {
    $('.cool').hover(function () {
        $("#smile").animate({"margin-left": "265px"}, 300)
    },
        function () {
            $("#smile").animate({"margin-left": "700"}, 300)
        }
    );
});

$(document).ready(function ($) {
    $('.cool').hover(function () {
        $(".cool_text").animate({"margin-left": "500px"}, 300)
    },
        function () {
            $(".cool_text").animate({"margin-left": "0"}, 300)
        }
    );
});

$(document).ready(function ($) {
    $(".photo, .dip").hover(
                function (event) {
                    $(this).css({
                        "-webkit-filter":"none",
                        "filter":"none",
                        "transform":"scale(1.5, 1.5)"
                    })},
                    function (event) {
                        $(this).css({
                            "-webkit-filter": "grayscale(100%)",
                            "filter": "grayscale(100%)",
                            "transform":"scale(1, 1)"
                        })
                });
            });

$(document).ready(function ($) {
    $(".form").hover(
        function (event) {
            $(this).css({
                "color":"white",
                "cursor":"pointer",
                "-webkit-filter":"drop-shadow(0 0 20px grey)",
                "filter":"drop-shadow(0 0 20px grey)"
            })
        },
        function (event) {
            $(this).css({
                "color":"black",
                "cursor":"none",
                "-webkit-filter":"drop-shadow(0 0 0 grey)",
                "filter":"drop-shadow(0 0 0 grey)"
            });
            $("#form").css({
                "display":"none"
            })
        });
    $('.form').click(
        function (event) {
            $("#form").css({
                "color":"black",
                "display":"block"
            })
        }
    )
});

