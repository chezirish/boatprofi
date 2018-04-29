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


    $('.arrow-top-up').click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, {
            duration: 1250
        });
    });
    $(window).scroll(function () {
        if ($(document).scrollTop() > 1000) {
            $('.arrow-top-up').fadeIn();
        } else {
            $('.arrow-top-up').fadeOut();
        }
    });



    $('.products-filter p').click(function(){
        $('.products-filter p').css('border', "none");
        $(this).css('border-bottom', '2px solid green');
    });

    $('.add-basket').click(function(){
        $(this).parent().parent().parent().find( $('.sirvices-item-modal-basket') ).css('display', 'block');
        // $(this).replaceWith( "<p class='added-basket'>" + 'Товар в корзине' + "</p>" );
    });


    $('.header-address-city-modal p:first-child').css('color', 'green');

    $('.header-address-city-modal p').click(function(){
        $('.header-address-city-modal p').css('color', 'black');
        $(this).css('color', 'green');
    });


   // single product

    $('.single-service-page__add').mouseenter(function(){

        if($(this).children("img").hasClass('heart')){
            $(this).children('img').attr('src', $(this).children('img').attr('src').replace("white", "red"));
        }
        if( $(this).children('img').hasClass('scheme')){
            $(this).children('img').attr('src', $(this).children('img').attr('src').replace("icon", "hover"));   
        }
        
    });

    $('.single-service-page__add').mouseleave(function(){

        if($(this).children("img").hasClass('heart')){
            $(this).children('img').attr('src', $(this).children('img').attr('src').replace("red", "white"));
        }
        if( $(this).children('img').hasClass('scheme')){
            $(this).children('img').attr('src', $(this).children('img').attr('src').replace("hover", "icon"));   
        }
        
    });


    function catalogProducts() {
        var sideBar = document.querySelector('.catalog-products_page-content .catalog-products_page-grid-container');
        var singleServiceGrid = document.getElementsByClassName('single-service-page__content-grid')[0];
        var itemsList = document.querySelector('.catalog-products_page-content .catalog-products_content');
        var singleService = document.querySelector('.single-service-page__right-content');        
        var catalogView = document.getElementsByClassName('catalog-products_view')[0];

        // if(!sideBar || !itemsList || !singleService){
        //     return;
        // }


        if(singleServiceGrid){
            if (Foundation.MediaQuery.atLeast('small')) {
                singleServiceGrid.classList.remove("grid-x");
                singleServiceGrid.classList.remove("grid-margin-x");
            }
            if (Foundation.MediaQuery.atLeast('large')) {
                singleServiceGrid.classList.add("grid-x");
                singleServiceGrid.classList.add("grid-margin-x");
            }
        }

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
            if (Foundation.MediaQuery.is('small only') || Foundation.MediaQuery.is('medium only')) {
                $('.services-list').removeClass('services-list-gorizontal');
            }
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



    function RemoveSlickDots(){
        if(Foundation.MediaQuery.current === "small"){
            var sliderTotalLength = $('.my-slick-dot').length;
            for(var i=0; i<sliderTotalLength; i++){
                if(i <= 6){
                    continue;
                }
                $('.project-slider').slick('slickRemove', false);
            }
        }
    }

    // RemoveSlickDots();

    $(window).on('changed.zf.mediaquery', function(event, newSize, oldSize) {
        fixTopBar();
        catalogProducts();
        // RemoveSlickDots();
    });

    var heart = document.getElementsByClassName('heart-icon');
    var scheme = document.getElementsByClassName('scheme-icon');

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

    if(scheme[0]){
        for(var i=0; i<scheme.length; i++){
            scheme[i].addEventListener('mouseover', function(){
                this.src = this.src.replace("icon", "hover");
            }.bind(scheme[i]));
    
            scheme[i].addEventListener('mouseout', function(){
                this.src = this.src.replace("hover", "icon");
            }.bind(scheme[i]));
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
            var $img = $(this);
            var imgURL = $img.attr('src');
            var attributes = $img.prop("attributes");

            $.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = $(data).find('svg');

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


    // portfolio 
    $( ".process-content-item .process-text p" ).before( "<div class='portfolio-green-dot'></div>" );
    $( ".process-content-item-last .process-text p" ).before( "<div class='portfolio-green-dot-last'></div>" );
    $( ".portfolio-green-dot" ).after( "<div class='portfolio-gray-dot'></div>" );

    $( ".portfolio-gray-dot" ).after( "<div class='portfolio-gray-dot-below'></div>" );
    $( ".portfolio-gray-dot-below" ).after( "<div class='portfolio-gray-dot-below-second'></div>" );
    $( ".portfolio-gray-dot-below-second" ).after( "<div class='portfolio-gray-dot-below-third'></div>" );
    $( ".portfolio-gray-dot-below-third" ).after( "<div class='portfolio-gray-dot-below-fourth'></div>" );
    $( ".portfolio-gray-dot-below-fourth" ).after( "<div class='portfolio-gray-dot-below-fifth'></div>" );
    $( ".portfolio-gray-dot-below-fifth" ).after( "<div class='portfolio-gray-dot-below-sixth'></div>" );
    $( ".portfolio-gray-dot-below-sixth" ).after( "<div class='portfolio-gray-dot-below-seventh'></div>" );
    
    

    // catalog-products
    // $(this).parent().parent().parent().find( $('.sirvices-item-modal-basket') ).css('display', 'block');
    $('.catalog-products_page-content .catalog-products_content .sirvices-item').mouseenter(function(){
        var sirvicesItemClone = $( this ).clone();
        sirvicesItemClone.appendTo( this );
        sirvicesItemClone.css('display', "block");
        sirvicesItemClone.css('position', "absolute");
        sirvicesItemClone.find( $('.add-basket') ).click(function(){
            sirvicesItemClone.find( $('.sirvices-item-modal-basket') ).css('display', 'block');
        });
        
        sirvicesItemClone.css('border', "none");
        sirvicesItemClone.addClass('sirvices-item-modal-over');
        var sirvicesBtn = '<button type="button" class="button catalog-products_button-modal">Побробнее о товаре</button>';
        $('.sirvices-item-modal-over .sirvices-item-content p:first-child').after(sirvicesBtn);
        $('.sirvices-item-modal-over .sirvices-item-content-gorizontal').append(sirvicesBtn);
        $('.sirvices-item-modal-over .heart-icon').mouseenter(function(){
            this.src = this.src.replace("white", "red");
        });
        $('.sirvices-item-modal-over .heart-icon').mouseleave(function(){
            this.src = this.src.replace("red", "white");
        });

        $('.sirvices-item-modal-over .scheme-icon').mouseenter(function(){
            this.src = this.src.replace("icon", "hover");
        });
        $('.sirvices-item-modal-over .scheme-icon').mouseleave(function(){
            this.src = this.src.replace("hover", "icon");
        });
    });

    $('.sirvices-item').mouseleave(function(){
        $('.sirvices-item-modal-over').remove(); 
    });

    $('.catalog-products_view').click(function(e){

        if(e.target.classList.contains( "menu-squire" )){
            $('.menu-squire').css('background', '#f5470a');
            $('.menu-wrapper .menu-icon-span').css('background', '#dcdcdc');
            $('.services-list').removeClass('services-list-gorizontal');
        } else {
            $('.menu-wrapper .menu-icon-span').css('background', '#f5470a');
            $('.menu-squire').css('background', '#dcdcdc');
            $('.services-list').addClass('services-list-gorizontal');
        }
        
    });


    $('.project-slider').slick({
        slidesToShow: 4,
        arrows: false,
        dots: true,
        slidesToScroll: 4,
        // centerMode: true,
        customPaging: function(slider, i) {
            return '<div id="'+ i +'"class="my-slick-dot"></div>';
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
        // respondTo: 'min',
        // variableWidth: true,
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

    $(".project-slider").on("init", function(event, slick){
        RemoveSlickDots();
    });

    
    $('.reviews-slider').slick({
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1,
        speed: 500
        // fade: true,
        // infinite: true,
        // cssEase: 'linear'
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
      
if(fileInput && button && the_return){


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
}

   

});