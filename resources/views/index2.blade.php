<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel | Bootstrap blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS--> 
    <link rel="stylesheet" href="{{ asset('vendor-tm-2/bootstrap/css/bootstrap.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('vendor-tm-2/owl.carousel2/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor-tm-2/owl.carousel2/assets/owl.theme.default.min.css') }}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css-tm-2/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css-tm-2/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img-tm-2/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Header-->
    <header class="header">
      <!-- Top bar -->
      <div class="py-2 bg-dark text-white">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <ul class="list-inline mb-0 text-small">
                <li class="list-inline-item"><a class="reset-anchor" href="#">About us</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a class="reset-anchor" href="#">Sitemap</a></li>
              </ul>
            </div>
            <div class="col-lg-4 d-none d-lg-block text-center">
              <ul class="list-inline mb-0 small">
                <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-4 d-none d-lg-block text-right">
              <div class="dropdown text-small"><a class="reset-anchor dropdown-toggle" id="destinations" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas mr-2"></i>Destinations</a>
                <div class="dropdown-menu" aria-labelledby="destinations"><a class="dropdown-item text-small" href="#">France</a><a class="dropdown-item text-small" href="#">Germany</a><a class="dropdown-item text-small" href="#">Spain</a><a class="dropdown-item text-small" href="#">Egypt</a><a class="dropdown-item text-small" href="#">Thailand</a><a class="dropdown-item text-small" href="#">Indonesia</a><a class="dropdown-item text-small" href="#">Maldives</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar 1 -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
        <div class="container text-center"><a class="navbar-brand mx-auto" href="index.html"><img class="mb-2" src="img-tm-2/logo.svg" alt="" width="140">
            <p class="text-small text-uppercase text-gray mb-0">Your next pocket travel guide</p></a></div>
      </nav>
      <!-- Navbar 2 -->
      <nav class="navbar navbar-expand-lg navbar-light border-gray py-2 bg-light">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right mx-auto border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item px-1">
                <!-- Link--><a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item px-1">
                <!-- Link--><a class="nav-link" href="listing.html">Listing</a>
              </li>
              <li class="nav-item px-1">
                <!-- Link--><a class="nav-link" href="post.html">Post</a>
              </li>
              <li class="nav-item px-1 dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="listing.html">Listing</a><a class="dropdown-item" href="post.html">Post</a></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Destinations -->
    <section class="pt-5">
      <div class="container">
        <h1>Featured Destinations</h1>
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid</p>
      </div>
      <div class="destinations-slider owl-carousel owl-theme nav-center-custom owl-padding"><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-4.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Paris</p>
            <h2 class="h3 mb-4">France</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-2.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Tokyo</p>
            <h2 class="h3 mb-4">Japan</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-3.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Madrid</p>
            <h2 class="h3 mb-4">Spain</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-1.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Rome</p>
            <h2 class="h3 mb-4">Italy</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-5.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Jakarta</p>
            <h2 class="h3 mb-4">Indonesia</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-6.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Ottawa</p>
            <h2 class="h3 mb-4">Canada</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-7.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Cairo</p>
            <h2 class="h3 mb-4">Egypt</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-4.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Berlin</p>
            <h2 class="h3 mb-4">Germany</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-2.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Bangkok</p>
            <h2 class="h3 mb-4">Thailand</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-3.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">Mal??</p>
            <h2 class="h3 mb-4">Maldives</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a><a class="destination d-flex align-items-end bg-center bg-cover" href="post.html" style="background: url(img-tm-2/travel-home-1.jpg)">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <p class="small text-uppercase mb-0">New York</p>
            <h2 class="h3 mb-4">United States</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Discover</div>
          </div></a>
      </div>
    </section>
    <!-- Divider Section -->
    <section class="py-5">
      <div class="container py-4">
        <!-- Home listing -->
        <div class="row align-items-stretch bg-full-left">
          <div class="col-lg-6 pr-lg-0 order-2 order-lg-1">
            <div class="h-100 bg-light d-flex align-items-center">
              <div class="py-5 pr-4 pl-3 pl-lg-0">
                <p class="text-primary font-weight-bold small text-uppercase mb-2">Travel guide</p>
                <h3 class="h4"> <a class="text-reset" href="post.html">Book to inspire your travel</a></h3>
                <p class="text-muted text-small mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur, perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur, repellendus.</p>
                <p class="text-muted text-small mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur, perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur, repellendus.</p>
                <ul class="list-inline small text-uppercase mb-0">
                  <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="img-tm-2/person-1.jpg" alt="" width="30"/></li>
                  <li class="list-inline-item mr-0 text-gray align-middle">By </li>
                  <li class="list-inline-item align-middle mr-0"><a class="font-weight-bold reset-anchor" href="#">Jason Doe</a></li>
                  <li class="list-inline-item text-gray align-middle mr-0">|</li>
                  <li class="list-inline-item text-gray align-middle">Jan, 2019</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pl-lg-0 order-1 order-lg-2"><a class="d-block h-100 bg-center bg-cover" href="post.html" style="background: url(img/travel-home-divider.jpg)"></a></div>
        </div>
      </div>
    </section>
    <!-- Instagram section-->
    <section class="pb-5">
      <div class="container pb-4">
        <header class="text-center mb-5">
          <h2>Backpack traveler</h2>
          <p>A place for your Instagram pictures or gallery.</p>
        </header>
        <div class="row">
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-1.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-2.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-3.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-4.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-5.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-6.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-1.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-tm-2-fluid" src="img-tm-2/listing-tnumbnail-2.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
        </div>
      </div>
    </section>
    <!-- Travel essentials section -->
    <section class="py-5 bg-light">
      <div class="container py-4">
        <header class="text-center mb-5">
          <h2>My travel essentials</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header>
        <div class="row text-center">
          <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img-tm-2/bag.png" alt="" height="150">
              <h3 class="h5">Backpack</h3>
              <p class="text-small text-muted">Deserunt et ad culpa culpa dolore.</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img-tm-2/camera.png" alt="" height="150">
              <h3 class="h5">Camera</h3>
              <p class="text-small text-muted">Consectetur ex sunt duis minim quis dolor.</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img-tm-2/glasses.png" alt="" height="150">
              <h3 class="h5">Sunglasses</h3>
              <p class="text-small text-muted">Deserunt et ad culpa culpa dolore.</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img-tm-2/headphone.png" alt="" height="150">
              <h3 class="h5">Headphones</h3>
              <p class="text-small text-muted">Elit ad est labore irure qui.</p></a></div>
        </div>
      </div>
    </section>
    <!-- Subscribe section -->
    <section class="py-5">
      <div class="container py-4">
        <div class="row align-items-center">
          <div class="col-lg-6 position-relative py-4"><img class="subscribe-img" src="img-tm-2/subscribe-img-1.jpg" alt=""><img class="subscribe-img" src="img-tm-2/subscribe-img-2.jpg" alt=""></div>
          <div class="col-lg-6">
            <h2>Best money saving - Travel tips</h2>
            <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quidem facere aliquam, delectus, incidunt ipsum fugit deserunt ducimus quibusdam consequuntur quos numquam ipsa suscipit animi dolore. Est beatae inventore voluptas.</p>
            <form action="#">
              <div class="row">
                <div class="form-group col-lg-8">
                  <input class="form-control" type="email" name="email" placeholder="Enter your email address">
                </div>
                <div class="form-group col-lg-4">
                  <button class="btn btn-dark btn-block" type="submit">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Top categories section -->
    <section class="py-5 bg-light">
      <div class="container py-4">
        <header class="mb-5 text-center">
          <h2>Top categories</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </header>
        <div class="row text-center">
          <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#food-1"> </use>
              </svg>
              <h3 class="h5">Restaurants</h3>
              <p class="text-muted text-small">3 Destinations</p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#paper-bag-1"> </use>
              </svg>
              <h3 class="h5 mb-1">Markets</h3>
              <p class="text-muted text-small">7 Destinations</p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#special-price-1"> </use>
              </svg>
              <h3 class="h5 mb-1">Low budget</h3>
              <p class="text-muted text-small">2 Destinations</p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#movie-camera-1"> </use>
              </svg>
              <h3 class="h5 mb-1">Cinemas</h3>
              <p class="text-muted text-small">4 Destinations</p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#beach-1"> </use>
              </svg>
              <h3 class="h5 mb-1">Beaches</h3>
              <p class="text-muted text-small">5 Destinations</p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#camping-1"> </use>
              </svg>
              <h3 class="h5 mb-1">Camping</h3>
              <p class="text-muted text-small">6 Destinations</p></a></div>
        </div>
      </div>
    </section>
    <!-- Sponsors section-->
    <section class="py-5">
      <div class="container py-4">
        <header class="text-center mb-4">
          <h2>Our sponsors</h2>
        </header>
        <!-- Brands -->
        <div class="owl-carousel sponsors-slider"><a href="#"><img class="d-block mx-auto my-3 sponsor" src="img-tm-2/brand-1.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="img-tm-2/brand-2.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="img-tm-2/brand-3.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="img-tm-2/brand-4.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="img-tm-2/brand-5.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="img-tm-2/brand-6.svg" alt=""></a>
        </div>
      </div>
    </section>
    <footer class="bg-dark py-4">
      <div class="container">
        <div class="row py-2">
          <div class="col-lg-4 text-center text-lg-left mb-2 mb-lg-0">
            <p class="small text-muted text-uppercase mb-0">&copy; copyright 2020 - all rights reserved</p>
          </div>
          <div class="col-lg-4 text-center mb-2 mb-lg-0">
            <ul class="list-inline text-white small mb-0">
              <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-vimeo-v"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-4 text-center text-lg-right">
            <p class="small text-muted text-uppercase mb-0">Template designed by <a href="https://bootstraptemple.com/p/bootstrap-travel">Bootstrap Temple</a>. </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{ asset('vendor-tm-2/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor-tm-2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor-tm-2/owl.carousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js-tm-2/front.js') }}"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>