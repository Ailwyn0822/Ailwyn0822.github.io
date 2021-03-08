<?php include 'head.php' ?>

<body>
    <div class="wrapper">
        <?php include 'header.php' ?>
        <div class="web-detail">
            <?php include 'web-header.php' ?>
            <div class="container project_info_container">
                <div class="proitem-wrap mt-5">
                    <div class="detail-content">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 mb-4 mb-md-0">
                                <div class="carousel carousel-fade slide advantage-carousel" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <!-- active請記得 -->
                                        <div class="carousel-item active">
                                            <!-- 每組優勢的 data-rel="lightcase:sort" 其內部的 ":sort" 需分開命名否則系統會自動歸類在同一類 使用流水號即可 -->
                                            <a class="lightcase-item" href="images/project/fo_man1.jpg" data-rel="lightcase:sort">
                                                <img src="images/project/fo_man1.jpg" alt="標題1" data-zoom-image="images/project/fo_man1.jpg">

                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a class="lightcase-item" href="images/project/fo_man2.jpg" data-rel="lightcase:sort">
                                                <img src="images/project/fo_man2.jpg" alt="標題2" data-zoom-image="images/project/fo_man2.jpg">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a class="lightcase-item" href="images/project/fo_man3.jpg" data-rel="lightcase:sort">
                                                <img src="images/project/fo_man3.jpg" alt="標題3" data-zoom-image="images/project/fo_man3.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <small class="d-block text-minor mt-1 text-center">* 點擊大圖可開啟相簿預覽模式</small>
                                <div class="thumbnail-wrap text-center">
                                    <div class="thumbnail-list active" data-num="0">
                                        <div class="thumbnail">
                                            <img src="images/project/fo_man1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="thumbnail-list" data-num="1">
                                        <div class="thumbnail">
                                            <img src="images/project/fo_man2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="thumbnail-list" data-num="2">
                                        <div class="thumbnail">
                                            <img src="images/project/fo_man3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="proitem-detail">
                                    <div class="proitem-sort">
                                        <h2 class="font-h6 font-weight-bold">作品名稱</h2>
                                        <div class="sort-item">
                                            <div class="discount-content p-0 mt-3 mb-4">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            尺寸 : 高150m
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            材質 : 銅
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>特色 : 內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內內容內容內容內容內容內容內容容</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <button class="btn btn-minor mt-5 font-weight-bold px-4" onclick="history.back()">返回</button> <!-- 主要消息 -->
            </div>
            <?php include 'footer.php' ?>
        </div>
        <?php include 'script.php' ?>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 2,
                spaceBetween: 0,
                breakpoints: {
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                },
            });

            var swiper2 = new Swiper('.swiper-container2', {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            $('.lightcase-item2').lightcase({
                shrinkFactor: 0.9,
            });

            $('.carousel-item').zoom({
                magnify: 2, // 預設1 代表圖片放大後 尺寸應為其正常大小的100% 值應該為 0 - 1 之間 值越小倍率就越小
            }); // 如沒設參數 預設效果為 mouseover
        </script>
</body>

</html>