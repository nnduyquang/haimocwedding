var plugins = {
    slider: $('.swiper-container'),
};
$(document).ready(function () {
    function loadSlider() {
        var option;
        this.$pager = $('a[data-j-element="pager"]');
        this.$pager.on({
            click: (function (_this) {
                return function (e) {
                    var $pager;
                    $pager = $(e.currentTarget);
                    return _this.swiper.slideTo($pager.index() + 1);
                };
            })(this)
        });
        option = {
            loop: true,
            effect: 'fade',
            fade: {
                crossFade: true
            },
            autoplay: 5000,
            autoplayDisableOnInteraction: false,
            speed: 1200,
            onSlideChangeStart: (function (_this) {
                return function (swiper) {
                    var $pager;
                    _this.$pager.removeClass('is-current');
                    $pager = _this.$pager.eq(swiper.realIndex);
                    return $pager.addClass('is-current');
                };
            })(this)
        };
        if ($('.swiper-slide').length <= 1) {
            option['loop'] = false;
            option['autoplay'] = false;
        }
        this.swiper = new Swiper($('.swiper-container'), option);
    }

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 68) {
            return $('.p-header').addClass('p-header--is-scroll');
        } else {
            return $('.p-header').removeClass('p-header--is-scroll');
        }
    });
    $('.p-area-select-nav__item a').mouseover(function () {
        var selected_map_name;
        $('.p-our-area__map__content').removeClass('p-our-area__map__content--is-active');
        selected_map_name = $(this).attr('data-map-name');
        $('[data-map-img-name=' + selected_map_name + ']').addClass('p-our-area__map__content--is-active');
        $('.p-area-select-nav__item a').css('color', 'white');
        return $(this).css('color', '#c30d23');
    }).mouseout(function () {
    });
    function updateItemList() {
        return this.$itemList = this.$items.find('.j-pickup-campaigns-item');
    };

    if (plugins.slider.length) {
        loadSlider();
    }

});