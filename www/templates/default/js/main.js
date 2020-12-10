jQuery(document).ready(function ($) {
    "use strict";

    $('#foto-upload').on("click", function () {
        $('#real-file').click();
    });
    $('#foto-upload2').on("click", function () {
        $('#real-file2').click();
    });
    $('#foto-upload3').on("click", function () {
        $('#real-file3').click();
    });
    
    $('#real-file').change(function () {
        if ($('#real-file').val())
        {
            $('#foto-upload').text($('#real-file').val().replace(/^.*[\\\/]/, ''));
        } else {
            $('#foto-upload').innerHTML = "Выберите файл";
        }
    });
    
     $('#real-file2').change(function () {
        if ($('#real-file2').val())
        {
            $('#foto-upload2').text($('#real-file2').val().replace(/^.*[\\\/]/, ''));
        } else {
            $('#foto-upload2').innerHTML = "Выберите файл";
        }
    });
    
     $('#real-file3').change(function () {
        if ($('#real-file3').val())
        {
            $('#foto-upload3').text($('#real-file3').val().replace(/^.*[\\\/]/, ''));
        } else {
            $('#foto-upload3').innerHTML = "Выберите файл";
        }
    });


    $('.click-create').on("click", function (event) {
        event.preventDefault();
        $('.login').fadeOut();
        $('.register').fadeIn();
    });

    $('.click-login').on("click", function (event) {
        event.preventDefault();
        $('.login').fadeIn();
        $('.register').fadeOut();

    });


    $('#logout').on("click", function (event) {
        document.location.href = '/user/logout/';
        $('.login').fadeIn();
        $('.register').fadeOut();
        $('.userBox').fadeOut();
    });

//Получение данных с формы
    function getData(obj_form)
    {
        var hData = {};
        $('input, textarea, select', obj_form).each(function ()
        {
            if ((this.name && this.value) != "")
            {
                hData[this.name] = this.value;
                //console.log('hData[' + this.name + '] = ' + hData[this.name]);
            }

        });
        return hData;
    }

    $('.registerNewUser').on("click", function (evt)
    {
        evt.preventDefault();
        var postData = getData('#registerUser');
        $.ajax({
            type: 'POST',
            async: false,
            url: "/user/register/",
            data: postData,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })

                    $('.register').fadeOut();
                    $('.login').fadeOut();
                    $('.userBox').fadeIn();
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });

    });



//Авторизация пользователя
    $('.loginUser').on("click", function (evt)
    {
        evt.preventDefault();
        var postData = getData('#loginUser');

        $.ajax({
            type: 'POST',
            async: false,
            url: "/user/login/",
            data: postData,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {
                    $('.register').fadeOut();
                    $('.login').fadeOut();
                    $('.userBox').fadeIn();
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });
    });



//Изминение данных пользователя
    $('.updateUser').on("click", function (evt)
    {
        evt.preventDefault();
        var postData = getData('#updateUser');

        $.ajax({
            type: 'POST',
            async: false,
            url: "/user/update/",
            data: postData,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })

                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });
    });

    //Добавление нового товара
    $('.addNewProduct').on("click", function (evt)
    {
        evt.preventDefault();
        var postData = getData('#addProduct');
        var file_data1 = $('#real-file').prop('files')[0];
        var file_data2 = $('#real-file').prop('files')[1];
        var file_data3 = $('#real-file').prop('files')[2];
        var formData = new FormData();
        formData.append('filename1', file_data1);
        formData.append('filename2', file_data2);
        formData.append('filename3', file_data3);
        $.ajax({
            type: 'POST',
            async: true,
            url: "/product/addproduct/",
            data: postData,
            cache: false,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })

                    $('#itemName').val('');
                    $('#itemPrice').val('');
                    $('#itemCat').val('');
                    $('#itemDesc').val('');


                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });

        $.ajax({
            type: 'POST',
            async: true,
            cache: false,
            processData: false,
            contentType: false,
            url: "/product/uploadnew/",
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data['success'])
                {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })

                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });
    });


    $('.updateProduct').on("click", function (evt)
    {
        evt.preventDefault();
        var postData = getData('#changeProduct');
        var file_data1 = $('#real-file').prop('files')[0];
        var file_data2 = $('#real-file2').prop('files')[0];
        var file_data3 = $('#real-file3').prop('files')[0];
        var formData = new FormData();
        formData.append('filename1', file_data1);
        formData.append('filename2', file_data2);
        formData.append('filename3', file_data3);
        formData.append('itemId', postData['itemId']);
        $.ajax({
            type: 'POST',
            async: true,
            url: "/product/productchange/",
            data: postData,
            cache: false,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });

        $.ajax({
            type: 'POST',
            async: true,
            cache: false,
            processData: false,
            contentType: false,
            url: "/product/upload/",
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data)
                {
                     document.location.href = '/product/changeproduct/' + postData['itemId'] + '/';

                } 
            }
        });
    });


  $('.deleteProduct').on("click", function (evt)
    {
        evt.preventDefault();
        var postData = getData('#changeProduct');
        $.ajax({
            type: 'POST',
            async: true,
            url: "/product/deleteproduct/",
            data: postData,
            cache: false,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })
                    
                    document.location.href = '/product/myproduct/';
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });
    });


    // Open menu dropdown home 5
    $(".js-menubar > li > a").on("click", function () {
        $(this).toggleClass('active');
        $(this).parent().find(".js-open-menu").slideToggle(function () {
            $(this).next().stop(true).toggleClass('open', $(this).is(":visible"));
        });
    });
    // Push menu home 5
    var menuLeft = $('.pushmenu-left');
    var menuHome6 = $('.menu-home5');
    var nav_list = $('.topbar-account');
    var nav_click = $('.icon-pushmenu');
    nav_list.on("click", function (event) {
        event.stopPropagation();
        $(this).toggleClass('active');
        $('body').toggleClass('pushmenu-push-toright-cart');
        menuLeft.toggleClass('pushmenu-open');
        $(".container").toggleClass("canvas-container");
    });
    nav_click.on("click", function (event) {
        event.stopPropagation();
        $(this).toggleClass('active');
        $('body').toggleClass('pushmenu-push-toleft');
        menuHome6.toggleClass('pushmenu-open');
    });
    $(".wrappage").on("click", function () {
        $(this).removeClass('active');
        $('body').removeClass('pushmenu-push-toright-cart').removeClass('pushmenu-push-toleft');
        menuLeft.removeClass('pushmenu-open');
        menuHome6.removeClass('pushmenu-open');
    });
    $(".close-left").on("click", function () {
        $(this).removeClass('active');
        $('body').removeClass('pushmenu-push-toright-cart');
        menuLeft.removeClass('pushmenu-open');
    });
    $(".close-left").on("click", function () {
        $('body').removeClass('pushmenu-push-toleft');
        menuHome6.removeClass('pushmenu-open');
    });


    $('.scroll-down').on('click', function () {
        $('html, body').animate({scrollTop: $('section#main-content').offset().top}, 'slow');
        return false;
    });
    // Scroll to TOP
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll_top').fadeIn();
        } else {
            $('.scroll_top').fadeOut();
        }
    });

    $('.scroll_top').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll > 500) {
            $(".intro").hide();
            $(".scroll_down").hide();
        }
    });
    // scroll down
    $(".scroll_down").on('click', function (e) {
        e.preventDefault();
        $(".intro").hide();
        $(this).hide();
        return false;
    });
    // Js product single slider
    $('.js-click-product').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.js-product-slider',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        infinite: true,
        variableWidth: true
    });
    $('.js-product-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.js-click-product'
    });

    $('.js-click-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.js-slider',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        afterChange: function (slickSlider, i) {
            //remove all active class
            $('.js-click-slider .slick-slide').removeClass('slick-active');
            //set active class for current slide
            $('.js-click-slider .slick-slide').eq(i).addClass('slick-active');
        }

    });
    //set active class to first slide
    $('.js-click-slider .slick-slide').eq(0).addClass('slick-active');
    $('.js-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.js-click-slider'
    });
    $('.js-click-slider').on('mouseenter', '.slick-slide', function (e) {
        var $currTarget = $(e.currentTarget),
                index = $currTarget.data('slick-index'),
                slickObj = $('.js-slider').slick('getSlick');

        slickObj.slickGoTo(index);

    });
    // Slider home clean

    $('.js-homesimple-slider').slick({
        autoplay: true,
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 4000
    });

    // Js home lookbook
    $('.js-owl-loobook').owlCarousel({
        autoplayTimeout: 3000,
        autoplay: true,
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            568: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    // sticky scroll
    if ($(".single-product-detail").hasClass("engoc-product-design-sticky")) {
        var s, o, i = $(".entry-summary"),
                n = i.find(".summary-inner"),
                r = i.width(),
                l = $(".product-images"),
                c = l.find(".shopify-product-gallery__wrapper a"),
                d = $(window).height(),
                u = l.outerHeight(),
                p = 130,
                h = 600,
                m = i.outerHeight(),
                f = $(window).scrollTop(),
                g = l.offset().top,
                v = i.offset().left + 15,
                w = g + u,
                b = f + p + m;
        i.css({height: m}),
                $(window).resize(function () {
            d = $(window).height(),
                    m = i.outerHeight(),
                    u = l.outerHeight(),
                    m < d - p ? i.addClass("in-viewport").removeClass("not-in-viewport") : i.removeClass("in-viewport").addClass("not-in-viewport"), f = $(window).scrollTop(),
                    b = f + p + m,
                    r = i.width(),
                    v = i.offset().left + 15,
                    g = l.offset().top,
                    w = g + u, r > h && (v += o = (r - h) / 2),
                    f + p >= g ? (i.addClass("block-sticked"),
                            n.css({top: p, width: r, position: "fixed", transform: "translateY(-20px)"})) : (i.removeClass("block-sticked"),
                    n.css({top: "auto", left: "auto", width: "auto", position: "relative", transform: "translateY(0px)"})),
                    b > w ? i.addClass("hide-temporary") : i.removeClass("hide-temporary"), d = $(window).height(),
                    c.each(function () {
                        s = $(this).offset().top, f > s - d + 20 && ($(this).addClass("animate-images"))
                    })
        }),
                $(window).scroll(function () {
            d = $(window).height(),
                    c.each(function () {
                        s = $(this).offset().top, f > s - d + 20 && ($(this).addClass("animate-images"))
                    })

            f = $(window).scrollTop(),
                    b = f + p + m,
                    r = i.width(),
                    v = i.offset().left + 15,
                    g = l.offset().top,
                    w = g + u, r > h && (v += o = (r - h) / 2),
                    f + p >= g ? (i.addClass("block-sticked"),
                            n.css({top: p, width: r, position: "fixed", transform: "translateY(-20px)"})) : (i.removeClass("block-sticked"),
                    n.css({top: "auto", left: "auto", width: "auto", position: "relative", transform: "translateY(0px)"})),
                    b > w ? i.addClass("hide-temporary") : i.removeClass("hide-temporary")

            d = $(window).height(),
                    m = i.outerHeight(),
                    u = l.outerHeight(),
                    m < d - p ? i.addClass("in-viewport").removeClass("not-in-viewport") : i.removeClass("in-viewport").addClass("not-in-viewport"), d = $(window).height(),
                    c.each(function () {
                        s = $(this).offset().top, f > s - d + 20 && ($(this).addClass("animate-images"))
                    }), d = $(window).height(),
                    c.each(function () {
                        s = $(this).offset().top, f > s - d + 20 && ($(this).addClass("animate-images"))
                    })
        })
    }

});