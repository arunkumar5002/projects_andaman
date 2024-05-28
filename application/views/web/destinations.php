

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
	<?php foreach ($package as $pac):?>
        <div class="col-xl-4 mt-3">

            <div class="packages">
                <img src="<?php echo base_url('site/package/' . $pac->image); ?>" alt="package">
            </div>

            <div class="mb-3 mt-3" style="margin-left: 10px;">

                <p class="topics"><?php echo $pac->package_title; ?></p>


                <p style="font-size: 13px;"><?php echo $pac->package_content; ?></p>


            </div>

            <div class="booking">
                <a class="now" href="<?php echo base_url('web/explore/' . $pac->id) ?>">View More</a>
            </div>



        </div>
		<?php endforeach; ?>
    </div>

</div>

