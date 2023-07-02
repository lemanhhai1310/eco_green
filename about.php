<?php $data["title"] = "Giới thiệu dự án"; ?>
<?php $bodyClass = '' ?>
<?php $about = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="blockForm about__section1 uk-flex uk-flex-middle uk-light uk-text-center uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/tong-quan-eco-green-saigon-1.png" uk-img="">
    <div class="uk-width uk-section-large">
        <div class="uk-container uk-position-relative">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-4-5@m">
                    <h1 class="about__section1__title1">ECO GREEN SÀI GÒN</h1>
                    <h3 class="about__section1__title2">Sống xanh mỗi ngày</h3>
                    <p class="about__section1__desc">Lấy cảm hứng từ không gian sống xanh an lành giữa chốn phố thị phồn hoa, dự án Eco-Green Saigon được xây dựng hài hòa giữa 2 yếu tố Eco và City. Hội tụ nhiều ưu thế vượt trội, Eco-Green Saigon xứng đáng là sự lựa chọn số 1 khu vực phía Nam thành phố cho tất cả những ai đang có nhu cầu mua nhà để ở cũng như đầu tư ở khu vực này.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="uk-section uk-container">
        <h2 class="tienich__title uk-text-center uk-margin-large">VỊ TRÍ ECO GREEN SÀI GÒN</h2>
        <div class="uk-flex-center uk-margin-medium" uk-grid="">
            <div class="uk-width-4-5@m">
                <p class="about__txt1">Eco Green Saigon tọa lạc tại một trong những vị trí đẹp nhất của khu Nam Hồ Chí Minh, ngay mặt tiền đại lộ Nguyễn Văn Linh, tuyến đường huyết mạch có ý nghĩa rất quan trọng với sự phát triển, giao lưu kinh tế khu Nam và cả TP.HCM. Tọa lạc tại khu vực cửa ngõ kết nối giữa 3 khu đô thị lớn nhất Sài Gòn là trung tâm Quận 1, Thủ Thiêm và Phú Mỹ Hưng. Từ dự án, cư dân dễ dàng di chuyển vào trung tâm Quận 1 thông qua đường Nguyễn Tất Thành (lộ giới 37 – 42m) và đường Nguyễn Thị Thập (lộ giới 35m). Kết nối nhanh chóng tới khu đô thị mới Thủ Thiêm thông qua cầu Phú Mỹ và trong tương lai là cầu Thủ Thiêm 4.</p>
            </div>
        </div>
    </div>
    <img class="uk-width" src="images/123456-1.png" alt="">
    <div class="uk-section uk-container">
        <h2 class="tienich__title tienich__title--divider uk-text-center uk-margin-large">
            CHỦ ĐẦU TƯ <br class="uk-visible@m">
            ECO GREEN SÀI GÒN
        </h2>
        <div class="uk-flex-center uk-margin-medium" uk-grid="">
            <div class="uk-width-4-5@m">
                <p class="about__txt2">Xuân Mai Sài Gòn được hợp lực bởi 3 cổ đông chiến lược với tiềm lực tài chính vững mạnh và dày dạn kinh nghiệm trong lĩnh vực bất động sản, bao gồm: Công ty Cổ phần Đầu tư Xây dựng Xuân Mai, Công ty TNHH Khải Hưng và Công ty TNHH Thương mại và Sản xuất Tường Việt.</p>
                <p class="about__txt2">Trong đó, Công ty CP Đầu tư và Xây Dựng Xuân Mai (Xuân Mai Corp.) sau 35 năm phát triển, hiện là một trong số thương hiệu nổi tiếng tại miền Bắc với vai trò là nhà thầu hàng loạt các công trình công nghiệp, giao thông, thuỷ điện, công trình công cộng và dự án bất động sản dân dụng.</p>
            </div>
        </div>
        <div class="uk-cover-container about__video">
            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                <img src="images/xuan-mai-corp2.png" alt="">
            </div>
            <canvas width="1372" height="749"></canvas>
            <a href="#modal-media-youtube" uk-toggle class="about__video__btn uk-position-cover"></a>
        </div>
        <div id="modal-media-youtube" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                <button class="uk-modal-close-outside" type="button" uk-close></button>
                <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" uk-video uk-responsive></iframe>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/blockForm.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>