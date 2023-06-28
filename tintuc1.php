<?php $data["title"] = "Tin tức 1"; ?>
<?php $bodyClass = '' ?>
<?php $tintuc1 = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php require "template-parts/layouts/slideshow-news.php"; ?>
<?php require "template-parts/layouts/navbar-news.php"; ?>
<div class="uk-section">
    <div class="uk-container">
        <div class="item__70-40">
            <div uk-grid>
                <div class="uk-width-expand">
                    <h2 class="main__title">TIN TỨC MỚI NHẤT</h2>
                    <div class="uk-child-width-1-1 uk-margin-medium" uk-grid="">
                        <?php
                        $data = array(
                            array(
                                'img' => 'images/img_news1.png',
                                'title' => 'Tiêu chuẩn bàn giao Eco Green Saigon nội thất cơ bản của Chủ đầu tư có gì đặc biệt?',
                                'desc' => 'Trong căn hộ, khi bàn giao cho khách hàng mỗi căn hộ tại Eco Green Saigon đều được trang bị hệ thống vật liệu hoàn thiện, nội thất đẳng cấp: Thiết bị vệ sinh Duravit/ HansGrohe, điều hòa Multi Daikin hoặc Samsung, bếp và máy hút mùi Teka/ Bosh, thiết bị điện Schneider, sàn gỗ công nghiệp, tủ quần áo phòng master, tủ bếp trên dưới gỗ tiêu chuẩn cao cấp An Cường... ',
                            ),
                            array(
                                'img' => 'images/img_news2.png',
                                'title' => 'Đối tượng khách hàng nào phù hợp với dự án Eco Green Saigon?',
                                'desc' => 'Khách hàng muốn dọn vào ở liền căn hộ cao cấp tại khu Nam Sài Gòn: Đây là những người đang tìm kiếm một căn hộ cao cấp có mức giá tốt tại thị trường khu Nam tại thời điểm này. Khách hàng là những người muốn sống trong một dự án có đầy đủ tiện ích cao cấp và đầy đủ tiện nghi.',
                            ),
                            array(
                                'img' => 'images/img_news1.png',
                                'title' => 'Thiết kế thông minh của dự án Eco Green Saigon',
                                'desc' => 'Ngay từ đầu, dự án Eco Green Saigon đã được thiết kế và tràn đầy không gian xanh. Dự án này đã được ưu ái cho một diện tích rất lớn dành cho công viên và cảnh quan nội khu để phục vụ cư dân tại đây. Yếu tố này giúp cư dân sống trong không gian trong lành, hòa mình với thiên nhiên giữa trung tâm Sài Gòn hiện đại.',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <div>
                            <div class="tintuc1__card__boximg1 uk-cover-container uk-border-rounded">
                                <img uk-img="loading: <?= ($k==0)?'eager':'lazy' ?>" data-src="https://picsum.photos/1626/764/?random=<?= $k ?>" alt="" uk-cover="">
                                <canvas width="1626" height="764"></canvas>
                                <label class="tintuc1__card__label uk-label uk-label-success uk-position-top-left uk-position-small">TIN MỚI</label>
                            </div>
                            <h3 class="tintuc1__card__title"><a href=""><?= $v['title'] ?></a></h3>
                            <div class="tintuc1__card__time">June 12, 2021</div>
                            <p class="tintuc1__card__desc"><?= $v['desc'] ?></p>
                            <div class="tintuc1__card__link"><a href="">Read more</a></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="tintuc1__cardForm uk-light uk-card uk-card-default uk-card-body">
                        <h3 class="tintuc1__cardForm__title">Đăng ký nhận tin</h3>
                        <p class="tintuc1__cardForm__desc">Cập nhật những thông tin thị trường mới nhất về dự án Eco Green Sài Gòn</p>
                        <form class="uk-grid-small uk-grid-7" uk-grid>
                            <div class="uk-width-expand">
                                <input class="uk-input tintuc1__cardForm__input" type="email" placeholder="Nhập Email tại đây" aria-label="Nhập Email tại đây">
                            </div>
                            <div class="uk-width-auto">
                                <button class="tintuc1__cardForm__btn uk-button uk-button-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                    <h4 class="tintuc1__sidebar__title">Trending Now</h4>
                    <div class="uk-grid-small" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'img' => '',
                                'title' => 'Đại lộ Nguyễn Văn Linh hoàn thành mở rộng',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Quy trình mua bán căn hộ tại Dự án Eco Green Quận 7: trước, trong và sau khi mua',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Các loại thuế, Phí phải nộp khi tiến hành mua bán sang nhượng căn hộ Eco Green Saigon',
                            ),
                            array(
                                'img' => '',
                                'title' => 'CBRE chính thức trở thành đơn vị quản lý vận hành Eco Green Sài Gòn quận 7',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Tổng hợp các shophouse hiện hữu tại Eco Green Sài Gòn',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Shophouse Eco Green Saigon: Đầu tư an toàn, lợi nhuận dài hạn.',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Dự án Eco Green Sài Gòn có điểm gì khác biệt so với các dự án khác?',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Những yếu tố góp phần vào việc tăng giá dự án Eco Green Sài Gòn.',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Giá cho thuê của Dự án Eco Green Saigon vào tháng 07/2023',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Thiết kế thông minh của dự án Eco Green Saigon.',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Vị trí đắc địa của Dự án Eco Green Saigon.',
                            ),
                            array(
                                'img' => '',
                                'title' => 'Những tiện ích nổi bật tại Eco Green Saigon.',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                        <div class="uk-width-1-1">
                            <div class="uk-grid-small uk-grid-match" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="tintuc1__sidebar__boximg uk-cover-container uk-border-rounded">
                                        <img uk-img="loading: <?= ($k==0)?'eager':'lazy' ?>" data-src="https://picsum.photos/78/89/?random=<?= $k ?>" alt="" uk-cover="">
                                        <canvas width="78" height="89"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-flex uk-flex-column">
                                        <h5 class="tintuc1__sidebar__title1 uk-flex-auto"><a href=""><?= $v['title'] ?></a></h5>
                                        <div class="tintuc1__sidebar__txt">VIPROPERTY</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__70-40">
            <h2 class="main__title">TIN TƯƠNG TỰ</h2>
            <div class="uk-margin-medium" uk-toggle="cls: uk-grid-match; mode: media; media: @m" uk-grid>
                <?php
                $data = array(
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => '18 Instagram Moments You May Have Missed This Week',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    ),
                    array(
                        'img' => 'images/img_news2.png',
                        'title' => 'Would You Recast "Mean Girls" The Same Way As Everyone Else?',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing ',
                    ),
                    array(
                        'img' => 'images/img_news1.png',
                        'title' => '18 Instagram Moments You May Have Missed This Week',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    ),
                    array(
                        'img' => 'images/img_news2.png',
                        'title' => 'Would You Recast "Mean Girls" The Same Way As Everyone Else?',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing ',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <div class="uk-width-1-2s <?= ($k%2 == 1) ? 'uk-width-1-3@m' : 'uk-width-2-3@m' ?>">
                        <?php
                        if ($k%2 == 1){
                            $img = "https://picsum.photos/320/320/?random=".$k;
                        }else{
                            $img = "https://picsum.photos/843/320/?random=".$k;
                        }
                        ?>
                        <div class="uk-flex uk-flex-column">
                            <div class="tintuc1__card__boximg2 uk-flex-auto uk-cover-container uk-border-rounded" style="">
                                <img uk-img="loading: <?= ($k==0)?'eager':'lazy' ?>" data-src="<?= $img ?>" alt="" uk-cover="">
                                <canvas width="320" height="320"></canvas>
                            </div>
                            <div class="uk-margin">
                                <h3 class="tintuc1__card__title"><a href=""><?= $v['title'] ?></a></h3>
                                <div class="tintuc1__card__time">June 12, 2021</div>
                                <p class="tintuc1__card__desc"><?= $v['desc'] ?></p>
                                <div class="tintuc1__card__link"><a href="">Read more</a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/blockForm.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>