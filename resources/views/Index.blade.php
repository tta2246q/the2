<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noodp,index,follow" />
    <title>Bean Water </title>
    <meta name="keywords" content="Cập nhật sau" />

    <link rel="icon" href="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/favicon.png" type="image/x-icon" />
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/swiper.js" type="text/javascript"></script>
    <script src="assets/js/lazy.js" type="text/javascript"></script>


    <link rel="stylesheet" href="assets/css/bootstrap-4-3-min.css">
    <link href="assets/css/main.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/index.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/swiper.scss.css"rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/quickviews_popup_cart.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/breadcrumb_style.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/paginate.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/style_page.scss.css" rel="stylesheet" type="text/css" media="all" />

    <script>
        $(document).ready(function($) {
            awe_lazyloadImage();
        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
    
    <link href="assets/css/appcombo.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    
    @include('component.header')
    @yield('body')
    @include('component.footer')

    <a href="#" class="backtop" title="Lên đầu trang">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-up" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-up fa-w-10">
            <path fill="currentColor"
                d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"
                class=""></path>
        </svg>
    </a>

    <link href="assets/css/ajaxcart.scss.css" rel="stylesheet" type="text/css" media="all" />

    <script type="text/javascript" defer src="assets/js/quickview.js"></script>


    <script src="assets/js/placeholdertypewriter.js" type="text/javascript"></script>

    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/js/index.js" type="text/javascript"></script>

</body>

</html>
