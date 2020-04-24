$(function () {


    // Partner
    var mySwiper = new Swiper('.partner .swiper-container', {
        loop: true,
        speed: 1200,
        pagination: {
            el: '.partner .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.partner .swiper-button-next',
            prevEl: '.partner .swiper-button-prev',
        },
    })


    // wap 轮播
    // wap-banner
    var mySwiper = new Swiper('.wap-banner .swiper-container', {
        loop: true,
        autoplay: true,
        speed: 1200,
        pagination: {
            el: '.wap-banner .swiper-pagination',
            clickable: true,
        },
    })

    // wap右上导航
    $(".nav li").click(function () {
        $(this).parent().parent().removeClass("in");
    })


    // 滚动监听
    $('body').scrollspy({
        target: '#navbar-example'
    })
    // top
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".goTop").fadeIn(1000);
            $(".navbar").addClass("navbar-fixed-top");
        } else {
            $(".goTop").fadeOut(1000);
            $(".navbar").removeClass("navbar-fixed-top");
        }
    });
    $(".goTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);
    });

    // certificate
    certifySwiper = new Swiper('.certificate .swiper-container', {
        watchSlidesProgress: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        loop: true,
        loopedSlides: 3,
        autoplay: true,
        pagination: {
            el: '.certificate .swiper-pagination',
            clickable: true,
        },
        on: {
            progress: function (progress) {
                for (i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i);
                    var slideProgress = this.slides[i].progress;
                    modify = 1;
                    if (Math.abs(slideProgress) > 1) {
                        modify = (Math.abs(slideProgress) - 1) * 0.4 + 1;
                    }
                    translate = slideProgress * modify * 150 + 'px';
                    scale = 1 - Math.abs(slideProgress) / 5;
                    zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
                    slide.transform('translateX(' + translate + ') scale(' + scale + ')');
                    slide.css('zIndex', zIndex);
                    slide.css('opacity', 1);
                    if (Math.abs(slideProgress) > 3) {
                        slide.css('opacity', 0);
                    }
                }
            },
            setTransition: function (transition) {
                for (var i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i)
                    slide.transition(transition);
                }

            }
        }

    })

    // pc-banner banner
    var mySwiper = new Swiper('.pc-banner .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        effect: 'fade',
        loop: true,
        pagination: {
            el: '.pc-banner .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.pc-banner .swiper-button-next',
            prevEl: '.pc-banner .swiper-button-prev',
        },
        on: {
            init: function () {
                swiperAnimateCache(this);
                swiperAnimate(this);
            },
            slideChangeTransitionEnd: function () {
                swiperAnimate(this);

            }
        }

    })



})

var submitcount2 = 0;

function beforeSubmit2(form) {

    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (form.com.value == '') {
        alert('The company can not be empty');
        form.com.focus();
        return false;
    } else if (form.message.value == '') {
        alert('The message can not be empty');
        form.message.focus();
        return false;
    } else {

        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;

        }
    }

}

