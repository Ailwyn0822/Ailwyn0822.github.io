<?php include 'head.php' ?>

<body>
    <div class="wrapper">
        <?php include 'header.php' ?>
        <div class="web-detail">
            <?php include 'web-header.php' ?>
            <div class="container project_container">
                <div class="row main_project mb-3">
                    <div class="col-md-auto col-12 mt-2">
                        <select name="" id="" class="form-control">
                            <option value="金">金</option>
                            <option value="銀">銀</option>
                            <option value="木">木</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-4 text-center font-h5 mb-5">
                        <a class="d-block" href="project-detail.php">
                            <div class="item-image large mb-3">
                                <img src="images/index/fo_man1.jpg" alt="">
                            </div>
                            <p class="font-h6 text-dark font-weight-bold">湧蓮寺黃金觀世音</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 text-center font-h5 mb-5">
                        <a class="d-block" href="project-detail.php">
                            <div class="item-image large mb-3">
                                <img src="images/index/fo_man3.jpg" alt="">
                            </div>
                            <p class="font-h6 text-dark font-weight-bold">慶雲宮黃金天宮</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 text-center font-h5 mb-5">
                        <a class="d-block" href="project-detail.php">
                            <div class="item-image large mb-3">
                                <img src="images/index/fo_man2.jpg" alt="">
                            </div>
                            <p class="font-h6 text-dark font-weight-bold">聖天宮黃金三太子</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 text-center font-h5 mb-5">
                        <a class="d-block" href="project-detail.php">
                            <div class="item-image large mb-3">
                                <img src="images/index/fo_man1.jpg" alt="">
                            </div>
                            <p class="font-h6 text-dark font-weight-bold">登科宮純金玄天上帝</p>
                        </a>
                    </div>
                    <div class="col-6 col-lg-4 text-center font-h5 mb-5">
                        <a class="d-block" href="project-detail.php">
                            <div class="item-image large mb-3">
                                <img src="images/index/fo_man1.jpg" alt="">
                            </div>
                            <p class="font-h6 text-dark font-weight-bold">登科宮純金玄天上帝</p>
                        </a>
                    </div>
                </div>
            </div>
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
    </script>
</body>

</html>