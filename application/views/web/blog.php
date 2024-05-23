
        
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
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum. Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
            </div>
                <div class="blog-row row">
				<?php foreach ($blog as $row): ?>
                    <div class="col-lg-4 col-md-6 ">
                       <div class="blog-col">
                            <img src="<?php echo base_url('site/blog/' . $row->image); ?>" alt="">
                            <h4><?php echo $row->name; ?></h4>
                            <p><?php echo $row->content; ?></p>
                       </div>
                       
                    </div>
                <?php endforeach; ?>
                     
            </div>
        </div>
        
    </div>    
    

      
 