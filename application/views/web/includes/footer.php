    <!--*************** Footer  Starts Here *************** -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 about">
            <h2>About Us</h2>
            <a href="<?php echo base_url() ?>web"><img class="mb-3" style="background-color: aliceblue; padding: 8px; border-radius: 7px;" src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>

            <div class="foot-address">
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="addet">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Mollitia 56778
              </div>
            </div>
            <div class="foot-address">
              <div class="icon">
                <i class="far fa-envelope-open"></i>
              </div>
              <div class="addet">info@andamanholidays.com</div>
            </div>
            <div class="foot-address">
              <div class="icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="addet">+91 99332 92368</div>
            </div>
          </div>
          <div class="col-md-3 fotblog">
            <h2>From latest Blog</h2>
            <div class="blohjb">
              <p>
                dignissim. Integer tempor facilisis malesuada. Proin ac varius
                velit, tincidunt condimentum
              </p>
             
            </div>
            <div class="blohjb">
              <p>
                dignissim. Integer tempor facilisis malesuada. Proin ac varius
                velit, tincidunt condimentum
              </p>
            </div>
            <div class="blohjb">
              <p>
                dignissim. Integer tempor facilisis malesuada. Proin ac varius
                velit, tincidunt condimentum
              </p>
            </div>
          </div>
          <div class="col-md-3 glink">
            <h2>Quick Links</h2>
            <ul>
              <li>
                <a href="<?php echo base_url() ?>web"><i class="fas fa-angle-double-right"></i>Home</a>
              </li>
              <li>
                <a href="<?php echo base_url() ?>web/about_us"><i class="fas fa-angle-double-right"></i>About Us</a>
              </li>
              <li>
                <a href="<?php echo base_url() ?>web/services"><i class="fas fa-angle-double-right"></i>Packages</a>
              </li>
              <li>
                <a href="<?php echo base_url() ?>web/blog"><i class="fas fa-angle-double-right"></i>Blog</a>
              </li>
              <li>
                <a href="<?php echo base_url() ?>web/pricing"><i class="fas fa-angle-double-right"></i>Gallery</a>
              </li>
              <li>
                <a href="<?php echo base_url() ?>web/contact_us"><i class="fas fa-angle-double-right"></i>Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 glink">
            <h2>Packages</h2>
            <ul>
              <li>
                <a href="index.html"><i class="fas fa-angle-double-right"></i>Family Special</a>
              </li>
              <li>
                <a href="about_us.html"><i class="fas fa-angle-double-right"></i>Advanchere Special</a>
              </li>
              <li>
                <a href="services.html"><i class="fas fa-angle-double-right"></i>Couple Special</a>
              </li>
              <li>
                <a href="blog.html"><i class="fas fa-angle-double-right"></i>Event Special</a>
              </li>
              <li>
                <a href="pricing.html"><i class="fas fa-angle-double-right"></i>Water Rides</a>
              </li>

            </ul>

            <div>
              <ul class="d-flex">
                <li>
                  <a href=""> <i class="fab fa-facebook-square" style="color: rgb(146, 146, 146); font-size: 25px;"></i></a>
                </li>
                <li>
                  <a href=""><i class="fab fa-twitter-square" style="color: rgb(146, 146, 146); font-size: 25px;"></i></a>
                </li>
                <li>
                  <a href=""><i class="fab fa-instagram" style="color: rgb(146, 146, 146); font-size: 25px;"></i></a>
                </li>
                <li>
                  <a href=""> <i class="fab fa-linkedin" style="color: rgb(146, 146, 146); font-size: 25px;"></i></a>
                </li>
              </ul>

            </div>



          </div>

        </div>
      </div>
    </footer>
    <div class="copy">
      <div class="container">
        <a href="https://www.addobyte.com/">2024 &copy; All Rights Reserved | Designed and Developed by addobyte
          technologies</a>

        <span>
          <a><i class="fab fa-github"></i></a>
          <a><i class="fab fa-google-plus-g"></i></a>
          <a><i class="fab fa-pinterest-p"></i></a>
          <a><i class="fab fa-twitter"></i></a>
          <a><i class="fab fa-facebook-f"></i></a>
        </span>
      </div>
    </div>

    <!-- whatsup -->
    <div class="chat_box">
      <div class="whatsup">
        <a href="https://wa.me/919933292368" target="_blank"> <img  src="./assets/images/whatsup.svg" alt="chatbox"></a>
      </div>

    </div>
    <!-- whatsup_end -->



    </body>

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>


    <!-- gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
      baguetteBox.run('.tz-gallery');
    </script>


    <!-- faq_script -->


    <script>
      const accordions = document.querySelectorAll(".accordion");

      accordions.forEach((accordion, index) => {
        const header = accordion.querySelector(".accordion__header");
        const content = accordion.querySelector(".accordion__content");
        const icon = accordion.querySelector("#accordion-icon");

        header.addEventListener("click", () => {
          const isOpen = content.style.height === `${content.scrollHeight}px`;

          accordions.forEach((a, i) => {
            const c = a.querySelector(".accordion__content");
            const ic = a.querySelector("#accordion-icon");

            c.style.height = i === index && !isOpen ? `${c.scrollHeight}px` : "0px";
            ic.classList.toggle("ri-add-line", i !== index || !isOpen);
            ic.classList.toggle("ri-subtract-fill", i === index && !isOpen);
          });
        });
      });
    </script>


    <!-- faq_script -->



    <script>
      let images = Array.from(document.getElementsByClassName("imgCarousel"))

      let mainPhoto = document.getElementById("mainPhoto")

      function updateImage(event) {
        let image = event.target

        mainPhoto.src = image.src
      }

      images.forEach(function(image) {
        image.addEventListener("click", updateImage)
      });
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <!-- auto_play -->

    <script>
      const slider = document.querySelector('.section3');
      let isDown = false;
      let startX;
      let scrollLeft;

      slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('activate');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
      });
      slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('activate');
      });
      slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('activate');
      });
      slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
      });

      setInterval(function() {
        const x = pageX - slider.offsetLeft;
        const walk = (x - startX) * 1; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
      }, 3000);



      $(function() {
        var $clientslider = $('#section3');
        var clients = $clientslider.children().length;
        var clientwidth = (clients * 220);
        $clientslider.css('width', clientwidth);
        var rotating = true;
        var clientspeed = 1800;
        var seeclients = setInterval(rotateClients, clientspeed);
        $(document).on({
          mouseenter: function() {
            rotating = false;
          },
          mouseleave: function() {
            rotating = true;
          }
        }, '#section3');

        function rotateClients() {
          if (rotating != false) {
            var $first = $('#section3 .img-card:first');
            $first.animate({
              'margin-left': '-315px'
            }, 2000, function() {
              $first.remove().css({
                'margin-left': '0px'
              });
              $('#section3 .img-card:last').after($first);
            });
          }
        }
      });

      $(document).ready(function() {
        var userclicks = localStorage.getItem("clicks");
        var divs = document.getElementsByClassName('tag');
        [].slice.call(divs).forEach(function(div) {
          div.innerHTML = "<i class='fa fa-eye'></i> Your View " + userclicks;
        });
        if (userclicks == null || userclicks == NaN || userclicks == undefined || userclicks == "null" || userclicks == "NaN") {
          localStorage.setItem("clicks", "1");
        } else {
          var newclick = parseInt(localStorage.getItem("clicks")) + 1;
          localStorage.setItem("clicks", newclick);
        }
      });
    </script>




    <!-- qa_script -->



    <!--textimonial-->
    

    

    </html>