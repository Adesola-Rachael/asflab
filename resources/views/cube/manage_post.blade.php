@extends('cube.layouts.app')
  
@section('content')
  <!-- New Slides Section -->
  <div class="clearfix" style="margin-bottom:10px;"></div>
 
<div class="content" style="margin:10px; padding:10px;"">
    <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
        <div class="success_message" id="success_message"></div>
          <div class="card-header">
            <h4>All Post
            <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddPostModal">Add New Post</button>
             </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-responsive">
              <thead class="">
                <tr>
                  <th scope="col">S/N</th>
                  <th scope="col">Title</th>
                  <th scope="col">Content</th>
                  <th scope="col">Date Created</th>
                  <th scope="col">Date Updated</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


<!-- Add post -->
<div class="modal fade" id="AddPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- input title -->
        <div class="form-group mb-3">
             <label for="title">Title</label>
             <input type="text" name="title" id="title" class="title form-control">
           </div>
           <!-- input content -->
           <div class="form-group mb-3">
             <label for="content">Content</label>
             <textarea rows="5"  class="content form-control" name="content" id="content"> </textarea> 
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddPost">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- end add post -->

<!-- Modal for edit and update post -->
<div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <ul id="updateFrom_errlist"></ul>
            <input type="hidden" id="edit_post_id">
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title" id="edit_title" placeholder="Title" value=" " required="required">
                <!-- bebefit details -->
            </div>
            <div class="form-group">
            <label>Content</label>
                <input class="form-control" type="text" name="content" id="edit_content" placeholder="Content" value=" " required="required">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_post">Update Post</button>
      </div>
    </div>
  </div>
</div>

<!-- End of modal for edit and update post -->



<!-- Modal for confirm and delete post -->
<div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <ul id="updateFrom_errlist"></ul>
            <input type="hidden" id="delete_post_id">
            <h4> Are You Sure you Want To Delete This Post</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_post_btn">Delete  Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confim nad delete post -->
                <!-- article Category -->
                <!-- End Article Category -->
                <!-- Show articles -->
                 
    
                <!-- End Article Category -->
</div>

</div>
             <!-- column(for article category) -->
             
              <!--  //column(for article category) -->
                       
 
        
@endsection