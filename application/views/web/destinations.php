<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2> Our Destinations</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Destination</li>
            </ul>
        </div>
    </div>
</div>


<!--################### Destinations Starts Here #######################--->

<div class="destinations container-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Awesome Packages</h2>
            <p>Experience the unparalleled beauty of the Andaman Islands with our Awesome Andaman Packages. These meticulously curated holiday packages offer a perfect blend of adventure, relaxation, and cultural exploration. Discover pristine beaches, vibrant coral reefs, lush greenery, and historical landmarks that make the Andaman Islands a true paradise.</p>
        </div>

    </div>





</div>




<div class="container mb-5">
    <div class="row">
        <?php foreach ($packages as $pac) : ?>
            <div class="col-xl-4 mt-3">

                <div class="packages">
                    <img src="<?php echo base_url('site/package/' . $pac->image); ?>" alt="package">
                </div>

                <div class="top_badge">
                    <p class="save mb-0">Save <br>33%</p>
                    
                </div>

                <div class="mb-3 mt-3" style="margin-left: 10px;">

                    <p class="topics"><?php echo $pac->package_heading; ?></p>


                    <p style="font-size: 14px; font-weight: 700;"><?php echo $pac->day_plans; ?></p>


                </div>

                <!-- request_call_back button -->

                <div class="costing">
                    <h5 style="font-size: 18px;" class="mb-0"> Package cost: </h5>
                    <p style="font-size: 20px;" class="mb-0">₹<?php echo $pac->package_cost; ?> /-</p>
                    <del>₹<?php echo $pac->package_price; ?> /-</del>
                </div>

                <div style=" display:flex; align-items: center; gap: 10px;">
                    <div class="callback">


                        <div class=" view_more mt-3 mb-3">
                            <button onclick="window.location.href='<?php echo base_url('web/explore/' . $pac->id) ?>'" class="btn-5"> <i class="fa-solid fa-phone call_phone" style="color: #feaa34; font-size: 15px;"></i>    &nbsp Request</button>
                        </div>

                    </div>

                    <div class="callback">


                        <div class=" view_more mt-3 mb-3">
                            <button onclick="window.location.href='<?php echo base_url('web/explore/' . $pac->id) ?>'" class="btn-5"> <i class="fa-solid fa-eye call_phone" style="color: #feaa34; font-size: 15px;"></i>     &nbsp View</button>
                        </div>

                    </div>

                </div>

                <!-- request_call_back button -->




            </div>
        <?php endforeach; ?>
    </div>

</div>