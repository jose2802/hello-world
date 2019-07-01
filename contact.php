<?php get_header(); ?>
<?php /* Template Name: contact */ ?>

<section class="mainCarousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100 main17"></div>
            </div>
        </div>
    </div>
</section>

<section class="contactMap First section">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-12 mb-3">
                <div class="row">
                    <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="col-lg-6 col-12 mapSection">
                <div id="mapid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactHeader section">
    <div class="container guacamayaText">
        <h2><?php _e('Doubts? Comments? Drop us a message', 'paradise-beach'); ?></h2>
    </div>
    <div class="guacamaya d-flex flex-column justify-content-center">
        <h2><?php _e('We want to know', 'paradise-beach'); ?><br><?php _e('About you', 'paradise-beach'); ?></h2>
    </div>
    <div>
        <img class="d-block mx-auto" id="phone" src="/wp-content/themes/paradise-beach/resources/img-contact/Telefono.svg">
    </div>
    <div>
        <p class="doubts text-center"><?php _e('Paradise is located 5 miles from the international cruise ship pier,', 'paradise-beach'); ?><br><?php _e(' and open from 9:00am to 6pm', 'paradise-beach'); ?><br><br><?php _e('Phone:', 'paradise-beach'); ?> <br>011 52 (987) 689 00 00<br><br><?php _e('Mail:', 'paradise-beach'); ?><br>info@paradisebeachcozumel.com <br><br><?php _e('Address: Carretera costera sur km 14.5,Zona hotelera Sur, 77600 Cozumel,', 'paradise-beach'); ?><br> Quintana Roo, México </p>
    </div>
</section>

<section class="contactCarouselSection section">
            <div id="contactCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#contactCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#contactCarousel" data-slide-to="1"></li>
                    <li data-target="#contactCarousel" data-slide-to="2"></li>
                    <li data-target="#contactCarousel" data-slide-to="3"></li>
                    <li data-target="#contactCarousel" data-slide-to="4"></li>
                    <li data-target="#contactCarousel" data-slide-to="5"></li>
                    <li data-target="#contactCarousel" data-slide-to="6"></li>
                    <li data-target="#contactCarousel" data-slide-to="7"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block w-100 car-img1"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 car-img2"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 car-img3"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 car-img4"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 car-img5"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 car-img6"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 car-img9"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-100 car-img10"></div>
                    </div>
                </div>
            </div>
        </section>

<section class="Reviews section reviewsContact">
    <div class="scrollHelp4"></div>
    <div class="container ReviewsFX">
        <h2><?php _e('Reviews', 'paradise-beach'); ?></h2>
        <div class="row">
            <div class="col-md-5 d-flex flex-row justify-content-center">
                <img class="img-responsive trip-ad" src="<?php bloginfo("template_directory"); ?>/resources/img-home/Logo Trip-01.svg">
            </div>
            <div class="col-md-7">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center>
                                <img src="<?php bloginfo("template_directory"); ?>/resources/img-home/Foto reviews-01.svg" alt="First slide">
                            </center>
                            <center>
                                <h3><?php _e('Loved it! ', 'paradise-beach'); ?></h3>
                            </center>
                            <center>
                                <p><?php _e('We have been to PB twice. The first time was October 2018 and the water was crystal clear! The second time in April 2019 and the water was more cloudy and I think had more problems with seaweed. Of course, it is no one´s fault but Mother Nature. The beach was still beautiful. Great big pool. We swam and had drinks all day. There were 6 ships in port the day we were there in April and there were still plenty of chairs on the right side of the beach. You can´t beat the $3 admission price per person. Drinks were reasonable and we ate tacos from the taco truck parked in the middle. We will definitely be back!', 'paradise-beach'); ?> </p>
                            </center>
                            <div class="d-flex flex-row justify-content-end reviewer"><i>"Shanon"</i></div>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="<?php bloginfo("template_directory"); ?>/resources/img-home/Foto reviews-01.svg" alt="First slide">
                            </center>
                            <center>
                               <h3><?php _e('Great Food! ', 'paradise-beach'); ?></h3>
                            </center>
                            <center>
                               <p><?php _e('We decided to visit based on the food recommendation. They did not disappoint! The tacos were awesome. Great quesadillas and wonderful club wrap. This is the first of trying Ceviche and it was amazing!', 'paradise-beach'); ?>! </p>
                            </center>
                            <div class="d-flex flex-row justify-content-end reviewer"><i>"Steve"</i></div>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="<?php bloginfo("template_directory"); ?>/resources/img-home/Foto reviews-01.svg" alt="First slide">
                            </center>
                            <center>
                              <h3><?php _e('Free Beach with ', 'paradise-beach'); ?><br><?php _e(' Food/Drink Mininum??? ', 'paradise-beach'); ?><br><?php _e(' Yes, and thank you!', 'paradise-beach'); ?></h3>
                            </center>
                            <center>
                                <p><?php _e('Paradise Beach has everything for a tourist! Beach? Check! Pool? Check! Restaurant? Check! Bar? Check! We were here only for a cruise stop, but we enjoyed ourselves at the beach and pool. The menu had variety and I even had a "yard" drink to go!', 'paradise-beach'); ?>! </p>
                            </center>
                            <div class="d-flex flex-row justify-content-end reviewer"><i>"John"</i></div>
                        </div>
                        <div class="carousel-item">
                            <center>
                                <img src="<?php bloginfo("template_directory"); ?>/resources/img-home/Foto reviews-01.svg" alt="First slide">
                            </center>
                            <center>
                              <h3><?php _e('Excellent ', 'paradise-beach'); ?><br><?php _e('place', 'paradise-beach'); ?></h3>
                            </center>
                            <center>
                                <p><?php _e('Very good service, the prices for access to the beach and the pool very accessible, the comfortable lounge chairs and the food and drinks were delicious. Definitely a place something that you have to go back to', 'paradise-beach'); ?>! </p>
                            </center>
                            <div class="d-flex flex-row justify-content-end reviewer"><i>"Tom"</i></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="ion-ios-arrow-back icon-mid icon-grey"></i>
                       <span class="sr-only"><?php _e('Previous', 'paradise-beach'); ?></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="ion-ios-arrow-forward icon-mid icon-grey"></i>
                      <span class="sr-only"><?php _e('Next', 'paradise-beach'); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="onlinePayContact section">
    <div class="container onlineImg">
        <div class="row">
            <div class="col-12">
                <center><button type="button" class="btn btn-primary btn-paradise">Book Now</button></center>
            </div>
            <div class="col-12">
                <img class="w-75 mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/resources/img-blog/metodos.png">
            </div>
        </div>

    </div>

</section>

<?php get_footer(); ?>