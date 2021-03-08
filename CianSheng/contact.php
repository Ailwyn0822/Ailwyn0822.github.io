<?php include 'head.php' ?>

<body>
    <div class="wrapper">
        <?php include 'header.php' ?>
        <div class="web-detail">
            <?php include 'web-header.php' ?>
            <div class="container contact_container">
                <div class="row mt-5">
                    <div class="col-12 col-lg-6 mb-3">
                        <p class="font-h4 mb-3 text-center">《線上聯絡表單》</p>
                        <p class="form-info">若你對阡聖作的作產品或服務有任何疑問或建議，請填寫下列表單，我們將盡快與您聯絡，阡聖宗教藝術文物廠非常歡迎來電洽詢，謝謝!!</p>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form_group">
                                    <label for="contact_person_name"></label>
                                    <input class="form-control" type="text" id="contact_person_name" value="" placeholder="請輸入聯絡人姓名" name="contact_person_name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="from_group">
                                    <label for="contact_person_phone"></label>
                                    <input class="form-control" type="text" id="contact_person_phone" value="" placeholder="請輸入聯絡人電話" name="contact_person_phone">
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <label for="contact_person_title"></label>
                            <input type="text" class="form-control" id="contact_person_title" value="" placeholder="請輸入聯絡主旨" name="contact_person_title">
                        </div>
                        <div class="form_group">
                            <label for="contact_person_content"></label>
                            <textarea class="form-control" name="contact_person_content" id="contact_person_content" cols="30" rows="10" placeholder="請輸入需求內容"></textarea>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="form_group">
                                    <label for="verification_code"></label>
                                    <input type="text" class="form-control" id="verification_code" value="" placeholder="請輸入驗證碼" name="verification_code">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form_group">
                                    <div class="code d-flex">
                                        <p class="pt-4 mr-5">TCXA157</p>
                                        <a href=""><i class="fas fa-undo-alt font-h5 mt-3 text-dark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <button class="btn btn-dark mt-4">送出表單</button>
                    </div>
                    <div class="col-12 col-lg-6 pl-5 pr-5 text-center d-flex flex-column justify-content-center">
                        <img class="img-fluid w-100" src="images/contact/contactpic.png" alt="">
                        <p class="mt-4">傳承四代：洪鉦傑0975-601237</p>
                        <p class="mt-4">洪滋森0988-801716</p>
                        <p class="mt-4">電話：049-2302414</p>
                        <p class="mt-4">地址：南投縣草屯鎮芬草路388號</p>
                    </div>
                </div>
                <div class="mt-5 mt-lg-2">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1083.6979860554613!2d120.67169422969066!3d23.991856872421398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469307f32322a19%3A0xdd8793fd2b4e7c60!2zNTQy5Y2X5oqV57ij6I2J5bGv6Y6u6Iqs6I2J6Lev5LqM5q61Mzg46Jmf!5e0!3m2!1szh-TW!2stw!4v1607417962343!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <?php include 'script.php' ?>
</body>

</html>