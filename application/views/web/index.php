
  <!--################### Slider Starts Here #######################--->

<div class="slider-detail">
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <?php foreach ($banner as $index => $list): ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $index; ?>" class="<?php echo ($index == 0) ? 'active' : ''; ?>"></li>
      <?php endforeach; ?>
    </ol>
    
    <div class="carousel-inner">
      <?php foreach ($banner as $index => $list): ?>
        <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
          <img class="d-block w-100" src="<?php echo base_url('site/banner/' . $list->image); ?>" alt="Slide <?php echo $index + 1; ?>" />
          
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated bounceInDown"><?php echo $list->name; ?></h5>
            <p class="animated bounceInLeft"><?php echo $list->content; ?></p>
            <div class="row">
              <a href="<?php echo base_url('web/explore'); ?>">
                <div class="btn btn-primary animated bounceInUp">Book Trip</div>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
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


  <!--*************** About Us Starts Here ***************-->

  <section id="about" class="contianer-fluid about-us ">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text">
          <div class="session-title">
            <h2>About Andaman Holidays</h2>
          </div>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged.
          </p>
          <p>
            It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with
            desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum. dummy text of the printing and been the
            industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a
            type specimen book.dummy text of the has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen
            book.
          </p>
          <p>
            There are many variations of passages of Lorem Ipsum available,
            but the majority have suffered alteration in some formhumour, or
            randomised words which don't look even slightly believable. If you
            are going to use a passage.There are many variations of passages
            of Lorem Ipsum available slightly believable. If you are going to
            use a passage.
          </p>
        </div>
        <div class="col-md-5 center image">
          <img src="<?php echo base_url();?>assets/images/about.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!--  *************************Our Team Start Here ************************** -->

  <!-- ######## Our Team End ####### -->

  <!--################### Destinations Starts Here #######################--->

  <div class="destinations container-fluid">
    <div class="container">
      <div class="session-title">
        <h2>Our Packages</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          sollicitudin nisi id consequat bibendum. Phasellus at convallis
          elit. In purus enim, scelerisque id arcu vitae
        </p>
      </div>
      <div class="dest-row row">
        <div class="col-lg-4 col-md-6 mb-2">
          <div class="dest-col">
            <div class="dest-img">
              <img src="<?php echo base_url();?>assets/images/gallery/gallery_1.webp" alt="" />
            </div>
            <h3>Romance Special</h3>


            <div class="dest-points mt-3">
              <div class="dotes">
                <i class="fa-regular fa-circle-dot" style="color: #616161da; font-size: 12px"></i>
                <p class="mb-0">Stay with daily breakfast</p>
              </div>
              <div class="dotes mt-3">
                <i class="fa-regular fa-circle-dot" style="color: #616161da; font-size: 12px"></i>
                <p class="mb-0">Romantic dinner with 5 course meal and wine</p>
              </div>

            </div>
            <div class="mt-3">
              <button class="btn btn-outline">View More</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-2">
          <div class="dest-col">
            <div class="dest-img">
              <img src="<?php echo base_url();?>assets/images/gallery/gallery_2.webp" alt="" />
            </div>
            <h3>Adventure Special</h3>


            <div class="dest-points mt-3">
              <div class="dotes">
                <i class="fa-regular fa-circle-dot" style="color: #616161da; font-size: 12px"></i>
                <p class="mb-0">Stand Up Paddling on surf board</p>
              </div>
              <div class="dotes mt-3">
                <i class="fa-regular fa-circle-dot" style="color: #616161da; font-size: 12px"></i>
                <p class="mb-0">Snorkeling off the boat</p>
              </div>

            </div>

            <div class="mt-3">
              <button class="btn btn-outline">View More</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="dest-col">
            <div class="dest-img">
              <img src="<?php echo base_url();?>assets/images/gallery/gallery_3.webp" alt="" />
            </div>
            <h3>Family Special</h3>


            <div class="dest-points mt-3">
              <div class="dotes">
                <i class="fa-regular fa-circle-dot" style="color: #616161da; font-size: 12px"></i>
                <p class="mb-0">Tree walk, Beach Volleyball</p>
              </div>
              <div class="dotes mt-3">
                <i class="fa-regular fa-circle-dot" style="color: #616161da; font-size: 12px"></i>
                <p class="mb-0">Sundowner at our Dugong Dugon Bar</p>
              </div>

            </div>
            <div class="mt-3">
              <button class="btn btn-outline">View More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- our clients and counts -->


  <div class="container mt-5">
    <div class="row">
      <div class="col-xl-4">
        <div>
          <div class="travellers">
            <img src="<?php echo base_url();?>assets/images/includes/girl_icon.png" alt="girl-icon">
          </div>

          <div class="collection">
            <h4 class="mt-3">50,000+</h4>
            <h4>Different Trips</h4>
            <p>For the last decade, GT Holidays have organized more than 50,000 international itineraries.</p>
          </div>


        </div>
      </div>
      <div class="col-xl-4">
        <div>
          <div class="travellers">
            <img src="<?php echo base_url();?>assets/images/includes/locat_icon.png" alt="girl-icon">
          </div>

          <div class="collection">
            <h4 class="mt-3">Extremely Happy<br> Travellers</h4>

            <p>Each and every itinerary is customized according to the taste of the customers.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div>
          <div class="travellers">
            <img src="<?php echo base_url();?>assets/images/includes/t_bag.png" alt="girl-icon">
          </div>
          <div class="collection">

            <h4 class="mt-3">Handcrafted <br>Experiences</h4>

            <p>Andaman Holidays holds record of great customer satisfaction and all customers are retained with us.</p>
          </div>


        </div>
      </div>
    </div>

  </div>



  <!-- auto_play slider -->


  <div class="container mt-5">

    <div class="section3" id="section3">
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/cove_beach.webp" />
        <section class="topup">
          <b>Cove Beach</b>
          <p>
            Cove Beach is a very popular of enthralling water sports in the Andaman and Nicobar Islands.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/elephant.webp" />
        <section class="topup">
          <b>Elephant beach</b>
          <p>
            This beach is very famous variety of untouched corals ,rich marine life with diverse species.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/havelock.webp" />
        <section class="topup">
          <b>Havelock Island</b>
          <p>
          Havelock Island is famous for  stunning natural beauty, pristine beaches, vibrant coral reefs. 
          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/laxmanpure.webp" />
        <section class="topup">
          <b> Laxmanpur Beach </b>
          <p>
       This beach has both live coral and dead coral. Beach number one is famous as a sunset point.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/maratang.webp" />
        <section class="topup">
          <b>Baratang</b>
          <p>
          This famous for its natural wonders; from impressive Limestone Caves and dense mangrove creeks.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/mundha.webp" />
        <section class="topup">
          <b>Munda Pahar Beach</b>
          <p>
          Munda Beach,  Chidiya Tapu Beach, near Chidiya Tapu Biological Park, also a popular tourist hub.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/neil_island.webp" />
        <section class="topup">
          <b>Neil Island</b>
          <p>
         This Beach its crystal clear water, rich in coral reefs, makes dive more exciting marine animals.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/northbay.webp" />
        <section class="topup">
          <b>North Bay Island </b>

          <p>
         This Island is blessed with pristine beaches, breathtaking vistas, and  marine life in under water.
          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/port_blair.webp" />
        <section class="topup">
          <b>Port Blair</b>

          <p>
          Port Blair is renowned for stunning beaches, travel with crystal-clear waters and white sandy shores.
          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/rajive.webp" />
        <section class="topup">
          <b>Rajiv Gandhi Complex</b>

          <p>
          An artificial waterfall  children's park enhances its  a perfect tourist hub of all ages and tastes.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/sitapore.webp" />
        <section class="topup">
          <b>Sitapur Beach </b>

          <p>
          They has officially named Sunrise as it offers the loveliest views of the sunrise across the island.

          </p>

        </section>
      </div>
      <!--CARD ENDS-->
      <!--CARD BEGINING-->
      <div class="scroll_cards img-card" id="img-card">

        <img src="<?php echo base_url();?>assets/images/team/wandoor.webp" />
        <section class="topup">
          <b>Wandoor beach </b>

          <p>
          Wandoor west of Port Blair the famous Wandoor beach known for scenic beauty and popular amongst tourists.
          </p>

        </section>
      </div>
      <!--CARD ENDS-->
    </div>

  </div>

  <div class="mt-3 onclick">
    <a href="<?php echo base_url()?>web/explore"><button class="btn btn-outline">View More</button></a>
  </div>







  <!--*************** Testionial  Starts Here *************** -->
  <section class="customer-serv">
    <div class="container">
      <div class="row session-title">
        <h2>Testimonital</h2>
      </div>

      <div class="row ro-clo">
        <div data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal" class="col-12 col-md-6 col-lg-4">
          <div class="shado-2 card-b">
            <p>
              Classic Aqua water purify is good.Because its cure our purify
              that is called health and gives good life. I suggest classic
              aqua for its best purify of water
            </p>
          </div>
          <div class="cust-det row">
            <div class="col-sm-3 col-3 img-circl">
              <img alt="" src="<?php echo base_url();?>assets/images/testimonial/member-01.jpg" />
            </div>
            <div class="col-sm-5 col-5 an-mtc no-padding">
              <b>Sarath Ali</b>
              <p>(Sales Agent)</p>
            </div>
            <div class="col-sm-4 col-4 star-par">
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="shado-2 card-b">
            <p>
              have use this product at my home last 1 and half year of this.
              This product quality is good.Its good quality product for use it
              can improve water Quality.
            </p>
          </div>
          <div class="cust-det row">
            <div class="col-sm-3 col-3 img-circl">
              <img alt="" src="<?php echo base_url();?>assets/images/testimonial/member-02.jpg" />
            </div>
            <div class="col-sm-5 col-5 an-mtc no-padding">
              <b>Binny Aderson</b>
              <p>(Sales Agent)</p>
            </div>
            <div class="col-sm-4 col-4 star-par">
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
            </div>
          </div>
        </div>
        <div data-anijs="if: scroll, on: window, do: bounceInRight animated, before: scrollReveal" class="col-12 col-md-6 col-lg-4">
          <div class="shado-2 card-b">
            <p>
              Very essensial product.it is clean and helthy water is mutually
              most important so that acqa is fufil its quality.our life now a
              days very tressful and restless
            </p>
          </div>
          <div class="cust-det row">
            <div class="col-sm-3 col-3 img-circl">
              <img alt="" src="<?php echo base_url();?>assets/images/testimonial/member-03.jpg" />
            </div>
            <div class="col-sm-5 col-5 an-mtc no-padding">
              <b>Arjun Samluel</b>
              <p>(Sales Agent)</p>
            </div>
            <div class="col-sm-4 col-4 star-par">
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- image_background_overlay -->

  <div id="parallax-wrapper">
    <section>
      <div class="p-one parallax-inner">



      </div>
    </section>
  </div>

  <!--*************** Key Features Starts Here ***************-->

  <div id="features" class="features container-fluid">
    <div class="container">
      <div class="session-title">
        <h2>Advantages</h2>
      </div>
      <div class="ker-featur-row row">
        <div data-aos="fade-right" data-aos-duration="1500" class="col-md-4 featurecol feature-left">
          <div class="single-feature">
            <div class="detail">
              <h6>100% Safety</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatem, inventore
              </p>
            </div>
            <div class="icon">
              <i class="far fa-bell"></i>
            </div>
          </div>
          <div class="single-feature">
            <div class="detail">
              <h6>Afordable Packages</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatem, inventore
              </p>
            </div>
            <div class="icon">
              <i class="far fa-heart"></i>
            </div>
          </div>
        </div>
        <div class="col-md-4 featur-image">
          <img src="<?php echo base_url();?>assets/images/traveler.png" alt="" />
        </div>
        <div data-aos="fade-left" data-aos-duration="1500" class="col-md-4 featurecol feature-right">
          <div class="single-feature">
            <div class="icon">
              <i class="far fa-images"></i>
            </div>
            <div class="detail">
              <h6>Tourist Guid</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatem, inventore
              </p>
            </div>
          </div>
          <div class="single-feature">
            <div class="icon">
              <i class="fab fa-audible"></i>
            </div>
            <div class="detail">
              <h6>Exciting Places</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptatem, inventore
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--*************** Blog Starts Here ***************-->

  <div class="container-fluid blog">
    <div class="container">
      <div class="session-title">
        <h2>Our Blog</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
          sollicitudin nisi id consequat bibendum. Phasellus at convallis
          elit. In purus enim, scelerisque id arcu vitae
        </p>
      </div>
      <div class="blog-row row">
        <div class="col-lg-4 col-md-6">
          <div class="blog-col">
            <img src="<?php echo base_url();?>assets/images/gallery/gallery_4.jpg" alt="" />
            <span>August 9, 2019</span>
            <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
            <p>
              Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Praesent accumsan, leo in venenatis
              dictum,
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="blog-col">
            <img src="<?php echo base_url();?>assets/images/gallery/gallery_5.jpg" alt="" />
            <span>August 9, 2019</span>
            <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
            <p>
              Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Praesent accumsan, leo in venenatis
              dictum,
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="blog-col">
            <img src="<?php echo base_url();?>assets/images/gallery/gallery_6.jpg" alt="" />
            <span>August 9, 2019</span>
            <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
            <p>
              Orci varius natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Praesent accumsan, leo in venenatis
              dictum,
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
