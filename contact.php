<?php $data["title"] = "Liên hệ"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php require "template-parts/layouts/blockForm.php"; ?>
<div class="uk-section uk-background-muted">
    <div class="uk-container">
        <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
            <?php
            $data = array(
                array(
                    'icon' => 'images/icon_phone.png',
                    'txt1' => 'Phone',
                    'txt2' => '(+84) 98 124 7434    (+84) 98 688 8100 ',
                ),
                array(
                    'icon' => 'images/icon_email.png',
                    'txt1' => 'E-mail Address',
                    'txt2' => 'ecogreensaigon.contact@gmail.com',
                ),
                array(
                    'icon' => 'images/icon_address.png',
                    'txt1' => 'Office Address',
                    'txt2' => 'Shophouse 15, Block A, Ecogreen Sài Gòn',
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="uk-text-center uk-flex uk-flex-column">
                    <div class="uk-flex-auto uk-flex uk-flex-middle uk-flex-center">
                        <img src="<?= $v['icon'] ?>" alt="">
                    </div>
                    <div>
                        <div class="contact__txt1"><?= $v['txt1'] ?></div>
                        <div class="contact__txt2"><?= $v['txt2'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>