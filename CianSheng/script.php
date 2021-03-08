<script type="text/javascript">
    // Add a script element as a child of the body
    function downloadJSAtOnload() {
        // JS 延後
        // 多項目
        var js_array = new Array(
            'js/bind.min.js?<?= filemtime("./js/bind.min.js") ?>',
            'js/plugin/all.min.js?<?= filemtime("./js/plugin/all.min.js") ?>'
        );
        $.each(js_array, function(i, item) {
            var element_js = document.createElement("script");
            element_js.src = js_array[i];
            document.body.appendChild(element_js);
        })
    }

    // Check for browser support of event handling capability
    if (window.addEventListener) {
        window.addEventListener("load", downloadJSAtOnload, false);
    } else if (window.attachEvent) {
        window.attachEvent("onload", downloadJSAtOnload);
    } else {
        window.onload = downloadJSAtOnload;
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/plugin/swiper-bundle.min.js"></script>
<script src="js/plugin/lightcase.js"></script>
<script src="js/plugin/jquery.zoom.min.js"></script>
<script src="js/main.min.js?<?= filemtime("./js/main.min.js") ?>"></script>