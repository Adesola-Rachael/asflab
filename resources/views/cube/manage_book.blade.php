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
         
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Books</h3>
                  
                <h3 class="card-title  btn btn-primary " id="addBook" style="float:right">Add new e-Book</h3>
              </div>
              <div id="book_success_message"></div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                 <!-- table for  department -->
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Main Book File</th>
                       <th>Author</th>
                       <th>Dept</th>
                       <th>Level</th>
                      <th>main Category</th>
                      <th>Sub Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($books as $book)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$book->title}}</td>
                      <td>{{$book->description}}</td>

                      <td>{{$book->image}}
                       <img src="{{ asset('storage/app/uploads/images/books/'.$book->image)}}">                     </td>

                      <td>{{$book->bookfile}}</td>
                      <td>{{$book->author->name}}</td>
                      <td>{{$book->dept_id}}</td>
                      <td>{{$book->level_id}}</td>
                      <td>{{$book->main_book_cat_id}}</td>
                      <td>{{$book->sub_book_cat_id}}</td>
                      <td> 
                        <button type="button" value="{{$book->id}}" class="btn btn-info btn-sm  view_book"><i class="fa fa-eye" title="View"></i></button>
                         <button type="button" value="{{$book->id}}" class="btn btn-info btn-sm  edit_book"><i class="fa fa-pen" title="Edit"></i></button>
                         <button value="{{$book->id}}"  class="btn btn-danger btn-sm delete_book" title="Delete"  ><i class="fa fa-trash fa-lg"></i></button>

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
          <!--col for main_book_cat and authorulty  -->
          
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
@include('cube.includes.modal_includes.book')
<!-- Add department -->
