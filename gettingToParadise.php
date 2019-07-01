<?php get_header(); ?>
<?php /* Template Name: gettingTo */ ?>

<video title="Paradise Beach Cozumel" controls autoplay muted loop class="myVideo">
    <source src="<?php bloginfo("template_directory"); ?>/resources/img/hyperlapse.webm" type="video/webm">
    <img src="<?php bloginfo("template_directory"); ?>/resources/css/img/beach-min.jpg" title="your browser does not support the <video> tag">
</video>

<section class="mainCarousel mainHome">
    <div id="gettingToCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block main1"></div>
            </div>
            <div class="carousel-item">
                <div class="d-block main2"></div>
            </div>
            <div class="carousel-item">
                <div class="d-block main3"></div>
            </div>
        </div>
    </div>
</section>

<section class="gettingNav First section">
    <div class="container hrNav">
        <div class="row">
            <div class="col-12 mb-4">
                <nav class="navbar-expand">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link navItemC taxi">TAXIS</a></li>
                        <li class="nav-item"><a class="nav-link navItemC mapa"><?php _e('MAP', 'paradise-beach'); ?></a></li>
                        <li class="nav-item"><a class="nav-link navItemC faq">FAQs</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="gettingTo First">
    <div class="container gettingToFX">
        <h2><?php _e('Getting to paradise', 'paradise-beach'); ?></h2>
        <div class="row text-center">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-5 enter1">
                        <i class="icon-big serviceI mb-2"> <img id="sc1" src="<?php bloginfo('template_directory'); ?>/resources/icons/icon7.svg" alt=""></i>
                        <p>Taxi</p>
                    </div>
                    <div class="col-lg-2 col-5 enter2">
                        <i class="icon-big serviceI mb-2"> <img id="sc2" src="<?php bloginfo('template_directory'); ?>/resources/icons/icon8.svg" alt=""></i>
                        <p><?php _e('Car', 'paradise-beach'); ?></p>
                    </div>
                    <div class="col-lg-2 col-5 enter3">
                        <i class="icon-big serviceI mb-2"> <img id="sc3" src="<?php bloginfo('template_directory'); ?>/resources/icons/icon9.svg" alt=""></i>
                        <p><?php _e('Motorbike', 'paradise-beach'); ?></p>
                    </div>
                    <div class="col-lg-2 col-5 enter4">
                        <i class="icon-big serviceI mb-2"> <img id="sc4" src="<?php bloginfo('template_directory'); ?>/resources/icons/icon10.svg"></i>
                        <p><?php _e('Walking', 'paradise-beach'); ?></p>
                    </div>
                    <div class="col-lg-2 col-12 enter5">
                        <i class="icon-big serviceI mb-2"> <img id="sc5" src="<?php bloginfo('template_directory'); ?>/resources/icons/icon11.svg"></i>
                        <p>Van/Bus</p>
                    </div>
                    <div class="enter6">
                        <i class="icon-big serviceI mb-2"> <img id="sc6" src=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Rates section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    <?php _e('TAXIS RATES', 'paradise-beach'); ?>
                </h2>
            </div>
            <div class="col-12">
                <img id="tarifario" class="w-75 mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/resources/img-gettingTo/tarifario.svg">
                <img id="palmera" src="<?php bloginfo('template_directory'); ?>/resources/img-gettingTo/palmera.png">
            </div>

        </div>

    </div>
</section>

<section class="mapSection mapSectionGetting section">
    <h2>
        <?php _e('MAP', 'paradise-beach'); ?>
    </h2>
    <div id="mapid">

    </div>
</section>
<section class="FAQ section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>FAQs</h2>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-recent" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('Is There an Entrance Fee to Paradise Beach Cozumel?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' The facility fee is only $3 USD. There is a $18 USD fee only if you decide to use our 10ft water slide, a Jungle Joe floating multi-tiered climing structure, the Rockit circular water rocket, snorkeling gear, kayaks, beach floats, trampoline, iceberg, coconut tree climb and bungee trampoline jump. The $18 USD / person fee is good for the whole day and covers all the toys mentioned.', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DO I NEED TO PREORDER TICKETS FOR PARADISE BEACH COZUMEL?', 'paradise-beach'); ?> </b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Not at all. You can purchase the facility fee bracelet and the Fun-Pass bracelet from your waiter upon arrival..', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('ARE WE EXPECTED TO EAT AND DRINK WHILE WE´RE THERE?', 'paradise-beach'); ?> </b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' Yes, just like your home town bar or restaurant, we ask that you eat and/or drink while you are here ($10 minimum per person). It takes money to maintain such a clean and beautiful Beach Club with all these
                                amenities! Kids under 6, however, are exempt from this policy.', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DOES $18 ALLOW YOU TO USE ALL OF THE TOYS?', 'paradise-beach'); ?> </b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Yes, the $18 USD per day per person fee allows
                                you to use the beach floats, kayaks, trampoline,
                                rock climbing iceberg, snorkeling gear, coconut
                                tree climb, paddle boards and bungee trampoline jump.
                                The $18 USD per person fee is good for the whole day
                                and covers all of the toys mentioned.', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('ILL TAXIS BE AVAILABLE TO TAKE ME BACK TO THE SHIP WHEN I´M READY TO GO? ', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Yes, there is a taxi stand on the premises', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('WILL TAXIS BE AVAILABLE TO TAKE ME BACK TO THE SHIP WHEN I´M READY TO GO? ', 'paradise-beach'); ?> </b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Yes, there is a taxi stand on the premises. ', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('WHAT IS THE BEST WAY TO GET TO PARADISE BEACH COZUMEL?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' A taxi is the easiest way to get to Paradise Beach. T
                                hey charge 14 or 15 usd, one way (PER TAXI, not person),
                                for 1 to 4 passengers depending on which pier you are
                                coming from. There are also taxi VANS that can hold up
                                to 8 people and cost about US$30 each way (per VAN not per Person).', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('ARE THERE LOCKERS AVAILABLE FOR RENT?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Yes, we have lockers available for our visitors to rent. The cost is $4 USD for the day.', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DOES PARADISE BEACH ACCEPT CREDIT CARDS?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' Paradise Beach accepts VISA and Master Card.', 'paradise-beach'); ?> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DOES PARADISE BEACH COZUMEL OFFER SERVICES LIKE HAIR BRAIDING OR MASSAGE?', 'paradise-beach'); ?>D</b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Yes, hair braiding, massage and temporary henna tattoos are available on site.', 'paradise-beach'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('CAN YOU SNORKEL AT PARADISE BEACH COZUMEL?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' As Paradise Beach is a natural sand beach,
                                coral heads are not found immediately offshore.
                                There are usually fish to be found under the
                                pier and rocky areas further out.', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('IS PARADISE BEACH COZUMEL A FAMILY FRIENDLY BEACH?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' We get singles, couples, families… everybody comes to Paradise Beach!', 'paradise-beach'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DOES PARADISE BEACH OFFER DRINK OR MEAL PACKAGES?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Sorry no, Paradise Beach offers quality food and beverage a la carte', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('WHAT TIME DOES PARADISE BEACH OPEN FOR GUESTS?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' We open at 9 AM everyday and close at around 5 to 6 PM 365 days a year.', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DO I NEED A RESERVATION FOR PARADISE BEACH COZUMEL?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('There is no need to book, first come, first served!', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DO I NEED TO MAKE A RESERVATION FOR A MASSAGE?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' Nope, our massages are first come, first served!!', 'paradise-beach'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('CAN I RENT SNORKEL GEAR AT PARADISE BEACH COZUMEL?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Yes. The optional $18 usd per day per person
                                Fun-Pass fee allows you to use the snorkeling
                                gear, beach floats, kayaks, trampoline, rock
                                climbing iceberg, coconut tree climb, bungee
                                trampoline jump and is good for the whole day
                                and covers all of the toys mentioned.', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('IS THERE PARKING AT PARADISE BEACH COZUMEL?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' Yes, there are plenty of parking spaces,
                                or just avoid the hassle of driving and
                                take a taxi directly from the cruise ship to Paradise Beach.', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('IS PARADISE BEACH CHILD-FRIENDLY?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('  Kids love all the toys at Paradise Beach and the parents love the calm water for the REALLY little ones.', 'paradise-beach'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
            </div>
            <div class="tab-pane fade" id="nav-unanswered" role="tabpanel" aria-labelledby="nav-unanswered-tab">

                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('IS PARADISE BEACH CHILD-FRIENDLY?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Kids love all the toys at Paradise Beach and the parents love the calm water for the REALLY little ones.', 'paradise-beach'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('WHAT AGE MUST A CHILD BE FOR THE SPACEWALKER?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Child must be at least 35 lbs. to enjoy the ride.', 'paradise-beach'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('ARE JET SKIS AND PARA SAILING AVAILABLE AT PARADISE BEACH?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' YES! Banana boat rides as well…have fun!', 'paradise-beach'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('ARE THERE LIFE VESTS AVAILABLE FOR USE?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Yes, of course!', 'paradise-beach'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('DOES PARADISE BEACH CLOSE AT CERTAIN TIMES OF THE YEAR?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' Paradise Beach is open 365 days a year. We only close for weather if conditions become unsafe for our guests.', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('HOW LARGE IS PARADISE BEACH?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('  Paradise Beach is 350 feet of beach front property, and has Cozumel’s largest heated pool, plus restaurants, bars, shopping, and all our Fun Pass toys.', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('ARE THERE TOWELS AVAILABLE AT PARADISE BEACH?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e('Towels are available for sale, but we do not rent them. Please bring towels from your cruise ship or hotel. ', 'paradise-beach'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 pt-3">
                            <h2 class="tabTitle"> <b><?php _e('ARE CHANGING ROOMS AND SHOWERS AVAILABLE AT PARADISE BEACH?', 'paradise-beach'); ?></b> </h2>
                            <small>
                                <i class="fas fa-map-marker-alt"></i> Cancún, México
                            </small>
                        </div>
                        <div class="col-12 mt-1">
                            <p class="text-justify customp"><?php _e(' Yes, both are available at no charge.', 'paradise-beach'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="w-100">
                </div>
            </div>
        </div>
        <nav>
            <div class="nav nav-tabs customTab" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-recent" role="tab" aria-controls="nav-home" aria-selected="true">1</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">2</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">3</a>
                <a class="nav-item nav-link" id="nav-unanswered-tab" data-toggle="tab" href="#nav-unanswered" role="tab" aria-controls="nav-unanswered" aria-selected="false">4</a>
            </div>
        </nav>
    </div>


</section>

<?php get_footer(); ?>