<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title"><?= $nama_galeri->nama_galeri; ?></h2>

                </div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Item -->
            <?php if ($nama_galeri->jml_foto != 0) { ?>
                <?php foreach ($galeri as $key) { ?>

                    <div class="col-lg-4 about_col about_col_left">
                        <div class="about_item">
                            <div class="about_item_image"><img src="<?= base_url('foto /' . $key->foto); ?>" alt="" style="width: 100%; height: 200px;"></div>
                            <div class="about_item_title"><?= $key->ket_foto; ?></a></div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <h2>Tidak Ada Foto</h2>
            <?php } ?>

        </div>
    </div>
</div>




<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background" style="background-image:url(<?= base_url() ?>template/front-end/images/newsletter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">sign up for news and offers</div>
                        <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                            <button type="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>