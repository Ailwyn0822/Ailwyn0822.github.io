<?php include 'head.php' ?>

<body>
    <div class="wrapper">
        <?php include 'header.php' ?>
        <div class="web-detail">
            <?php include 'web-header.php' ?>
            <div class="container news-wrap">
                <div class="row">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                    ?>
                        <div class="col-12 border-bottom pb-5 border-secondary mt-5">
                            <div class="news-other grid-wrap">
                                <div class="news-other-images">
                                    <div class="swiper_photo" style="background-image: url('images/news/fo_news1.jpg')"></div>
                                </div>
                                <div class="news-other-detail">
                                    <p class="font-h6 font-weight-bold border-bottom border-dark d-inline-block pb-2">新聞內容主標</p>
                                    <p class="text-left">分類 : 公告 </p>
                                    <p>刊登於 : 2020-12-05</p>
                                    <p>觀世音菩薩是東亞民間普遍敬仰崇拜的菩薩，在各種佛教圖像或造像中觀世音菩薩像也最為常見，而且種類繁多，佛教的經典上說觀世音菩薩的悲心廣大，世間眾生無論遭遇何種災難，若一心稱念觀世音菩薩名號，菩薩即時尋聲赴感，使之離苦得樂，故又稱大慈大悲觀世音菩薩，有「家家阿彌陀，戶戶觀世音」的讚譽。</p>
                                    <button class="btn rounded-0 btn-minor" onclick="location.href='news-detail.php'">
                                        了解更多 <i class="fas fa-angle-right ml-1"></i>
                                    <button>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- 分頁按鈕 -->
                <div class="mt-4 mb-4">
                    <div class="justify-content-center d-flex">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <?php include 'script.php' ?>
</body>

</html>