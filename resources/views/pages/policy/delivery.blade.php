@extends('index')
@section('title', 'Chính sách giao hàng')

@section('body')
    <section class="bread-crumb">
        <div class="container">
            <div class="title-bread-crumb">Chính sách giao hàng</div>
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

                <li><strong><span>Chính sách giao hàng</span></strong></li>

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
    <section class="page">
        <div class="container">
            <div class="pg_page padding-top-15">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title category-title">
                            <h1 class="title-head d-none">Chính sách giao hàng</h1>
                        </div>
                        <div class="content-page rte">
                            <p><strong><em><u>ĐIỀU KIỆN GIAO HÀNG:</u></em></strong></p>
                            <p>Chúng tôi giao hàng miễn phí vận chuyển đối với đơn hàng có số lượng từ <strong>03 bình/
                                    thùng</strong> trở lên, áp dụng cho khách hàng thuộc phạm vi bán kính TPHCM&nbsp; và bán
                                kính 4km tính từ các địa điểm có trên kênh phân phối của <strong>Bean Water</strong>.</p>
                            <p>Đối với đơn đặt hàng dưới 03 bình, chúng tôi tính phí phụ thu giao hàng với mức phí là 25.000
                                đ.</p>
                            <p><strong><em><u>THỜI GIAN GIAO HÀNG</u></em></strong><strong><em>:</em></strong></p>
                            <ul>
                                <li>Từ 7h30 đến 19h30 áp dụng&nbsp; từ thứ 2 đến thứ 7.</li>
                                <li>Từ 9h đến 18h áp dụng cho chủ nhật và ngày lễ.</li>
                                <li>Thời gian giao hàng chậm nhất trong vòng 2h(giờ) sẽ giao hàng kể từ khi chúng tôi tiếp
                                    nhận được yêu cầu đặt hàng.</li>
                            </ul>
                            <p><strong><em><u>PHÍ ĐẶT CỌC VỎ:</u></em></strong></p>
                            <p>Khách chưa có vỏ bình vui lòng đặt cọc 50.000Đ/ vỏ bình</p>
                            <p><span style="color: #ff0000;"><strong>Lưu ý:</strong></span> các vỏ nước có thương hiệu được
                                công ty đổi bù (Lavie, Lavie ViVa, ion Life, Bidrico, Vĩnh hảo, Vihawa).</p>
                            <p><strong><em><u>PHÍ PHỤ THU VÁC LẦU</u></em></strong><strong><em>:</em></strong></p>
                            <p>Đối với điểm giao hàng chỉ có thang bộ:</p>
                            <ul>
                                <li>Phụ thu phí vác lầu 1 là 3.000đ/bình.</li>
                                <li>Phụ thu phí vác lầu 2 là 5.000đ/bình.</li>
                                <li>Phụ thu phí vác lầu 3 là 8.000đ/bình.</li>
                                <li>Đối với đơn hàng từ lầu 4 trở lên&nbsp; nhân viên sẽ vác lên tới lầu 3 khách hàng vui
                                    lòng hỗ trợ vác lên lầu.</li>
                            </ul>
                            <p><strong><em><u>PHÍ THU HỒI VỎ BÌNH:</u></em></strong></p>
                            <p>Khi không sử dụng dịch vụ của công ty khách hàng muốn trả lại vỏ bình:</p>
                            <p><strong>1.</strong>&nbsp;Mang tới các điểm của Phương Xuân Thủy khách hàng sẽ được hoàn cọc
                                là 50.000/vỏ.</p>
                            <p><strong>2.</strong>&nbsp;Phương Xuân Thủy xuống thu hồi vỏ bình về số lượng dưới 10 vỏ phí
                                thu hồi 25.000đ/lần.</p>
                            <p><strong>3.</strong>&nbsp;Số vỏ nhiều hơn xin vui lòng liên hệ: <strong>Bean Water</strong>
                            </p>
                            <ul>
                                <li><strong>Địa chỉ:</strong> 70 Lữ Gia, Phường 15, Quận 11, TP. HCM</li>
                                <li><strong>Điện thoại: </strong>1800 6750</li>
                                <li><strong>Email:&nbsp;</strong><a href="mailto:support@sapo.vn">support@sapo.vn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
