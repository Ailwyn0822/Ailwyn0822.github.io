// 事件專用 延後載入 不需要再寫 load 或者 ready
$('.menu-list').on('mouseenter mouseleave', function () {
    if ($(this).find('.menu-sort').length != 0 ){
        $(this).find('.menu-sort').stop().slideToggle(300);
    }
});

// menu
function menu_open() {
    $('.menu-item').addClass('open');
    $('.mask-backdrop').addClass('mask-show');
    $('body, html').addClass('scroll-hide');
}
function menu_close() {
    $('.menu-item').removeClass('open');
    $('.mask-backdrop').removeClass('mask-show');
    $('body, html').removeClass('scroll-hide');
}
$(document).on('click', '.bar-btn', function () {
    if ($('.menu-item.open').length == 0){
        menu_open();
    } else {
        menu_close();
    }
});
$(document).on('click', '.mask-show', function () {
    if ($('.menu-item.open').length != 0) {
        menu_close();
    }
});
$(document).on('click', '.search-btn', function () {
    if ($('.menu-item.open').length == 0) {
        menu_open();
    }
    $('.mobile-search').find('input').focus();
});

// 滾動
$(window).scroll(function () {
    if ($(window).width() >= 768){
        if ($(this).scrollTop()){
            $('#header').addClass('header-scroll');
        } else {
            $('#header').removeClass('header-scroll');
        }
    }
})

//停止超連結事件
$('.del_a').on('click', function (e) {
    e.preventDefault();
})
//作品內頁
if ($('.proitem-wrap').length != 0) {
    $('.thumbnail-list').on('mouseover', function () {
        var num = $(this).data('num');
        $('.thumbnail-list.active').removeClass('active');
        $(this).addClass('active');
        $('.proitem-wrap .carousel').carousel(num);

        if ($(window).width() <= 767) {
            var target = $('.carousel-fade').offset().top - $('#header').innerHeight();
            $('body, html').animate({ scrollTop: target }, 500);
        }
    })

    // 如果觸發切換的事件要使用 mouseenter 的話 加上此段 避免一直重複執行造成畫面有問題
    $('.proitem-wrap .carousel').on('slide.bs.carousel', function (e) {
        var get_num = $('.thumbnail-list.active').data('num');
        if (e.to != get_num) {
            e.preventDefault();
            $(this).carousel(get_num);
        }
    });
}

$('.transport-list .form-check').on('click', function () {
    if ($(this).children('input').prop('checked') == true) {
        var item = $(this).siblings('.transport-info');
        if (item.is(':hidden')) {
            $('.transport-info').not(item).stop().slideUp(300);
            item.stop().slideDown(300, function () {
                var target = $(this).parent('.transport-list').offset().top - $('#header').innerHeight();
                $('body, html').animate({ scrollTop: target }, 500);
            });
        }
    }
})



