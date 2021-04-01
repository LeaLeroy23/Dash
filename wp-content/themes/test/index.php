<?php get_header() ?>

<!-- Start Section Header -->
<section id="hero">
    <div class="container">
        <header id="header" class="d-flex row">
            <div class="col-8 col-md-9 col-lg-10">
                <h1 class="text-dark dash-title"><?= get_field('title') ?></h1>
            </div>
            <div class="col-4 col-md-3 col-lg-2 header-button">
                <button type="button" class="btn btn-outline-light"
                    id="btn-radius"><?= get_field('button_text') ?></button>
            </div>
        </header>
        <div class="d-flex">
            <div class="col-sm-12 col-md-10 col-lg-8 block-text-landing">
                <h2 id="custom-font"><?= get_field('title_2') ?></h2>
                <p class="subtitle"><?= get_field('header_text') ?></p>
                <div class="row line-form">
                    <input id="input-email" type="email" name="" placeholder="Name@company.com">
                    <button class="btn btn-outline-dark" id="btn-orange"><?= get_field('button_text') ?></button>
                </div>
            </div>
        </div>

        <div class="d-flex block-partner">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                <div class="partner-row d-flex justify-content-between">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/03/1200px-Cartoon_Network_2010_logo.svg_.png">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/04/Logo-Booking.com_.png">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/03/1200px-Dropbox_logo_2017.svg_.png">
                </div>

                <div class="partner-row d-flex justify-content-between">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/03/1024px-Toshiba_logo.svg_.png">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/04/Slack_logo_new.png">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/04/Netflix-logo.png">
                </div>

                <div class="partner-row d-flex justify-content-between">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/04/spotify-logo-png-7.png">
                    <img class="logo-partner grayscale"
                        src="http://localhost/test/wp-content/uploads/2021/03/Coca-Cola-logo.png">
                    <img class="logo-partner"
                        src="http://localhost/test/wp-content/uploads/2021/03/red-bull-logo-2-1.png">
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Section Header -->

<!-- Start Section benefits -->

<section id="benefit">
    <div class="container center-block">
        <div class="section-title benefit-title">
            <h3 id="title-benefit"><?= get_field('titre-benefit') ?></h3>
        </div>
        <div class="row justify-content-between">
            <div class="col-sm-4 center-block">
                <img class="img-benefit" src="http://localhost/test/wp-content/uploads/2021/03/check.png">
                <h4 class="h4-benefit"><?= get_field('sous-titre_1') ?></h4>
                <p class="text-benefit"><?= get_field('paragraphe_1') ?></p>
            </div>
            <div class="col-sm-4 center-block">
                <img class="img-benefit" src="http://localhost/test/wp-content/uploads/2021/03/table.png">
                <h4 class="h4-benefit"><?= get_field('sous-titre_2') ?></h4>
                <p class="text-benefit"><?= get_field('paragraphe_2') ?></p>
            </div>
            <div class="col-sm-4 center-block">
                <img class="img-benefit" src="http://localhost/test/wp-content/uploads/2021/03/line.png">
                <h4 class="h4-benefit"><?= get_field('sous-titre_3') ?></h4>
                <p class="text-benefit"><?= get_field('paragraphe_3') ?></p>
            </div>
        </div>
    </div>

</section>

<!-- Start Section Footer -->

<section id="footer">
    <div class="container">

        <div class="row">
            <div class="col-sm-9 section-title mx-auto">
                <h3 id="title-footer"><?= get_field('title_footer') ?></h3>
                <p class="text-footer"><?= get_field('text_footer') ?></p>
            </div>
        </div>

        <div class="section-form col-12 col-sm-12 col-lg-8 mx-auto">
            <div class="row">
                <div class="col-7 col-sm-7 col-md-7 col-lg-7">
                    <input id="input-footer-email" type="email" class="form-control" name="" placeholder="Name@company.com">
                </div>
                <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                    <button class="btn" id="btn-footer-orange"><?= get_field('button_text') ?></button>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- End SectionFooter -->

<!-- End Section benefits -->

<?php get_footer() ?>