@extends('index')
@section('body')
    <section class="bread-crumb">
        <div class="container">
            <div class="title-bread-crumb">Câu hỏi thường gặp</div>
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

                <li><strong><span>Câu hỏi thường gặp</span></strong></li>

            </ul>
        </div>
    </section>
    <svg id="header-wave" viewBox="0 0 1440 125" xmlns="http://www.w3.org/2000/svg">
        <g>
            <path
                d="M1256 11.76C1237.2 17.26 1209.4 27.56 1170 25.76C1127.2 23.86 1125.3 10.16 1087 7.75998C1026.9 3.95998 1015 36.56 959 29.76C920.1 25.06 921.3 8.85998 884 7.75998C841.3 6.55998 834.4 27.66 790 27.76C749.8 27.86 748.5 10.66 707 9.75998C662.5 8.75998 658.2 28.46 611 31.76C563.1 35.06 560 15.26 504 13.76C452.5 12.36 450 28.96 396 29.76C336.7 30.56 332.6 9.35998 279.1 10.76C216.3 12.36 202.3 40.36 146 43.76C112.8 45.76 63 41.96 0 10.76V124.6H1440V10.76C1353.8 -7.34002 1294.8 0.459979 1256 11.76Z"
                fill="white"></path>
        </g>
    </svg>
    <section class="page page-faq">
        <div class="container">
            <div class="page-title category-title d-none">
                <h1 class="title-head"><a href="#">Câu hỏi thường gặp</a></h1>
            </div>
            <div class="pg_page padding-top-15">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 order-lg-2 order-md-2">
                        <div class="box_right_faq">
                            <div class="box_hoi_dap">
                                <h2 class="box_muc_luc">Nội dung chính</h2>
                                <div class="title-muc-luc">
                                    <a href="#thong-tin-hotline-tru-so" class="title_a">
                                        Thông tin hotline, trụ sở
                                    </a>
                                </div>
                                <div class="title-muc-luc">
                                    <a href="#thong-tin-coc-vo-va-doi-vo" class="title_a">
                                        Thông tin cọc vỏ và đổi vỏ
                                    </a>
                                </div>
                                <div class="title-muc-luc">
                                    <a href="#so-luong-giao-phi-dich-vu-va-phi-van-chuyen" class="title_a">
                                        Số lượng giao, phí dịch vụ và phí vận chuyển
                                    </a>
                                </div>
                                <div class="title-muc-luc">
                                    <a href="#thong-tin-san-pham" class="title_a">
                                        Thông tin sản phẩm
                                    </a>
                                </div>
                            </div>
                            <div class="form-contact box_hoi_dap">
                                <h2 class="box_muc_luc">
                                    LIÊN HỆ VỚI CHÚNG TÔI
                                </h2>
                                <span class="content-form">
                                    Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại
                                    với bạn sớm nhất có thể .
                                </span>
                                <div id="pagelogin">
                                    <form method="post" action="https://bean-water.mysapo.net/postcontact" id="contact"
                                        accept-charset="UTF-8"><input name="FormType" type="hidden"
                                            value="contact" /><input name="utf8" type="hidden" value="true" /><input
                                            type="hidden" id="Token-525220e6782147a0866446e7f95f21fe" name="Token" />
                                        <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                                        <script>
                                            grecaptcha.ready(function() {
                                                grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                                    action: "contact"
                                                }).then(function(token) {
                                                    document.getElementById("Token-525220e6782147a0866446e7f95f21fe").value = token
                                                });
                                            });
                                        </script>


                                        <div class="group_contact">
                                            <input placeholder="Họ và tên" type="text"
                                                class="form-control  form-control-lg" required value=""
                                                name="contact[Name]">
                                            <input placeholder="Email" type="email"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email1"
                                                class="form-control form-control-lg" value="" name="contact[email]">
                                            <input type="number" placeholder="Điện thoại*" name="contact[phone]"
                                                class="form-control form-control-lg" required>
                                            <textarea placeholder="Nội dung" name="contact[body]" id="comment" class="form-control content-area form-control-lg"
                                                rows="5" Required></textarea>
                                            <button type="submit" class="btn-lienhe">Gửi thông tin</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12 order-lg-1 order-md-1">
                        <div class="content-page rte">
                            <h3 id="thong-tin-hotline-tru-so" style="margin-top: 0" class="faq-title">Thông tin hotline, trụ
                                sở</h3>
                            <div class="product-fpt-with-stick-tab" style="margin-top: 0px">
                                <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="faq  active">
                                        <h4>1. Hotline của Bean Water là gì nhỉ?</h4>
                                        <div style="display:block" class="content">
                                            <p>Hotline đặt hàng của Bean Water:&nbsp;1900 6750</p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>2. Trụ sở chính và chi nhánh ở đâu vậy?</h4>
                                        <div style="display:none" class="content">
                                            <p>Trụ sở chính: 266 Đội Cấn, Liễu Giai, Ba Đình, Hà Nội</p>
                                            <p>Chi nhánh: 70 Lữ Gia, Phường 15, Quận 11, TP. HCM</p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>3. Thời gian hoạt động của tổng đài bán hàng như thế nào?</h4>
                                        <div style="display:none" class="content">
                                            <p>Tổng đài bán hàng hoạt động từ 7:30 đến 18:00 từ thứ 2 đến thứ 7, chủ nhật
                                                không làm việc</p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>4. Nếu ko đặt hàng qua hotline tôi có thể đặt hàng qua đâu nữa?</h4>
                                        <div style="display:none" class="content">
                                            <p>Nếu không đặt hàng qua hotline, quý khách có thể đặt hàng qua những website
                                                hoặc các kênh như facebook, zalo, shopee, tiktok</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 id="thong-tin-coc-vo-va-doi-vo" style="margin-top: 0" class="faq-title">Thông tin cọc vỏ
                                và đổi vỏ</h3>
                            <div class="product-fpt-with-stick-tab">
                                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                    <div class="faq  active">
                                        <h4>1. Có cần đặt cọc khi mua Bình nước 19L, 20L không?</h4>
                                        <div style="display:block" class="content">
                                            <p>Nếu không có sẵn vỏ khi mua nước loại bình 19L, 20 lít khách hàng phải đặt
                                                tiền cọc vỏ, nếu không có nhu cầu sử dụng tiếp, sẽ hoàn lại vỏ bình và sẽ
                                                nhận lại tiền đặt cọc vỏ bình.</p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>2. Tiền cọc vỏ bình là bao nhiêu?</h4>
                                        <div style="display:none" class="content">
                                            <p>Lavie 19L, Wami 20L, i-on Life 19L, Vihawa 20L, Vĩnh Hảo 20L, PETAL 19L,
                                                Bidrico 19L, Sapuwa 19L, Satori 19L: Đặt cọc vỏ 50.000đ / 1 bình</p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>3. Nếu có sẵn vỏ muốn đổi thì quy định thế nào?</h4>
                                        <div style="display:none" class="content">
                                            <p>+&nbsp;Lavie,&nbsp;ion-Life:&nbsp;Đổi được tất cả các loại nước bình 19L,
                                                20L&nbsp;</p>
                                            <p>+&nbsp;Wami,&nbsp;Sapuwa,&nbsp;Vihawa,&nbsp;Vĩnh hảo,&nbsp;PETAL:&nbsp;Đổi
                                                được tất cả các loại nước bình 19L, 20L trừ Lavie và i-on Life</p>
                                            <p>+&nbsp;Bidrico:&nbsp;Chỉ đổi được khi khách hàng mua nước Bidrico của Bean
                                                Water, không đổi được các loại nước khác</p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>4.&nbsp;Sử dụng nước 01 lần khi thu vỏ trả cọc có trả phí không?</h4>
                                        <div style="display:none" class="content">
                                            <p>Trường hợp sử dụng một lần khi thu vỏ trả cọc sẽ thu phí theo khu vực gần
                                                nhất là 20.000đ</p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>5.&nbsp;Nếu trong quá trình sử dụng làm hỏng vỏ thì có được đổi không?</h4>
                                        <div style="display:none" class="content">
                                            <p>Trong quá trình đổi trả vỏ bình những bình bị lỗi sau sẽ không đổi:</p>
                                            <ul>
                                                <li>Bình bị mất nhãn thân</li>
                                                <li>Biến dạng do va đập, bị thủng do tác động của vật nhọn</li>
                                                <li>Bình dính bùn đất bên trong và ngoài, có thực phẩm, tàn thuốc lá, xác
                                                    côn trùng, … bên trong bình, bị bám dầu máy, xăng, sơn và các loại hóa
                                                    chất khác</li>
                                                <li>Không đổi vỏ bình Vihawa và Vĩnh Hảo của khách hàng bị mất nắp</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>6.&nbsp;Nếu có sẵn 2 vỏ, muốn mua 3 bình thì phải đặt cọc thế nào?</h4>
                                        <div style="display:none" class="content">
                                            <ul>
                                                <li>Nếu nhãn hàng do Bean Water cung cấp thì khách hàng đặt cọc thêm 1 vỏ
                                                    bình (50.000đ/vỏ)</li>
                                                <li>Nếu nhãn hàng không phải Bean Water cung cấp thì khách hàng phải đặt cọc
                                                    03 vỏ bình (50.000đ/vỏ)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>7.&nbsp;Thời gian thu vỏ và trả lại tiền cọc mất bao lâu?</h4>
                                        <div style="display:none" class="content">
                                            <p>Trong vòng 02 ngày kể từ ngày khách hàng yêu cầu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 id="so-luong-giao-phi-dich-vu-va-phi-van-chuyen" style="margin-top: 0" class="faq-title">
                                Số lượng giao, phí dịch vụ và phí vận chuyển</h3>
                            <div class="product-fpt-with-stick-tab">
                                <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">

                                    <div class="faq  active">

                                        <h4>1.&nbsp;Đặt bao nhiêu bình thì được giao nước tận nơi?</h4>

                                        <div style="display:block" class="content">


                                            <p>Chúng tôi&nbsp;nhận giao tận nơi từ 03 sản phẩm trở lên và số lượng sẽ phụ
                                                thuộc vào nơi khách hàng đang ở.<br />
                                                Thông tin chi tiết vui lòng gọi vào tổng đài: 1800 6750</p>

                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>2. Có thu phí khi giao đến nhà cao tầng, không thang máy không?</h4>
                                        <div style="display:none" class="content">
                                            <p>Nhà cao tầng không có thang máy chỉ giao hàng từ tầng 3 trở xuống và tính phụ
                                                phí, cụ thể như sau:</p>
                                            <ul>
                                                <li>Loại hàng: Bình 20L, thùng 1,25L, 1,5 L, 5L, máy nóng lạnh:
                                                    <ul>
                                                        <li>Lầu 1: miễn phí</li>
                                                        <li>Lầu 2: 4.000đ/ 1 bình</li>
                                                        <li>Lầu 3: 7.000đ/ 1 bình</li>
                                                    </ul>
                                                </li>
                                                <li>Loại hàng thùng ly: 350ml, 450ml, 500ml, 600ml:
                                                    <ul>
                                                        <li>Lầu 1: miễn phí</li>
                                                        <li>Lầu 2: 2.000đ/ 1 thùng</li>
                                                        <li>Lầu 3: 4.000đ/ 1 thùng</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="faq ">

                                        <h4>3.&nbsp;Có nhận giao 01 đến 02 thùng những nhãn hàng nước cao cấp như Evian,
                                            Volvic, Perrier không?</h4>
                                        <div style="display:none" class="content">
                                            <p>Sẽ nhận giao từ 01 đến 02 thùng nước cao cấp tận nơi và khách hàng phải trả
                                                thêm tiền phí vận.<br />
                                                Thông tin chi tiết vui lòng gọi vào tổng đài: 1800 6750</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 id="thong-tin-san-pham" style="margin-top: 0" class="faq-title">Thông tin sản phẩm</h3>
                            <div class="product-fpt-with-stick-tab">
                                <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                                    <div class="faq  active">
                                        <h4>1.&nbsp;Những sản phẩm mà Bean Water cung cấp là gì?</h4>
                                        <div style="display:block" class="content">
                                            <p>Những sản phẩm Bean Water cung cấp:</p>
                                            <ul>
                                                <li>Nước tinh khiết PETAL</li>
                                                <li>Nước khoáng thiên nhiên Lavie</li>
                                                <li>Nước tinh khiết Viva</li>
                                                <li>Nước tinh khiết Aquafina</li>
                                                <li>Nước tinh khiết Wami</li>
                                                <li>Nước tinh khiết Sapuwa</li>
                                                <li>Nước tinh khiết Vihawa</li>
                                                <li>Nước khoáng Vĩnh Hảo</li>
                                                <li>Nước ion kiềm i-on Life</li>
                                                <li>Nước tinh khiết Bidrico</li>
                                                <li>Nước tinh khiết Satori</li>
                                                <li>Nước khoáng Lavie Premium</li>
                                                <li>Nước khoáng cao cấp Evian</li>
                                                <li>Nước khoáng cao cấp Volvic</li>
                                                <li>Nước khoáng cao cấp Perrier</li>
                                                <li>Nước khoáng Núi Lửa Jeju</li>
                                                <li>Chân kệ gỗ</li>
                                                <li>Máy nóng lạnh Alaska-R29, R29, Coway</li>
                                                <li>Máy lọc không khí Coway, Sharp</li>
                                                <li>Bình sứ</li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>2. Làm sao biết nước của Bean Water cung cấp là chính hãng?</h4>
                                        <div style="display:none" class="content">
                                            <p>Chúng tôi&nbsp;cam kết bán hàng chính hãng, có chứng nhận từ các nhãn hàng.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq ">
                                        <h4>3. Sản phẩm nước Lavie do công ty nào sản xuất và có những loại nước nào?</h4>
                                        <div style="display:none" class="content">
                                            <p>Sản phẩm nước Lavie do Công ty TNHH La Vie - Tập đoàn Nestlé sản xuất.</p>
                                            <p>Gồm các loại sản phẩm sau:</p>
                                            <ul>
                                                <li>Nước khoáng Lavie bình úp 19L (không có loại bình vòi)</li>
                                                <li>Nước uống Lavie loại 350ml, thùng 24 chai</li>
                                                <li>Nước Lavie Premium loại 400ml, thùng 20 chai</li>
                                                <li>Nước Lavie loại 500ml, thùng 24 chai</li>
                                                <li>Nước Lavie loại 1.5L, thùng 12 chai</li>
                                                <li>Nước tinh khiết Lavie bình vòi 19L (không có loại bình úp)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.faq h4').on('click', function(e){
            e.preventDefault();var $this = $(this);
            $this.parents('.faq').find('.content').slideToggle();
            $this.parents('.faq').toggleClass('active');
            return false;
        });
        $(document).on('click', '.title-muc-luc a[href^="#"]', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 10
            }, 500);
        });
    </script>
@endsection
