<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 300; max-height: 860">

    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true;">
        <?php
        $data = array(
            array(
                'img' => 'images/banner_news.png',
            ),
            array(
                'img' => 'images/photo.jpg',
            ),
            array(
                'img' => 'images/dark.jpg',
            ),
        );
        foreach ($data as $k=>$v): ?>
            <li>
                <img data-src="https://picsum.photos/1440/860/?random=<?= $k ?>" uk-img="loading: <?= ($k==0)?'eager':'lazy' ?>" alt="" uk-cover>
                <div class="tintuc1__slideshow__overlay uk-position-cover uk-flex uk-flex-bottom">
                    <div class="uk-width uk-section-large">
                        <div class="uk-container">
                            <div uk-grid>
                                <div class="uk-width-4-5@m">
                                    <h2 class="tintuc1__slideshow__title">Eco Green Sài Gòn giành 3 giải tại Asia Pacific Property Awards</h2>
                                    <p class="tintuc1__slideshow__desc">Thuộc khuôn khổ International Property Awards - giải thưởng bất động sản quốc tế được tổ chức thường niên nhằm vinh danh các doanh nghiệp hoạt động trong lĩnh vực bất động sản trên toàn cầu. Asia Pacific Property Awards luôn là sự kiện đáng mong chờ nhất đối với các thương hiệu BĐS trong khu vực.</p>
                                    <div class="tintuc1__slideshow__linkMore"><a href="">See more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    <ul class="tintuc1__slideshow__dotnav uk-slideshow-nav uk-dotnav uk-flex-center uk-position-bottom-center uk-position-medium"></ul>
</div>