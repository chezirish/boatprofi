$(function() {

    var headerNav = document.getElementById("header-nav");
    
    function fixTopBar(){
        if (Foundation.MediaQuery.is('small only')) {
            headerNav.classList.remove("top-bar-left");
            headerNav.classList.add("top-bar-right");
        } else {
            headerNav.classList.add("top-bar-left");
            headerNav.classList.remove("top-bar-right");
        }
    }

    fixTopBar();

    $(window).on('changed.zf.mediaquery', function(event, newSize, oldSize) {
        fixTopBar();
    });


    var closeBtn = document.querySelector('.section-form .close-button');   
    var secFrom = document.getElementsByClassName('section-form')[0];

    closeBtn.addEventListener('click', function(){
        secFrom.style.visibility = 'hidden';
    });



    $('img[src$=".svg"]').each(function() {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Remove any invalid XML tags
            $svg = $svg.removeAttr('xmlns:a');

            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function() {
                $svg.attr(this.name, this.value);
            });

            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml');
    });



    $('.project-slider').slick({
        slidesToShow: 4,
        arrows: false,
        dots: true,
        slidesToScroll: 4,
        // centerMode: true,
        customPaging: function(slider, i) {
            return '<div class="my-slick-dot"></div>';
        },
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                // centerMode: true,
                slidesToScroll: 2,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                // centerMode: true,                
                slidesToScroll: 1
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

    $('.reviews-slider').slick({
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1
        // speed: 500,
        // fade: true,
        // cssEase: 'linear'
    });

   var sliderLeftArrow = document.getElementsByClassName('arrow-up-left')[0];
   var sliderRightArrow = document.getElementsByClassName('arrow-up-right')[0];

   sliderLeftArrow.addEventListener('click', function(){
        $('.reviews-slider').slick('slickPrev');
   });
   sliderRightArrow.addEventListener('click',function(){
        $('.reviews-slider').slick('slickNext');
   });

   



});