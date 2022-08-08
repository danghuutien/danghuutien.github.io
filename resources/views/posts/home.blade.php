@extends('layout.trangchu')
@section('content')
<div class="uk-section-primary uk-preserve-color"
                uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-fade; delay: false;">
                <div data-src="./images/banner.jpg"
                    data-srcset="./images/banner.jpg 768w, ./images/banner.jpg 1024w, ./images/banner.jpg 1366w, ./images/banner.jpg 1560w, ./images/banner.jpg 1600w, ./images/banner.jpg 1920w, ./images/banner.jpg 2559w"
                    data-sizes="(min-width: 1560px) 1560px" uk-img
                    class="uk-background-norepeat uk-background-top-left uk-section uk-section-small">
                    <div class="uk-container uk-container-expand">
                        <div class="tm-grid-expand uk-grid-margin" uk-grid
                            uk-height-viewport="offset-top: true; offset-bottom: 20;">
                            <div class="uk-grid-item-match uk-flex-middle uk-width-expand@m">
                                <div class="uk-panel uk-width-1-1">
                                    <h1 class="uk-h2 uk-text-muted uk-margin-remove-bottom uk-width-large uk-margin-auto"
                                        uk-scrollspy-class> <strong>CÔNG TY CỔ PHẦN TƯ VẤN LUẬT VÀ KẾ TOÁN</strong></h1>
                                    <div class="uk-panel uk-text-large uk-text-muted uk-margin-remove-vertical uk-width-large uk-margin-auto"
                                        uk-scrollspy-class>
                                        <p>Kiểm toán &#8211; Thuế &#8211; Tư vấn</p>
                                    </div>
                                    <div class="uk-margin-medium uk-width-large uk-margin-auto" uk-scrollspy-class>
                                        <a class="el-content uk-button uk-button-primary" href="service/index.html">
                                            Dịch vụ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-large@m"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-section uk-section-large"
                uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-top-small; delay: false;">
                <div class="uk-container uk-container-large">
                    <div class="tm-grid-expand uk-grid-small uk-child-width-1-1 uk-grid-margin-small" uk-grid
                        uk-height-match="target: .uk-card">
                        <div class="uk-width-1-1@m">
                            <div class="uk-margin uk-text-center">
                                <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-medium uk-grid-match"
                                    uk-grid>
                                    <div>
                                        <a class="el-item uk-card uk-card-hover uk-card-body uk-margin-remove-first-child uk-link-toggle uk-display-block"
                                            href="#" uk-scroll uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="/wp-content/uploads/services-05-audit-and-assurance.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h4 uk-margin-top uk-margin-remove-bottom"> KIỂM TOÁN
                                            </h2>
                                            <div class="el-content uk-panel uk-margin-top">
                                                <p style="text-align: left;">▪ Kiểm toán theo luật định, Kiểm toán chuẩn
                                                    đoán<br />▪ Kiểm toán nội bộ<br />▪ Kiểm toán quyết toán dự án hoàn
                                                    thành<br />▪ Soát xét có giới hạn và các thủ tục được thống
                                                    nhất<br />▪ Soát xét thủ tục và hệ thống kiểm soát nội
                                                    bộ<br /><br /></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="el-item uk-card uk-card-hover uk-card-body uk-margin-remove-first-child uk-link-toggle uk-display-block"
                                            href="#" uk-scroll uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="/wp-content/uploads/services-02-legal-advisory.svg" uk-img>
                                            <h2 class="el-title uk-h4 uk-margin-top uk-margin-remove-bottom"> KẾ TOÁN
                                            </h2>
                                            <div class="el-content uk-panel uk-margin-top">
                                                <p style="text-align: left;">▪ Chuyển đổi Báo cáo tài chính giữa VAS,
                                                    IFRS và các chuẩn mực kế toán khác<br />▪ Dịch vụ ghi chép sổ sách
                                                    kế toán<br />▪ Thiết lập hệ thống kế toán, tư vấn xây dựng và lựa
                                                    chọn phần mềm</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="el-item uk-card uk-card-hover uk-card-body uk-margin-remove-first-child uk-link-toggle uk-display-block"
                                            href="#" uk-scroll uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="/wp-content/uploads/services-01-tax-planning.svg" uk-img>
                                            <h2 class="el-title uk-h4 uk-margin-top uk-margin-remove-bottom"> THUẾ</h2>
                                            <div class="el-content uk-panel uk-margin-top">
                                                <p style="text-align: left;">▪ Các dịch vụ tư vấn thuế định kỳ<br />▪
                                                    Các dịch vụ khác về pháp lý và thủ tục<br />▪ Dịch vụ tư vấn tuân
                                                    thủ các quy định về thuế<br />▪ Lập kế hoạch thuế<br />▪ Dịch vụ
                                                    hoàn thuế và kiến nghị về thuế<br />▪ Dịch vụ tư vấn đầu tư</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="el-item uk-card uk-card-hover uk-card-body uk-margin-remove-first-child uk-link-toggle uk-display-block"
                                            href="#" uk-scroll uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="/wp-content/uploads/services-03-financial-services.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h4 uk-margin-top uk-margin-remove-bottom"> TÀI CHÍNH
                                                DOANH NGHIỆP</h2>
                                            <div class="el-content uk-panel uk-margin-top">
                                                <p style="text-align: left;">▪ Tư vấn mua bán, sáp nhập<br />▪ Dịch vụ
                                                    thẩm định tài chính (DD)<br />▪ Dịch vụ thẩm định giá<br />▪ Dịch vụ
                                                    phân tích và soát xét về tài chính<br />▪ Tái cấu trúc doanh
                                                    nghiệp<br />▪ Tái cấu trúc nợ<br />▪ Dịch vụ tư vấn cổ phần hóa
                                                    doanh nghiệp</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default">
                <div data-src="./images/new_img.jpg" uk-img
                    class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-section-xlarge"
                    uk-parallax="bgy: -100,100;media: @m">
                    <div class="uk-container uk-container-small">
                        <div class="uk-grid-margin-small uk-container">
                            <div class="tm-grid-expand uk-grid-small" uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div
                                        class="uk-panel uk-margin-remove-first-child uk-width-large uk-margin-auto uk-text-left">
                                        <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Thành công của
                                            khách hàng<br>Là sự phát triển của chúng tôi</h2>
                                        <div class="el-content uk-panel uk-margin-top">
                                            <p>Công ty cổ phần tư vấn luật và kế toán  &#8211; được thành lập vào ngày
                                                24 tháng 10 năm 2001 bởi những kiểm toán viên ưu tú, có thâm niên làm
                                                việc nhiều năm tại các công ty kiểm toán và tư vấn hàng đầu thế giới và
                                                Việt Nam.</p>
                                            <p>Với những kiến thức và kinh nghiệm làm việc có được, chúng tôi tham gia
                                                tích cực vào việc xây dựng hệ thống chuẩn mực kế toán, kiểm toán của
                                                Việt Nam; các quy định về kế toán, kiểm toán, tài chính của Bộ Tài chính
                                                và các ban ngành liên quan, cũng như phổ biến các quy định này cho khách
                                                hàng thông qua các khoá đào tạo chuyên nghiệp hay qua các cuộc kiểm
                                                toán.</p>
                                        </div>
                                        <div class="uk-margin-top"><a href="gioi-thieu/index.html"
                                                class="el-link uk-button uk-button-primary">Giới thiệu</a></div>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@m"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-section uk-section-large">
                <div class="uk-container uk-container-small">
                    <div class="uk-grid-margin-large uk-container">
                        <div class="tm-grid-expand uk-grid-large" uk-grid>
                            <div class="uk-width-1-4@s">
                                <div class="uk-panel uk-margin-remove-first-child uk-margin uk-text-left">
                                    <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Lý do lựa chọn
                                        chúng tôi</h2>
                                    <div class="el-content uk-panel uk-margin-top">
                                        <p>Với danh tiếng của mình, chúng tôi đã thiết lập được các mối quan hệ riêng,
                                            cần thiết với các cơ quan bộ của chính phủ, các ban ngành liên quan. Đây
                                            thực sự là một lợi thế nhằm phục vụ tốt hơn cho khách hàng của chúng tôi.
                                        </p>
                                    </div>
                                    <div class="uk-margin-top"><a href="dich-vu/index.html"
                                            class="el-link uk-button uk-button-primary">Dự án</a></div>
                                </div>
                            </div>
                            <div class="uk-width-1-4@s">
                                <h3 class="uk-heading-medium uk-text-primary"> 400</h3>
                                <h3 class="uk-h5 uk-text-muted uk-margin-remove-top"> năm kinh nghiệm<br />kiểm toán
                                </h3>
                                <h3 class="uk-heading-medium uk-text-primary"> 200</h3>
                                <h3 class="uk-h5 uk-text-muted uk-margin-remove-top"> Kiểm toán viên<br />công chứng
                                    (CPA)</h3>
                            </div>
                            <div class="uk-width-1-4@s">
                                <h3 class="uk-heading-medium uk-text-success"> 1500</h3>
                                <h3 class="uk-h5 uk-text-muted uk-margin-remove-top"> nhân viên<br />chuyên nghiệp</h3>
                                <h3 class="uk-heading-medium uk-text-success"> 4</h3>
                                <h3 class="uk-h5 uk-text-muted uk-margin-remove-top"> KTV quốc tế<br />(ACCA, CPA
                                    Australia)</h3>
                            </div>
                            <div class="uk-width-1-4@s">
                                <h3 class="uk-heading-medium uk-text-danger"> 38000</h3>
                                <h3 class="uk-h5 uk-text-muted uk-margin-remove-top"> khách hàng và dự án<br />được thực
                                    hiện</h3>
                                <h3 class="uk-heading-medium uk-text-danger"> 24</h3>
                                <h3 class="uk-h5 uk-text-muted uk-margin-remove-top"> Trụ sở văn phòng<br />từ Bắc vào
                                    Nam</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-section uk-padding-remove-vertical">
                <div class="tm-grid-expand uk-grid-collapse" uk-grid>
                    <div class="uk-grid-item-match uk-width-1-2@s">
                        <div class="uk-tile-default uk-flex">
                            <div class="uk-tile uk-width-1-1 uk-background-norepeat uk-background-cover uk-background-center-center uk-background-image@s"
                                data-src="./images/home-contact-01.jpg" uk-img></div>
                        </div>
                    </div>
                    <div class="uk-grid-item-match uk-light uk-width-1-2@s">
                        <div class="uk-tile-default uk-flex uk-position-relative">
                            <div class="uk-tile uk-width-1-1 uk-tile-large uk-flex uk-background-norepeat uk-background-cover uk-background-center-center uk-background-blend-multiply"
                                data-src="./images/home-contact-02.jpg" uk-img
                                style="background-color: #213b93;">
                                <div class="uk-position-cover" style="background-color: rgba(33, 59, 147, 0.75);"></div>
                                <div class="uk-panel uk-width-1-1">
                                    <h2 class="uk-width-large uk-margin-auto uk-text-left"> Liên hệ</h2>
                                    <div class="uk-panel uk-margin uk-width-large uk-margin-auto">
                                        <p>Đối với các liên hệ và yêu cầu tư vấn, chúng tôi sẽ phản hồi trong vòng 48
                                            giờ kể từ thời điểm nhận thông tin. Hoặc, nếu bạn muốn liên hệ trực tiếp vui
                                            lòng sử dụng số điện thoại của chúng tôi<br /><em>Giờ làm việc 8:00 sáng đến
                                                5:00 chiều (GMT+7)</em></p>
                                    </div>
                                    <div class="uk-margin-large uk-width-large uk-margin-auto">
                                        <div class="uk-flex-middle uk-grid-medium uk-child-width-auto" uk-grid>
                                            <div class="el-item">
                                                <a class="el-content uk-button uk-button-primary"
                                                    href="cdn-cgi/l/email-protection.html#63000c0d17020017230a0013024d150d">
                                                    Gửi yêu cầu
                                                </a>
                                            </div>
                                            <div class="el-item">
                                                <a class="el-content" href="tel:+84 24 6664 2777">
                                                    +84 24 6664 2777
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-section uk-section-large"
                uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-fade; delay: 200;">
                <div class="uk-container">
                    <div class="tm-grid-expand uk-child-width-1-1 uk-grid-margin" uk-grid>
                        <div class="uk-width-1-1@m">
                            <h2 class="uk-margin-large uk-text-center" uk-scrollspy-class> <span
                                    class="uk-text-primary">Khách hàng</span> của chúng tôi</h2>
                            <div class="uk-margin-medium uk-text-center">
                                <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-large" uk-grid>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/vnairline-f6c3721e.png"
                                                    data-srcset="./images/vnairline-f6c3721e.png 277w, ./images/vnairline-3e1d6800.png 554w"
                                                    data-sizes="(min-width: 277px) 277px" data-width="277"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/vnpost-2b2eaa68.png"
                                                    data-srcset="./images/vnpost-2b2eaa68.png 240w, ./images/vnpost-3203ba84.png 480w"
                                                    data-sizes="(min-width: 240px) 240px" data-width="240"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/vnr-c825d951.png"
                                                    data-srcset="./images/vnr-c825d951.png 213w, ./images/vnr-7579ca25.png 426w"
                                                    data-sizes="(min-width: 213px) 213px" data-width="213"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/cienco1-e1584515114522-0c4e38e0.jpeg"
                                                    data-srcset="./images/cienco1-e1584515114522-0c4e38e0.jpeg 126w, ./images/cienco1-e1584515114522-7e156d36.jpeg 199w, ./images/cienco1-e1584515114522-46abf2e7.jpeg 200w"
                                                    data-sizes="(min-width: 126px) 126px" data-width="126"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/vinacomin-621441cd.png"
                                                    data-srcset="./images/vinacomin-621441cd.png 145w, ./images/vinacomin-3eca423d.png 165w, ./images/vinacomin-83002ef3.png 166w"
                                                    data-sizes="(min-width: 145px) 145px" data-width="145"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/evn-8a517c23.png"
                                                    data-srcset="./images/evn-8a517c23.png 284w, ./images/evn-2c3d4672.png 345w"
                                                    data-sizes="(min-width: 284px) 284px" data-width="284"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/hapro-1-37cb6a14.png"
                                                    data-srcset="./images/hapro-1-37cb6a14.png 256w, ./images/hapro-1-c9af61f8.png 318w"
                                                    data-sizes="(min-width: 256px) 256px" data-width="256"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-light">
                                            <div class="el-item uk-inline-clip">
                                                <img class="el-image" alt
                                                    data-src="./images/vinamotor-37b1b7ad.png"
                                                    data-srcset="./images/vinamotor-37b1b7ad.png 208w, ./images/vinamotor-dd3a5904.png 347w"
                                                    data-sizes="(min-width: 208px) 208px" data-width="208"
                                                    data-height="120" uk-img>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-secondary uk-section uk-section-large" style="background: url(./images/images_1.jpg) no-repeat; background-size:cover;">
                <div class="uk-container">
                    <div class="tm-grid-expand uk-child-width-1-1 uk-margin" uk-grid>
                        <div class="uk-width-1-1@m">
                            <div class="uk-margin"><a href="#" uk-totop uk-scroll></a></div>
                            <h4> Thông tin liên hệ<br /><strong>CÔNG TY CỔ PHẦN TƯ VẤN LUẬT VÀ KẾ TOÁN</strong></h4>
                        </div>
                    </div>
                    <div class="tm-grid-expand uk-grid-column-large uk-grid-margin" uk-grid>
                        <div class="uk-width-1-2@s uk-width-1-4@m">
                            <h6 class="uk-text-left@s uk-text-center"> Trụ sở chính</h6>
                            <div class="uk-panel uk-margin">
                                <div>Tầng 15, Tòa nhà Center Building &#8211; Hapulico Complex, Số 1 Nguyễn Huy Tưởng,
                                    Q. Thanh Xuân, Hà Nội</div>
                                <div>T: (+84) 24 6664 2777</div>
                                <div>E: <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="b2d1dddcc6d3d1c6f2dbd1c2d39cc4dc">[email&#160;protected]</a></div>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s uk-width-1-4@m">
                            <h6 class="uk-text-left@s uk-text-center"> CN Sài Gòn</h6>
                            <div class="uk-panel uk-margin">
                                <p>Lầu 5, Tòa nhà Hải Âu TIC, 39B Trường Sơn, P. 4, Q. Tân Bình, TP. Hồ Chí Minh<br />T:
                                    (+84) 28 7303 2007<br />E: <a href="cdn-cgi/l/email-protection.html"
                                        class="__cf_email__"
                                        data-cfemail="7605171f111918361f150617580018">[email&#160;protected]</a></p>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s uk-width-1-4@m">
                            <h6 class="uk-text-left@s uk-text-center"> CN Miền Trung</h6>
                            <div class="uk-panel uk-margin">
                                <p>Tầng 9, Tòa nhà Viettel, Đại lộ Lê Lợi, P. Đông Hương, TP. Thanh Hóa, Tỉnh Thanh
                                    Hóa<br />T: (+84) 237 375 8959<br />E: <a href="cdn-cgi/l/email-protection.html"
                                        class="__cf_email__"
                                        data-cfemail="f994909c978d8b8c979eb9909a8998d78f97">[email&#160;protected]</a>
                                </p>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s uk-width-1-4@m">
                            <h6 class="uk-text-left@s uk-text-center"> CN Nghệ An</h6>
                            <div class="uk-panel uk-margin">
                                <p>Tầng 2, Tòa nhà Nhà Việt, Số 8 Đường V.I Lê Nin, P. Hà Huy Tập, TP.  Vinh, Tỉnh Nghệ
                                    An, Việt Nam<br />T: (+84) 238 268 2888<br />E: <a
                                        href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                        data-cfemail="b8d6dfd0ddd9d6f8d1dbc8d996ced6">[email&#160;protected]</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="tm-grid-expand uk-grid-divider uk-grid-margin" uk-grid>
                        <div class="uk-width-expand@m">
                            <div class="uk-margin uk-text-right">
                                <img class="el-image" alt
                                    data-src="./images/logo.jpg"
                                    data-srcset="./images/logo.jpg 149w, ./images/iCPA_logo_final_181018-03-77a5e794.png 298w"
                                    data-sizes="(min-width: 149px) 149px" data-width="149" data-height="50" uk-img>
                            </div>
                            <div class="uk-margin uk-text-right">
                                <img class="el-image" alt
                                    data-src="./images/logo.jpg"
                                    data-srcset="./images/logo.jpg 303w"
                                    data-sizes="(min-width: 303px) 303px" data-width="303" data-height="91" uk-img>
                            </div>
                        </div>
                        <div class="uk-width-2xlarge@m">
                            <div class="uk-panel uk-margin">
                                <p>Miễn trừ trách nhiệm<br /><small>
                                        <p>AGN International Ltd là một công ty trách nhiệm hữu hạn được đăng ký tại Anh
                                            và xứ Wales, số 3132548, văn phòng đăng ký 6 Hays Lane, London Bridge,
                                            London SE1 2HB, Vương quốc Anh. AGN International Ltd (và các chi nhánh
                                            trong khu vực; cùng “AGN”) là một hiệp hội thành viên phi lợi nhuận trên
                                            toàn thế giới của các doanh nghiệp tư vấn và kế toán độc lập và riêng biệt.
                                            AGN không cung cấp dịch vụ cho khách hàng mà các chính Thành viên cung cấp
                                            dịch vụ đơn lẻ cho khách hàng đó. AGN và các Thành viên không hợp tác với
                                            nhau, họ không phải là đại lý cũng không bắt buộc lẫn nhau và họ không chịu
                                            trách nhiệm hoặc chịu trách nhiệm về các dịch vụ, hành động hoặc không tương
                                            tác của nhau.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection