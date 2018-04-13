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



    function catalogProducts() {
        var sideBar = document.querySelector('.catalog-products_page-content .grid-x');
        var itemsList = document.querySelector('.catalog-products_page-content .catalog-products_content');

        var singleService = document.querySelector('.single-service-page__right-content');        
        
        
        // if(!sideBar || !itemsList || !singleService){
        //     return;
        // }

        if(sideBar){
            if (Foundation.MediaQuery.atLeast('small')) {
                sideBar.classList.remove("grid-x");
                sideBar.classList.remove("grid-margin-x");
            }
            if (Foundation.MediaQuery.atLeast('large')) {
                sideBar.classList.add("grid-x");
                sideBar.classList.add("grid-margin-x");
            }
        }

        if(itemsList){
            if (Foundation.MediaQuery.atLeast('small')) {
                itemsList.classList.remove("cell");
                itemsList.classList.remove("medium-9");
                itemsList.classList.remove("large-9");
            }
            if (Foundation.MediaQuery.atLeast('large')) {
                itemsList.classList.add("cell");
                itemsList.classList.add("medium-9");
                itemsList.classList.add("large-9");
            }
        }

        if(singleService){
            if (Foundation.MediaQuery.atLeast('small')) {
                singleService.classList.remove("cell");            
                singleService.classList.remove("medium-9");
                singleService.classList.remove("large-9");
            }
            if (Foundation.MediaQuery.atLeast('large')) {
                singleService.classList.add("cell");            
                singleService.classList.add("medium-9");
                singleService.classList.add("large-9");
            }
        }

    }

    catalogProducts();

    $(window).on('changed.zf.mediaquery', function(event, newSize, oldSize) {
        fixTopBar();
        catalogProducts();
    });

    var heart = document.getElementsByClassName('heart-icon');

    if(heart[0]){
        for(var i=0; i<heart.length; i++){
            heart[i].addEventListener('mouseover', function(){
                this.src = this.src.replace("white", "red");
            }.bind(heart[i]));
    
            heart[i].addEventListener('mouseout', function(){
                this.src = this.src.replace("red", "white");
            }.bind(heart[i]));
        }
    }


    
    var previewIconArr = document.getElementsByClassName('single-product-page__preview-icon');

    if(previewIconArr[0]){


        for(var i=0; i<previewIconArr.length; i++) {
            previewIconArr[i].addEventListener('click', function(){
                for(var i=0; i<previewIconArr.length; i++){
                    previewIconArr[i].classList.remove("single-product-page__preview-icon-is-active");
                    this.classList.add("single-product-page__preview-icon-is-active");
                }
            }.bind(previewIconArr[i]));
        }

    }



    var closeBtn = document.querySelector('.section-form .close-button');   
    var secFrom = document.getElementsByClassName('section-form')[0];


    if(closeBtn){
        closeBtn.addEventListener('click', function(){
            secFrom.style.visibility = 'hidden';
        });
    }


    if($('img[src$=".svg"]')){
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
    }





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

    $('.products-slider').slick({
        slidesToShow: 4,
        arrows: false,
        dots: false,
        slidesToScroll: 1,
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

    $('.portfolio-page__projects-slider').slick({
        slidesToShow: 3,
        arrows: false,
        dots: false,
        slidesToScroll: 1,
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


    $(".reviews-slider").on("init", function(event, slick){
        $(".current-slider").text(parseInt(slick.currentSlide + 1));
        $(".total-sliders").text(parseInt(slick.slideCount));
    });

    
    $('.reviews-slider').slick({
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1,
        speed: 500,
        fade: true,
        infinite: true,
        cssEase: 'linear'
    });




    $('.reviews-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(".current-slider").text(parseInt(nextSlide + 1));   
    });


   var sliderLeftArrow = document.getElementsByClassName('arrow-up-left')[0];
   var sliderRightArrow = document.getElementsByClassName('arrow-up-right')[0];


   if(sliderLeftArrow && sliderLeftArrow){
        sliderLeftArrow.addEventListener('click', function(){
                $('.reviews-slider').slick('slickPrev');
        });
        sliderRightArrow.addEventListener('click',function(){
                $('.reviews-slider').slick('slickNext');
        });
   }



   var sliderProductsLeftArrow = document.getElementsByClassName('slider-products-prev')[0];
   var sliderProductsRightArrow = document.getElementsByClassName('slider-products-next')[0];


   if(sliderProductsLeftArrow && sliderProductsRightArrow){
        sliderProductsLeftArrow.addEventListener('click', function(){
                $('.products-slider').slick('slickPrev');
        });
        sliderProductsRightArrow.addEventListener('click',function(){
                $('.products-slider').slick('slickNext');
        });
   }


   var sliderProjectLeftArrow = document.getElementsByClassName('slider-project-prev')[0];
   var sliderProjectRightArrow = document.getElementsByClassName('slider-project-next')[0];


   if(sliderProjectLeftArrow && sliderProjectRightArrow){
        sliderProjectLeftArrow.addEventListener('click', function(){
                $('.portfolio-page__projects-slider').slick('slickPrev');
        });
        sliderProjectRightArrow.addEventListener('click',function(){
                $('.portfolio-page__projects-slider').slick('slickNext');
        });
   }



// custome input file


document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  


   

});