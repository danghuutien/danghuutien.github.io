@extends('layout.trangchu')
@section('content')
<div class="uk-section-default uk-light uk-cover-container uk-section uk-section-xlarge"
                style="background-color: #2945a4;"
                uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-fade; delay: 200;"><video
                    class="uk-blend-multiply" uk-cover src="../wp-content/uploads/services-hero-video.mp4" loop autoplay
                    muted playsinline></video>
                <div class="uk-position-cover" style="background-color: rgba(30, 54, 132, 0.61);"></div>
                <div class="uk-container uk-container-small uk-position-relative">
                    <div class="tm-grid-expand uk-grid-small uk-child-width-1-1 uk-grid-margin-small" uk-grid>
                        <div class="uk-light uk-width-1-1@m">
                            <h1 class="uk-width-large uk-text-left@s uk-text-center" uk-scrollspy-class> Các dịch vụ
                                cung cấp</h1>
                            <div class="uk-panel uk-text-large uk-margin uk-width-large uk-text-left@s uk-text-center"
                                uk-scrollspy-class>Bạn quan tâm và có nhu cầu tư vấn về dịch vụ, hãy liên hệ ngay với
                                chúng tôi</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-section uk-section-large"
                uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-fade; delay: false;">
                <div class="uk-container uk-container-small">
                    <div class="tm-grid-expand uk-child-width-1-1 uk-grid-margin" uk-grid>
                        <div class="uk-width-1-1@m">
                            <div class="uk-margin uk-text-left@s uk-text-center">
                                <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-large uk-grid-match"
                                    uk-grid>
                                    <div>
                                        <div class="el-item uk-panel uk-margin-remove-first-child" uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="http://icpa.vn/wp-content/uploads/services-05-audit-and-assurance.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Kiểm toán
                                                Báo cáo Tài chính</h2>
                                            <div class="el-content uk-panel uk-margin-top">Phương pháp kiểm toán của
                                                chúng tôi là tập trung tìm hiểu tình hình hoạt động kinh doanh cũng như
                                                tìm hiểu hệ thống kiểm soát nội bộ của khách hàng.</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="el-item uk-panel uk-margin-remove-first-child" uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="http://icpa.vn/wp-content/uploads/services-02-legal-advisory.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Kế toán
                                            </h2>
                                            <div class="el-content uk-panel uk-margin-top">Các chuyên gia kế toán của
                                                iCPA có thể trợ giúp cho khách hàng trong việc xây dựng hệ thống kế toán
                                                phù hợp với yêu cầu quản lý đặc thù ngành của doanh nghiệp và quy định
                                                của Chế độ kế toán Việt Nam.</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="el-item uk-panel uk-margin-remove-first-child" uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="http://icpa.vn/wp-content/uploads/services-04-business-planning.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Kiểm toán
                                                Quyết toán Dự án Hoàn thành</h2>
                                            <div class="el-content uk-panel uk-margin-top">
                                                <p>Xác định giá trị Dự toán, giá trị Quyết toán công trình đầu tư xây
                                                    dựng cơ bản cho đa dạng các loại hình công trình: dân dụng, giao
                                                    thông vận tải, công nghiệp, nông nghiệp, thủy lợi&#8230;</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="el-item uk-panel uk-margin-remove-first-child" uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="http://icpa.vn/wp-content/uploads/services-03-financial-services.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Tư vấn Tài
                                                chính Doanh nghiệp</h2>
                                            <div class="el-content uk-panel uk-margin-top">Với kiến thức sâu rộng, am
                                                hiểu về môi trường kinh doanh, hệ thống pháp luật của Việt Nam, các
                                                chuyên gia tư vấn của iCPA có thể trợ giúp khách hàng trong việc hoạch
                                                định các chiến lược kinh doanh của mình. Các chuyên gia của chúng tôi sẽ
                                                giành thời gian để tìm hiểu nhu cầu của khách hàng, trên cơ sở đó đưa ra
                                                những giải pháp nhằm thỏa mãn nhu cầu.</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="el-item uk-panel uk-margin-remove-first-child" uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="http://icpa.vn/wp-content/uploads/services-01-tax-planning.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Tư vấn
                                                Thuế</h2>
                                            <div class="el-content uk-panel uk-margin-top">Chúng tôi luôn trợ giúp khách
                                                hàng trong việc lập kế hoạch và tính toán một cách hiệu quả các sắc thuế
                                                được áp dụng tại từng doanh nghiệp cụ thể nhằm hỗ trợ cho mục đích kinh
                                                doanh của họ đồng thời trợ giúp cho khách hàng giảm ảnh hưởng tối đa của
                                                thuế đến các hoạt động kinh doanh của mình.</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="el-item uk-panel uk-margin-remove-first-child" uk-scrollspy-class>
                                            <img class="el-image" alt
                                                data-src="http://icpa.vn/wp-content/uploads/services-06-consulting.svg"
                                                uk-img>
                                            <h2 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Đào tạo
                                            </h2>
                                            <div class="el-content uk-panel uk-margin-top">Với đội ngũ chuyên gia của
                                                chúng tôi bao gồm những người có nhiều năm kinh nghiệm trong quá trình
                                                làm việc cũng như giảng dạy, nghiên cứu và thực hành kế toán, kiểm toán
                                                ở Việt Nam phối hợp với các chuyên gia nước ngoài.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-muted uk-section uk-section-large">
                <div class="uk-container uk-container-small">
                    <div class="tm-grid-expand uk-margin-xlarge" uk-grid>
                        <div class="uk-width-1-3@m">
                            <h2 class="uk-h3"> Hồ sơ năng lực</h2>
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="uk-panel uk-margin-remove-first-child uk-margin-xlarge uk-text-left">
                                <div class="uk-child-width-expand uk-grid-large uk-flex-middle" uk-grid>
                                    <div class="uk-width-1-2@s"><img class="el-image uk-box-shadow-xlarge" alt
                                            data-src="/wp-content/themes/yootheme/cache/profile-e1589184835195-c5ebdaf5.png"
                                            data-srcset="/wp-content/themes/yootheme/cache/profile-e1589184835195-c5ebdaf5.png 610w"
                                            data-sizes="(min-width: 610px) 610px" data-width="610" data-height="874"
                                            uk-img></div>
                                    <div class="uk-margin-remove-first-child">
                                        <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Company<br>Profile
                                            2020</h3>
                                        <div class="el-content uk-panel uk-margin-top">
                                            <p>Hồ sơ năng lực cung cấp dịch vụ Công ty TNHH Kiểm toán Quốc tế ban hành
                                                năm 2020</p>
                                        </div>
                                        <div class="uk-margin-top"><a href="#" uk-scroll
                                                class="el-link uk-button uk-button-secondary">Tải về</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-section uk-section-large uk-padding-remove-bottom">
                <div class="uk-container uk-container-small">
                    <div class="tm-grid-expand uk-child-width-1-1 uk-margin-xlarge" uk-grid>
                        <div class="uk-width-1-1@m">
                            <h2 class="uk-h3 uk-margin-medium uk-width-medium uk-text-left"> Phương pháp kiểm toán của
                                chúng tôi</h2>
                            <div class="uk-margin">
                                <div class="uk-child-width-expand uk-grid-large" uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <ul class="el-nav uk-tab-left"
                                            uk-tab="connect: #js-d8f; animation: uk-animation-fade; media: @m  ;">
                                            <li>
                                                <a href="#">Hiểu biết của chúng tôi về nhu cầu</a>
                                            </li>
                                            <li>
                                                <a href="#">Tổ chức thực hiện</a>
                                            </li>
                                            <li>
                                                <a href="#">Công việc kiểm toán</a>
                                            </li>
                                            <li>
                                                <a href="#">Phương pháp kiểm toán</a>
                                            </li>
                                            <li>
                                                <a href="#">Kế hoạch thực hiện</a>
                                            </li>
                                            <li>
                                                <a href="#">Mức phí dịch vụ</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul id="js-d8f" class="uk-switcher" uk-height-match="row: false">
                                            <li class="el-item uk-margin-remove-first-child">
                                                <h3 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Hiểu
                                                    biết của chúng tôi về nhu cầu</h3>
                                                <div class="el-content uk-panel uk-margin-top">
                                                    <p>Hiện nay, Công ty đang có nhu cầu dịch vụ kiểm toán và tư vấn.
                                                        Những thông tin sơ lược không chỉ thể hiện khả năng đáp ứng
                                                        những yêu cầu của Quý Công ty hiện nay mà chúng tôi còn có thể
                                                        cung cấp các dịch vụ khác cũng như hỗ trợ Công ty trong việc
                                                        hoàn thiện hệ thống kế toán, hệ thống kiểm soát nội bộ của Quý
                                                        Công ty.</p>
                                                </div>
                                            </li>
                                            <li class="el-item uk-margin-remove-first-child">
                                                <h3 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Tổ
                                                    chức thực hiện</h3>
                                                <div class="el-content uk-panel uk-margin-top">
                                                    <p>Việc kiểm toán Báo cáo tài chính nhằm mục đích đưa ra ý kiến độc
                                                        lập của kiểm toán viên về việc liệu các Báo cáo tài chính có
                                                        phản ánh một cách trung thực và hợp lý hay không. Việc kiểm toán
                                                        phải được thực hiện phù hợp với các Chuẩn mực kiểm toán Việt
                                                        Nam, các Chuẩn mực kiểm toán Quốc tế được chấp nhận tại Việt Nam
                                                        và Quy chế kiểm toán độc lập hiện hành ở Việt Nam.</p>
                                                    <p>Kiểm toán Báo cáo tài chính sẽ được thực hiện theo các Văn bản
                                                        Quy phạm pháp luật điển hình như: Luật Kiểm toán độc lập số
                                                        67/2011/QH12 ngày 29/03/2011; Nghị định số 17/2012/NĐ-CP, ngày
                                                        13/03/2012 về kiểm toán độc lập; và nhiều quyết định của Bộ
                                                        trưởng Bộ Tài chính về việc ban hành các chuẩn mực kế toán, kiểm
                                                        toán Việt Nam.</p>
                                                </div>
                                            </li>
                                            <li class="el-item uk-margin-remove-first-child">
                                                <h3 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Công
                                                    việc kiểm toán</h3>
                                                <div class="el-content uk-panel uk-margin-top">
                                                    <p>Công việc kiểm toán bao gồm:</p>
                                                    <ul>
                                                        <li>Kiểm tra, soát xét việc ghi chép kế toán và sổ sách kế toán
                                                            của Công ty;</li>
                                                        <li>Kiểm tra, soát xét Báo cáo tài chính;</li>
                                                        <li>Phân tích tình hình biến động về vốn của Công ty trong kỳ;
                                                        </li>
                                                        <li>Gửi thư xác nhận đối với các tài khoản ngân hàng, đầu tư,
                                                            phải thu và phải trả;</li>
                                                        <li>Quan sát thực tế đối với các tài sản cố định chủ yếu của
                                                            Công ty và kiểm tra việc phản ánh các tài sản đó tại ngày
                                                            lập Bảng cân đối kế toán;</li>
                                                        <li>Đánh giá tính đúng đắn của Hệ thống kiếm soát nội bộ của
                                                            Công ty trong việc quản lý tiền mặt, hàng tồn kho, tài sản
                                                            cố định để khẳng định tính hiện hữu, sở hữu, và giá trị của
                                                            tiền mặt, tài sản cố định và hàng tồn kho tại ngày kết thúc
                                                            năm tài chính;</li>
                                                        <li>Đánh giá hệ thống kiểm soát nội bộ của Công ty đối với các
                                                            hợp đồng cho thuê tài chính;</li>
                                                        <li>Thực hiện các thủ tục kiểm toán khác hoặc các thủ tục thay
                                                            thế cần thiết trong từng trường hợp cụ thể;</li>
                                                        <li>Phát hành Báo cáo Kiểm toán;</li>
                                                        <li>Phát hành Thư quản lý (nếu cần) đề cập đến những vấn đề còn
                                                            hạn chế trong hệ thống kế toán và hệ thống kiểm soát nội bộ
                                                            và đưa ra các đề xuất của Kiểm toán viên nhằm hoàn thiện các
                                                            hệ thống này.</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="el-item uk-margin-remove-first-child">
                                                <h3 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Phương
                                                    pháp kiểm toán</h3>
                                                <div class="el-content uk-panel uk-margin-top">
                                                    <p>Phương pháp kiểm toán của iCPA (iCPA Audit Methodology- IAM) về
                                                        cơ bản dựa trên các chuẩn mực kiểm toán quốc tế và các chuẩn mực
                                                        kiểm toán Việt Nam, tham khảo phương pháp kiểm toán của các công
                                                        ty kiểm toán hàng đầu thế giới. IAM dựa trên sự hiểu biết sâu
                                                        sắc về lĩnh vực kinh doanh của khách hàng, hệ thống kiểm soát
                                                        nội bộ, và đánh giá rủi ro. IAM là phương pháp kiểm toán tập
                                                        trung vào rủi ro, do đó sẽ hạn chế việc mở rộng công việc phải
                                                        thực hiện ở các khu vực ít rủi ro hơn. Với những những công cụ
                                                        trợ giúp kỹ thuật hiện có, IAM sẽ nhận diện được các rủi ro tiềm
                                                        ẩn và tăng cường hiểu biết về hoạt động kinh doanh của khách
                                                        hàng trong suốt quá trình kiểm toán.</p>
                                                </div>
                                            </li>
                                            <li class="el-item uk-margin-remove-first-child">
                                                <h3 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Kế
                                                    hoạch thực hiện</h3>
                                                <div class="el-content uk-panel uk-margin-top">
                                                    <p>Sau khi được Quý Công ty bổ nhiệm chính thức, iCPA sẽ thực hiện
                                                        kiểm toán Báo cáo tài chính theo kế hoạch được thống nhất với
                                                        Quý Công ty. Công việc kiểm toán  được thực hiện ở văn phòng
                                                        Công ty.</p>
                                                </div>
                                            </li>
                                            <li class="el-item uk-margin-remove-first-child">
                                                <h3 class="el-title uk-h3 uk-margin-top uk-margin-remove-bottom"> Mức
                                                    phí dịch vụ</h3>
                                                <div class="el-content uk-panel uk-margin-top">
                                                    <p>Mục tiêu của chúng tôi là cung cấp dịch vụ với một mức giá hợp
                                                        lý. Phí kiểm toán của chúng tôi phù hợp với nỗ lực, kinh nghiệm
                                                        và kỹ năng để hoàn thành công việc. Chúng tôi sẽ cử nhóm nhân
                                                        viên năng lực phù hợp và trình độ kinh nghiệm tương xứng cho
                                                        công việc.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-section">
                <div class="uk-container uk-container-small">
                    <div class="tm-grid-expand uk-child-width-1-1 uk-margin-large" uk-grid>
                        <div class="uk-width-1-1@m">
                            <hr>
                        </div>
                    </div>
                    <div class="uk-margin-large uk-container">
                        <div class="tm-grid-expand" uk-grid>
                            <div class="uk-width-1-3@s">
                                <h2 class="uk-h5 uk-heading-bullet uk-margin-medium uk-text-left"> Liên hệ</h2>
                            </div>
                            <div class="uk-width-1-3@s">
                                <h5 class="uk-margin-small"> <a class="el-link uk-link-reset"
                                        href="tel:+ 84 24 6664 2777">(024) 6664 2777</a></h5>
                                <div class="uk-panel uk-text-meta uk-margin-remove-vertical">Phone</div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <h5 class="uk-margin-small"> <a class="el-link uk-link-reset"
                                        href="../cdn-cgi/l/email-protection.html#acdfc3c1c9c3c2c9ecc9d4cdc1dcc0c982cfc3c1"><span
                                            class="__cf_email__"
                                            data-cfemail="adcec2c3d9ccced9edc4ceddcc83dbc3">[email&#160;protected]</span></a>
                                </h5>
                                <div class="uk-panel uk-text-meta uk-margin-remove-vertical">Email</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-default uk-light uk-position-relative">
                <div data-src="http://icpa.vn/wp-content/uploads/services-newsletter-bg.jpg" uk-img
                    class="uk-background-norepeat uk-background-cover uk-background-center-center uk-background-blend-multiply uk-section uk-section-large"
                    style="background-color: rgba(55, 82, 170, 0.9);">
                    <div class="uk-position-cover" style="background-color: rgba(30, 54, 132, 0.89);"></div>
                    <div class="uk-container uk-container-small uk-position-relative">
                        <div class="tm-grid-expand uk-grid-large uk-margin-remove-vertical" uk-grid>
                            <div class="uk-width-1-3@m">
                                <h2 class="uk-h3 uk-text-left"> Đăng ký nhận bảng tin hằng tháng</h2>
                            </div>
                            <div class="uk-width-2-3@m">
                                <div class="uk-width-2xlarge">
                                    <form class="uk-form uk-panel js-form-newsletter" method="post"
                                        action="https://icpa.vn/wp-admin/admin-ajax.php?p=theme%2Fnewsletter%2Fsubscribe&amp;action=kernel">
                                        <div class="uk-child-width-expand@s" uk-grid>
                                            <div><input class="el-input uk-input" type="email" name="email"
                                                    placeholder="Email address" required></div>
                                            <div class="uk-width-auto@s"><button
                                                    class="el-button uk-button uk-button-default"
                                                    type="submit">Subscribe</button></div>
                                        </div><input type="hidden" name="settings"
                                            value="RRFevsrmdmze4iQNpwWOJw==.K1VxNEFvTFgwR1IrNklXVHMzV3hnbHdqSm42MEhSMDZCb2Y0NWoxSWsya0haWmllL2llbjlqR1RLakNwOG4rTmk2WSs4Szd5STN4YWRZM0gxb3NJbEk0L0hROXo0SGFWZ3RySTV5dU8rNGE3dGhFUnJMSmFwRnVQQVMxYnZKaUZ4SW5Da001VDYzcldSMVkvUHNvMkJTanF2YXROdG92d1dXQVIyR0F2eU5HcC93RFlPTEwzdVZvWTJTbGd1eUxMc1BoeFovazJUUHFMNEdQekFWN2taS0ltNVhiRFJaVCt3VE5wRXR0RzJVQzkxTitTNVk4VVl0M3Rhd0R6VDNvYi8zUXFDL0ljcFlVZ1Q1a1BWbGQxSW5oOTdUelRtN2FGN282N1B0ZEhITGJicjBSeUN1aEtiam5ITks4K25tQlg=.YTMzNzE0ZmE5NjA2OTFmMDlhYmE0NjBjOWRlYzdiYmUxNTQ3M2M1MDc1NTFjZWIxOTVmY2MxMWU2NjRkOThkMA==">
                                        <div class="message uk-margin uk-hidden"></div>
                                    </form>
                                </div>
                                <div class="uk-panel uk-margin">
                                    <p>Nhận tin tức cập nhật chuyên ngành</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection