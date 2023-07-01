<?php $data["title"] = "Tin tức 2"; ?>
<?php $bodyClass = '' ?>
<?php $tintuc2 = '' ?>
<?php $tintuc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php require "template-parts/layouts/slideshow-news.php"; ?>
<?php require "template-parts/layouts/navbar-news.php"; ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="item__70-40">
            <h2 class="main__title">TẤT CẢ CẢ TIN</h2>
            <div class="uk-child-width-1-3@m uk-margin-medium uk-grid-match" uk-grid="">
                <?php
                $data = array(
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => 'Đại lộ Nguyễn Văn Linh hoàn thành mở rộng',
                        'desc' => 'Đường Nguyễn Văn Linh đoạn từ giao lộ Huỳnh Tấn Phát đến Nguyễn Thị Thập (quận 7), được nâng cấp từ 6 lên 10 làn xe.',
                    ),
                    array(
                        'img' => 'images/img_news2.png',
                        'title' => 'Quy trình mua bán căn hộ tại Dự án Eco Green Quận 7: trước, trong và sau khi mua',
                        'desc' => 'Quy trình mua bán căn hộ tại Dự án Eco Green Quận 7: trước, trong và sau khi mua.',
                    ),
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => 'Các loại thuế, Phí phải nộp khi tiến hành mua bán sang nhượng căn hộ Eco Green Saigon',
                        'desc' => 'Đối với hợp đồng sang nhượng căn hộ chung cư mới chỉ có Hợp đồng mua bán thì người mua không cần phải đóng bất kì loại thuế phí gì.',
                    ),
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => 'Dự án Eco Green Sài Gòn có điểm gì khác biệt so với các dự án khác?',
                        'desc' => 'Điểm nhấn của dự án là công viên nội khu ngay tại Eco Green Sài Gòn với diện tích 3,5 hecta, là một khu vực tự nhiên trong khuôn viên dự án. ',
                    ),
                    array(
                        'img' => 'images/img_news2.png',
                        'title' => 'Những yếu tố góp phần vào việc tăng giá dự án Eco Green Sài Gòn.',
                        'desc' => 'Tỷ lệ tăng trưởng hàng năm của căn hộ khu Nam Thành phố Hồ Chí Minh liên tục đạt mức giá mới, dao động từ 10 đến 30%. ',
                    ),
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => 'Giá cho thuê của Dự án Eco Green Saigon vào tháng 07/2023',
                        'desc' => 'Dự án Eco Green Saigon nằm ngay trước đường Nguyễn Văn Linh, phường Tân Thuận Tây, quận 7, khu vực cửa ngõ kết nối ba khu đô thị lớn nhất Sài Gòn ',
                    ),
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => 'Thiết kế thông minh của dự án Eco Green Saigon.',
                        'desc' => 'Mỗi tòa nhà trong dự án Eco Green Saigon đều có 4 mặt tiếp xúc với không gian mở. Chúng được thiết kế với 3 mặt hình quạt lớn.',
                    ),
                    array(
                        'img' => 'images/img_news2.png',
                        'title' => 'Vị trí đắc địa của Dự án Eco Green Saigon.',
                        'desc' => 'Với vị trí ngay trước tuyến đường giao thông chính, cư dân từ dự án có thể dễ dàng di chuyển đến khu trung tâm.',
                    ),
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => 'Những tiện ích nổi bật tại Eco Green Saigon.',
                        'desc' => 'Các tiện ích tại Eco Green không chỉ đáp ứng các nhu cầu cơ bản mà còn cung cấp các dịch vụ tiện ích hiện đại, đáp ứng tất cả các yêu cầu sống của cư dân.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="uk-flex uk-flex-column">
                            <div class="tintuc1__card__boximg1 uk-cover-container uk-border-rounded">
                                <img uk-img="loading: <?= ($k==0)?'eager':'lazy' ?>" data-src="https://picsum.photos/383/324/?random=<?= $k ?>" alt="" uk-cover="">
                                <canvas width="383" height="324"></canvas>
                            </div>
                            <div class="uk-margin-small uk-flex-auto">
                                <h3 class="tintuc1__card__title"><a href=""><?= $v['title'] ?></a></h3>
                                <div class="tintuc1__card__time">June 12, 2021</div>
                                <p class="tintuc1__card__desc"><?= $v['desc'] ?></p>
                            </div>
                            <div class="tintuc1__card__link"><a href="">Read more</a></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <ul class="pagination uk-pagination uk-flex-center" uk-margin>
                <li><a href="#"><span uk-pagination-previous></span></a></li>
                <li><a href="#">1</a></li>
                <li class="uk-disabled"><span>…</span></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="uk-active"><span>7</span></li>
                <li><a href="#">8</a></li>
                <li><a href="#"><span uk-pagination-next></span></a></li>
            </ul>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/blockForm.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>