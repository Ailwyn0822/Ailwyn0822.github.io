<?php include 'head.php' ?>

<body>
    <div class=" wrapper">
        <?php include 'header.php' ?>
        <div class="web-detail">
            <?php include 'web-header.php' ?>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-auto col-12 mt-2">
                        <select name="" id="" class="form-control">
                            <option value="關於我們">關於我們</option>
                            <option value="服務項目">服務項目</option>
                        </select>
                    </div>
                </div>
                <div class="about-wrap mt-5">
                    <div class="about-list text-center">
                        <!-- 圖文版 -->
                        <h6 class="font-h6 text-center font-weight-bold mb-5">《洪園紀念文物館》</h6>
                        <img class="img-fluid mb-5" src="images/about/unnamed.jpg" alt="">
                        <p>內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容</p>
                    </div>
                    <div class="about-list text-center">
                        <!-- 純文字版 -->
                        <p class="font-h6 font-weight-bold mt-5">《鎏金工藝大師》</h6>
                            <p class="mt-5">內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容</p>
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
            spaceBetween: 30,
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>
</body>

</html>