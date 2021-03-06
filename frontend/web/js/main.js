$(function () {
    "use strict";


    $('.top-catalog > div').hover(function () {
        if ($('.sub-menu a', this).length < 1) return;
        clearTimeout($.data(this, 'timer'));
        $('.sub-menu', this).stop(true, true).slideDown(350);
    }, function () {
        $.data(this, 'timer', setTimeout($.proxy(function () {
            $('.sub-menu', this).stop(true, true).slideUp(350);
        }, this), 150));
    });

    $('.top-catalog > div').on('taphold',function () {
        if ($('.sub-menu a', this).length < 1) return;
        clearTimeout($.data(this, 'timer'));
        $('.sub-menu', this).stop(true, true).slideDown(350);
    }, function () {
        $.data(this, 'timer', setTimeout($.proxy(function () {
            $('.sub-menu', this).stop(true, true).slideUp(350);
        }, this), 150));
    });

    $('body').on('change', 'input#prices', function () {
        var prices = ($(this).val()).split(',');
        $('.bage-min').text(prices[0] + ' грн');
        $('.bage-max').text(prices[1] + ' грн');
    });

    $('body').on('change', '#left-filter-form input:not(#prices),#left-filter-form select', function () {
        $(this).closest('form').submit();
    });

    $('body').on('click', '.card-img,.card-text', function () {
        var product = $(this).closest('.card').data('key');
        location.href = '/product/' + product;
    });

    $('body').on('click', '.header-panel .logo', function () {
        location.href = '/';
    });

    $('.image_icon').on('click', function () {
            $('.image_icon').css('border', 'none');
            $(this).css('border', '#C3A solid 3px');
            $('#image').attr('src', $(this).attr('src'));
        }
    );

    $('.product-view').on('click', function (e) {
        e.preventDefault();
        var product = $(this).data('id');
        location.href = '/product/' + product;
    });

    $('.phone-change').on('click', function (e) {
        e.preventDefault();
        $('#phone-modal').modal('show');
    });

    $('.cd-cart footer .btn-cart').on('click', function (e) {

        console.log($(this).data('guest'));
        if ($(this).data('guest') === 1) {
            e.preventDefault();
            $('#order-phone-modal').modal('show');
        }
    });

    var image = document.getElementById('image');
    if (image) {
        image.addEventListener('mousemove', function (e) {
            var x = e.offsetX == undefined ? e.layerX : e.offsetX;
            var y = e.offsetY == undefined ? e.layerY : e.offsetY;
            var parent = this.parentNode;
            var parentPosInfo = parent.getBoundingClientRect();

            var alphaWidth = 0.34 * parentPosInfo.width;
            var alphaHeight = 0.34 * parentPosInfo.height;

            var posCalibrateX = 0;
            var posCalibrateY = 0;

            if (x > parentPosInfo.width / 2) {
                let deltaX = x - parentPosInfo.width / 2;
                posCalibrateX = alphaWidth * (deltaX / (parentPosInfo.width / 2));
            } else if (x < parentPosInfo.width / 2) {
                let deltaX = x - parentPosInfo.width / 2;
                posCalibrateX = alphaWidth * (deltaX / (parentPosInfo.width / 2));
            } else {
                posCalibrateX = 0;
            }

            if (x > parentPosInfo.width / 2) {
                let deltaX = x - parentPosInfo.width / 2;
                posCalibrateX = -1 * alphaWidth * (deltaX / (parentPosInfo.width / 2));
            } else if (x < parentPosInfo.width / 2) {
                let deltaX = x - parentPosInfo.width / 2;
                posCalibrateX = -1 * alphaWidth * (deltaX / (parentPosInfo.width / 2));
            } else {
                posCalibrateX = 0;
            }

            if (y > parentPosInfo.height / 2) {
                let deltaY = y - parentPosInfo.height / 2;
                posCalibrateY = -1 * alphaHeight * (deltaY / (parentPosInfo.height / 2));
            } else if (y < parentPosInfo.height / 2) {
                let deltaY = y - parentPosInfo.height / 2;
                posCalibrateY = -1 * alphaHeight * (deltaY / (parentPosInfo.height / 2));
            } else {
                posCalibrateY = 0;
            }

            this.style.transform = 'scale(3) translateX(' + posCalibrateX + 'px) translateY(' + posCalibrateY + 'px)';
        });

        image.addEventListener('mouseout', function () {
            this.style.transform = 'none';
        });

    }

    $("#pjax_form").on("pjax:end", function () {
        $.pjax.reload({container: "#pjax_list"});
    });

    $('.form-footer-text.toggle').click(function (e) {
        e.preventDefault();
        $('.login-form:not("#request-password-reset-form")').animate({height: "toggle", opacity: "toggle"}, 'slow');
    });

    $('.form-footer-text.reset').click(function (e) {
        e.preventDefault();
        $('#request-password-reset-form').animate({height: "toggle", opacity: "toggle"}, 'slow');
        $(this).closest('form').animate({height: "toggle", opacity: "toggle"}, 'slow');
    });

    $(window).resize(function () {
        // topCatalogResize();
    });


});