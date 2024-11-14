@extends('index')
@section('body')
    <section class="bread-crumb">
        <div class="container">
            <div class="title-bread-crumb">Tất cả sản phẩm</div>
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


                <li><strong><span> Tất cả sản phẩm</span></strong></li>


            </ul>
        </div>
    </section>

    @include('component.svg')

    <div class="container">
        <div class="row">
            <aside class="dqdt-sidebar sidebar col-lg-3 col-12">
                <div class="section-box-bg">
                    <aside class="aside-item collection-category aside-cate">
                        <div class="title-module-cate">
                            <h2>Danh mục <span>sản phẩm</span></h2>
                        </div>

                        <div class="aside-content aside-content-sub clearfix">

                            <ul class="navbar-pills nav-category">


                                <li class="nav-item ">
                                    <a href="hang-viet-nam.html" class="nav-link" title="Hàng Việt Nam">Hàng Việt Nam </a>
                                    <span class="Collapsible__Plus"></span>
                                    <ul class="dropdown-menu">


                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-petal.html" title="Nước Petal">Nước Petal </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-vinh-hao.html" title="Nước Vĩnh Hảo">Nước Vĩnh
                                                Hảo </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-vivant.html" title="Nước Vivant">Nước Vivant </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-vihawa.html" title="Nước Vihawa">Nước Vihawa </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-satori.html" title="Nước Satori">Nước Satori </a>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a href="hang-nhap-khau.html" class="nav-link" title="Hàng nhập khẩu">Hàng nhập khẩu
                                    </a>
                                    <span class="Collapsible__Plus"></span>
                                    <ul class="dropdown-menu">


                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-lavie.html" title="Nước Lavie">Nước Lavie </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-aquafina.html" title="Nước Aquafina">Nước
                                                Aquafina </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-evian.html" title="Nước Evian">Nước Evian </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-volvic.html" title="Nước Volvic">Nước Volvic </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-nui-lua-jeju.html" title="Nước núi lửa Jeju">Nước
                                                núi lửa Jeju </a>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a href="nuoc-binh-voi.html" class="nav-link" title="Nước bình vòi">Nước bình vòi </a>
                                    <span class="Collapsible__Plus"></span>
                                    <ul class="dropdown-menu">


                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-binh-lavie.html" title="Nước bình Lavie">Nước
                                                bình Lavie </a>
                                        </li>



                                        <li class="nav-item ">
                                            <a class="nav-link" href="nuoc-binh-voi-aqua.html"
                                                title="Nước bình vòi Aqua">Nước bình vòi Aqua </a>
                                        </li>


                                    </ul>
                                </li>



                                <li class="nav-item ">
                                    <a class="nav-link" href="nuoc-binh-up.html" title="Nước bình úp">Nước bình úp </a>
                                </li>



                                <li class="nav-item ">
                                    <a class="nav-link" href="nuoc-uong-chai.html" title="Nước uống chai">Nước uống chai
                                    </a>
                                </li>



                                <li class="nav-item ">
                                    <a class="nav-link" href="nuoc-suoi-chai.html" title="Nước suối chai">Nước suối chai
                                    </a>
                                </li>



                                <li class="nav-item ">
                                    <a class="nav-link" href="nuoc-dong-chai.html" title="Nước đóng chai">Nước đóng chai
                                    </a>
                                </li>



                                <li class="nav-item ">
                                    <a class="nav-link" href="nuoc-suoi-ly.html" title="Nước suối ly">Nước suối ly </a>
                                </li>


                            </ul>

                        </div>
                    </aside>
                    <script>
                        $('.nav-category .Collapsible__Plus').click(function(e) {
                            $(this).parent().toggleClass('active');
                        });
                    </script>
                    <div class="clearfix"></div>
                    <div class="filter-content">
                        <div class="aside-boloc">
                            <h2>Bộ lọc <span>sản phẩm</span></h2>
                        </div>
                        <div class="filter-container">
                            <div class="filter-container__selected-filter" style="display: none;">
                                <div class="filter-container__selected-filter-header clearfix">
                                    <span class="filter-container__selected-filter-header-title"><i
                                            class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                    <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                        class="filter-container__clear-all" title="Bỏ hết">Bỏ hết <i class="icon"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10"
                                                height="10" x="0" y="0" viewBox="0 0 365.696 365.696"
                                                style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                class="">
                                                <g>
                                                    <path xmlns="http://www.w3.org/2000/svg"
                                                        d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                                                        fill="#ffffff" data-original="#000000" style=""
                                                        class=""></path>
                                                </g>
                                            </svg></i></a>
                                </div>
                                <div class="filter-container__selected-filter-list">
                                    <ul></ul>
                                </div>
                            </div>

                            <!-- Lọc giá -->

                            <aside class="aside-item filter-price">
                                <div class="aside-title">
                                    <h2><span>Chọn mức giá</span></h2>
                                </div>
                                <div class="aside-content filter-group content_price">
                                    <ul>





                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="100-000d" for="filter-duoi-100-000d">
                                                    <input type="checkbox" id="filter-duoi-100-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Dưới 100.000đ
                                                </label>
                                            </span>
                                        </li>







                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="200-000d" for="filter-100-000d-200-000d">
                                                    <input type="checkbox" id="filter-100-000d-200-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Từ 100.000đ - 200.000đ
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="300-000d" for="filter-200-000d-300-000d">
                                                    <input type="checkbox" id="filter-200-000d-300-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="200.000đ - 300.000đ" value="(>=200000 AND <=300000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Từ 200.000đ - 300.000đ
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="500-000d" for="filter-300-000d-500-000d">
                                                    <input type="checkbox" id="filter-300-000d-500-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="300.000đ - 500.000đ" value="(>=300000 AND <=500000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Từ 300.000đ - 500.000đ
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="1-000-000d" for="filter-500-000d-1-000-000d">
                                                    <input type="checkbox" id="filter-500-000d-1-000-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="500.000đ - 1.000.000đ" value="(>=500000 AND <=1000000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Từ 500.000đ - 1 triệu
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="2-000-000d" for="filter-1-000-000d-2-000-000d">
                                                    <input type="checkbox" id="filter-1-000-000d-2-000-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="1.000.000đ - 2.000.000đ"
                                                        value="(>=1000000 AND <=2000000)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Từ 1 triệu - 2 triệu
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="5-000-000d" for="filter-2-000-000d-5-000-000d">
                                                    <input type="checkbox" id="filter-2-000-000d-5-000-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="2.000.000đ - 5.000.000đ"
                                                        value="(>=2000000 AND <=5000000)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Từ 2 triệu - 5 triệu
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="10-000-000d" for="filter-5-000-000d-10-000-000d">
                                                    <input type="checkbox" id="filter-5-000-000d-10-000-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="5.000.000đ - 10.000.000đ"
                                                        value="(>=5000000 AND <=10000000)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Từ 5 triệu - 10 triệu
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="10-000-000d" for="filter-tren10-000-000d">
                                                    <input type="checkbox" id="filter-tren10-000-000d"
                                                        data-group="Khoảng giá" data-field="price_min"
                                                        data-text="Trên 10.000.000đ" value="(>10000000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Trên 10 triệu
                                                </label>
                                            </span>
                                        </li>



                                    </ul>
                                </div>
                            </aside>

                            <!-- End Lọc giá -->

                            <!-- Lọc Loại -->
                            <aside class="aside-item aside-itemxx filter-type">
                                <div class="aside-title">
                                    <h2 class="title-filter title-head margin-top-0"><span>Loại</span></h2>
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-may-loc-nuoc">
                                                    <input type="checkbox" id="filter-may-loc-nuoc"
                                                        data-group="PRODUCT_TYPE" data-field="product_type.filter_key"
                                                        data-text="" value="(&#34;Máy lọc nước&#34;)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Máy lọc nước
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-may-nong-lanh">
                                                    <input type="checkbox" id="filter-may-nong-lanh"
                                                        data-group="PRODUCT_TYPE" data-field="product_type.filter_key"
                                                        data-text="" value="(&#34;Máy nóng lạnh&#34;)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Máy nóng lạnh
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nuoc-dong-chai">
                                                    <input type="checkbox" id="filter-nuoc-dong-chai"
                                                        data-group="PRODUCT_TYPE" data-field="product_type.filter_key"
                                                        data-text="" value="(&#34;Nước đóng chai&#34;)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Nước đóng chai
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nuoc-ion-kiem">
                                                    <input type="checkbox" id="filter-nuoc-ion-kiem"
                                                        data-group="PRODUCT_TYPE" data-field="product_type.filter_key"
                                                        data-text="" value="(&#34;Nước ion kiềm&#34;)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Nước ion kiềm
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nuoc-khoang">
                                                    <input type="checkbox" id="filter-nuoc-khoang"
                                                        data-group="PRODUCT_TYPE" data-field="product_type.filter_key"
                                                        data-text="" value="(&#34;Nước khoáng&#34;)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Nước khoáng
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nuoc-khoang-nui-lua">
                                                    <input type="checkbox" id="filter-nuoc-khoang-nui-lua"
                                                        data-group="PRODUCT_TYPE" data-field="product_type.filter_key"
                                                        data-text="" value="(&#34;Nước khoáng núi lửa&#34;)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Nước khoáng núi lửa
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nuoc-tinh-khiet">
                                                    <input type="checkbox" id="filter-nuoc-tinh-khiet"
                                                        data-group="PRODUCT_TYPE" data-field="product_type.filter_key"
                                                        data-text="" value="(&#34;Nước tinh khiết&#34;)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Nước tinh khiết
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-phu-kien">
                                                    <input type="checkbox" id="filter-phu-kien" data-group="PRODUCT_TYPE"
                                                        data-field="product_type.filter_key" data-text=""
                                                        value="(&#34;Phụ kiện&#34;)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Phụ kiện
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <!-- End Lọc Loại -->

                            <!-- Lọc Thương hiệu -->



                            <aside class="aside-item filter-vendor f-left">
                                <div class="aside-title">
                                    <h2 class="title-filter title-head margin-top-0"><span>Thương hiệu</span></h2>
                                </div>
                                <div class="aside-content margin-top-0 filter-group">
                                    <ul>


                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-alaska">
                                                    <input type="checkbox" id="filter-alaska" data-group="Hãng"
                                                        data-field="vendor" data-text="Alaska" value="(Alaska)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Alaska
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-aquafina">
                                                    <input type="checkbox" id="filter-aquafina" data-group="Hãng"
                                                        data-field="vendor" data-text="Aquafina" value="(Aquafina)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Aquafina
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-bidrico">
                                                    <input type="checkbox" id="filter-bidrico" data-group="Hãng"
                                                        data-field="vendor" data-text="Bidrico" value="(Bidrico)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Bidrico
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-coway">
                                                    <input type="checkbox" id="filter-coway" data-group="Hãng"
                                                        data-field="vendor" data-text="Coway" value="(Coway)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Coway
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-evian">
                                                    <input type="checkbox" id="filter-evian" data-group="Hãng"
                                                        data-field="vendor" data-text="Evian" value="(Evian)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Evian
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-jeju">
                                                    <input type="checkbox" id="filter-jeju" data-group="Hãng"
                                                        data-field="vendor" data-text="Jeju" value="(Jeju)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Jeju
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-khac">
                                                    <input type="checkbox" id="filter-khac" data-group="Hãng"
                                                        data-field="vendor" data-text="Khác" value="(Khác)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Khác
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-lavie">
                                                    <input type="checkbox" id="filter-lavie" data-group="Hãng"
                                                        data-field="vendor" data-text="LaVie" value="(LaVie)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    LaVie
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-life">
                                                    <input type="checkbox" id="filter-life" data-group="Hãng"
                                                        data-field="vendor" data-text="Life" value="(Life)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Life
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-monee-cap">
                                                    <input type="checkbox" id="filter-monee-cap" data-group="Hãng"
                                                        data-field="vendor" data-text="Monee Cap" value="(Monee Cap)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Monee Cap
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-perrier">
                                                    <input type="checkbox" id="filter-perrier" data-group="Hãng"
                                                        data-field="vendor" data-text="Perrier" value="(Perrier)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Perrier
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-petal">
                                                    <input type="checkbox" id="filter-petal" data-group="Hãng"
                                                        data-field="vendor" data-text="Petal" value="(Petal)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Petal
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-sapuwa">
                                                    <input type="checkbox" id="filter-sapuwa" data-group="Hãng"
                                                        data-field="vendor" data-text="Sapuwa" value="(Sapuwa)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Sapuwa
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-satori">
                                                    <input type="checkbox" id="filter-satori" data-group="Hãng"
                                                        data-field="vendor" data-text="Satori" value="(Satori)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Satori
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-vihawa">
                                                    <input type="checkbox" id="filter-vihawa" data-group="Hãng"
                                                        data-field="vendor" data-text="Vihawa" value="(Vihawa)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Vihawa
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-vinh-hao">
                                                    <input type="checkbox" id="filter-vinh-hao" data-group="Hãng"
                                                        data-field="vendor" data-text="Vĩnh Hảo" value="(Vĩnh Hảo)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Vĩnh Hảo
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <span>
                                                <label for="filter-wami">
                                                    <input type="checkbox" id="filter-wami" data-group="Hãng"
                                                        data-field="vendor" data-text="Wami" value="(Wami)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    Wami
                                                </label>
                                            </span>
                                        </li>


                                    </ul>
                                </div>
                            </aside>


                            <!-- End Lọc Thương hiệu -->

                            <!-- Lọc tag 1 -->

                            <!-- End lọc tag 1 -->

                            <!-- Lọc tag 2 -->

                            <!-- End lọc tag 2 -->


                        </div>
                    </div>
                </div>
            </aside>
            <div class="block-collection col-lg-9 col-12">
                <h1 class="title-page d-none">
                    <span>Tất cả sản phẩm</span>
                </h1>
                <div class="category-products products-view-grid list_hover_pro">

                    <div class="sort-cate clearfix margin-bottom-10 hidden-xs">
                        <div class="sort-cate-left hidden-xs">
                            <ul>
                                <li class="btn-quick-sort alpha-asc">
                                    <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên
                                        A-Z</a>
                                </li>
                                <li class="btn-quick-sort alpha-desc">
                                    <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên
                                        Z-A</a>
                                </li>
                                <li class="btn-quick-sort position-desc">
                                    <a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng
                                        mới</a>
                                </li>
                                <li class="btn-quick-sort price-asc">
                                    <a href="javascript:;" onclick="sortby('price-asc')"
                                        title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                </li>
                                <li class="btn-quick-sort price-desc">
                                    <a href="javascript:;" onclick="sortby('price-desc')"
                                        title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="products-view products-view-grid list_hover_pro">
                        <div class="row row-fix">

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36466478"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36466478"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-ion-life-19l-binh-co-voi.html"
                                                title="Nước ion Life 19L bình có vòi">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/ion-life-19l.jpg?v=1720423515773"
                                                    alt="Nước ion Life 19L bình có vòi">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121793135" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-ion-life-19l-binh-co-voi.html"
                                                    data-handle="nuoc-ion-life-19l-binh-co-voi"
                                                    class="quick-view btn-views">
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
                                            data-wish="nuoc-ion-life-19l-binh-co-voi" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-ion-life-19l-binh-co-voi.html"
                                                    title="Nước ion Life 19L bình có vòi">Nước ion Life 19L bình có vòi</a>
                                            </h3>
                                            <div class="price-box">
                                                79.000₫
                                                <span class="compare-price">85.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36467218"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36467218"></div>
                                            <a class="image_thumb scale_hover"
                                                href="nuoc-khoang-vinh-hao-20l-binh-co-voi.html"
                                                title="Nước khoáng Vĩnh Hảo 20L bình có vòi">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/vinh-hao-20l-voi.jpg?v=1720426980193"
                                                    alt="Nước khoáng Vĩnh Hảo 20L bình có vòi">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121389491" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-khoang-vinh-hao-20l-binh-co-voi.html"
                                                    data-handle="nuoc-khoang-vinh-hao-20l-binh-co-voi"
                                                    class="quick-view btn-views">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-quickview"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="smart"><span>-
                                                6%
                                            </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="nuoc-khoang-vinh-hao-20l-binh-co-voi" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-khoang-vinh-hao-20l-binh-co-voi.html"
                                                    title="Nước khoáng Vĩnh Hảo 20L bình có vòi">Nước khoáng Vĩnh Hảo 20L
                                                    bình có vòi</a></h3>
                                            <div class="price-box">
                                                80.000₫
                                                <span class="compare-price">85.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36475062"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36475062"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-lavie-viva-19l-binh-co-voi.html"
                                                title="Nước Lavie Viva 19L bình có vòi">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/viva-19l-voi.jpg?v=1720509651293"
                                                    alt="Nước Lavie Viva 19L bình có vòi">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121443680" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-lavie-viva-19l-binh-co-voi.html"
                                                    data-handle="nuoc-lavie-viva-19l-binh-co-voi"
                                                    class="quick-view btn-views">
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
                                            data-wish="nuoc-lavie-viva-19l-binh-co-voi" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-lavie-viva-19l-binh-co-voi.html"
                                                    title="Nước Lavie Viva 19L bình có vòi">Nước Lavie Viva 19L bình có
                                                    vòi</a></h3>
                                            <div class="price-box">
                                                69.000₫
                                                <span class="compare-price">72.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36475119"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36475119"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-petal-19l-binh-co-voi.html"
                                                title="Nước Petal 19L bình có vòi">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/petal-19l-voi.jpg?v=1720510011963"
                                                    alt="Nước Petal 19L bình có vòi">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121443798" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-petal-19l-binh-co-voi.html"
                                                    data-handle="nuoc-petal-19l-binh-co-voi" class="quick-view btn-views">
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
                                            data-wish="nuoc-petal-19l-binh-co-voi" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-petal-19l-binh-co-voi.html"
                                                    title="Nước Petal 19L bình có vòi">Nước Petal 19L bình có vòi</a></h3>
                                            <div class="price-box">
                                                43.000₫
                                                <span class="compare-price">45.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36475294"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36475294"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-sapuwa-19l-binh-co-voi.html"
                                                title="Nước Sapuwa 19L bình có vòi">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/sapuwa-19l-voi.jpg?v=1720510570467"
                                                    alt="Nước Sapuwa 19L bình có vòi">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121446401" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-sapuwa-19l-binh-co-voi.html"
                                                    data-handle="nuoc-sapuwa-19l-binh-co-voi"
                                                    class="quick-view btn-views">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-quickview"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="smart"><span>-
                                                12%
                                            </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="nuoc-sapuwa-19l-binh-co-voi" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-sapuwa-19l-binh-co-voi.html"
                                                    title="Nước Sapuwa 19L bình có vòi">Nước Sapuwa 19L bình có vòi</a>
                                            </h3>
                                            <div class="price-box">
                                                59.000₫
                                                <span class="compare-price">67.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36475495"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36475495"></div>
                                            <a class="image_thumb scale_hover"
                                                href="nuoc-tinh-khiet-vihawa-20l-binh-co-voi.html"
                                                title="Nước tinh khiết Vihawa 20L bình có vòi">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/vihawa-20l-voi.jpg?v=1720511309597"
                                                    alt="Nước tinh khiết Vihawa 20L bình có vòi">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121446732" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-tinh-khiet-vihawa-20l-binh-co-voi.html"
                                                    data-handle="nuoc-tinh-khiet-vihawa-20l-binh-co-voi"
                                                    class="quick-view btn-views">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-quickview"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="smart"><span>-
                                                21%
                                            </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="nuoc-tinh-khiet-vihawa-20l-binh-co-voi" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-tinh-khiet-vihawa-20l-binh-co-voi.html"
                                                    title="Nước tinh khiết Vihawa 20L bình có vòi">Nước tinh khiết Vihawa
                                                    20L bình có vòi</a></h3>
                                            <div class="price-box">
                                                65.000₫
                                                <span class="compare-price">82.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36547688"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36547688"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-wami-19l-binh-co-voi.html"
                                                title="Nước Wami 19L bình có vòi">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/wami-19l-voi-1.jpg?v=1720853821880"
                                                    alt="Nước Wami 19L bình có vòi">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121796097" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-wami-19l-binh-co-voi.html"
                                                    data-handle="nuoc-wami-19l-binh-co-voi" class="quick-view btn-views">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-quickview"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="smart"><span>-
                                                9%
                                            </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="nuoc-wami-19l-binh-co-voi" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-wami-19l-binh-co-voi.html"
                                                    title="Nước Wami 19L bình có vòi">Nước Wami 19L bình có vòi</a></h3>
                                            <div class="price-box">
                                                50.000₫
                                                <span class="compare-price">55.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36547733"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36547733"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-bidrico-19l-dong-binh-up.html"
                                                title="Nước Bidrico 19L đóng bình úp">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/bidrico-19l-up.jpg?v=1720854293157"
                                                    alt="Nước Bidrico 19L đóng bình úp">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121796437" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-bidrico-19l-dong-binh-up.html"
                                                    data-handle="nuoc-bidrico-19l-dong-binh-up"
                                                    class="quick-view btn-views">
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
                                            data-wish="nuoc-bidrico-19l-dong-binh-up" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-bidrico-19l-dong-binh-up.html"
                                                    title="Nước Bidrico 19L đóng bình úp">Nước Bidrico 19L đóng bình úp</a>
                                            </h3>
                                            <div class="price-box">
                                                44.000₫
                                                <span class="compare-price">46.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36547759"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36547759"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-ion-life-19l-dong-binh-up.html"
                                                title="Nước ion Life 19L đóng bình úp">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/ion-life-19l-up.jpg?v=1720854695440"
                                                    alt="Nước ion Life 19L đóng bình úp">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121796743" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-ion-life-19l-dong-binh-up.html"
                                                    data-handle="nuoc-ion-life-19l-dong-binh-up"
                                                    class="quick-view btn-views">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-quickview"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="smart"><span>-
                                                6%
                                            </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="nuoc-ion-life-19l-dong-binh-up" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-ion-life-19l-dong-binh-up.html"
                                                    title="Nước ion Life 19L đóng bình úp">Nước ion Life 19L đóng bình
                                                    úp</a></h3>
                                            <div class="price-box">
                                                79.000₫
                                                <span class="compare-price">84.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form data-id="product-actions-36547783"
                                        enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36547783"></div>
                                            <a class="image_thumb scale_hover"
                                                href="nuoc-khoang-lavie-19l-dong-binh-up.html"
                                                title="Nước khoáng Lavie 19L đóng bình úp">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/lavie-19l-up.jpg?v=1720855075380"
                                                    alt="Nước khoáng Lavie 19L đóng bình úp">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121797004" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-khoang-lavie-19l-dong-binh-up.html"
                                                    data-handle="nuoc-khoang-lavie-19l-dong-binh-up"
                                                    class="quick-view btn-views">
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
                                            data-wish="nuoc-khoang-lavie-19l-dong-binh-up" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-khoang-lavie-19l-dong-binh-up.html"
                                                    title="Nước khoáng Lavie 19L đóng bình úp">Nước khoáng Lavie 19L đóng
                                                    bình úp</a></h3>
                                            <div class="price-box">
                                                71.000₫
                                                <span class="compare-price">80.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form
                                        data-id="product-actions-36547822" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36547822"></div>
                                            <a class="image_thumb scale_hover"
                                                href="nuoc-khoang-vinh-hao-20l-binh-up.html"
                                                title="Nước khoáng Vĩnh Hảo 20L bình úp">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/vinh-hao-20l-up.jpg?v=1720855601003"
                                                    alt="Nước khoáng Vĩnh Hảo 20L bình úp">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121797488" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-khoang-vinh-hao-20l-binh-up.html"
                                                    data-handle="nuoc-khoang-vinh-hao-20l-binh-up"
                                                    class="quick-view btn-views">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-quickview"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="smart"><span>-
                                                9%
                                            </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="nuoc-khoang-vinh-hao-20l-binh-up" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-khoang-vinh-hao-20l-binh-up.html"
                                                    title="Nước khoáng Vĩnh Hảo 20L bình úp">Nước khoáng Vĩnh Hảo 20L bình
                                                    úp</a></h3>
                                            <div class="price-box">
                                                80.000₫
                                                <span class="compare-price">88.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-4 col-fix">
                                <div class="item_product_main">

                                    <form action="https://bean-water.mysapo.net/cart/add" method="post"
                                        class="variants product-action" data-cart-form
                                        data-id="product-actions-36547872" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <div class="sapo-combo-badge" data-id="36547872"></div>
                                            <a class="image_thumb scale_hover" href="nuoc-sapuwa-19l-dong-binh-up.html"
                                                title="Nước Sapuwa 19L đóng bình úp">
                                                <img width="480" height="480" class="lazyload image1"
                                                    src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                                    data-src="//bizweb.dktcdn.net/thumb/large/100/521/251/products/sapuwa-19l-up.jpg?v=1720856036153"
                                                    alt="Nước Sapuwa 19L đóng bình úp">
                                            </a>
                                            <div class="action">
                                                <input type="hidden" name="variantId" value="121797603" />
                                                <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </button>
                                                <a title="Xem nhanh" href="nuoc-sapuwa-19l-dong-binh-up.html"
                                                    data-handle="nuoc-sapuwa-19l-dong-binh-up"
                                                    class="quick-view btn-views">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-quickview"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="smart"><span>-
                                                5%
                                            </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                            data-wish="nuoc-sapuwa-19l-dong-binh-up" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-wishlist"></use>
                                            </svg>
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                    href="nuoc-sapuwa-19l-dong-binh-up.html"
                                                    title="Nước Sapuwa 19L đóng bình úp">Nước Sapuwa 19L đóng bình úp</a>
                                            </h3>
                                            <div class="price-box">
                                                59.000₫
                                                <span class="compare-price">62.000₫</span>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="pagenav">
                        <nav class="collection-paginate clearfix relative nav_pagi w_100">
                            <ul class="pagination clearfix">

                                <li class="page-item disabled"><a class="page-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20"
                                            viewBox="0 0 12 20" fill="none">
                                            <path
                                                d="M0.827131 10.5488L10.0777 19.7738C10.3808 20.0759 10.8715 20.0754 11.1741 19.7723C11.4764 19.4692 11.4756 18.9782 11.1725 18.6759L2.47255 9.99996L11.1728 1.32406C11.4759 1.02172 11.4767 0.531057 11.1744 0.227934C11.0227 0.0759811 10.824 3.76429e-06 10.6253 3.74691e-06C10.4271 3.72959e-06 10.2292 0.0754737 10.0778 0.226372L0.827131 9.45114C0.681155 9.59637 0.599241 9.79403 0.599241 9.99996C0.599241 10.2059 0.68139 10.4033 0.827131 10.5488Z"
                                                fill="#9D9D9D" />
                                        </svg>
                                    </a></li>





                                <li class="active page-item disabled"><a class="page-link" href="javascript:;"
                                        style="pointer-events:none">1</a></li>




                                <li class="page-item"><a class="page-link" onclick="doSearch(2)"
                                        href="javascript:;">2</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(3)"
                                        href="javascript:;">3</a></li>



                                <li class="page-item"><a class="page-link" onclick="doSearch(4)"
                                        href="javascript:;">4</a></li>



                                <li class="page-item"><a class="page-link link-next-pre" onclick="doSearch(2)"
                                        href="javascript:;" title="2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20"
                                            viewBox="0 0 12 20" fill="none">
                                            <path
                                                d="M11.1729 9.45117L1.92228 0.226167C1.6192 -0.0759023 1.12849 -0.0753945 0.825918 0.227729C0.523575 0.530814 0.524357 1.02179 0.827481 1.32409L9.52745 10L0.827168 18.6759C0.524083 18.9783 0.523302 19.4689 0.825605 19.7721C0.977285 19.924 1.17599 20 1.37471 20C1.57291 20 1.77084 19.9245 1.92224 19.7736L11.1729 10.5489C11.3188 10.4036 11.4008 10.206 11.4008 10C11.4008 9.7941 11.3186 9.59668 11.1729 9.45117Z"
                                                fill="#9D9D9D" />
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>



                </div>

                <div class="descrip_coll content_coll add_apper">
                    <p>Các dòng nước uống đóng bình, nước đóng chai của Chuỗi giao nước Bean Water có nhiều quy cách khác
                        nhau, có thùng 19 lít, thùng nước suối chai 500ml, 350ml cho đến 5 lít.</p>
                    <h2>Nước uống là gì?</h2>
                    <p>Nước uống&nbsp;là các loại nước đủ độ tinh khiết tối thiểu để con người hoặc các loài động vật, thực
                        vật có thể uống, tiêu thụ, hấp thu hoặc sử dụng mà ít gặp nguy cơ tác hại trước mắt hoặc về lâu dài.
                    </p>
                    <p>Nước uống hiện nay có 2 loại: nước đóng bình và nước đóng chai. Nước bình&nbsp;có quy cách
                        bình&nbsp;phổ biến 19L hoặc 20L(bình vòi và bình úp). Nước đóng chai đa dạng quy cách hơn: bình 5L,
                        1,5L, 500ml, 350ml...</p>
                    <h2>Nước Bình 20L</h2>
                    <p>Nước uống bình có vòi dung tích 19 - 20 lít từ các thương hiệu: Vĩnh Hảo, Vihawa bình vòi 20L; PETAL,
                        Ion Life, Bidrico, Lavie Viva, Sapuwa, Wami bình 19L có vòi.</p>
                    <p><strong>Nước uống đóng bình</strong>&nbsp;úp ngược dung tích 19 - 20 lít đầy đủ từ các thương hiệu:
                        Vĩnh Hảo, Vihawa bình 20L; PETAL, La Vie, I-on Life, Bidrico, Sapuwa, Wami bình 19L</p>
                    <h2>Thùng Nước Đóng Chai</h2>
                    <p>Đầy đủ các loại nước uống đóng chai đến từ các thương hiệu hàng đầu như PETAL, Laive, Vĩnh Hảo,
                        Vihawa, Sapuwa, Evian, Bidrico, ... Đa dạng các loại dung tích từ nước đóng chai 1.5L, nước suối
                        chai 500ml, nước uống chai 350ml, nước suối ly 250ml.</p>
                    <p><img width="1080" height="720" alt="Banner"
                            src="../assets/img/xe-tai-giao-nuoc-tan-noi-tphcm.webp" /></p>

                    <div class="bg_cl"></div>

                </div>

                <div class="view_mores">
                <a class="one">Xem thêm 
                    {{-- <img width="90" height="90" src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/sortdownd37d.png?1726484223626" alt="Bean Water"> --}}
                </a>
                <a class="two active">Thu gọn 
                    {{-- <img width="90" height="90" src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/sortdownd37d.png?1726484223626" alt="Bean Water"> --}}
                </a>
            </div>


            </div>
        </div>
        <div id="open-filters" class="open-filters d-lg-none d-xl-none">
            <span>Lọc</span>
        </div>
    </div>
@endsection
