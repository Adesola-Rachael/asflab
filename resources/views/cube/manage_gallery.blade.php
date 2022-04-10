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
        <!-- this row  contains main_gallery_cat, gallery and authorulty table -->

        <div class="row">
         
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Galleries</h3>
                  
                <h3 class="card-title  btn btn-primary " id="addGallery" style="float:right">Add New Image</h3>
              </div>
              <div id="Gallery_success_message"></div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                 <!-- table for  department -->
                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th style="width: 10px">S/N</th>
                      <th>Title</th>
                      <th>Image</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($gallerys as $gallery)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$gallery->title}}</td>
 
                      
                      <td>{{$gallery->image}}</td>
                      <td> 
                        <button type="button" value="{{$gallery->id}}" class="btn btn-info btn-sm  view_gallery"><i class="fa fa-eye" title="View"></i></button>
                         <button type="button" value="{{$gallery->id}}" class="btn btn-info btn-sm  edit_gallery"><i class="fa fa-pen" title="Edit"></i></button>
                         <button value="{{$gallery->id}}"  class="btn btn-danger btn-sm delete_gallery" title="Delete"  ><i class="fa fa-trash fa-lg"></i></button>

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
          <!--col for main_gallery_cat and authorulty  -->
          
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

<!-- modal for crud department, main_gallery_cat and authorulty -->
@include('cube.includes.modal_includes.gallery')
<!-- Add department -->
