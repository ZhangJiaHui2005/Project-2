<!DOCTYPE html>
<html>

<head>
  @include('includes.head');

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    @include('includes.header');
    <!-- end header section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Furniture
        </h2>
        <p>
          which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('images/f1.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                brown Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 100.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Double Bed Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                House Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 100.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f5.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Blue Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f6.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end furniture section -->

  <!-- info section -->
  @include('includes.info');
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>