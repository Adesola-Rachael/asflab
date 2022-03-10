<div class="modal fade" id="AddBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Department</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
            <!-- input title -->
            <form id="book">
                <div class="form-group mb-3">
                    <label for="book">Book Title</label>
                    <input type="text" name="title" id="title" class="title form-control">
                </div>  
                <div class="form-group mb-3">
                    <label for="book">Book Description</label>
                    <textarea  name="desc" id="desc" class="desc form-control" row='5'></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="book">Book Image<small> (File must be jpg,jpeg,svg,gif)</small></label>
                    <input type="file" name="image" id="image" class="image form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="bookFile">Book File <small>(File must be pdf,docx,csv,xls)</small></label>
                    <input type="file" name="bookfile" id="bookfile" class="bookfile form-control">
                </div>
                <label for="author">Author</label>
                <select class="form-control select2 author" id ="author" name="author" style="width: 100%;">
                    <option selected="selected">Name of Author</option>
                    @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </select>
                <!-- select main book cat -->
                <label for="main cat">Main Category</label>
                <select class="form-control select2 main_cat" name="main_cat" id="main_cat" style="width: 100%;">
                    <option selected="selected">Select Main Category</option>
                    @foreach($main_book_cats as  $main_book_cat)
                    <option value="{{$main_book_cat->id}}">{{$main_book_cat->title}}</option>
                    @endforeach
                </select>
                <!-- select sub book cat -->
                <label for="">Sub category</label>
                <select class="form-control select2 sub_cat" id="sub_cat" name="sub_cat" style="width: 100%;">
                    <option selected="selected">Select Sub Category</option>
                    @foreach($sub_book_cats as $sub_book_cat)
                    <option value="{{$sub_book_cat->id}}">{{$sub_book_cat->title}}</option>
                    @endforeach
                </select> 
            </form>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary AddNewbook">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- end add Book -->
<!-- edit level -->
<div class="modal fade" id="EditBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Book</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
        <!-- input title --> 
        <form id="edit_book">        
        <input type="hidden" id="edit_book_id">

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="edit_title" id="edit_title" class="edit_title form-control">
        </div>  
        <div class="form-group mb-3">
            <label for="desc">Description</label>
             <input type="text" name="edit_desc" id="edit_desc" class="edit_desc form-control">
        </div> 
        <!-- <div class="form-group mb-3">
            <label for="image">Image</label> -->
            <!-- <input type="hidden" name="edit_image" value="" id="edit_image" class="edit_image form-control"> -->
             <!-- <input type="file" name="edit_image" id="edit_image" class="edit_image form-control"> -->
        <!-- </div>  -->
        <label for="author">Author</label>
                <select class="form-control select2 edit_author" id ="edit_author" name="edit_author" style="width: hor->name100%;">
                    <option selected="selected">Name of Author</option>
                    @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </select>
                <!-- select main book cat -->
                <label for="main cat">Main Category</label>
                <select class="form-control select2 edit_main_cat" name="edit_main_cat" id="edit_main_cat" style="width: 100%;">
                    <option selected="selected">Select Main Category</option>
                     @foreach($main_book_cats as  $main_book_cat)
                    <option value="{{$main_book_cat->id}}">{{$main_book_cat->main_book_cat}}</option>
                    @endforeach
                </select>
                <!-- select sub book cat -->
                <label for="">Sub category</label>
                <select class="form-control select2 edit_sub_cat" id="edit_sub_cat" name="edit_sub_cat" style="width: 100%;">
                    <option selected="selected">Select Sub Category</option>
                    @foreach($sub_book_cats as $sub_book_cat)
                    <option value="{{$sub_book_cat->id}}">{{$sub_book_cat->sub_book_cat}}</option>
                    @endforeach
                </select> 
            </form>

                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_book">Save Change</button>
      </div>
    </div>
  </div>
</div>
<!-- end edit level -->
<!-- Modal for confirm and delete Book -->
<div class="modal fade" id="deleteBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_book_id">
            <h4> Are You Sure you Want To Delete This Book</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_book_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confim nad delete book -->

<!-- Modal for  view book -->
<div class="modal fade" id="ViewBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Book <p id="title"></p></h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
            <!-- input title -->
            <div class="row">
              <div class="col-6">
              <input type="text" id="book_id">
                <div class="form-group mb-3">
                    <label for="book">Book Title</label>
                    <input type="text" value="ghhh" name="title" id="title" class="title form-control">
                </div>  
                <div class="form-group mb-3">
                    <label for="book">Book Description</label>
                    <p  name="desc"  id="desc" class="desc form-control" row='5'></p>
                </div>
                <div class="form-group mb-3">
                    <label for="book">Book Image<small> </small></label>
                    <p name="image" id="image" class="image"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="bookFile">Book File <small></small></label>
                    <p name="bookfile" id="bookfile" class="bookfile"></p>
                </div>
                <label for="author">Author</label>
                <p class="author" id ="author" name="author" ></p>
                    
                
                <!--  main book cat -->
                <label for="main cat">Main Category</label>
                <p class=" main_cat" name="main_cat" id="main_cat"></p>
                     
                <!-- select sub book cat -->
                <label for="">Sub category</label>
                <p class="sub_cat" id="sub_cat" name="sub_cat"></p>
              </div>
              <div class="col-6">
                <h5>Picture and file</h5>
              </div>
            </div>
               
      </div>
       
    </div>
  </div>
</div>
<!-- end view Book -->





