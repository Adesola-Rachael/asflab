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
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Authors</h3>
                <h3 class="card-title  btn btn-primary" id="addauthor" style="float:right">Add new Author</h3>
              </div>
              <div id="Author_success_message"></div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>About</th>
                      <th>No of Book</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($authors as $author)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$author->name}}</td>
                      <td>{{$author->about}}</td>
                      <td>3</td>
                      <td> 
                        <button value="{{$author->id}}" type="button" class="btn btn-info btn-sm edit_author"><i class="fa fa-pen" title="Edit"></i></button>
                         <button value="{{$author->id}}"  class="btn btn-danger btn-sm delete_author" title="delete"  ><i class="fa fa-trash fa-lg"></i></button>
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
            <!-- column for main category table -->
          <div class="col-3">
            <!-- table for main_book_cat -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All main_book_cats</h3>
                <h3 class="card-title  btn btn-primary" id="add_main_book_cat" style="float:right">Add new main_book_cat</h3>
              </div>                
              <div id="main_cat_success_message" ></div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>main_book_cat</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($main_book_cats as  $main_book_cat)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                      <td>{{$main_book_cat->title}}</td>
                      <td>{{$main_book_cat->description}}</td>
                      <td> 
                      <button value="{{$main_book_cat->id}}" type="button" class="btn btn-info btn-sm edit_main_book_cat"><i class="fa fa-pen" title="Edit"></i></button>
                          <button value="{{$main_book_cat->id}}"  class="btn btn-danger btn-sm delete_main_book_cat" title="delete"  ><i class="fa fa-trash fa-lg"></i></button>
                      </td>
                
                    </tr>
                    @endforeach
                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
            <!-- column for sub category table -->
          <div class="col-3">
            <!-- table for main_book_cat -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Sub Book Category</h3>
                <h3 class="card-title  btn btn-primary" id="add_sub_book_cat" style="float:right">Add New Sub Book Cat</h3>
              </div>                
              <div id="sub_cat_success_message" ></div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Sub Book Cat</th>
                      <th>main_book_category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sub_book_cats as  $sub_book_cat)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                      <td>{{$sub_book_cat->title}}</td>
                      <td>{{$sub_book_cat->main_book_cat_id}}</td>
                      <td> 
                      <button value="{{$sub_book_cat->id}}" type="button" class="btn btn-info btn-sm edit_sub_book_cat"><i class="fa fa-pen" title="Edit"></i></button>
                          <button value="{{$sub_book_cat->id}}"  class="btn btn-danger btn-sm delete_sub_book_cat" title="delete"  ><i class="fa fa-trash fa-lg"></i></button>
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

<!-- modal for crud department, main_book_cat and authorulty -->
@include('cube.includes.modal_includes.author')
@include('cube.includes.modal_includes.bookCat')
<!-- Add department -->
