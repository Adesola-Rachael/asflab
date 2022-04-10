<section id="verse" class="" style="background:url('assets/img/quote.jpg');">
  <div class="quote">
<div class="quote_background parallax-window" data-parallax="scroll" data-speed="0.8"></div>
<div class="container">
<div class="row">
<div class="col">
<div class="section_title_container">
<div class="section_image"><img src="assets/img/church_5.png" alt=""></div>
<div class="section_title"><h2>Quote of the day</h2></div>
<!-- <div class="section_subtitle">God loves us all</div> -->
</div>
</div>
</div>
<div class="row quote_row">
<div class="col text-center">
<div class="quote_char"><img src="assets/img/quote_char.png" alt=""></div>
@foreach($quotes as $quote)
<div class="quote_text">{{$quote->verse}}</div>
<div class="quote_source">{{$quote->scripture}}</div>
@endforeach
</div>
</div>
</div>
</div>
</section>

      <!-- <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Daily Verse</h3>
         <p>Daily Passages of the scripture to help your daily gr .</p> -->
        <!-- </header>

        <div class="row justify-content-center"> -->

          <!-- <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title">Today's verse</h4>
              <p class="" style="text-align:center;">Matthew 10: 12</p>
              <p class="description"> can design flier and logos for your businesses We can design flier and logos for your businesses </p>
            </div>
          </div> -->
          <!-- <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Psalm & Proverbss </a></h4>
              <p class="">Matthew 10: 12</p>
              <p class="description">We degin logo We can design flier and logos for your businesses</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">New Testament</a></h4>
              <p class="">Matthew 10: 12</p>
              <p class="description">We can design flier and logos for your businessesWe can design flier and logos for your businesses</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Old Testament</a></h4>
              <p class="">Matthew 10: 12</p>
              <p class="description">You can decide to removet the services section if you want</p>
            </div>
          </div> -->

         

        <!-- </div>

      </div>-->
    </section> 