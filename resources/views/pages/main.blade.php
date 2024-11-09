@extends('index')
@section('body')






<div class="home-slider swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="clearfix" title="Slider">
                <picture>
                    <source media="(min-width: 1200px)"
                        srcset="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/slider_1.jpg">
                    <source media="(min-width: 992px)"
                        srcset="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/slider_1.jpg">
                    <source media="(min-width: 569px)"
                        srcset="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/slider_1.jpg">
                    <source media="(max-width: 567px)"
                        srcset="http://bizweb.dktcdn.net/thumb/large/100/521/251/themes/960910/assets/slider_1.jpg">
                    <img width="1920" height="940"
                        src="http://bizweb.dktcdn.net/thumb/grande/100/521/251/themes/960910/assets/slider_1.jpg"
                        alt="Slider" class="img-responsive" />
                </picture>
            </div>
            <div class="slider-text">
                <h2 class="title">
                    Sự tinh khiết đến
                </h2>
                <div class="content">
                    Hoàn hảo
                </div>
                <div class="content2">
                    Để uống loại nước tốt nhất hãy đến với chúng tôi và đặt hàng và lấy nước an toàn cho bạn.
                </div>
                <div class="box_button">
                    <a class="button" href="collections/all.html" title="Đặt hàng ngay">Đặt hàng ngay</a>
                    <a class="button button2" href="collections/all.html" title="Xem thêm">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="clearfix" title="Slider">
                <picture>
                    <source media="(min-width: 1200px)"
                        srcset="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/slider_2.jpg">
                    <source media="(min-width: 992px)"
                        srcset="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/slider_2.jpg">
                    <source media="(min-width: 569px)"
                        srcset="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/slider_2.jpg">
                    <source media="(max-width: 567px)"
                        srcset="http://bizweb.dktcdn.net/thumb/large/100/521/251/themes/960910/assets/slider_2.jpg">
                    <img width="1920" height="940"
                        src="http://bizweb.dktcdn.net/thumb/grande/100/521/251/themes/960910/assets/slider_2.jpg"
                        alt="Slider" class="img-responsive" />
                </picture>
            </div>
            <div class="slider-text">
                <h2 class="title">
                    Vị ngon của sự
                </h2>
                <div class="content">
                    Tinh khiết
                </div>
                <div class="content2">
                    Nước uống Aqua được sản xuất theo tiêu chuẩn nước uống của Tổ Chức Sức Khỏe Thế Giới
                </div>
                <div class="box_button">
                    <a class="button" href="collections/all.html" title="Đặt hàng ngay">Đặt hàng ngay</a>
                    <a class="button button2" href="collections/all.html" title="Xem thêm">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var swiper = new Swiper('.home-slider', {
        autoplay: false,
        speed: 2600,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        }
    });
</script>

<section class="section_ingredient">
    <div class="container">
        <div class="title_ingredient">
            <h2>Thành phần <span>Nước</span></h2>
            <p class="title_content">Có gì bên trong?</p>
        </div>
        <div class="box_ingredient">
            <div class="box_ingre or_img">
                <div class="bg_ingredient">
                    <img width="372" height="497" class="lazyload"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/bg_ingredient.jpg"
                        alt="Thành phần Nước" />
                </div>
            </div>
            <div class="box_ingre or_1">
                <div class="item_ingre">
                    <h3>Canxi Ca2+</h3>
                    <p class="title_one">240 mg/L</p>
                    <p class="content_one">Khoảng 99% lượng canxi trong cơ thể chúng ta nằm ở xương và răng.</p>
                </div>
                <div class="item_ingre">
                    <h3>Natri Na+</h3>
                    <p class="title_one">5,2 mg/L</p>
                    <p class="content_one">Nó là một thành phần quan trọng cho chức năng cơ và thần kinh thích hợp.
                    </p>
                </div>
                <div class="item_ingre">
                    <h3>Nitrat NO3-</h3>
                    <p class="title_one">4,4 mg/L</p>
                    <p class="content_one">Sẽ rất tốt cho sức khỏe nếu uống nước có hàm lượng nitrat dưới 10 mg/L
                    </p>
                </div>
            </div>
            <div class="box_ingre or_3">
                <div class="item_ingre_2 item_mob">
                    <h3>Canxi Ca2+</h3>
                    <p class="title_one">240 mg/L</p>
                    <p class="content_one">Khoảng 99% lượng canxi trong cơ thể chúng ta nằm ở xương và răng.</p>
                </div>
                <div class="item_ingre_2 item_mob">
                    <h3>Natri Na+</h3>
                    <p class="title_one">5,2 mg/L</p>
                    <p class="content_one">Nó là một thành phần quan trọng cho chức năng cơ và thần kinh thích hợp.
                    </p>
                </div>
                <div class="item_ingre_2 item_mob">
                    <h3>Nitrat NO3-</h3>
                    <p class="title_one">4,4 mg/L</p>
                    <p class="content_one">Sẽ rất tốt cho sức khỏe nếu uống nước có hàm lượng nitrat dưới 10 mg/L
                    </p>
                </div>
                <div class="item_ingre_2">
                    <h3>Magie Mg2+</h3>
                    <p class="title_one">42 mg/L</p>
                    <p class="content_one">Magie là chất dinh dưỡng mà cơ thể cần để duy trì sức khỏe và năng
                        lượng.
                    </p>
                </div>
                <div class="item_ingre_2">
                    <h3>Sunfat SO4(2-)</h3>
                    <p class="title_one">400 mg/L</p>
                    <p class="content_one">Sulfate là một trong những chất dinh dưỡng đa lượng quan trọng nhất
                        trong
                        tế bào.</p>
                </div>
                <div class="item_ingre_2">
                    <h3>Bicacbonat</h3>
                    <p class="title_one">384 mg/L</p>
                    <p class="content_one">Bicarbonate là thuốc kháng axit được sử dụng để làm giảm chứng ợ nóng và
                        khó tiêu do axit.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="section_product_noibat e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1" data-view="grid_4">
    <div class="container">
        <div class="title_noi_bat">
            <h2><a href="san-pham-noi-bat.html" title="Sản phẩm Nổi bật">Sản phẩm <span>Nổi bật</span></a></h2>
        </div>
        <ul class="tabs tabs-title tab-desktop ajax clearfix">





            <li class="tab-link has-content" data-tab="tab-1" data-url="tat-ca-san-pham">
                <span class="line-clamp line-clamp-1" title="Tất Cả">Tất Cả</span>
            </li>





            <li class="tab-link " data-tab="tab-2" data-url="may-nong-lanh">
                <span class="line-clamp line-clamp-1" title="Máy nóng lạnh">Máy nóng lạnh</span>
            </li>





            <li class="tab-link " data-tab="tab-3" data-url="ke-de-binh">
                <span class="line-clamp line-clamp-1" title="Kệ để bình">Kệ để bình</span>
            </li>





            <li class="tab-link " data-tab="tab-4" data-url="phu-kien-uong-nuoc">
                <span class="line-clamp line-clamp-1" title="Phụ kiện">Phụ kiện</span>
            </li>



        </ul>





        <div class="tab-1 tab-content">
            <div class="row row-fix load-after" data-section="section_product_noibat">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item_null">
                    <div class="item_product_main">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item_null">
                    <div class="item_product_main">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item_null">
                    <div class="item_product_main">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item_null">
                    <div class="item_product_main">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item_null">
                    <div class="item_product_main">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 item_null">
                    <div class="item_product_main">
                    </div>
                </div>
                <script type="text/x-custom-template" data-template="section_product_noibat">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col-fix">		

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36466478" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36466478"></div>
    <a class="image_thumb scale_hover" href="/nuoc-ion-life-19l-binh-co-voi" title="Nước ion Life 19L bình có vòi">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/ion-life-19l.jpg?v=1720423515773" alt="Nước ion Life 19L bình có vòi">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121793135" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-ion-life-19l-binh-co-voi" data-handle="nuoc-ion-life-19l-binh-co-voi" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
7% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-ion-life-19l-binh-co-voi" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-ion-life-19l-binh-co-voi" title="Nước ion Life 19L bình có vòi">Nước ion Life 19L bình có vòi</a></h3>
    <div class="price-box">
        79.000₫
        <span class="compare-price">85.000₫</span>

    </div>
</div>
</form>				</div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col-fix">		

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36467218" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36467218"></div>
    <a class="image_thumb scale_hover" href="/nuoc-khoang-vinh-hao-20l-binh-co-voi" title="Nước khoáng Vĩnh Hảo 20L bình có vòi">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/vinh-hao-20l-voi.jpg?v=1720426980193" alt="Nước khoáng Vĩnh Hảo 20L bình có vòi">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121389491" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-khoang-vinh-hao-20l-binh-co-voi" data-handle="nuoc-khoang-vinh-hao-20l-binh-co-voi" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
6% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-khoang-vinh-hao-20l-binh-co-voi" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-khoang-vinh-hao-20l-binh-co-voi" title="Nước khoáng Vĩnh Hảo 20L bình có vòi">Nước khoáng Vĩnh Hảo 20L bình có vòi</a></h3>
    <div class="price-box">
        80.000₫
        <span class="compare-price">85.000₫</span>

    </div>
</div>
</form>				</div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col-fix">		

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36475062" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36475062"></div>
    <a class="image_thumb scale_hover" href="/nuoc-lavie-viva-19l-binh-co-voi" title="Nước Lavie Viva 19L bình có vòi">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/viva-19l-voi.jpg?v=1720509651293" alt="Nước Lavie Viva 19L bình có vòi">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121443680" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-lavie-viva-19l-binh-co-voi" data-handle="nuoc-lavie-viva-19l-binh-co-voi" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
4% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-lavie-viva-19l-binh-co-voi" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-lavie-viva-19l-binh-co-voi" title="Nước Lavie Viva 19L bình có vòi">Nước Lavie Viva 19L bình có vòi</a></h3>
    <div class="price-box">
        69.000₫
        <span class="compare-price">72.000₫</span>

    </div>
</div>
</form>				</div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col-fix">		

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36475119" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36475119"></div>
    <a class="image_thumb scale_hover" href="/nuoc-petal-19l-binh-co-voi" title="Nước Petal 19L bình có vòi">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/petal-19l-voi.jpg?v=1720510011963" alt="Nước Petal 19L bình có vòi">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121443798" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-petal-19l-binh-co-voi" data-handle="nuoc-petal-19l-binh-co-voi" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
4% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-petal-19l-binh-co-voi" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-petal-19l-binh-co-voi" title="Nước Petal 19L bình có vòi">Nước Petal 19L bình có vòi</a></h3>
    <div class="price-box">
        43.000₫
        <span class="compare-price">45.000₫</span>

    </div>
</div>
</form>				</div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col-fix">		

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36475294" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36475294"></div>
    <a class="image_thumb scale_hover" href="/nuoc-sapuwa-19l-binh-co-voi" title="Nước Sapuwa 19L bình có vòi">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/sapuwa-19l-voi.jpg?v=1720510570467" alt="Nước Sapuwa 19L bình có vòi">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121446401" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-sapuwa-19l-binh-co-voi" data-handle="nuoc-sapuwa-19l-binh-co-voi" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
12% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-sapuwa-19l-binh-co-voi" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-sapuwa-19l-binh-co-voi" title="Nước Sapuwa 19L bình có vòi">Nước Sapuwa 19L bình có vòi</a></h3>
    <div class="price-box">
        59.000₫
        <span class="compare-price">67.000₫</span>

    </div>
</div>
</form>				</div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 col-fix">		

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36475495" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36475495"></div>
    <a class="image_thumb scale_hover" href="/nuoc-tinh-khiet-vihawa-20l-binh-co-voi" title="Nước tinh khiết Vihawa 20L bình có vòi">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/vihawa-20l-voi.jpg?v=1720511309597" alt="Nước tinh khiết Vihawa 20L bình có vòi">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121446732" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-tinh-khiet-vihawa-20l-binh-co-voi" data-handle="nuoc-tinh-khiet-vihawa-20l-binh-co-voi" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
21% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-tinh-khiet-vihawa-20l-binh-co-voi" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-tinh-khiet-vihawa-20l-binh-co-voi" title="Nước tinh khiết Vihawa 20L bình có vòi">Nước tinh khiết Vihawa 20L bình có vòi</a></h3>
    <div class="price-box">
        65.000₫
        <span class="compare-price">82.000₫</span>

    </div>
</div>
</form>				</div>

            </script>
            </div>
            <div class="view-more clearfix">
                <a href="tat-ca-san-pham.html" title="Xem tất cả" class="btn">
                    Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>





        <div class="tab-2 tab-content">
        </div>





        <div class="tab-3 tab-content">
        </div>





        <div class="tab-4 tab-content">
        </div>



    </div>
</section>
<script>
    $(document).ready(function($) {
        lazyBlockProduct('section_product_noibat', '0px 0px -250px 0px');
    });
</script>




<section class="section_3_banner">
    <div class="container">
        <div class="box_3_banner">
            <div class="item_3_banner">
                <div class="content_banner">
                    <img width="150" height="150" class="lazyload"
                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/3_banner_1.png"
                        alt="Thành phần tuyệt vời">
                    <p class="title_banner">Thành phần tuyệt vời</p>
                    <p class="des_banner">Chứa H2 và O2 mà không có bất kỳ thành phần khoáng chất và các vi sinh
                        vật
                        có hại nào khác</p>
                    <div class="view-more clearfix">
                        <a href="collections/all.html" title="Xem thêm" class="btn">
                            Xem thêm <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item_3_banner">
                <div class="content_banner">
                    <img width="150" height="150" class="lazyload"
                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/3_banner_2.png"
                        alt="Vận chuyển nhanh">
                    <p class="title_banner">Vận chuyển nhanh</p>
                    <p class="des_banner">Giao hàng nhanh và đảm bảo đến tay khách hàng trong khu vực Hồ Chí Minh
                        và
                        các tỉnh lân cận khác</p>
                    <div class="view-more clearfix">
                        <a href="collections/all.html" title="Xem thêm" class="btn">
                            Xem thêm <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item_3_banner">
                <div class="content_banner">
                    <img width="150" height="150" class="lazyload"
                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                        data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/3_banner_3.png"
                        alt="Lọc nano">
                    <p class="title_banner">Lọc nano</p>
                    <p class="des_banner">Màng lọc siêu nhỏ tạp chất, vi khuẩn và bụi bẩn từ nguồn nước đầu vào sẽ
                        được loại bỏ triệt để</p>
                    <div class="view-more clearfix">
                        <a href="collections/all.html" title="Xem thêm" class="btn">
                            Xem thêm <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="section_why_choose">
    <div class="ux-shape-divider"></div>
    <div class="ux-shape-divider dividertop"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 order-lg-2 order-md-2">
                <h2 class="title_choose_2">Dịch vụ <span>Giao hàng</span></h2>
                <p class="content_choose">Dịch vụ giao hàng của chúng tôi sử dụng hơn 100 nhân viên chuyển phát
                    chuyên nghiệp. Chúng tôi sẽ giao nước đến nhà bạn trong 1 giờ tới bất kỳ nơi nào trong thành
                    phố.</p>
                <ul class="faq">
                    <li>
                        <h3><i class="icon_mask"></i> Giao hàng miễn phí khu vực HCM</h3>
                    </li>
                    <li>
                        <h3><i class="icon_mask"></i> Mở cửa tất cả các ngày</h3>
                    </li>
                    <li>
                        <h3><i class="icon_mask"></i> Thời gian làm việc 8:00 – 22:00</h3>
                    </li>
                </ul>
                <div class="view-more clearfix">
                    <a href="dat-nuoc-ngay.html" title="Đặt nước ngay" class="btn">
                        Đặt nước ngay <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 order-lg-1 order-md-1">
                <div class="img_thm">
                    <div class="box_img">
                        <img width="596" height="643" class="lazyload"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                            data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/bg_video_why.jpg"
                            alt="Dịch vụ Giao hàng" />
                    </div>
                    <div class="icon_video open_video" data-video="xzpL0kDWw_I">
                        <span><i></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup_video position-fixed w-100 h-100 justify-content-center align-items-center d-flex">
        <div class="position-relative max-100">
            <a href="javascript:;"
                class="close_video position-absolute d-flex m_white_bg_module justify-content-center align-items-center"
                title="Đóng"><img width="16" height="16" alt="Đóng"
                    src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/close.svg"></a>
            <div class="b_video p-2 p-md-3 m_white_bg_module rounded m-auto"></div>
        </div>
    </div>
</section>
<script>
    let videos = document.querySelectorAll('.open_video');
    let popupVideo = document.querySelector('.popup_video');
    let close_vd = document.querySelectorAll('.close_video');
    var dataset = 'xzpL0kDWw_I';
    videos.forEach(v => v.addEventListener('click', function(e) {
        e.preventDefault();
        e.target.dataset.video = dataset;
        popupVideo.classList.add('open');
        popupVideo.querySelector('.b_video').innerHTML =
            `<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/${e.target.dataset.video}?enablejsapi=1" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>`
    }));
    close_vd.forEach(v => v.addEventListener('click', function(e) {
        e.preventDefault();
        popupVideo.classList.remove('open');
        setTimeout(function() {
            popupVideo.querySelector('.b_video').innerHTML = ``
        }, 500);
    }))
    $('.faq li h3').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('li').find('.content-faq').slideToggle();
        $this.parents('li').toggleClass('active');
        return false;
    });
</script>




<section class="section_product_1">
    <div class="container">
        <div class="title_product_1">
            <h2><a href="nuoc-aquafina.html" title="Nước suối Aquafina">Nước suối <span>Aquafina</span></a></h2>
            <p class="title_content">Vị ngon của sự tinh khiết</p>
        </div>
        <div class="product-col1-swiper swiper-container">
            <div class="swiper-wrapper load-after" data-section="section_product_1">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                    <div class="item_product_main"></div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                    <div class="item_product_main"></div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                    <div class="item_product_main"></div>
                </div>
                <script type="text/x-custom-template" data-template="section_product_1">
                            <div class="swiper-slide">
                <div class="item_product_main">

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36549135" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36549135"></div>
    <a class="image_thumb scale_hover" href="/thung-nuoc-aquafina-500ml" title="Thùng nước Aquafina 500ml">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/thung-aquafina-500ml.jpg?v=1720860946680" alt="Thùng nước Aquafina 500ml">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121801263" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/thung-nuoc-aquafina-500ml" data-handle="thung-nuoc-aquafina-500ml" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
2% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="thung-nuoc-aquafina-500ml" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/thung-nuoc-aquafina-500ml" title="Thùng nước Aquafina 500ml">Thùng nước Aquafina 500ml</a></h3>
    <div class="price-box">
        122.000₫
        <span class="compare-price">125.000₫</span>

    </div>
</div>
</form>					</div>
            </div>
            <div class="swiper-slide">
                <div class="item_product_main">

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36548738" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36548738"></div>
    <a class="image_thumb scale_hover" href="/thung-nuoc-aquafina-355ml" title="Thùng nước Aquafina 355ml">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/aquafina-355ml.jpg?v=1720860411560" alt="Thùng nước Aquafina 355ml">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121799877" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/thung-nuoc-aquafina-355ml" data-handle="thung-nuoc-aquafina-355ml" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
7% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="thung-nuoc-aquafina-355ml" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/thung-nuoc-aquafina-355ml" title="Thùng nước Aquafina 355ml">Thùng nước Aquafina 355ml</a></h3>
    <div class="price-box">
        112.000₫
        <span class="compare-price">121.000₫</span>

    </div>
</div>
</form>					</div>
            </div>
            <div class="swiper-slide">
                <div class="item_product_main">

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36548440" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36548440"></div>
    <a class="image_thumb scale_hover" href="/thung-nuoc-aquafina-1-5l" title="Thùng nước Aquafina 1.5L">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/aquafina-1-5l.jpg?v=1720859351507" alt="Thùng nước Aquafina 1.5L">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121799398" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/thung-nuoc-aquafina-1-5l" data-handle="thung-nuoc-aquafina-1-5l" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
11% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="thung-nuoc-aquafina-1-5l" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/thung-nuoc-aquafina-1-5l" title="Thùng nước Aquafina 1.5L">Thùng nước Aquafina 1.5L</a></h3>
    <div class="price-box">
        124.000₫
        <span class="compare-price">140.000₫</span>

    </div>
</div>
</form>					</div>
            </div>
            <div class="swiper-slide">
                <div class="item_product_main">

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36549213" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36549213"></div>
    <a class="image_thumb scale_hover" href="/thung-nuoc-aquafina-5l" title="Thùng nước Aquafina 5L">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/aquafina-5l-1.jpg?v=1720861308770" alt="Thùng nước Aquafina 5L">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121801774" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/thung-nuoc-aquafina-5l" data-handle="thung-nuoc-aquafina-5l" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
11% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="thung-nuoc-aquafina-5l" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/thung-nuoc-aquafina-5l" title="Thùng nước Aquafina 5L">Thùng nước Aquafina 5L</a></h3>
    <div class="price-box">
        125.000₫
        <span class="compare-price">140.000₫</span>

    </div>
</div>
</form>					</div>
            </div>

            </script>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="view-more clearfix">
            <a href="nuoc-aquafina.html" title="Xem tất cả" class="btn">
                Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>

    </div>
</section>
<script>
    $(document).ready(function($) {
        function runSwiperCol1() {
            var col1_pro = null;

            function initSwiperCol1() {
                col1_pro = new Swiper('.product-col1-swiper', {
                    slidesPerView: 3,
                    loop: false,
                    grabCursor: true,
                    roundLengths: true,
                    slideToClickedSlide: false,
                    spaceBetween: 20,
                    autoplay: false,
                    navigation: {
                        nextEl: '.product-col1-swiper .swiper-button-next',
                        prevEl: '.product-col1-swiper .swiper-button-prev',
                    },
                    breakpoints: {
                        280: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },
                        500: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperCol1() {
                if (col1_pro) {
                    col1_pro.destroy(true, true);
                    col1_pro = null;
                }
            }

            function toggleSwiperCol1() {
                if ($(window).width() <= 767 && col1_pro) {
                    destroySwiperCol1();
                } else if ($(window).width() > 767 && !col1_pro) {
                    initSwiperCol1();
                }
            }
            toggleSwiperCol1();
            $(window).resize(toggleSwiperCol1);
        }
        lazyBlockProduct('section_product_1', '0px 0px -250px 0px', runSwiperCol1);
    });
</script>




<section class="section_banner">
    <div class="container">
        <a href="collections/all.html" class="img_baner" title="Banner">
            <img width="1200" height="344" class="lazyload"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/img_banner_index.jpg"
                alt="Banner" />
        </a>
    </div>
</section>




<section class="section_product_2">
    <div class="container">
        <div class="title_product_2">
            <h2><a href="nuoc-lavie.html" title="Nước khoáng La Vie">Nước khoáng <span>La Vie</span></a></h2>
            <p class="title_content">Một chút yên từ thiên nhiên</p>
        </div>
        <div class="product-col2-swiper swiper-container">
            <div class="swiper-wrapper load-after" data-section="section_product_2">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                    <div class="item_product_main"></div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                    <div class="item_product_main"></div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 swiper-slide item_null">
                    <div class="item_product_main"></div>
                </div>
                <script type="text/x-custom-template" data-template="section_product_2">
                            <div class="swiper-slide">
                <div class="item_product_main">

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36548490" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36548490"></div>
    <a class="image_thumb scale_hover" href="/thung-nuoc-khoang-lavie-1-5l" title="Thùng nước khoáng Lavie 1.5L">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/lavie-15l.jpg?v=1720859748207" alt="Thùng nước khoáng Lavie 1.5L">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121799540" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/thung-nuoc-khoang-lavie-1-5l" data-handle="thung-nuoc-khoang-lavie-1-5l" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
4% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="thung-nuoc-khoang-lavie-1-5l" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/thung-nuoc-khoang-lavie-1-5l" title="Thùng nước khoáng Lavie 1.5L">Thùng nước khoáng Lavie 1.5L</a></h3>
    <div class="price-box">
        103.000₫
        <span class="compare-price">107.000₫</span>

    </div>
</div>
</form>					</div>
            </div>
            <div class="swiper-slide">
                <div class="item_product_main">

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36547783" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36547783"></div>
    <a class="image_thumb scale_hover" href="/nuoc-khoang-lavie-19l-dong-binh-up" title="Nước khoáng Lavie 19L đóng bình úp">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/lavie-19l-up.jpg?v=1720855075380" alt="Nước khoáng Lavie 19L đóng bình úp">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121797004" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-khoang-lavie-19l-dong-binh-up" data-handle="nuoc-khoang-lavie-19l-dong-binh-up" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
11% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-khoang-lavie-19l-dong-binh-up" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-khoang-lavie-19l-dong-binh-up" title="Nước khoáng Lavie 19L đóng bình úp">Nước khoáng Lavie 19L đóng bình úp</a></h3>
    <div class="price-box">
        71.000₫
        <span class="compare-price">80.000₫</span>

    </div>
</div>
</form>					</div>
            </div>
            <div class="swiper-slide">
                <div class="item_product_main">

<form action="/cart/add" method="post" class="variants product-action" data-cart-form data-id="product-actions-36475062" enctype="multipart/form-data">
<div class="product-thumbnail">
<div class="sapo-combo-badge" data-id="36475062"></div>
    <a class="image_thumb scale_hover" href="/nuoc-lavie-viva-19l-binh-co-voi" title="Nước Lavie Viva 19L bình có vòi">
        <img  width="480" height="480" class="lazyload image1" src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"  data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/viva-19l-voi.jpg?v=1720509651293" alt="Nước Lavie Viva 19L bình có vòi">
    </a>
    <div class="action">
        <input type="hidden" name="variantId" value="121443680" />
        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use> </svg>
        </button>
        <a title="Xem nhanh" href="/nuoc-lavie-viva-19l-binh-co-voi" data-handle="nuoc-lavie-viva-19l-binh-co-voi" class="quick-view btn-views">
            <svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use> </svg>
        </a>
    </div>
</div>
<div class="smart"><span>- 
4% 
</span></div>	<a href="javascript:void(0)" class="setWishlist btn-wishlist" data-wish="nuoc-lavie-viva-19l-binh-co-voi" tabindex="0" title="Thêm vào yêu thích">
<svg class="icon"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use> </svg>
</a>
<div class="product-info">
    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center" href="/nuoc-lavie-viva-19l-binh-co-voi" title="Nước Lavie Viva 19L bình có vòi">Nước Lavie Viva 19L bình có vòi</a></h3>
    <div class="price-box">
        69.000₫
        <span class="compare-price">72.000₫</span>

    </div>
</div>
</form>					</div>
            </div>

            </script>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="view-more clearfix">
            <a href="nuoc-lavie.html" title="Xem tất cả" class="btn">
                Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>

    </div>
</section>
<script>
    $(document).ready(function($) {
        function runSwiperCol2() {
            var col2_pro = null;

            function initSwiperCol2() {
                col2_pro = new Swiper('.product-col2-swiper', {
                    slidesPerView: 4,
                    loop: false,
                    grabCursor: true,
                    roundLengths: true,
                    slideToClickedSlide: false,
                    spaceBetween: 20,
                    autoplay: false,
                    navigation: {
                        nextEl: '.product-col2-swiper .swiper-button-next',
                        prevEl: '.product-col2-swiper .swiper-button-prev',
                    },
                    breakpoints: {
                        280: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },
                        500: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        991: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperCol2() {
                if (col2_pro) {
                    col2_pro.destroy(true, true);
                    col2_pro = null;
                }
            }

            function toggleSwiperCol2() {
                if ($(window).width() <= 767 && col2_pro) {
                    destroySwiperCol2();
                } else if ($(window).width() > 767 && !col2_pro) {
                    initSwiperCol2();
                }
            }
            toggleSwiperCol2();
            $(window).resize(toggleSwiperCol2);
        }
        lazyBlockProduct('section_product_2', '0px 0px -250px 0px', runSwiperCol2);
    });
</script>




<section class="section_danh_gia">
    <div class="container">
        <div class="title-module-danh-gia">
            <h2>ĐÁNH GIÁ <span>KHÁCH HÀNG</span></h2>
            <p class="content-module">Những lời đánh giá chân thật từ những khách hàng của chúng tôi</p>
        </div>
        <div class="swiper_feedback swiper-container control-top">
            <div class="swiper-wrapper">

                <div class=" swiper-slide">
                    <div class="review_box">
                        <div class="review_img">
                            <img width="200" height="200" class="lazyload"
                                src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/image_danh_gia_1.jpg"
                                alt="Đặng Chinh Đức" />
                            <div class="round-1"></div>
                            <div class="round-2"></div>
                        </div>
                        <div class="info_review">
                            <p class="star-rating" style="--rating: 4"></p>
                            <p class="content_review">Dịch vụ giao nước rất nhanh chóng và thuận tiện. Nhân viên
                                giao hàng thân thiện và chuyên nghiệp. Tôi rất hài lòng và sẽ tiếp tục sử dụng dịch
                                vụ này.</p>
                            <p class="name_review">Đặng Chinh Đức</p>
                            <p class="job_review">- Developer</p>
                        </div>
                    </div>

                </div>

                <div class=" swiper-slide">
                    <div class="review_box">
                        <div class="review_img">
                            <img width="200" height="200" class="lazyload"
                                src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/image_danh_gia_2.jpg"
                                alt="Nguyễn Ngọc Sơn" />
                            <div class="round-1"></div>
                            <div class="round-2"></div>
                        </div>
                        <div class="info_review">
                            <p class="star-rating" style="--rating: 5"></p>
                            <p class="content_review">Đặt hàng dễ dàng qua website nhanh chóng và chỉ sau 20 phút,
                                nước đã được giao đến nhà. Giá cả hợp lý và chất lượng nước rất tốt. Rất đáng để
                                thử!</p>
                            <p class="name_review">Nguyễn Ngọc Sơn</p>
                            <p class="job_review">- Đầu bếp</p>
                        </div>
                    </div>

                </div>

                <div class=" swiper-slide">
                    <div class="review_box">
                        <div class="review_img">
                            <img width="200" height="200" class="lazyload"
                                src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/image_danh_gia_3.jpg"
                                alt="Lê Quang Hải" />
                            <div class="round-1"></div>
                            <div class="round-2"></div>
                        </div>
                        <div class="info_review">
                            <p class="star-rating" style="--rating: 5"></p>
                            <p class="content_review">Tôi rất hài lòng với dịch vụ ở đây! Nước luôn được giao đúng
                                hẹn và chất lượng nước rất tốt. Nhân viên giao hàng nhiệt tình và chu đáo. Tôi sẽ
                                tiếp tục ủng hộ.</p>
                            <p class="name_review">Lê Quang Hải</p>
                            <p class="job_review">- Giáo viên</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function($) {
        var swiper_feedback = null;

        function initSwiperFeedback() {
            swiper_feedback = new Swiper('.swiper_feedback', {
                slidesPerView: 1,
                spaceBetween: 28,
                watchOverflow: true,
                slidesPerGroup: 1,
                grabCursor: true,
                pagination: {
                    el: '.swiper_feedback .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 14
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 28
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 28
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 28
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 28
                    },
                    1500: {
                        slidesPerView: 3,
                        spaceBetween: 28
                    }
                }
            });
        }

        function destroySwiperFeedback() {
            if (swiper_feedback) {
                swiper_feedback.destroy(true, true);
                swiper_feedback = null;
            }
        }

        function toggleSwiperFeedback() {
            if ($(window).width() <= 767 && swiper_feedback) {
                destroySwiperFeedback();
            } else if ($(window).width() > 767 && !swiper_feedback) {
                initSwiperFeedback();
            }
        }
        toggleSwiperFeedback();
        $(window).on('resize', function() {
            toggleSwiperFeedback();
        });
    });
</script>




<section class="section_du_an">
    <div class="container">
        <div class="title_du_an">
            <h2><a href="dich-vu.html" title="Dịch vụ giao nước">Dịch vụ <span>giao nước</span></a></h2>
            <p class="title_content">Dịch vụ giao nước gần đây của chúng tôi</p>
        </div>
        <div class="block-blog">
            <div class="swiper_duan swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb" href="dich-vu-giao-nuoc-tan-nha-quan-tan-binh.html"
                                    title="Dịch vụ giao nước tận nhà quận Tân Bình">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/dich-vu-giao-nuoc-tan-nha-tai-tan-binh.jpg?v=1723109833150"
                                        alt="Dịch vụ giao nước tận nhà quận Tân Bình">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="dich-vu-giao-nuoc-tan-nha-quan-tan-binh.html"
                                        title="Dịch vụ giao nước tận nhà quận Tân Bình">Dịch vụ giao nước tận nhà
                                        quận Tân Bình</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb" href="dich-vu-giao-nuoc-tan-nha-quan-tan-phu.html"
                                    title="Dịch vụ giao nước tận nhà quận Tân Phú">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/dich-vu-giao-nuoc-tan-nha-quan-tan-phu.jpg?v=1723108922093"
                                        alt="Dịch vụ giao nước tận nhà quận Tân Phú">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="dich-vu-giao-nuoc-tan-nha-quan-tan-phu.html"
                                        title="Dịch vụ giao nước tận nhà quận Tân Phú">Dịch vụ giao nước tận nhà
                                        quận Tân Phú</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb" href="dich-vu-giao-nuoc-tan-nha-tai-quan-12.html"
                                    title="Dịch vụ giao nước tận nhà tại quận 12">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/dich-vu-giao-nuoc-tan-nha-quan-9.jpg?v=1723108251973"
                                        alt="Dịch vụ giao nước tận nhà tại quận 12">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="dich-vu-giao-nuoc-tan-nha-tai-quan-12.html"
                                        title="Dịch vụ giao nước tận nhà tại quận 12">Dịch vụ giao nước tận nhà tại
                                        quận 12</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb" href="dich-vu-giao-nuoc-van-phong-tai-quan-11.html"
                                    title="Dịch vụ giao nước văn phòng tại quận 11">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/dich-vu-giao-nuoc-gia-re-tai-binh-thanh.jpg?v=1723106925207"
                                        alt="Dịch vụ giao nước văn phòng tại quận 11">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="dich-vu-giao-nuoc-van-phong-tai-quan-11.html"
                                        title="Dịch vụ giao nước văn phòng tại quận 11">Dịch vụ giao nước văn phòng
                                        tại quận 11</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb" href="dich-vu-giao-nuoc-quan-9-gia-re.html"
                                    title="Dịch vụ giao nước quận 9 giá rẻ">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/dich-vu-giao-nuoc-gia-re-quan-9.jpg?v=1723105836763"
                                        alt="Dịch vụ giao nước quận 9 giá rẻ">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1" href="dich-vu-giao-nuoc-quan-9-gia-re.html"
                                        title="Dịch vụ giao nước quận 9 giá rẻ">Dịch vụ giao nước quận 9 giá rẻ</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb"
                                    href="gia-tot-giao-hang-tan-noi-nuoc-khoang-lavie-chinh-hang.html"
                                    title="Giá tốt, giao hàng tận nơi nước khoáng Lavie chính hãng">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/nuoc-khoang-lavie-chinh-hang-giao-hang-gia-tot.jpg?v=1723104161167"
                                        alt="Giá tốt, giao hàng tận nơi nước khoáng Lavie chính hãng">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="gia-tot-giao-hang-tan-noi-nuoc-khoang-lavie-chinh-hang.html"
                                        title="Giá tốt, giao hàng tận nơi nước khoáng Lavie chính hãng">Giá tốt,
                                        giao hàng tận nơi nước khoáng Lavie chính hãng</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb" href="dich-vu-giao-nuoc-aquafina-quan-1.html"
                                    title="Dịch vụ giao nước Aquafina quận 1">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/dich-vu-giao-nuoc-aquafina-quan-1.jpg?v=1723102787297"
                                        alt="Dịch vụ giao nước Aquafina quận 1">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="dich-vu-giao-nuoc-aquafina-quan-1.html"
                                        title="Dịch vụ giao nước Aquafina quận 1">Dịch vụ giao nước Aquafina quận
                                        1</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item-blog-duan">
                            <div class="block-thumb">

                                <a class="thumb" href="dich-vu-giao-nuoc-o-phuong-thu-thiem-quan-2.html"
                                    title="Dịch vụ giao nước ở phường Thủ Thiêm quận 2">
                                    <img class="lazyload"
                                        src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                        data-src="https://bizweb.dktcdn.net/100/521/251/articles/dich-vu-giao-nuoc-phuong-thu-thiem-quan-2-thu-duc.jpg?v=1723101766613"
                                        alt="Dịch vụ giao nước ở phường Thủ Thiêm quận 2">
                                </a>

                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1"
                                        href="dich-vu-giao-nuoc-o-phuong-thu-thiem-quan-2.html"
                                        title="Dịch vụ giao nước ở phường Thủ Thiêm quận 2">Dịch vụ giao nước ở
                                        phường Thủ Thiêm quận 2</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="view-more clearfix">
                <a href="dich-vu.html" title="Xem tất cả" class="btn">
                    Xem tất cả
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>


        </div>
    </div>
</section>
<script>
    $(document).ready(function($) {
        var swiper_duan = null;

        function initSwiperDuan() {
            swiper_duan = new Swiper('.swiper_duan', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 20,
                autoplay: false,
                slidesPerColumn: 2,
                slidesPerColumnFill: "row",
                navigation: {
                    nextEl: '.swiper_duan .swiper-button-next',
                    prevEl: '.swiper_duan .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                    },
                    500: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,

                    },
                    991: {
                        slidesPerView: 3,

                    },
                    1200: {
                        slidesPerView: 3,

                    }
                }
            });
        }

        function destroySwiperDuan() {
            if (swiper_duan) {
                swiper_duan.destroy(true, true);
                swiper_duan = null;
            }
        }

        function toggleSwiperDuan() {
            if ($(window).width() <= 767 && swiper_duan) {
                destroySwiperDuan();
            } else if ($(window).width() > 767 && !swiper_duan) {
                initSwiperDuan();
            }
        }
        toggleSwiperDuan();
        $(window).on('resize', function() {
            toggleSwiperDuan();
        });
    });
</script>
<script>
    var swiperduan = new Swiper('.duan-slider', {


    });
</script>




<section class="section_blog">
    <div class="container">
        <div class="title_blogs">
            <h2><a href="tin-tuc.html" title="Tin tức Mới nhất">Tin tức <span>Mới nhất</span></a></h2>
            <p class="title_content">Những tin tức liên quan về các loại nước hot nhất hiện nay</p>
        </div>
        <div class="swiper_blogs swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="item-blog">
                        <div class="block-thumb">
                            <a class="thumb" href="bi-viem-hong-nen-hay-khong-nen-uong-nuoc-da-lanh.html"
                                title="Bị viêm họng nên hay không nên uống nước đá lạnh?">
                                <img width="600" height="380" class="lazyload"
                                    src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                    data-src="https://bizweb.dktcdn.net/100/521/251/articles/uong-nuoc-lanh-khi-viem-hong-nen-hay-khong.jpg?v=1721034114113"
                                    alt="Bị viêm họng nên hay không nên uống nước đá lạnh?">
                            </a>
                        </div>
                        <div class="block-content">
                            <h3><a href="bi-viem-hong-nen-hay-khong-nen-uong-nuoc-da-lanh.html"
                                    title="Bị viêm họng nên hay không nên uống nước đá lạnh?">Bị viêm họng nên hay
                                    không nên uống nước đá lạnh?</a></h3>
                            <div class="posts">
                                <div class="time-post f">

                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                            class=""></path>
                                    </svg>
                                    15/07/2024
                                </div>
                                <div class="time-post">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="svg-inline--fa fa-user fa-w-14">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                            class=""></path>
                                    </svg>
                                    <span>Bùi Minh Nhật</span>
                                </div>
                            </div>

                            <p class="justify">“Viêm họng có thể uống nước lạnh được không?” là một trong số những
                                câu hỏi phổ biến của không ít người. Đa số đều cho rằng khi viêm họng, cần tránh tối
                                đa các loại đồ uống lạnh. Liệu điều này là đúng hay sai? Cùng tìm hiểu câu trả lời
                                qua bài viết sau của Aquafina Việt Nam các bạn nhé!&nbsp;
                                Bệnh viêm họng là gì?
                                Viêm họng là tình trạng niêm mạc hầu họng bị sưng viêm, gây đau...</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-blog">
                        <div class="block-thumb">
                            <a class="thumb"
                                href="khac-biet-giua-nuoc-tinh-khiet-aquafina-va-victory-la-gi.html"
                                title="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">
                                <img width="600" height="380" class="lazyload"
                                    src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                    data-src="https://bizweb.dktcdn.net/100/521/251/articles/nuoc-uong-aquafina-va-nuoc-uong-victory.jpg?v=1721033556900"
                                    alt="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">
                            </a>
                        </div>
                        <div class="block-content">
                            <h3><a href="khac-biet-giua-nuoc-tinh-khiet-aquafina-va-victory-la-gi.html"
                                    title="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">Khác biệt
                                    giữa
                                    nước tinh khiết Aquafina và Victory là gì?</a></h3>
                            <div class="posts">
                                <div class="time-post f">

                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                            class=""></path>
                                    </svg>
                                    15/07/2024
                                </div>
                                <div class="time-post">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                            class=""></path>
                                    </svg>
                                    <span>Bùi Minh Nhật</span>
                                </div>
                            </div>

                            <p class="justify">Trong cuộc sống ngày nay, để đảm bảo sức khỏe cho người thân và gia
                                đình, bạn cần chọn những thương hiệu nước uống chất lượng, có uy tín lâu năm trên
                                thị trường. Bạn đang băn khoăn không biết nên chọn nhãn hiệu nước nào? Bài viết hôm
                                nay sẽ so sánh 2 sản phẩm nước uống được nhiều người tiêu dùng ưa chuộng nhất trong
                                thời gian gần đây là Aquafina và Victory.&nbsp;

                                Nước uống Aquafina và Victory
                                Cùng tìm...</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-blog">
                        <div class="block-thumb">
                            <a class="thumb" href="8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.html"
                                title="8 thời điểm uống nước lý tưởng trong ngày">
                                <img width="600" height="380" class="lazyload"
                                    src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                    data-src="https://bizweb.dktcdn.net/100/521/251/articles/8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.jpg?v=1721034897817"
                                    alt="8 thời điểm uống nước lý tưởng trong ngày">
                            </a>
                        </div>
                        <div class="block-content">
                            <h3><a href="8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.html"
                                    title="8 thời điểm uống nước lý tưởng trong ngày">8 thời điểm uống nước lý
                                    tưởng
                                    trong ngày</a></h3>
                            <div class="posts">
                                <div class="time-post f">

                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                            class=""></path>
                                    </svg>
                                    15/07/2024
                                </div>
                                <div class="time-post">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                            class=""></path>
                                    </svg>
                                    <span>Bùi Minh Nhật</span>
                                </div>
                            </div>

                            <p class="justify">Hầu hết chúng ta đều biết uống nước đóng vai trò quan trọng như thế
                                nào trong cuộc sống hàng ngày. Tuy nhiên, liệu bạn đã biết làm thế nào để bổ sung
                                nước đúng cách mỗi ngày hay chưa? Nếu câu trả lời là “chưa” thì cũng đừng lo vì ngày
                                hôm nay, Aquafina Việt Nam sẽ giúp các bạn nhận biết được 8 thời điểm “vàng” để uống
                                nước mỗi ngày nhằm cải thiện và nâng cao sức...</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-blog">
                        <div class="block-thumb">
                            <a class="thumb" href="phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.html"
                                title="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">
                                <img width="600" height="380" class="lazyload"
                                    src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                    data-src="https://bizweb.dktcdn.net/100/521/251/articles/phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.jpg?v=1721035125143"
                                    alt="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">
                            </a>
                        </div>
                        <div class="block-content">
                            <h3><a href="phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.html"
                                    title="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">Phương pháp uống
                                    nước giúp hệ tim mạch luôn khỏe mạnh</a></h3>
                            <div class="posts">
                                <div class="time-post f">

                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                            class=""></path>
                                    </svg>
                                    15/07/2024
                                </div>
                                <div class="time-post">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                            class=""></path>
                                    </svg>
                                    <span>Bùi Minh Nhật</span>
                                </div>
                            </div>

                            <p class="justify">Theo các nghiên cứu cho thấy các cơn đau tim dẫn đến đột quỵ và tử
                                vong chiếm tỷ lệ ngày càng cao. Vấn đề về sức khỏe của tim mạch đã trở thành mối
                                quan tâm hàng đầu hiện nay của nhiều người. Uống nước đúng cách là phương pháp dễ
                                nhất để giữ cho bạn có một hệ tim mạch luôn khỏe mạnh.
                                Nước và hệ tim mạch
                                Nước uống đóng vai trò đặc biệt quan trọng đối với cơ...</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-blog">
                        <div class="block-thumb">
                            <a class="thumb" href="cach-uong-nuoc-khi-bi-say-nang-de-phuc-hoi-nhanh-nhat.html"
                                title="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">
                                <img width="600" height="380" class="lazyload"
                                    src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                    data-src="https://bizweb.dktcdn.net/100/521/251/articles/cach-uong-nuoc-khi-bi-say-nang.jpg?v=1721034603447"
                                    alt="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">
                            </a>
                        </div>
                        <div class="block-content">
                            <h3><a href="cach-uong-nuoc-khi-bi-say-nang-de-phuc-hoi-nhanh-nhat.html"
                                    title="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">Cách uống nước
                                    khi
                                    bị say nắng để phục hồi nhanh nhất</a></h3>
                            <div class="posts">
                                <div class="time-post f">

                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                            class=""></path>
                                    </svg>
                                    15/07/2024
                                </div>
                                <div class="time-post">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                            class=""></path>
                                    </svg>
                                    <span>Bùi Minh Nhật</span>
                                </div>
                            </div>

                            <p class="justify">Mùa hè đang diễn ra với nhiệt độ cao ngất ngưởng lên đến 40 độ C ở
                                nhiều nơi, kèm theo đó là nhiều biểu hiện thời tiết cực đoan khác. Đây chính là thời
                                điểm dễ gây ra hiện tượng say nắng, ảnh hưởng nghiêm trọng cho sức khỏe con người.
                                Say nắng là gì?
                                Say nắng là căn bệnh nghiêm trọng do hiện tượng nắng nóng với nhiệt độ cao kéo dài.
                                Bệnh xuất hiện khi cơ thể không còn...</p>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-blog">
                        <div class="block-thumb">
                            <a class="thumb" href="thuc-khuya-nen-uong-nuoc-the-nao-de-bao-ve-suc-khoe.html"
                                title="Thức khuya nên uống nước thế nào để bảo vệ sức khỏe?">
                                <img width="600" height="380" class="lazyload"
                                    src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                                    data-src="https://bizweb.dktcdn.net/100/521/251/articles/thuc-khuya-nen-uong-nuoc-the-nao-de-bao-ve-suc-khoe.jpg?v=1721034346907"
                                    alt="Thức khuya nên uống nước thế nào để bảo vệ sức khỏe?">
                            </a>
                        </div>
                        <div class="block-content">
                            <h3><a href="thuc-khuya-nen-uong-nuoc-the-nao-de-bao-ve-suc-khoe.html"
                                    title="Thức khuya nên uống nước thế nào để bảo vệ sức khỏe?">Thức khuya nên
                                    uống
                                    nước thế nào để bảo vệ sức khỏe?</a></h3>
                            <div class="posts">
                                <div class="time-post f">

                                    <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                        data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                        <path fill="currentColor"
                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                            class=""></path>
                                    </svg>
                                    15/07/2024
                                </div>
                                <div class="time-post">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                            class=""></path>
                                    </svg>
                                    <span>Bùi Minh Nhật</span>
                                </div>
                            </div>

                            <p class="justify">Sau một ngày làm việc vất vả thì khoảng thời gian ban đêm thường là
                                lúc cơ thể nghỉ ngơi để phục hồi lại sức khỏe và cân bằng các yếu tố trong cơ thể.
                                Tuy nhiên, không ít người vì một nguyên nhân hoặc một thói quen nào đó mà thường
                                xuyên thức đêm hoặc ngủ không đủ giấc.Vào những lúc này, bổ sung nước đúng cách là
                                rất quan trọng. Và đó là lý do bạn không nên...</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="view-more clearfix">
            <a href="tin-tuc.html" title="Xem tất cả" class="btn">
                Xem tất cả
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>
</section>
<script>
    $(document).ready(function($) {
        var swiper_blogs = null;

        function initSwiperBlogs() {
            swiper_blogs = new Swiper('.swiper_blogs', {
                slidesPerView: 1,
                spaceBetween: 28,
                watchOverflow: true,
                slidesPerGroup: 1,
                grabCursor: true,
                navigation: {
                    nextEl: '.swiper_blogs .swiper-button-next',
                    prevEl: '.swiper_blogs .swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 14
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 28
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 28
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 28
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 28
                    },
                    1500: {
                        slidesPerView: 3,
                        spaceBetween: 28
                    }
                }
            });
        }

        function destroySwiperBlogs() {
            if (swiper_blogs) {
                swiper_blogs.destroy(true, true);
                swiper_blogs = null;
            }
        }

        function toggleSwiperBlogs() {
            if ($(window).width() <= 767 && swiper_blogs) {
                destroySwiperBlogs();
            } else if ($(window).width() > 767 && !swiper_blogs) {
                initSwiperBlogs();
            }
        }
        toggleSwiperBlogs();
        $(window).on('resize', function() {
            toggleSwiperBlogs();
        });
    });
</script>





<section class="section_brand container">
    <div class="box_brand">
        <div class="swi_brand swiper-container">
            <div class="swiper-wrapper">

                <div class="item_brand swiper-slide">
                    <a href="collections/all.html" class="a_brand" title="Beckley Water">
                        <img width="154" height="55" class="lazyload"
                            src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                            data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/brand_1.jpg"
                            alt="Beckley Water">
                    </a>
                </div>

                <div class="item_brand swiper-slide">
                    <a href="collections/all.html" class="a_brand" title="HNWS">
                        <img width="154" height="55" class="lazyload"
                            src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                            data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/brand_2.jpg"
                            alt="HNWS">
                    </a>
                </div>

                <div class="item_brand swiper-slide">
                    <a href="collections/all.html" class="a_brand" title="Aquafina">
                        <img width="154" height="55" class="lazyload"
                            src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                            data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/brand_3.jpg"
                            alt="Aquafina">
                    </a>
                </div>

                <div class="item_brand swiper-slide">
                    <a href="collections/all.html" class="a_brand" title="Affinity Water">
                        <img width="154" height="55" class="lazyload"
                            src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                            data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/brand_4.jpg"
                            alt="Affinity Water">
                    </a>
                </div>

                <div class="item_brand swiper-slide">
                    <a href="collections/all.html" class="a_brand" title="Tropicana">
                        <img width="154" height="55" class="lazyload"
                            src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                            data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/brand_5.jpg"
                            alt="Tropicana">
                    </a>
                </div>

                <div class="item_brand swiper-slide">
                    <a href="collections/all.html" class="a_brand" title="Oasis">
                        <img width="154" height="55" class="lazyload"
                            src="http://bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazy.png"
                            data-src="//bizweb.dktcdn.net/100/521/251/themes/960910/assets/brand_6.jpg"
                            alt="Oasis">
                    </a>
                </div>




            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<script>
    var swiper_brand = null;

    function initSwiperBrand() {
        swiper_brand = new Swiper('.swi_brand', {
            slidesPerView: 5,
            spaceBetween: 0,
            slidesPerGroup: 1,
            navigation: {
                nextEl: '.swi_brand .swiper-button-next',
                prevEl: '.swi_brand .swiper-button-prev',
            },
            breakpoints: {
                280: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                322: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 0
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 0
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 0
                },
                1199: {
                    slidesPerView: 5,
                    spaceBetween: 0
                }
            }
        });
    }

    function destroySwiperBrand() {
        if (swiper_brand) {
            swiper_brand.destroy(true, true);
            swiper_brand = null;
        }
    }

    function toggleSwiperBrand() {
        if ($(window).width() <= 767 && swiper_brand) {
            destroySwiperBrand();
        } else if ($(window).width() > 767 && !swiper_brand) {
            initSwiperBrand();
        }
    }
    toggleSwiperBrand();
    $(window).on('resize', function() {
        toggleSwiperBrand();
    });
</script>


    
@endsection