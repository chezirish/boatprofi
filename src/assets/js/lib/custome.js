// $.noConflict();
jQuery(document).ready(function($) {
    
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

    $('.woocommerce-breadcrumb').addClass('bread-crumbs');


    // .replace("Microsoft", "W3Schools");


    // forms

    // $('.wpcf7-form').on('submit', function(e){
    //     if( !$('.wpcf7-form').find($('.css-checkbox')).prop( "checked" ) ){
    //         e.preventDefault();
    //         alert('Вам нужно согласиться с политикой конфидециальности');
    //         return false;
    //     }
        
    // })


    $('.products-filter p').click(function(){
        $('.products-filter p').css('border', "none");
        $(this).css('border-bottom', '2px solid green');

        var typeOfTag = $(this).attr('class');

        var data = {
			action: 'tag',
			name: typeOfTag
		};

        // jQuery.post( myajax.url, data, function(response) {
		// 	alert('Получено с сервера: ' + response);
		// });
         
       
    });

    $('.add-basket').click(function(){
        $(this).parent().parent().parent().find( $('.sirvices-item-modal-basket') ).css('display', 'block');
        console.log(1)
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

    
    var previewIconArr = document.getElementsByClassName('single-product-page__preview-icon');

    if(previewIconArr[0]){


        for(var i=0; i<previewIconArr.length; i++) {
            previewIconArr[i].addEventListener('click', function(){
                for(var i=0; i<previewIconArr.length; i++){
                    previewIconArr[i].classList.remove("single-product-page__preview-icon-is-active");     
                }
                
                this.classList.add("single-product-page__preview-icon-is-active");
                var srcSet = this.children[0].getAttribute("srcset");    
                document.getElementsByClassName('single-product-page__preview-avatar')[0].children[0].setAttribute("srcset", srcSet);
                // for(var y=0; y<srcArr.length; y++){
                //     if(srcArr[y] === '800w'){
                //         // console.log(srcArr[y - 1])
                //          = srcArr[y - 1];
                //         break;
                //     }
                // }    
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

    var catalProdList = document.querySelector('.catalog-products_content .services-list');

    if(catalProdList){
        if(catalProdList.children.length < 2) {
            catalProdList.style.display = 'block';
        }
    }

    
    $('.catalog-products_sidebar-nav .menu-item').removeClass('is-active');
    $('.add_to_cart_button').addClass('add-basket');


    $('.tinvwl_add_to_wishlist-text').empty();
    $('.single-product-page__product-nav .tinvwl_add_to_wishlist-text').html('В избранное');
    $('.basket-page__content-product-name-block .tinvwl_add_to_wishlist-text').html('В избранное');

    // $(this).parent().parent().parent().find( $('.sirvices-item-modal-basket') ).css('display', 'block');
    $('.catalog-products_page-content .catalog-products_content .sirvices-item').mouseenter(function(){
        var sirvicesItemClone = $( this ).clone();
        sirvicesItemClone.appendTo( this );
        sirvicesItemClone.css('display', "block");
        sirvicesItemClone.css('position', "absolute");
        sirvicesItemClone.find( $('.add-basket') ).click(function(){
            sirvicesItemClone.find( $('.sirvices-item-modal-basket') ).css('display', 'block');
        });

        sirvicesItemClone.find( $('.sirvices-item-content-developer') ).show();
        

           
        var permalink = sirvicesItemClone.find($('a[href*="product"]')).attr('href');
        
        sirvicesItemClone.css('border', "none");
        sirvicesItemClone.addClass('sirvices-item-modal-over');
        var sirvicesBtn = '<a href="' + permalink + '"><button type="button" class="button catalog-products_button-modal">Побробнее о товаре</button></a>';
        // $('.sirvices-item-modal-over .sirvices-item-content p:first-child').after(sirvicesBtn);
        // $('.sirvices-item-modal-over .sirvices-item-content-gorizontal').append(sirvicesBtn);

        
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


        $('.tinvwl_add_to_wishlist_button img').attr('class', 'heart-icon');
        $('.tinvwl_add_to_wishlist_button img').attr('data-tooltip', '');
        $('.tinvwl_add_to_wishlist_button img').attr('tabindex', '1');
        $('.tinvwl_add_to_wishlist_button img').attr('title', 'В избранное');
        $('.tinvwl_add_to_wishlist_button img').attr('data-position', 'bottom');
        $('.tinvwl_add_to_wishlist_button img').attr('data-alignment', 'center');


        
        sirvicesItemClone.find($('.scheme-icon')).attr('class', 'scheme-icon');
        sirvicesItemClone.find($('.scheme-icon')).attr('data-tooltip', '');
        sirvicesItemClone.find($('.scheme-icon')).attr('tabindex', '1');
        sirvicesItemClone.find($('.scheme-icon')).attr('title', 'В сравнение');
        sirvicesItemClone.find($('.scheme-icon')).attr('data-position', 'bottom');
        sirvicesItemClone.find($('.scheme-icon')).attr('data-alignment', 'center');

        // $('.tinvwl_add_to_wishlist_button').mouseenter(function(){
        //     var elem = $(this).find($('img'));
        //     elem.attr('src', elem.attr('src').replace("white", "red")); 
        // });
        // $('.tinvwl_add_to_wishlist_button').mouseleave(function(){
        //     var elem = $(this).find($('img'));
        //     elem.attr('src', elem.attr('src').replace("red", "white")); 
        // });
    });


    $('.tinvwl_add_to_wishlist-text').mouseenter(function(){
        var wishImg = $(this).parent().find($('img'));
        wishImg.attr('src', wishImg.attr('src').replace("white", "red"));
    });
    $('.tinvwl_add_to_wishlist-text').mouseleave(function(){
        var wishImg = $(this).parent().find($('img'));
        wishImg.attr('src', wishImg.attr('src').replace("red", "white"));
    });


    $('#line-height-full').click(function(){
        $('.single-product-page__content-wrapper-trim').hide();
        $('.single-product-page__content-wrapper').show();
        $(this).hide();
    });


    var tableTr = $('.single-product-page-product-char tbody').children()

    for(var i=0; i< tableTr.length; i++){
        if (i+8 in tableTr)  {
            tableTr[i+8].style.display = 'none';
        } else {
            break;
        }
        
    }


    $('#table-show').click(function(){
        for(var i=0; i< tableTr.length; i++){
            tableTr[i].style.display = 'table-row';
        }
        $(this).hide();
    });
    

    $('.tinvwl_add_to_wishlist_button img').attr('class', 'heart-icon');
    $('.tinvwl_add_to_wishlist_button img').attr('data-tooltip', '');
    $('.tinvwl_add_to_wishlist_button img').attr('tabindex', '1');
    $('.tinvwl_add_to_wishlist_button img').attr('title', 'В избранное');
    $('.tinvwl_add_to_wishlist_button img').attr('data-position', 'bottom');
    $('.tinvwl_add_to_wishlist_button img').attr('data-alignment', 'center');

    

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


   // baset




   $('.update__cart').removeAttr('disabled');

    var min = 1;
    $('body').on('click', '.plus', function (e) {
        e.preventDefault();
        var input = $(this).parent().find('input');
        var current = parseInt($(input).val());
        $(input).val(current + 1).trigger("change");
        $(".update__cart").trigger("click");
    }).on('click', '.minus', function (e) {
        e.preventDefault();
        var input = $(this).parent().find('input');
        var current = parseInt($(input).val());
        if (current > min) {
            $(input).val(current - 1).trigger("change");
        }
        $(".update__cart").trigger("click");
    });




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

   

});