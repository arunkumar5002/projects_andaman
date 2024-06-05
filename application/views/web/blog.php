
        
 <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Traveler</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>

       
         <!--*************** Blog Starts Here ***************-->
                     
    <div class="container-fluid blog">
        <div class="container">
             <div class="session-title">
                <h2>Our Blog</h2>
                 <p>Welcome to our travel blog, where we bring you the best tips, itineraries, and insights for your next adventure. Today, we're diving into the enchanting Andaman Islands, a destination that promises a perfect blend of relaxation, adventure, and natural beauty.</p>
            </div>
                <div class="blog-row row">
				<?php foreach ($blog as $row): ?>
                    <div class="col-lg-4 col-md-6 ">
                       <div class="blog-col">
                            <img src="<?php echo base_url('site/blog/' . $row->image); ?>" style="object-fit:cover; width:100%; height:300px;" alt="blog_andaman">
                            <h4><?php echo $row->name; ?></h4>
                            <p><?php echo $row->content; ?></p>
                       </div>
                       
                    </div>
                <?php endforeach; ?>
                     
            </div>
        </div>
        
    </div>    
    

      
 