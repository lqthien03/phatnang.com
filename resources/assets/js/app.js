/* Validation form */
ValidationFormSelf("validation-newsletter");
ValidationFormSelf("validation-cart");
ValidationFormSelf("validation-user");
ValidationFormSelf("validation-contact");

/* Exists */
$.fn.exists = function() {
    return this.length;
};

if ($(".clicktk").exists()) {
    $(".clicktk").click(function() {
        $(".search").stop().slideToggle(500);
    });
}

if ($(".wrap-product").exists()) {
    $(".wrap-product").each(function() {
        var key = $(".clicksp:first").data("key");
        var ten = $(".clicksp:first").data("ten");
        $(".clicksp:first").addClass('active');
        var eShow = '.paging-product';
        $.ajax({
            url: 'ajax/ajax_product.php',
            type: "GET",
            dataType: 'html',
            data: {
                key: key
            },
            success: function(result) {
                $(eShow).html(result);
                $('.themsp').attr('href', ten);
            }
        });
    });
    $(".clicksp").click(function() {
        $(".clicksp").removeClass('active');
        $(this).addClass('active');
        var key = $(this).data("key");
        var ten = $(this).data("ten");
        var eShow = '.paging-product';
        $.ajax({
            url: 'ajax/ajax_product.php',
            type: "GET",
            dataType: 'html',
            data: {
                key: key
            },
            success: function(result) {
                $(eShow).html(result);
                $('.themsp').attr('href', ten);
            }
        });
    });
}


if ($(".showbanggia").exists()) {
    $(".showbanggia").each(function() {
        var key = '';
        var eShow = '.showbanggia';
        var perpage = 99999;
        $.ajax({
            url: 'ajax/ajax_banggia.php',
            type: "GET",
            dataType: 'html',
            data: {
                key: key,
                eShow: eShow,
                perpage: perpage
            },
            success: function(result) {
                $(eShow).html(result);
            }
        });
    });
    $(".timsp").click(function() {
        var key = $('#search_name').val();
        var eShow = '.showbanggia';
        var perpage = 99999;
        $.ajax({
            url: 'ajax/ajax_banggia.php',
            type: "GET",
            dataType: 'html',
            data: {
                key: key,
                eShow: eShow,
                perpage: perpage
            },
            success: function(result) {
                $(eShow).html(result);
            }
        });
    });
    $('#search_name').keypress(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            var key = $('#search_name').val();
            var eShow = '.showbanggia';
            var perpage = 99999;
            $.ajax({
                url: 'ajax/ajax_banggia.php',
                type: "GET",
                dataType: 'html',
                data: {
                    key: key,
                    eShow: eShow,
                    perpage: perpage
                },
                success: function(result) {
                    $(eShow).html(result);
                }
            });
        }
    });
}


/*if($("#loader-wrapper").exists())
{
    setTimeout(function() {
    $("#loader-wrapper").addClass('show1')
    }, 1000);
    setTimeout(function() {
      $('#loader-wrapper').remove()
    }, 3000);
}*/


/* Back to top */
NN_FRAMEWORK.BackToTop = function() {
    $(window).scroll(function() {
        if (!$('.scrollToTop').length) $("body").append('<div class="scrollToTop"><img src="' + GOTOP + '" alt="Go Top"/></div>');
        if ($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
        else $('.scrollToTop').fadeOut();
    });

    $('body').on("click", ".scrollToTop", function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
};

/* Alt images */
NN_FRAMEWORK.AltImages = function() {
    $('img').each(function(index, element) {
        if (!$(this).attr('alt') || $(this).attr('alt') == '') {
            $(this).attr('alt', WEBSITE_NAME);
        }
    });
};

/* Fix menu */
NN_FRAMEWORK.FixMenu = function() {
    $(window).scroll(function() {
        var caotop = $(".header").height() + $(".menu").height() + $(".khungsl").height();
        if ($(window).scrollTop() > caotop) {
            $(".menu").addClass('fix_menu animate__animated animate__fadeInDown');
            $(".menu-res").css({ position: "fixed", left: '0px', right: '0px', top: '0px', zIndex: '999' });
            $(".menusp0").removeClass('active');
        } else {
            $(".menu").removeClass('fix_menu animate__animated animate__fadeInDown');
            $(".menu-res").css({ position: "relative" });
            $(".menusp0").addClass('active');
        }
        if ($(window).scrollTop() > 330) {
            $(".baotimkiem").addClass('fixtim');
        } else {
            $(".baotimkiem").removeClass('fixtim');
        }
    });
};

/* Tools */
NN_FRAMEWORK.Tools = function() {
    if ($(".toolbar").exists()) {
        $(".footer").css({ marginBottom: $(".toolbar").innerHeight() });
    }
};

/* Popup */
NN_FRAMEWORK.Popup = function() {
    if ($("#popup").exists()) {
        $('#popup').modal('show');
    }
};

/* Wow */
NN_FRAMEWORK.WowAnimation = function() {
    new WOW().init();
};

/* Mmenu */
NN_FRAMEWORK.Mmenu = function() {
    if ($("nav#menu").exists()) {
        $('nav#menu').mmenu({
            extensions: ['effect-slide-menu', 'pageshadow'],
            counters: true,
            navbar: {
                title: 'MENU'
            },
            navbars: [{
                position: 'top',
                content: ['prev', 'title', 'close']
            }]
        });
    }
};


/* Tabs */
NN_FRAMEWORK.Tabs = function() {
    if ($(".ul-tabs-pro-detail").exists()) {
        $(".ul-tabs-pro-detail li").click(function() {
            var tabs = $(this).data("tabs");
            $(".content-tabs-pro-detail, .ul-tabs-pro-detail li").removeClass("active");
            $(this).addClass("active");
            $("." + tabs).addClass("active");
        });
    }
};

/* Photobox */
NN_FRAMEWORK.Photobox = function() {
    if ($(".album-gallery").exists()) {
        $('.album-gallery').photobox('a', { thumbs: true, loop: false });
    }
};

/* Videos */
NN_FRAMEWORK.Videos = function() {
    /* Fancybox */
    if ($(".fancybox").exists()) {
        $('.fancybox').fancybox({
            transitionEffect: "fade",
            transitionEffect: "slide",
            transitionEffect: "circular",
            transitionEffect: "tube",
            transitionEffect: "zoom-in-out",
            transitionEffect: "rotate",
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            slideShow: {
                autoStart: true,
                speed: 2000
            },
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }
    if ($(".video").exists()) {
        $('[data-fancybox="video"]').fancybox({
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }
};

/* Owl */
NN_FRAMEWORK.OwlPage = function() {
    if ($(".owl-slideshow").exists()) {
        $('.owl-slideshow').owlCarousel({
            items: 1,
            rewind: false,
            autoplay: true,
            loop: true,
            lazyLoad: true,
            mouseDrag: false,
            touchDrag: false,
            animateIn: 'animate__fadeInRight',
            animateOut: 'animate__fadeOutLeft',
            margin: 0,
            smartSpeed: 500,
            autoplaySpeed: 3500,
            nav: false,
            dots: false
        });
        $('.prev-slideshow').click(function() {
            $('.owl-slideshow').trigger('prev.owl.carousel');
        });
        $('.next-slideshow').click(function() {
            $('.owl-slideshow').trigger('next.owl.carousel');
        });
    }

    if ($(".owl-tieuchi").exists()) {
        $('.owl-tieuchi').owlCarousel({
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: true,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 250,
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 2,
                    margin: 10
                },
                569: {
                    items: 3,
                    margin: 10
                },
                1025: {
                    items: 4,
                    margin: 12
                }
            }
        });
    }
    if ($(".tintuc_conlai").exists()) {
        $('.tintuc_conlai').slick({
            dots: false,
            infinite: true,
            arrows: false,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            vertical: true,
            autoplay: true,
        });
    }
};

/* Owl pro detail */
NN_FRAMEWORK.OwlProDetail = function() {
    if ($(".owl-thumb-pro").exists()) {
        $('.owl-thumb-pro').owlCarousel({
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 250,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 3,
                    margin: 10
                },
                481: {
                    items: 4,
                    margin: 10
                }
            }
        });
        $('.prev-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('prev.owl.carousel');
        });
        $('.next-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('next.owl.carousel');
        });
    }
};
if ($(".danhmucct").exists()) {
    $('.plus-nClick1').click(function(e) {
        $(this).parents('.level0').toggleClass('opened');
        $(this).parents('.level0').children('ul').slideToggle(200);
    });
    $('.plus-nClick2').click(function(e) {
        $(this).parents('.level1').toggleClass('opened');
        $(this).parents('.level1').children('ul').slideToggle(200);
    });
    $('.plus-nClick3').click(function(e) {
        $(this).parents('.level2').toggleClass('opened');
        $(this).parents('.level2').children('ul').slideToggle(200);
    });
}

/* Simply scroll */
/*NN_FRAMEWORK.SimplyScroll = function(){
    if($(".newshome-scroll ul").exists())
    {
        $(".newshome-scroll ul").simplyScroll({
            customClass: 'vert',
            orientation: 'vertical',
            // orientation: 'horizontal',
            auto: true,
            manualMode: 'auto',
            pauseOnHover: 1,
            speed: 1,
            loop: 0
        });
    }
};*/
/* Datetime picker */
/*NN_FRAMEWORK.DatetimePicker = function(){
    if($('#ngaysinh').exists())
    {
        $('#ngaysinh').datetimepicker({
            timepicker: false,
            format: 'd/m/Y',
            formatDate: 'd/m/Y',
            minDate: '01/01/1950',
            maxDate: TIMENOW
        });
    }
};*/
/* Cart */
NN_FRAMEWORK.Cart = function() {
    $("body").on("click", ".addcart", function() {
        var mau = ($(".color-pro-detail input:checked").val()) ? $(".color-pro-detail input:checked").val() : 0;
        var size = ($(".size-pro-detail input:checked").val()) ? $(".size-pro-detail input:checked").val() : 0;
        var id = $(this).data("id");
        var action = $(this).data("action");
        var quantity = ($(".qty-pro").val()) ? $(".qty-pro").val() : 1;

        if (id) {
            $.ajax({
                url: 'ajax/ajax_cart.php',
                type: "POST",
                dataType: 'json',
                async: false,
                data: { cmd: 'add-cart', id: id, mau: mau, size: size, quantity: quantity },
                success: function(result) {
                    if (action == 'addnow') {
                        $('.count-cart').html(result.max);
                        $.ajax({
                            url: 'ajax/ajax_cart.php',
                            type: "POST",
                            dataType: 'html',
                            async: false,
                            data: { cmd: 'popup-cart' },
                            success: function(result) {
                                $("#popup-cart .modal-body").html(result);
                                $('#popup-cart').modal('show');
                            }
                        });
                    } else if (action == 'buynow') {
                        window.location = CONFIG_BASE + "gio-hang";
                    }
                }
            });
        }
    });

    $("body").on("click", ".del-procart", function() {
        if (confirm(LANG['delete_product_from_cart'])) {
            var code = $(this).data("code");
            var ship = $(".price-ship").val();

            $.ajax({
                type: "POST",
                url: 'ajax/ajax_cart.php',
                dataType: 'json',
                data: { cmd: 'delete-cart', code: code, ship: ship },
                success: function(result) {
                    $('.count-cart').html(result.max);
                    if (result.max) {
                        $('.price-temp').val(result.temp);
                        $('.load-price-temp').html(result.tempText);
                        $('.price-total').val(result.total);
                        $('.load-price-total').html(result.totalText);
                        $(".procart-" + code).remove();
                    } else {
                        $(".wrap-cart").html('<a href="" class="empty-cart text-decoration-none"><i class="fa fa-cart-arrow-down"></i><p>' + LANG['no_products_in_cart'] + '</p><span>' + LANG['back_to_home'] + '</span></a>');
                    }
                }
            });
        }
    });

    $("body").on("click", ".counter-procart", function() {
        var $button = $(this);
        var quantity = 1;
        var input = $button.parent().find("input");
        var id = input.data('pid');
        var code = input.data('code');
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") quantity = parseFloat(oldValue) + 1;
        else if (oldValue > 1) quantity = parseFloat(oldValue) - 1;
        $button.parent().find("input").val(quantity);
        update_cart(id, code, quantity);
    });

    $("body").on("change", "input.quantity-procat", function() {
        var quantity = $(this).val();
        var id = $(this).data("pid");
        var code = $(this).data("code");
        update_cart(id, code, quantity);
    });

    if ($(".select-city-cart").exists()) {
        $(".select-city-cart").change(function() {
            var id = $(this).val();
            load_district(id);
            load_ship();
        });
    }

    if ($(".select-district-cart").exists()) {
        $(".select-district-cart").change(function() {
            var id = $(this).val();
            load_wards(id);
            load_ship();
        });
    }

    if ($(".select-wards-cart").exists()) {
        $(".select-wards-cart").change(function() {
            var id = $(this).val();
            load_ship(id);
        });
    }

    if ($(".payments-label").exists()) {
        $(".payments-label").click(function() {
            var payments = $(this).data("payments");
            $(".payments-cart .payments-label, .payments-info").removeClass("active");
            $(this).addClass("active");
            $(".payments-info-" + payments).addClass("active");
        });
    }

    if ($(".color-pro-detail").exists()) {
        $(".color-pro-detail").click(function() {
            $(".color-pro-detail").removeClass("active");
            $(this).addClass("active");

            var id_mau = $("input[name=color-pro-detail]:checked").val();
            var idpro = $(this).data('idpro');

            $.ajax({
                url: 'ajax/ajax_color.php',
                type: "POST",
                dataType: 'html',
                data: { id_mau: id_mau, idpro: idpro },
                success: function(result) {
                    if (result != '') {
                        $('.left-pro-detail').html(result);
                        MagicZoom.refresh("Zoom-1");
                        NN_FRAMEWORK.OwlProDetail();
                    }
                }
            });
        });
    }

    if ($(".size-pro-detail").exists()) {
        $(".size-pro-detail").click(function() {
            $(".size-pro-detail").removeClass("active");
            $(this).addClass("active");
        });
    }

    if ($(".quantity-pro-detail span").exists()) {
        $(".quantity-pro-detail span").click(function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 1) var newVal = parseFloat(oldValue) - 1;
                else var newVal = 1;
            }
            $button.parent().find("input").val(newVal);
        });
    }
};

/* Ready */
$(document).ready(function() {
    NN_FRAMEWORK.Tools();
    NN_FRAMEWORK.Popup();
    NN_FRAMEWORK.WowAnimation();
    NN_FRAMEWORK.AltImages();
    NN_FRAMEWORK.BackToTop();
    NN_FRAMEWORK.FixMenu();
    NN_FRAMEWORK.Mmenu();
    NN_FRAMEWORK.OwlPage();
    NN_FRAMEWORK.OwlProDetail();
    NN_FRAMEWORK.Cart();
    NN_FRAMEWORK.Tabs();
    NN_FRAMEWORK.Videos();
    NN_FRAMEWORK.Photobox();
    /*NN_FRAMEWORK.SimplyScroll();*/
    /*NN_FRAMEWORK.DatetimePicker();*/
});