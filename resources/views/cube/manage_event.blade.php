@extends('cube.layouts.app')
@section('title',$pageTitle)
@section('pageName',$pageName)

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
        <!-- this row  contains main_book_cat, book and authorulty table -->
      <div class="row">
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Events</h3>
                <!-- <h3 class="card-title  btn btn-primary" id="addEvent" style="float:right">Add new Event</h3> -->
              </div>
              <div id="Event_success_message"></div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="">S/N</th>
                      <th>Event Title</th>
                      <th>Event details</th>
                      <th>Event day</th>
                      <th>Event time</th>
                     
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($events as $event)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$event->title}}</td>
                      <td>{{$event->detail}}</td>
                      <td>{{$event->day}}</td>
                      <td>{{$event->time}}</td>
                      
                      <td> 
                        <button value="{{$event->id}}" type="button" class="btn btn-info btn-sm edit_event"><i class="fa fa-pen" title="Edit"></i></button>
                         <!-- <button value="{{$event->id}}"  class="btn btn-danger btn-sm delete_event" title="delete"  ><i class="fa fa-trash fa-lg"></i></button> -->
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

<!-- modal for crud department, main_book_cat and authorulty -->
@include('cube.includes.modal_includes.Event')
<!-- Add department -->
