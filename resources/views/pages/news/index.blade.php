@extends('index')
@section('body')

@include('component.slider')

<section class="bread-crumb">
   <div class="container">
      <div class="title-bread-crumb">Tin tức</div>
      <ul class="breadcrumb" style="display: flex; align-items: center; padding: 0; list-style: none; margin: 0;">
         <li class="home" style="display: flex; align-items: center;">
            <a href="index.html"><span>Trang chủ</span></a>
            <span class="mr_lr" style="margin: 0 5px;">
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10" width="8" height="12">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
               </svg>
            </span>
         </li>
         <li style="display: flex; align-items: center;">
            <strong><span>Tin tức</span></strong>
         </li>
      </ul>
   </div>
</section>

<div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
   <meta itemprop="name" content="Tin tức">
   <meta itemprop="description" content="">
   <div class="container">
      <h1 class="title-page d-none">
         <span>Tin tức</span>
      </h1>
      <div class="row">
         <div class="right-content col-lg-8  col-12">

            <div class="list-blogs">

               <div class="row row-fix">

                  <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12 col-fix">
                     <div class="item-blog">
                        <div class="block-thumb">
                           <a class="thumb" href="bi-viem-hong-nen-hay-khong-nen-uong-nuoc-da-lanh.html"
                              title="Bị viêm họng nên hay không nên uống nước đá lạnh?">
                              <img width="600" height="380" class="lazyload"
                                 src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/uong-nuoc-lanh-khi-viem-hong-nen-hay-khong.jpg?v=1721034114113"
                                 alt="Bị viêm họng nên hay không nên uống nước đá lạnh?">
                           </a>
                        </div>
                        <div class="block-content">
                           <h3><a href="bi-viem-hong-nen-hay-khong-nen-uong-nuoc-da-lanh.html"
                                 title="Bị viêm họng nên hay không nên uống nước đá lạnh?">Bị viêm họng nên hay không
                                 nên uống nước đá lạnh?</a></h3>
                           <div class="posts">
                              <div class="time-post f">

                                 <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-clock fa-w-16">
                                    <path fill="currentColor"
                                       d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                       class=""></path>
                                 </svg>
                                 15/07/2024
                              </div>
                              <div class="time-post">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="svg-inline--fa fa-user fa-w-14">
                                    <path fill="currentColor"
                                       d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                       class=""></path>
                                 </svg>
                                 <span>Bùi Minh Nhật</span>
                              </div>
                           </div>
                           <p class="justify">“Viêm họng có thể uống nước lạnh được không?” là một trong số những câu
                              hỏi phổ biến của không ít người. Đa số đều cho rằng khi viêm họng, cần tránh tối đa các
                              loại đồ uống lạnh. Liệu điều này là đúng hay sai? Cùng tìm hiểu câu trả lời qua bài viết
                              sau của Aquafina Việt Nam các bạn nhé!&nbsp;
                              Bệnh viêm họng là gì?
                              Viêm họng là tình trạng niêm mạc hầu họng bị sưng viêm, gây đau...</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12 col-fix">
                     <div class="item-blog">
                        <div class="block-thumb">
                           <a class="thumb" href="khac-biet-giua-nuoc-tinh-khiet-aquafina-va-victory-la-gi.html"
                              title="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">
                              <img width="600" height="380" class="lazyload"
                                 src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/nuoc-uong-aquafina-va-nuoc-uong-victory.jpg?v=1721033556900"
                                 alt="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">
                           </a>
                        </div>
                        <div class="block-content">
                           <h3><a href="khac-biet-giua-nuoc-tinh-khiet-aquafina-va-victory-la-gi.html"
                                 title="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">Khác biệt giữa nước
                                 tinh khiết Aquafina và Victory là gì?</a></h3>
                           <div class="posts">
                              <div class="time-post f">

                                 <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-clock fa-w-16">
                                    <path fill="currentColor"
                                       d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                       class=""></path>
                                 </svg>
                                 15/07/2024
                              </div>
                              <div class="time-post">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="svg-inline--fa fa-user fa-w-14">
                                    <path fill="currentColor"
                                       d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                       class=""></path>
                                 </svg>
                                 <span>Bùi Minh Nhật</span>
                              </div>
                           </div>
                           <p class="justify">Trong cuộc sống ngày nay, để đảm bảo sức khỏe cho người thân và gia đình,
                              bạn cần chọn những thương hiệu nước uống chất lượng, có uy tín lâu năm trên thị trường.
                              Bạn đang băn khoăn không biết nên chọn nhãn hiệu nước nào? Bài viết hôm nay sẽ so sánh 2
                              sản phẩm nước uống được nhiều người tiêu dùng ưa chuộng nhất trong thời gian gần đây là
                              Aquafina và Victory.&nbsp;

                              Nước uống Aquafina và Victory
                              Cùng tìm...</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12 col-fix">
                     <div class="item-blog">
                        <div class="block-thumb">
                           <a class="thumb" href="8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.html"
                              title="8 thời điểm uống nước lý tưởng trong ngày">
                              <img width="600" height="380" class="lazyload"
                                 src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.jpg?v=1721034897817"
                                 alt="8 thời điểm uống nước lý tưởng trong ngày">
                           </a>
                        </div>
                        <div class="block-content">
                           <h3><a href="8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.html"
                                 title="8 thời điểm uống nước lý tưởng trong ngày">8 thời điểm uống nước lý tưởng trong
                                 ngày</a></h3>
                           <div class="posts">
                              <div class="time-post f">

                                 <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-clock fa-w-16">
                                    <path fill="currentColor"
                                       d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                       class=""></path>
                                 </svg>
                                 15/07/2024
                              </div>
                              <div class="time-post">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="svg-inline--fa fa-user fa-w-14">
                                    <path fill="currentColor"
                                       d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                       class=""></path>
                                 </svg>
                                 <span>Bùi Minh Nhật</span>
                              </div>
                           </div>
                           <p class="justify">Hầu hết chúng ta đều biết uống nước đóng vai trò quan trọng như thế nào
                              trong cuộc sống hàng ngày. Tuy nhiên, liệu bạn đã biết làm thế nào để bổ sung nước đúng
                              cách mỗi ngày hay chưa? Nếu câu trả lời là “chưa” thì cũng đừng lo vì ngày hôm nay,
                              Aquafina Việt Nam sẽ giúp các bạn nhận biết được 8 thời điểm “vàng” để uống nước mỗi ngày
                              nhằm cải thiện và nâng cao sức...</p>

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12 col-fix">
                     <div class="item-blog">
                        <div class="block-thumb">
                           <a class="thumb" href="phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.html"
                              title="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">
                              <img width="600" height="380" class="lazyload"
                                 src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.jpg?v=1721035125143"
                                 alt="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">
                           </a>
                        </div>
                        <div class="block-content">
                           <h3><a href="phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.html"
                                 title="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">Phương pháp uống nước
                                 giúp hệ tim mạch luôn khỏe mạnh</a></h3>
                           <div class="posts">
                              <div class="time-post f">

                                 <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-clock fa-w-16">
                                    <path fill="currentColor"
                                       d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                       class=""></path>
                                 </svg>
                                 15/07/2024
                              </div>
                              <div class="time-post">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="svg-inline--fa fa-user fa-w-14">
                                    <path fill="currentColor"
                                       d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                       class=""></path>
                                 </svg>
                                 <span>Bùi Minh Nhật</span>
                              </div>
                           </div>
                           <p class="justify">Theo các nghiên cứu cho thấy các cơn đau tim dẫn đến đột quỵ và tử vong
                              chiếm tỷ lệ ngày càng cao. Vấn đề về sức khỏe của tim mạch đã trở thành mối quan tâm hàng
                              đầu hiện nay của nhiều người. Uống nước đúng cách là phương pháp dễ nhất để giữ cho bạn có
                              một hệ tim mạch luôn khỏe mạnh.
                              Nước và hệ tim mạch
                              Nước uống đóng vai trò đặc biệt quan trọng đối với cơ...</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12 col-fix">
                     <div class="item-blog">
                        <div class="block-thumb">
                           <a class="thumb" href="cach-uong-nuoc-khi-bi-say-nang-de-phuc-hoi-nhanh-nhat.html"
                              title="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">
                              <img width="600" height="380" class="lazyload"
                                 src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/cach-uong-nuoc-khi-bi-say-nang.jpg?v=1721034603447"
                                 alt="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">
                           </a>
                        </div>
                        <div class="block-content">
                           <h3><a href="cach-uong-nuoc-khi-bi-say-nang-de-phuc-hoi-nhanh-nhat.html"
                                 title="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">Cách uống nước khi bị say
                                 nắng để phục hồi nhanh nhất</a></h3>
                           <div class="posts">
                              <div class="time-post f">

                                 <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-clock fa-w-16">
                                    <path fill="currentColor"
                                       d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                       class=""></path>
                                 </svg>
                                 15/07/2024
                              </div>
                              <div class="time-post">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="svg-inline--fa fa-user fa-w-14">
                                    <path fill="currentColor"
                                       d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                       class=""></path>
                                 </svg>
                                 <span>Bùi Minh Nhật</span>
                              </div>
                           </div>
                           <p class="justify">Mùa hè đang diễn ra với nhiệt độ cao ngất ngưởng lên đến 40 độ C ở nhiều
                              nơi, kèm theo đó là nhiều biểu hiện thời tiết cực đoan khác. Đây chính là thời điểm dễ gây
                              ra hiện tượng say nắng, ảnh hưởng nghiêm trọng cho sức khỏe con người.
                              Say nắng là gì?
                              Say nắng là căn bệnh nghiêm trọng do hiện tượng nắng nóng với nhiệt độ cao kéo dài. Bệnh
                              xuất hiện khi cơ thể không còn...</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12 col-fix">
                     <div class="item-blog">
                        <div class="block-thumb">
                           <a class="thumb" href="thuc-khuya-nen-uong-nuoc-the-nao-de-bao-ve-suc-khoe.html"
                              title="Thức khuya nên uống nước thế nào để bảo vệ sức khỏe?">
                              <img width="600" height="380" class="lazyload"
                                 src="../bizweb.dktcdn.net/100/521/251/themes/960910/assets/lazyd37d.png?1726484223626"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/thuc-khuya-nen-uong-nuoc-the-nao-de-bao-ve-suc-khoe.jpg?v=1721034346907"
                                 alt="Thức khuya nên uống nước thế nào để bảo vệ sức khỏe?">
                           </a>
                        </div>
                        <div class="block-content">
                           <h3><a href="thuc-khuya-nen-uong-nuoc-the-nao-de-bao-ve-suc-khoe.html"
                                 title="Thức khuya nên uống nước thế nào để bảo vệ sức khỏe?">Thức khuya nên uống nước
                                 thế nào để bảo vệ sức khỏe?</a></h3>
                           <div class="posts">
                              <div class="time-post f">

                                 <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="svg-inline--fa fa-clock fa-w-16">
                                    <path fill="currentColor"
                                       d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                       class=""></path>
                                 </svg>
                                 15/07/2024
                              </div>
                              <div class="time-post">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="svg-inline--fa fa-user fa-w-14">
                                    <path fill="currentColor"
                                       d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                       class=""></path>
                                 </svg>
                                 <span>Bùi Minh Nhật</span>
                              </div>
                           </div>
                           <p class="justify">Sau một ngày làm việc vất vả thì khoảng thời gian ban đêm thường là lúc cơ
                              thể nghỉ ngơi để phục hồi lại sức khỏe và cân bằng các yếu tố trong cơ thể. Tuy nhiên,
                              không ít người vì một nguyên nhân hoặc một thói quen nào đó mà thường xuyên thức đêm hoặc
                              ngủ không đủ giấc.Vào những lúc này, bổ sung nước đúng cách là rất quan trọng. Và đó là lý
                              do bạn không nên...</p>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="text-center">
    <nav class="clearfix relative nav_pagi w_100">
        <ul class="pagination clearfix" style="display: flex; justify-content: center; list-style: none; padding: 0; margin: 0;">
            <li class="page-item disabled" style="margin-right: 8px;">
                <a class="page-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
                        <path d="M11.1729 9.45117L1.92228 0.226167C1.6192 -0.0759023 1.12849 -0.0753945 0.825918 0.227729C0.523575 0.530814 0.524357 1.02179 0.827481 1.32409L9.52745 10L0.827168 18.6759C0.524083 18.9783 0.523302 19.4689 0.825605 19.7721C0.977285 19.924 1.17599 20 1.37471 20C1.57291 20 1.77084 19.9245 1.92224 19.7736L11.1729 10.5489C11.3188 10.4036 11.4008 10.206 11.4008 10C11.4008 9.7941 11.3186 9.59668 11.1729 9.45117Z" fill="#9D9D9D"/>
                    </svg>
                </a>
            </li>
            <li class="page-item active disabled" style="margin-right: 8px;">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item" style="margin-right: 8px;">
                <a class="page-link" href="tin-tuc4658.html?page=2">2</a>
            </li>
            <li class="page-item hidden-xs">
                <a class="page-link" href="tin-tuc4658.html?page=2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
                        <path d="M11.1729 9.45117L1.92228 0.226167C1.6192 -0.0759023 1.12849 -0.0753945 0.825918 0.227729C0.523575 0.530814 0.524357 1.02179 0.827481 1.32409L9.52745 10L0.827168 18.6759C0.524083 18.9783 0.523302 19.4689 0.825605 19.7721C0.977285 19.924 1.17599 20 1.37471 20C1.57291 20 1.77084 19.9245 1.92224 19.7736L11.1729 10.5489C11.3188 10.4036 11.4008 10.206 11.4008 10C11.4008 9.7941 11.3186 9.59668 11.1729 9.45117Z" fill="#9D9D9D"/>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</div>

            </div>
         </div>
         <div class="blog_left_base col-lg-4 col-12">
            <div class="box_sidebar">
               <div class="search-blog">
                  <div class="title-module-blog">
                     <h2>Tìm kiếm <span>tin tức</span></h2>
                  </div>
                  <div class="thump-searh">
                     <form action="https://bean-water.mysapo.net/search" method="get"
                        class="blog-search-form input-group search-bar" role="search">
                        <input type="text" name="query" required class="input-group-field form-control"
                           placeholder="Tìm kiếm tin tức..." autocomplete="off">
                        <input type="hidden" name="type" value="article">
                        <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
                           <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill="#ffffff"
                                 d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z">
                              </path>
                           </svg>
                        </button>
                     </form>
                  </div>
               </div>
               <div class="aside-content aside-content-blog">
                  <div class="title-module-cate">
                     <h2>Danh mục <span>sản phẩm</span></h2>
                  </div>
                  <nav class="nav-category">
                     <ul class="nav navbar-pills">
                        <li class="nav-item  relative">
                           <a title="Hàng Việt Nam" href="hang-viet-nam.html" class="nav-link pr-5">Hàng Việt Nam</a>
                           <i class="open_mnu down_icon"></i>
                           <ul class="menu_down" style="display:none;">
                              <li class="nav-item">
                                 <a title="Nước Petal" class="nav-link" href="nuoc-petal.html">Nước Petal</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước Vĩnh Hảo" class="nav-link" href="nuoc-vinh-hao.html">Nước Vĩnh Hảo</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước Vivant" class="nav-link" href="nuoc-vivant.html">Nước Vivant</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước Vihawa" class="nav-link" href="nuoc-vihawa.html">Nước Vihawa</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước Satori" class="nav-link" href="nuoc-satori.html">Nước Satori</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Hàng nhập khẩu" href="hang-nhap-khau.html" class="nav-link pr-5">Hàng nhập khẩu</a>
                           <i class="open_mnu down_icon"></i>
                           <ul class="menu_down" style="display:none;">
                              <li class="nav-item">
                                 <a title="Nước Lavie" class="nav-link" href="nuoc-lavie.html">Nước Lavie</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước Aquafina" class="nav-link" href="nuoc-aquafina.html">Nước Aquafina</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước Evian" class="nav-link" href="nuoc-evian.html">Nước Evian</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước Volvic" class="nav-link" href="nuoc-volvic.html">Nước Volvic</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước núi lửa Jeju" class="nav-link" href="nuoc-nui-lua-jeju.html">Nước núi
                                    lửa Jeju</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Nước bình vòi" href="nuoc-binh-voi.html" class="nav-link pr-5">Nước bình vòi</a>
                           <i class="open_mnu down_icon"></i>
                           <ul class="menu_down" style="display:none;">
                              <li class="nav-item">
                                 <a title="Nước bình Lavie" class="nav-link" href="nuoc-binh-lavie.html">Nước bình
                                    Lavie</a>
                              </li>
                              <li class="nav-item">
                                 <a title="Nước bình vòi Aqua" class="nav-link" href="nuoc-binh-voi-aqua.html">Nước bình
                                    vòi Aqua</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Nước bình úp" class="nav-link" href="nuoc-binh-up.html">Nước bình úp</a>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Nước uống chai" class="nav-link" href="nuoc-uong-chai.html">Nước uống chai</a>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Nước suối chai" class="nav-link" href="nuoc-suoi-chai.html">Nước suối chai</a>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Nước đóng chai" class="nav-link" href="nuoc-dong-chai.html">Nước đóng chai</a>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Nước suối ly" class="nav-link" href="nuoc-suoi-ly.html">Nước suối ly</a>
                        </li>
                     </ul>

                  </nav>
               </div>
               <script>
                  $(".open_mnu").click(function () {
                     $(this).toggleClass('cls_mn').next().slideToggle();
                  });
               </script>
               <div class="blog_noibat">
                  <div class="title-module-nb">
                     <h2><a href="tin-tuc.html" title="Tin tức nổi bật">Tin tức <span>nổi bật</span></a></h2>
                  </div>
                  <div class="blog_content">

                     <div class="item clearfix">
                        <div class="post-thumb">
                           <a class="image-blog scale_hover"
                              href="bi-viem-hong-nen-hay-khong-nen-uong-nuoc-da-lanh.html"
                              title="Bị viêm họng nên hay không nên uống nước đá lạnh?">

                              <img class="img_blog lazyload"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/uong-nuoc-lanh-khi-viem-hong-nen-hay-khong.jpg?v=1721034114113"
                                 alt="Bị viêm họng nên hay không nên uống nước đá lạnh?">

                           </a>
                        </div>
                        <div class="contentright">
                           <h3><a title="Bị viêm họng nên hay không nên uống nước đá lạnh?"
                                 href="bi-viem-hong-nen-hay-khong-nen-uong-nuoc-da-lanh.html">Bị viêm họng nên hay không
                                 nên uống nước đá lạnh?</a></h3>
                        </div>
                     </div>
                     <div class="item clearfix">
                        <div class="post-thumb">
                           <a class="image-blog scale_hover"
                              href="khac-biet-giua-nuoc-tinh-khiet-aquafina-va-victory-la-gi.html"
                              title="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">

                              <img class="img_blog lazyload"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/nuoc-uong-aquafina-va-nuoc-uong-victory.jpg?v=1721033556900"
                                 alt="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?">
                           </a>
                        </div>
                        <div class="contentright">
                           <h3><a title="Khác biệt giữa nước tinh khiết Aquafina và Victory là gì?"
                                 href="khac-biet-giua-nuoc-tinh-khiet-aquafina-va-victory-la-gi.html">Khác biệt giữa
                                 nước tinh khiết Aquafina và Victory là gì?</a></h3>
                        </div>
                     </div>
                     <div class="item clearfix">
                        <div class="post-thumb">
                           <a class="image-blog scale_hover" href="8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.html"
                              title="8 thời điểm uống nước lý tưởng trong ngày">

                              <img class="img_blog lazyload"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.jpg?v=1721034897817"
                                 alt="8 thời điểm uống nước lý tưởng trong ngày">
                           </a>
                        </div>
                        <div class="contentright">
                           <h3><a title="8 thời điểm uống nước lý tưởng trong ngày"
                                 href="8-thoi-diem-uong-nuoc-ly-tuong-trong-ngay.html">8 thời điểm uống nước lý tưởng
                                 trong ngày</a></h3>
                        </div>
                     </div>
                     <div class="item clearfix">
                        <div class="post-thumb">
                           <a class="image-blog scale_hover"
                              href="phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.html"
                              title="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">

                              <img class="img_blog lazyload"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.jpg?v=1721035125143"
                                 alt="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh">
                           </a>
                        </div>
                        <div class="contentright">
                           <h3><a title="Phương pháp uống nước giúp hệ tim mạch luôn khỏe mạnh"
                                 href="phuong-phap-uong-nuoc-giup-he-tim-mach-luon-khoe-manh.html">Phương pháp uống nước
                                 giúp hệ tim mạch luôn khỏe mạnh</a></h3>
                        </div>
                     </div>
                     <div class="item clearfix">
                        <div class="post-thumb">
                           <a class="image-blog scale_hover"
                              href="cach-uong-nuoc-khi-bi-say-nang-de-phuc-hoi-nhanh-nhat.html"
                              title="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">

                              <img class="img_blog lazyload"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="https://bizweb.dktcdn.net/100/521/251/articles/cach-uong-nuoc-khi-bi-say-nang.jpg?v=1721034603447"
                                 alt="Cách uống nước khi bị say nắng để phục hồi nhanh nhất">
                           </a>
                        </div>
                        <div class="contentright">
                           <h3><a title="Cách uống nước khi bị say nắng để phục hồi nhanh nhất"
                                 href="cach-uong-nuoc-khi-bi-say-nang-de-phuc-hoi-nhanh-nhat.html">Cách uống nước khi bị
                                 say nắng để phục hồi nhanh nhất</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>

@endsection