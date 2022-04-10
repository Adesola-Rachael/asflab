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
                <h3 class="card-title">All Quotes</h3>
                <h3 class="card-title  btn btn-primary" id="addquote" style="float:right">Add new Quote</h3>
              </div>
              <div id="Quote_success_message"></div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Quote Verse</th>
                      <th>Quote book</th>
                      <th>Quote Display Date</th>
                      <th>Date Created</th>
                      <th>Date Updated</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($quotes as $quote)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$quote->verse}}</td>
                      <td>{{$quote->scripture}}</td>
                      <td>{{$quote->date_display}}</td>
                      <td>{{$quote->created_at}}</td>
                      <td>{{$quote->updated_at}}</td>
                      
                      <td> 
                        <button value="{{$quote->id}}" type="button" class="btn btn-info btn-sm edit_quote"><i class="fa fa-pen" title="Edit"></i></button>
                         <button value="{{$quote->id}}"  class="btn btn-danger btn-sm delete_quote" title="delete"  ><i class="fa fa-trash fa-lg"></i></button>
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
@include('cube.includes.modal_includes.event')
<!-- Add department -->
