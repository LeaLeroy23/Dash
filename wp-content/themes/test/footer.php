<?php wp_footer() ?>
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
                            <input id="input-footer-email" type="email" class="form-control" placeholder="Name@company.com">
                        </div>
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                            <button class="btn" id="btn-footer-orange"><?= get_field('button_text') ?></button>
                        </div>
                            
                    </div>
                </div>
                  
            </div>
        </section>

<!-- End SectionFooter -->
    </div>
</body>
</html>