<?php include 'head.php' ?>

<body>
    <div class="wrapper">
        <?php include 'header.php' ?>
        <div class="web-detail">
            <?php include 'web-header.php' ?>
            <div class="container news-wrap mt-5">
                <!-- 影音專區swiper -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="swiper-container news_video_swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <iframe class="embed-responsive embed-responsive-16by9" width="560" height="315" src="https://www.youtube.com/embed/G8kW1zQS7Rw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="font-h5 text-dark font-weight-bold border-bottom border-dark d-inline-block mt-4 ml-4 pb-2">金佛顯像神靈</p><br>
                                    <p class="text-dark d-inline-block mt-2 ml-4">刊登於：2020-12-05</p>
                                </div>
                                <div class="swiper-slide">
                                    <iframe class="embed-responsive embed-responsive-16by9" width="560" height="315" src="https://www.youtube.com/embed/G8kW1zQS7Rw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="font-h5 text-dark font-weight-bold border-bottom border-dark d-inline-block mt-4 ml-4 pb-2">金佛顯像神靈</p><br>
                                    <p class="text-dark d-inline-block mt-2 ml-4">刊登於：2020-12-05</p>
                                </div>
                                <div class="swiper-slide">
                                    <iframe class="embed-responsive embed-responsive-16by9" width="560" height="315" src="https://www.youtube.com/embed/G8kW1zQS7Rw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="font-h5 text-dark font-weight-bold border-bottom border-dark d-inline-block mt-4 ml-4 pb-2">金佛顯像神靈</p><br>
                                    <p class="text-dark d-inline-block mt-2 ml-4">刊登於：2020-12-05</p>
                                </div>
                                <div class="swiper-slide">
                                    <iframe class="embed-responsive embed-responsive-16by9" width="560" height="315" src="https://www.youtube.com/embed/G8kW1zQS7Rw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="font-h5 text-dark font-weight-bold border-bottom border-dark d-inline-block mt-4 ml-4 pb-2">金佛顯像神靈</p><br>
                                    <p class="text-dark d-inline-block mt-2 ml-4">刊登於：2020-12-05</p>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <?php include 'script.php' ?>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>

</html>