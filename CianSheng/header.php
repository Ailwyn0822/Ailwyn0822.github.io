<?php include 'modal.php' ?>
<div class="loading-wrap bg-gradual-minor">
    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</div>
<div class="mask-backdrop"></div>

<header id="header">
    <div class="logo-wrap p-0">
        <div class="container">
            <div class="grid-wrap p-0">
                <i class="fas fa-bars fa-lg bar-btn"></i>
                <div class="grid">
                    <a class="d-inline-block" href="./">
                        <img class="img-fluid" src="images/logo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 選項按鈕 -->
    <ul class="menu-item">
        <div class="mobile-search d-lg-none">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="產品關鍵字">
                <div class="input-group-append">
                    <button class="btn btn-minor" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="grid-wrap justify-content-center align-items-center">
                <li class="grid-lg-auto grid-12 menu-list">
                    <a href="about.php" class="del_a">
                        <div class="grid-wrap">
                            <span>關於我們</span>
                            <i class="fas fa-caret-down d-md-none"></i>
                        </div>
                    </a>
                    <ul class="menu-sort">
                        <li><a href="about.php">關於阡聖</a></li>
                        <li><a href="service.php">服務項目</a></li>
                    </ul>
                </li>
                <li class="grid-lg-auto grid-12 menu-list">
                    <a href="project.php" class="del_a">
                        <div class="grid-wrap">
                            <span>專案作品</span>
                            <i class="fas fa-caret-down d-md-none"></i>
                        </div>
                    </a>
                    <ul class="menu-sort">
                        <li><a href="project.php">佛祖系列</a></li>
                        <li><a href="project.php">神明系列</a></li>
                        <li><a href="project.php">金爐</a></li>
                        <li><a href="project.php">銅鐘</a></li>
                        <li><a href="project.php">燈</a></li>
                    </ul>
                </li>
                <li class="grid-lg-auto grid-12 menu-list">
                    <a href="news.php" class="del_a">
                        <div class="grid-wrap">
                            <span>最新消息</span>
                            <i class="fas fa-caret-down d-md-none"></i>
                        </div>
                    </a>
                    <ul class="menu-sort">
                        <li><a href="news.php">活動消息</a></li>
                        <li><a href="news.php">新聞公告</a></li>
                        <li><a href="video.php">媒體影音</a></li>
                    </ul>
                </li>
                <li class="grid-lg-auto grid-12 menu-list"><a href="contact.php">聯絡我們</a></li>
                <li class="grid-lg-auto grid-12 menu-list d-lg-flex justify-content-center align-items-center d-none ">
                    <a href="javascript: void(0)" class="search_computer">
                        <input class="form-control form-control-sm w-auto mw-100 mx-auto d-inline-block mr-1 float-left" type="text" placeholder="搜尋作品">
                        <a href="project.php" class="search-product-btn pc"><i class="fas fa-search"></i></a>
                    </a>
                </li>
                <li class="grid-lg-auto grid-12 menu-list">
                    <a href="news.php" class="del_a">
                        <div class="grid-wrap">
                            <span>語系選擇</span>
                            <i class="fas fa-caret-down d-md-none"></i>
                        </div>
                    </a>
                    <ul class="menu-sort">
                        <li><a href="news.php">繁體中文</a></li>
                        <li><a href="news.php">簡體中文</a></li>
                        <li><a href="news.php">英文</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </ul>
</header>
<a href="#"><i class="fas fa-arrow-up"></i></a>