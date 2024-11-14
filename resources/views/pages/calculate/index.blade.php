@extends('index')
@section('body')
    <section class="bread-crumb">
        <div class="container">
            <div class="title-bread-crumb">Tính lượng nước</div>
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

                <li><strong><span>Tính lượng nước</span></strong></li>

            </ul>
        </div>
    </section>

    @include('component.svg')

    <section class="page">
        <div class="container">
            <div class="pg_page padding-top-15">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title category-title">
                            <h1 class="title-head d-none">Tính lượng nước</h1>
                        </div>
                        <div class="content-page rte">
                            <p>
                                Tính Lượng Nước Cần Uống Mỗi Ngày Cơ thể chúng ta hơn 70% là nước, việc uống nước nhiều quá
                                hoặc ít quá cũng đều gây hại cho cơ thể. Công cụ tính lượng nước cần uống mỗi ngày sẽ giúp
                                bạn kiểm soát được lượng nước đủ cho cơ thể bạn.
                            </p>
                            <div id="fcp-water-intake-form" class="container">
                                <h2><span id="daily_Water_intake_calculator">TÍNH LƯỢNG NƯỚC UỐNG MỖI NGÀY</span></h2>
                                <div class="fcp-row">
                                    <div class="fcp-radio-btn fcp-radio-btn-metric">
                                        <label for="fcp-water-intake-radio-metric">Việt Nam</label>
                                        <input type="radio" id="fcp-water-intake-radio-metric"
                                            class="form-control fcp-water-radio" name="fcp-water-intake-radio"
                                            value="metric" checked="checked">
                                        <span class="fcp-error">Bắt buộc</span>
                                    </div>
                                    <div class="fcp-radio-btn fcp-radio-btn-standard">
                                        <label for="fcp-water-intake-radio-imperial">Quốc tế</label>
                                        <input type="radio" id="fcp-water-intake-radio-imperial"
                                            class="form-control fcp-water-radio" name="fcp-water-intake-radio"
                                            value="imperial">
                                        <span class="fcp-error">Bắt buộc</span>
                                    </div>
                                    <table class="fcp-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="fcp-water-intake-age">Tuổi</label>
                                                    <select id="fcp-water-intake-age" class="left form-control"
                                                        name="fcp-water-intake-age">
                                                        <option value="14-18">14-18</option>
                                                        <option value="19-30">19-30</option>
                                                        <option value="31-50">31-50</option>
                                                        <option value="50+">50+</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <label for="fcp-water-intake-sex">Giới tính</label>
                                                    <select id="fcp-water-intake-sex" class="left  form-control"
                                                        name="fcp-water-intake-sex">
                                                        <option value="male">Nam</option>
                                                        <option value="female">Nữ</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="fcp-water-intake-height">Chiều cao</label>
                                                    <input id="fcp-water-intake-height" pattern="[0-9]" type="text"
                                                        class="left  form-control" name="fcp-water-intake-height"
                                                        placeholder="Cm">
                                                    <span id="fcp-water-intake-height-error" class="fcp-error">Bắt
                                                        buộc</span>
                                                </td>
                                                <td>
                                                    <label for="fcp-water-intake-weight">Cân nặng</label>
                                                    <input id="fcp-water-intake-weight" pattern="[0-9]" type="text"
                                                        class="left form-control" name="fcp-water-intake-weight"
                                                        placeholder="Kg">
                                                    <span id="fcp-water-intake-weight-error" class="fcp-error">Bắt
                                                        buộc</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="fcp-water-intake-season">Thời tiết</label>
                                                    <select id="fcp-water-intake-season" class="left  form-control"
                                                        name="fcp-water-intake-season">
                                                        <option value="winter">Ngày mưa</option>
                                                        <option value="normal">Bình thường</option>
                                                        <option value="summer">Ngày nắng</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <label for="fcp-water-intake-activity-level">Hoạt động</label>
                                                    <select id="fcp-water-intake-activity-level" class="left form-control"
                                                        name="fcp-water-intake-activity-level">
                                                        <option value="lightly-active">Hoạt động ít</option>
                                                        <option value="moderately-active">Hoạt động vừa phải</option>
                                                        <option value="very-active">Hoạt động mạnh</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr style="text-align: center;">
                                                <td colspan="2"><button onclick="fcpCalculateWaterIntake()"
                                                        class="btn btn-default fcp-btn">Tính ngay</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="fcp-result-string">bạn nên uống <span
                                            class="fcp-calculated-result">......</span> nước mỗi ngày </p>

                                </div>
                            </div>
                            <p class="text-center">Theo Công thức Tính Lượng Nước Uống của Nước Tinh Khiết – The Water MAN
                            </p>
                            <p>Theo công thức 421 trong một chiến dịch truyền thông của một thương hiệu nước quốc tế thì mỗi
                                người cần uống 4 chai 500ml, tương ứng với 2 lít nước mỗi ngày. Trên thực tế, lượng nước
                                chúng ta cần bổ sung mỗi ngày khác nhau tùy thuộc vào giới tính, độ tuổi, cơ địa, tần suất
                                vận động, mùa và cả khu vực sinh sống.</p>
                            <p>Chính vì vậy,&nbsp;công cụ tính lượng nước uống tự động được tham khảo từ các tài liệu uy tín
                                trên thế giới, với mong muốn giúp bạn biết chính xác nhu cầu nước của cơ thể.</p>
                            <h2>Uống bao nhiêu nước là đủ</h2>
                            <p>Đừng quá ngạc nhiên nếu con số quá lớn so với tưởng tượng của bạn. Chúng tôi nhấn mạnh rằng,
                                công thức trên cho kết quả gần đúng về tổng lượng nước cơ thể bạn cần bổ sung mỗi ngày.</p>
                            <p>Trên thực tế, khoảng 24% đã được hấp thụ thông qua chế độ ăn hàng ngày như cơm, canh, rau,
                                trái cây và một số thức uống như sữa, cafe, nước ngọt. Mỗi ngày, một người hít khoảng 10,000
                                lít không khí chiếm khoảng 6% tổng lượng nước cần bổ sung. Do đó, bạn chỉ cần uống để
                                bù&nbsp;70%&nbsp;còn lại mà thôi</p>
                            <h2>Điều gì xảy ra nếu bạn uống thiếu nước?</h2>
                            <p>Một số người, đặc biệt là học sinh, sinh viên, người làm việc văn phòng vì quá mải mê công
                                việc thường mắc chứng “lười” uống nước. Khoa học đã chứng minh, uống ít nước dẫn đến các
                                triệu chứng như nước tiểu sậm màu, nhức đầu, chóng mặt, tăng nhiệt độ cơ thể, táo bón và các
                                vấn đề tiêu hóa.</p>
                            <p>Về lâu dài, thói quen lười uống nước sẽ dẫn đến hàng loạt triệu chứng nặng hơn như loét dạ
                                dày, đau khớp, lão hóa sớm bởi nước cấu tạo nên phần lớn các bộ phận của cơ thể.</p>
                            <h2>Uống quá nhiều nước có tốt không?</h2>
                            <p>Con người không thể sống thiếu nước nhưng uống quá nhiều cũng rất nguy hiểm. Theo Business
                                Insider, cung cấp nước quá nhiều một lúc (quá 1l nước trong 1 tiếng) có thể gây ra tình
                                trạng ngộ độc nước, do thận không đủ khả năng xử lý.</p>
                            <p>Việc uống nước qúa nhiều kéo theo hàng loạt những vấn đề sức khỏe, trong đó có hiện tượng
                                phình tế bào não, gây ra các triệu chứng đau đầu, buồn ngủ, suy nghĩ kém linh hoạt.</p>
                            <p>Khi đã có được lượng nước cần uống hằng ngày dựa vào công thức trên, mọi người cũng cần chú ý
                                đến việc uống đúng để mang lại kết quả tốt nhất.</p>
                            <h2>Một số lưu ý khi tính lượng nước uống hàng ngày</h2>
                            <ul>
                                <li>Với phụ nữ mang thai và cho con bú, bạn cần phải tăng lượng nước uống mỗi ngày khoảng
                                    14-32 oz (414-946 ml) tùy thuộc vào nhu cầu của từng người.<br />
                                    Quy tắc ngón tay cái được áp dụng khi bạn bắt đầu cảm thấy khát nước hoặc trước khi
                                    luyện tập, chạy nhảy, chơi thể thao.</li>
                                <li>Nếu bạn uống đủ nước, bạn sẽ đi tiểu khoảng 2-4h/ lần, nước tiểu không màu hoặc màu vàng
                                    rất nhạt. Nếu có màu đậm hơn, bạn không uống đủ nước. Nhức đầu và chóng mặt là dấu hiệu
                                    của mất nước, bạn cần bổ sung ngay lập tức.</li>
                                <li>Các bệnh mãn tính như tiểu đường, xơ nang và bệnh về thận có thể tăng nhu cầu uống nước
                                    hơn.</li>
                                <li>Nên uống nhiều nước hơn khi ở trong điều kiện thời tiết khắc nghiệt (đặc biệt là nóng,
                                    ẩm hay lạnh) và ở trên cao.</li>
                                <li>Nếu bạn nghĩ mình đang thiếu nước, bạn nên di chuyển đến nơi mát hơn và bổ sung nước.
                                    Uống nước từ từ – uống quá nhanh có thể kích thích việc đi tiểu và hệ quả là bạn lại
                                    nhanh mất nước.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
