<!--################### Slider Starts Here #######################--->

<div class="slider-detail">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/slider/slide_7.jpg" alt="First_slide" />
                <div class="carousel-caption fvgb d-none d-md-block">



                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/slider/slid_1.jpg" alt="second_slide" />
                <div class="carousel-caption fvgb d-none d-md-block">


                </div>
            </div>

            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/slider/slid_2.jpg" alt="Third_slide" />
                <div class="carousel-caption vdg-cur d-none d-md-block">


                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xl-6 mt-5">
            <div class="explores">
                <h2>Andaman Delight</h2>

                <div class="costing">
                    <h5 class="mb-0"> Package cost: </h5>
                    <p class="mb-0">₹20,000 /-</p>
                    <del>₹30,000 /-</del>

                    <div class="discount">
                        <p class="mb-0">Save: 33%</p>
                       
                    </div>
                </div>

                <div class="day_night mt-3">


                    <div class="day_night">
                        <i class="fa-solid fa-mountain-sun" style="color: #4f4f4f;"></i>
                        <p class="days">7 Days</p>
                    </div>
                    <div class="day_night">
                        <i class="fa-solid fa-cloud-moon" style="color: #4f4f4f;;"></i>
                        <p class="days">6 Nights</p>
                    </div>
                </div>


                <div class="mt-2">
                    <p>
                        25 N Port Blair, 1 N Havelock (South Sea )
                    </p>
                </div>
                <?php foreach ($package as $pac) : ?>
                    <div class="head_title mt-3">

                        <h5>Package inclusions</h5>
                        <ul class="mt-3 mb-3">
                            <li><?php echo $pac->package_inclusion; ?></li>
                        </ul>


                        <h5>Package exclusions</h5>
                        <ul class="mt-3 mb-3">
                            <li>

                                <?php echo $pac->package_exclusions; ?>

                               
                            </li>
                        </ul>


                        <h5>Hotels </h5>
                        <ul class="mt-1 mb-3">
                            <li> <?php echo $pac->package_content; ?></li>

                        </ul>



                        <b>Total Tourist</b>

                        <ul class="mt-1 mb-3">
                            <li>0<?php echo $pac->adult; ?> Adult.</li>
                            <li>0<?php echo $pac->child; ?> Child(above 5 years).</li>

                        </ul>



                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="col-xl-6">
            <div class="head_title inclusive">
                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/island.png" alt="island">
                    <h5>Island</h5>

                </div>
                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/ride.png" alt="rides">
                    <h5>Water Ride </h5>

                </div>

            </div>
            <div class="head_title inclusive">

                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/map.png" alt="maps">
                    <h5>Pickup Drop</h5>

                </div>
                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/break.png" alt="breaks">
                    <h5>Breakfast</h5>

                </div>
            </div>
            <div class="head_title inclusive">

                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/hotel.png" alt="hotels">
                    <h5>Hotel</h5>

                </div>
                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/cab.png" alt="cab">
                    <h5>cab facility</h5>

                </div>
            </div>
            <div class="head_title inclusive">

                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/pair.png" alt="paires">
                    <h5>sight seeing</h5>

                </div>
                <div class="includes">
                    <img src="<?php echo base_url() ?>assets/images/includes/person.png" alt="persons">
                    <h5>coordinator</h5>

                </div>
            </div>
        </div>
    </div>

</div>


<div class="explores text-center">
    <h2>Travel Journey</h2>


</div>


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xl-6 accordion__wrapper">


            <!-- Accordion 1  -->
            <?php $i = 1;
            foreach ($plans as $list) : ?>
                <div class="accordion">
                    <div class="accordion__header">
                        <div class="day_1">
                            <p>Day-<?php echo $i++; ?></p>
                        </div>

                        <h2 class="accordion__question">(<?php echo $list->plan_title; ?> )</h2>

                        <span class="accordion__icon">
                            <i style="color: black;" id="accordion-icon" class="ri-add-line"></i>
                        </span>
                    </div>
                    <div class="accordion__content">
                        <ul>
                            <div class="mb-3 mt-3" style="display: flex; gap: 12px; ">
                                <li><?php echo $list->plan_description; ?></li>
                            </div>
                        </ul>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>



        <div class="col-xl-6">
            <section class="wrapper">
                <img id="mainPhoto" src="<?php echo base_url() ?>assets/images/gallery/gallery_01.webp" />
                <div class="image-wrapper">
                    <?php $image_bundle = explode(',', $pac->image_bundle);
                    foreach ($image_bundle as $image) : ?>
                        <img class="imgCarousel" src="<?php echo base_url('site/package/' . trim($image)); ?>" />
                    <?php endforeach; ?>
                </div>

            </section>
        </div>

    </div>
</div>