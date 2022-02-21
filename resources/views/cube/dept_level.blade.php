@extends('cube.layouts.app')
@section('title',$pageTitle)

  <!-- navbar  -->
  @section('top_nav')
    @include('cube.includes.top_nav')
  @endsection
  
    @section('mini_top_nav')
    @include('cube.includes.mini_top_nav')
    @endsection

    @section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- this row  contains level, dept and faculty table -->

        <div class="row">
         
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Of Department</h3>
                <h3 class="card-title  btn btn-primary " id="addDept" style="float:right">Add new</h3>
              </div>
              <div id="Dept_success_message"></div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                 <!-- table for  department -->
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Department</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($depts as $dept)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$dept->dept}}</td>
                     
                      <td> 
                        <button type="button" value="{{$dept->id}}" class="btn btn-info btn-sm  edit_dept"><i class="fa fa-pen" title="Edit"></i></button>
                         <button value="{{$dept->id}}"  class="btn btn-danger btn-sm delete_dept" title="delete"  ><i class="fa fa-trash fa-lg"></i></button>
                      </td>
                
                    </tr>
                    @endforeach
                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--col for level and faculty  -->
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Of faculty</h3>
                <h3 class="card-title  btn btn-primary" id="addFac" style="float:right">Add new faculty</h3>
              </div>
              <div id="Fac_success_message"></div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Faculty</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($faculty as $fac)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$fac->faculty}}</td>
                      <td> 
                        <button value="{{$fac->id}}" type="button" class="btn btn-info btn-sm edit_fac"><i class="fa fa-pen" title="Edit"></i></button>
                         <button value="{{$fac->id}}"  class="btn btn-danger btn-sm delete_fac" title="delete"  ><i class="fa fa-trash fa-lg"></i></button>
                      </td>
                
                    </tr>
                    @endforeach
                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- table for level -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All levels</h3>
                <h3 class="card-title  btn btn-primary" id="addLevel" style="float:right">Add new Level</h3>
              </div>                
              <div id="Level_success_message" ></div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($levels as $level)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$level->level}}</td>
                      <td> 
                      <button value="{{$level->id}}" type="button" class="btn btn-info btn-sm edit_level"><i class="fa fa-pen" title="Edit"></i></button>
                          <button value="{{$level->id}}"  class="btn btn-danger btn-sm delete_level" title="delete"  ><i class="fa fa-trash fa-lg"></i></button>
                      </td>
                
                    </tr>
                    @endforeach
                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
         
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->

@endsection

<!-- modal for crud department, level and faculty -->
@include('cube.includes.modal_includes.dept_level')
<!-- Add department -->
