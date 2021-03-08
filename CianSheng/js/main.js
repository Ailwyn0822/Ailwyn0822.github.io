$(window).on('load', function () {
    $('body, html').addClass('overflow-hidden');
    $('.loading-wrap').fadeOut(500, function () {
        $('body, html').removeClass('overflow-hidden');
    });

    // wow
    // var wow = new WOW(
    //     {
    //         boxClass: 'wow',      // 要套用wow.js需要的動畫class(預設是wow)
    //         animateClass: 'animate__animated', // 預設動畫class
    //         offset: 150,          // 距離顯示多遠開始顯示動畫 (預設0，因此捲動到顯示時才出現動畫)
    //         mobile: false,       // 手機上是否要套用動畫 (預設是true)
    //         live: true,       // 非同步產生的內容是否也要套用 (預設true，適合搭配SPA)
    //         callback: function (box) {
    //             // alert('555');
    //             // 當觸發wow套件的時候要執行的動作
    //         },
    //         scrollContainer: null // 可以設定成只套用在某個區塊中捲動才呈現, 不設定就是整個視窗
    //     }
    // );
    // wow.init();    
})

$('.lightcase-item').lightcase({
    shrinkFactor: .9,
    // video: {
    //     loop: true,
    //     width: 600, // 影片寬度 不會影響rwd 使用時在測試看看較保險
    //     height: 400, // 影片高度 不會影響rwd 使用時在測試看看較保險
    // },
});