   <!-- <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>@yield('pageName')</h1>
                        </div>
                    </div> -->
                <!-- </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{url('cube/dashboard')}}">Dashboard</a></li> -->
                            <!--     <li><a href="#">UI Elements</a></li> -->
                                <!-- <li class="active">@yield('pageName')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="clearfix"></div> -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('pageName')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('pageName')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>