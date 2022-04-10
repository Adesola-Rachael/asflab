<section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Events  </h3>
          <p>On this part, you can say more about why your own solution or business stategy should be chosen.</p>
        </header>

        <div class="row row-eq-height justify-content-center">
        @foreach($events as $event)
          <div class="col-lg-3 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-calendar4-week"></i>
              <div class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <p>{{$event->day}},  {{$event->time}}</p>
                <p class="card-text">{{$event->detail}}.</p>
               </div>
            </div>
          </div>
          @endforeach
        </div>

        <!-- <div class="row counters" data-aos="fade-up" data-aos-delay="100"> -->

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div> -->

        <!-- </div> -->

      </div>
    </section>