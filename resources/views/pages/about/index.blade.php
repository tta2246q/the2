@extends('index')
@section('body')
    <section class="bread-crumb">
        <div class="container">
            <div class="title-bread-crumb">Giới thiệu</div>
            <ul class="breadcrumb">
                <li class="home">
                    <a href="index.html"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li><strong><span>Giới thiệu</span></strong></li>

            </ul>
        </div>
    </section>

    @include('component.svg')

    <section class="page page-about">
        <div class="container">
            <div class="page-title category-title">
                <h1 class="title-head d-none"><span>Giới thiệu</span></h1>
            </div>

            <div class="section_about" style="background-image:url(../assets/img/bg_about_page.jpg)">
                <div class="feed-background-overlay"></div>
                <div class="about-populated">
                    <div class="content_item">
                        <div class="title_ab">
                            <h2>Giới thiệu</h2>
                        </div>
                        <p class="title_about">Về Bean Water</p>
                        <p class="conent_about">Các sản phẩm nước uống văn phòng do chúng tôi phân phối được chiết suất từ
                            thiên nhiên, không qua bất kỳ quá trình xử lý hóa học nào, nó không những giúp bạn thanh nhiệt
                            cơ thể mà còn cung cấp cho bạn những khoáng chất thiết yếu để duy trì sinh lực và mang đến cho
                            bạn một cảm giác sản khoái, giúp bạn làm việc hiệu quả hơn. <br> Chúng tôi đảm bảo cung cấp cho
                            khách hàng các sản phẩm nước uống văn phòng chính hãng với dịch vụ giao hàng tận nơi trong thời
                            gian ngắn nhất và với giá thành tốt nhất. Vì vậy chúng tôi đảm bảo vệ sinh, hoàn toàn yên tâm
                            cho sức khỏe mọi người.</p>
                        <a class="view_more" href="gioi-thieu.html" title="Xem thêm">
                            Xem thêm<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>


            <div class="section_num">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6 item">
                        <div class="content">
                            <img width="98" height="100" class="img_small" src="../assets/img/icon_ts_1.png"
                                alt="12" />
                            <img class="img_big" src="../assets/img/drop.png" alt="12" />
                            <span class="num "><span class="counter">12</span></span>
                            <span class="title">Năm kinh nghiệm</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 item">
                        <div class="content">
                            <img width="98" height="100" class="img_small" src="../assets/img/icon_ts_2.png"
                                alt="12" />
                            <img class="img_big" src="../assets/img/drop.png" alt="12" />
                            <span class="num "><span class="counter">200</span></span>
                            <span class="title">Nhân viên</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 item">
                        <div class="content">
                            <img width="98" height="100" class="img_small" src="../assets/img/icon_ts_3.png"
                                alt="12" />
                            <img class="img_big" src="../assets/img/drop.png" alt="12" />
                            <span class="num "><span class="counter">3000</span>+</span>
                            <span class="title">Khách hàng</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 item">
                        <div class="content">
                            <img width="98" height="100" class="img_small" src="../assets/img/icon_ts_4.png"
                                alt="12" />
                            <img class="img_big" src="../assets/img/drop.png" alt="12" />
                            <span class="num "><span class="counter">8</span></span>
                            <span class="title">Cửa hàng</span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="section_product">
                <div class="title_product_1">
                    <h2><a href="san-pham-noi-bat.html" title="Sản phẩm nổi bật">Sản phẩm <span>nổi bật</span></a></h2>
                    <p class="title_content">Các sản phẩm nổi bật và được mua nhiều nhất!</p>
                </div>
                <div class="row row-fix">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36549356"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36549356"></div>
                                    <a class="image_thumb scale_hover" href="thung-nuoc-suoi-ly-wami-160ml.html"
                                        title="Thùng nước suối ly Wami 160ml">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/wami-160ml-dong-ly.jpg?v=1720862091987"
                                            alt="Thùng nước suối ly Wami 160ml">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121802551" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="thung-nuoc-suoi-ly-wami-160ml.html"
                                            data-handle="thung-nuoc-suoi-ly-wami-160ml" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        11%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="thung-nuoc-suoi-ly-wami-160ml" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="thung-nuoc-suoi-ly-wami-160ml.html"
                                            title="Thùng nước suối ly Wami 160ml">Thùng nước suối ly Wami 160ml</a></h3>
                                    <div class="price-box">
                                        110.000₫
                                        <span class="compare-price">123.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36549293"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36549293"></div>
                                    <a class="image_thumb scale_hover" href="thung-nuoc-perrier-250ml.html"
                                        title="Thùng nước Perrier 250ml">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/perrier-lon-250ml.jpg?v=1720861806633"
                                            alt="Thùng nước Perrier 250ml">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121802430" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="thung-nuoc-perrier-250ml.html"
                                            data-handle="thung-nuoc-perrier-250ml" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        2%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="thung-nuoc-perrier-250ml" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="thung-nuoc-perrier-250ml.html" title="Thùng nước Perrier 250ml">Thùng
                                            nước Perrier 250ml</a></h3>
                                    <div class="price-box">
                                        865.000₫
                                        <span class="compare-price">880.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36549213"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36549213"></div>
                                    <a class="image_thumb scale_hover" href="thung-nuoc-aquafina-5l.html"
                                        title="Thùng nước Aquafina 5L">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/aquafina-5l-1.jpg?v=1720861308770"
                                            alt="Thùng nước Aquafina 5L">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121801774" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="thung-nuoc-aquafina-5l.html"
                                            data-handle="thung-nuoc-aquafina-5l" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        11%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="thung-nuoc-aquafina-5l" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="thung-nuoc-aquafina-5l.html" title="Thùng nước Aquafina 5L">Thùng nước
                                            Aquafina 5L</a></h3>
                                    <div class="price-box">
                                        125.000₫
                                        <span class="compare-price">140.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36549135"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36549135"></div>
                                    <a class="image_thumb scale_hover" href="thung-nuoc-aquafina-500ml.html"
                                        title="Thùng nước Aquafina 500ml">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/thung-aquafina-500ml.jpg?v=1720860946680"
                                            alt="Thùng nước Aquafina 500ml">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121801263" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="thung-nuoc-aquafina-500ml.html"
                                            data-handle="thung-nuoc-aquafina-500ml" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        2%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="thung-nuoc-aquafina-500ml" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="thung-nuoc-aquafina-500ml.html" title="Thùng nước Aquafina 500ml">Thùng
                                            nước Aquafina 500ml</a></h3>
                                    <div class="price-box">
                                        122.000₫
                                        <span class="compare-price">125.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36548738"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36548738"></div>
                                    <a class="image_thumb scale_hover" href="thung-nuoc-aquafina-355ml.html"
                                        title="Thùng nước Aquafina 355ml">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/aquafina-355ml.jpg?v=1720860411560"
                                            alt="Thùng nước Aquafina 355ml">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121799877" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="thung-nuoc-aquafina-355ml.html"
                                            data-handle="thung-nuoc-aquafina-355ml" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        7%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="thung-nuoc-aquafina-355ml" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="thung-nuoc-aquafina-355ml.html" title="Thùng nước Aquafina 355ml">Thùng
                                            nước Aquafina 355ml</a></h3>
                                    <div class="price-box">
                                        112.000₫
                                        <span class="compare-price">121.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36548490"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36548490"></div>
                                    <a class="image_thumb scale_hover" href="thung-nuoc-khoang-lavie-1-5l.html"
                                        title="Thùng nước khoáng Lavie 1.5L">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/lavie-15l.jpg?v=1720859748207"
                                            alt="Thùng nước khoáng Lavie 1.5L">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121799540" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="thung-nuoc-khoang-lavie-1-5l.html"
                                            data-handle="thung-nuoc-khoang-lavie-1-5l" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        4%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="thung-nuoc-khoang-lavie-1-5l" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="thung-nuoc-khoang-lavie-1-5l.html"
                                            title="Thùng nước khoáng Lavie 1.5L">Thùng nước khoáng Lavie 1.5L</a></h3>
                                    <div class="price-box">
                                        103.000₫
                                        <span class="compare-price">107.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36548440"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36548440"></div>
                                    <a class="image_thumb scale_hover" href="thung-nuoc-aquafina-1-5l.html"
                                        title="Thùng nước Aquafina 1.5L">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/aquafina-1-5l.jpg?v=1720859351507"
                                            alt="Thùng nước Aquafina 1.5L">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121799398" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="thung-nuoc-aquafina-1-5l.html"
                                            data-handle="thung-nuoc-aquafina-1-5l" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        11%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="thung-nuoc-aquafina-1-5l" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="thung-nuoc-aquafina-1-5l.html" title="Thùng nước Aquafina 1.5L">Thùng
                                            nước Aquafina 1.5L</a></h3>
                                    <div class="price-box">
                                        124.000₫
                                        <span class="compare-price">140.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 col-fix">
                        <div class="item_product_main">

                            <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                class="variants product-action" data-cart-form data-id="product-actions-36548396"
                                enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <div class="sapo-combo-badge" data-id="36548396"></div>
                                    <a class="image_thumb scale_hover" href="nuoc-nui-lua-jeju-2l.html"
                                        title="Nước núi lửa Jeju 2L">
                                        <img width="480" height="480" class="lazyload image1"
                                            src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                            data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/jeju-2l.jpg?v=1720858993523"
                                            alt="Nước núi lửa Jeju 2L">
                                    </a>
                                    <div class="action">
                                        <input type="hidden" name="variantId" value="121798899" />
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                        <a title="Xem nhanh" href="nuoc-nui-lua-jeju-2l.html"
                                            data-handle="nuoc-nui-lua-jeju-2l" class="quick-view btn-views">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-quickview"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="smart"><span>-
                                        8%
                                    </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="nuoc-nui-lua-jeju-2l" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                                    </svg>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                            href="nuoc-nui-lua-jeju-2l.html" title="Nước núi lửa Jeju 2L">Nước núi lửa
                                            Jeju 2L</a></h3>
                                    <div class="price-box">
                                        180.000₫
                                        <span class="compare-price">196.000₫</span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="view-more clearfix">
                    <a href="san-pham-noi-bat.html" title="Xem tất cả" class="btn">
                        Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>


            <div class="section_why">
                <div class="title-module-danh-gia">
                    <h2>Tại sao chọn <span>Bean Water</span></h2>
                    <p class="content-module">Hương vị tươi mát của nước tự nhiên</p>
                </div>
                <div class="chinh_sch_ove">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="item_chinh_sach">
                                <div class="icon_cs_1">
                                    <img width="64" height="64" class="lazyload"
                                        src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/icon_lydo_1.png?1726484223626"
                                        alt="Nguồn nước tự nhiên">
                                </div>
                                <div class="count-box">01</div>
                                <div class="box_content_cs">
                                    <p class="title_cs">Nguồn nước tự nhiên</p>
                                    <p class="content_cs">Nguồn nước tự nhiên giúp giữ trọn tinh hoa của tự nhiên và chứa
                                        các khoáng chất thiết yếu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="item_chinh_sach">
                                <div class="icon_cs_1">
                                    <img width="64" height="64" class="lazyload"
                                        src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/icon_lydo_2.png?1726484223626"
                                        alt="Chất lượng Nestle">
                                </div>
                                <div class="count-box">02</div>
                                <div class="box_content_cs">
                                    <p class="title_cs">Chất lượng Nestle</p>
                                    <p class="content_cs">Sản xuất theo công nghệ từ Châu Âu, dưới sự giám sát chất lượng,
                                        quy trình của Nestle Water </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item_cs_last">
                            <div class="item_chinh_sach ">
                                <div class="icon_cs_1">
                                    <img width="64" height="64" class="lazyload"
                                        src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/icon_lydo_3.png?1726484223626"
                                        alt="Miễn phí vận chuyển">
                                </div>
                                <div class="count-box">03</div>
                                <div class="box_content_cs">
                                    <p class="title_cs">Miễn phí vận chuyển</p>
                                    <p class="content_cs">Miễn phí giao hàng với bất kì đơn hàng nào. Hãy nhanh tay đặt
                                        hàng cùng Bean Water!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item_cs_last">
                            <div class="item_chinh_sach ">
                                <div class="icon_cs_1">
                                    <img width="64" height="64" class="lazyload"
                                        src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/icon_lydo_4.png?1726484223626"
                                        alt="Giá cả tối ưu">
                                </div>
                                <div class="count-box">04</div>
                                <div class="box_content_cs">
                                    <p class="title_cs">Giá cả tối ưu</p>
                                    <p class="content_cs">Mang đến cho bạn những sản phẩm tốt nhất và giá cả phù hợp với
                                        từng đối tượng khách hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
