
<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Gallery</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>


<!--  ************************* Gallery Starts Here ************************** -->

<div class=" container tz-gallery mt-5">

    <div class="row">
        <?php foreach ($gallery as $row): ?>
        <div class="col-sm-4 col-md-4 col-xl-4 col-6 mt-2 mb-3">
            <a  href="<?php echo base_url('site/gallery/' . $row->image); ?>">
                <img   class="front_size" src="<?php echo base_url('site/gallery/' . $row->image); ?>" alt="gallery_andaman">
            </a>
        </div>
        <?php endforeach; ?>
       

    </div>

</div>

</div>
