<!-- modal for main book category -->
<!-- Authors Modal -->
<div class="modal fade" id="AddMainCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Main Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        
    
      </div>
      <form id="main_cat">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="main_cat">Category Title</label>
            <input type="text" name="title" id="title" class="title form-control">
        </div> 
        
        <div class="form-group mb-3">
            <label for="about">Category Description</label>
            <textarea name="desc" id="desc" class="desc form-control"></textarea>
         </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddMainCatAuthor">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!-- Edit department Modal -->
<div class="modal fade" id="EditMainCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Main Category</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_main_cat">
        <div class="modal-body">
          <!-- input title -->
          <input type="hidden" id="edit_main_cat_id">
          <div class="form-group mb-3">
              <label for="title">Catgory Title</label>
              <input type="text" name="title" id="edit_title" class="title  form-control">
          </div> 
          
          <div class="form-group mb-3">
              <label for="about">Catgory Description</label>
              <textarea name="desc" id="edit_desc" class="desc form-control"></textarea>
          </div>  
                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_main_cat">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<!-- end edit auhtor -->
<!-- Modal for confirm and delete author -->
<div class="modal fade" id="deleteMainCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_main_cat_id">
            <h4> Are You Sure you Want To Delete This Category</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_main_cat_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confirm nad delete author -->


<!-- modal for sub book category -->
<!-- Authors Modal -->
<div class="modal fade" id="AddSubCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        
    
      </div>
      <form id="sub_cat">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="main_cat">Category Title</label>
            <input type="text" name="title" id="title" class="title form-control">
        </div> 
        
     
          <!-- select main book cat -->
          <label for="main cat">Main Category</label>
          <select class="form-control select2 main_cat" name="main_cat" id="main_cat" style="width: 100%;">
              <option selected="selected">Select Main Category</option>
                @foreach($main_book_cats as  $main_book_cat)
              <option value="{{$main_book_cat->id}}">{{$main_book_cat->title}}</option>
              @endforeach
          </select> 
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddSubCat">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!-- Edit department Modal -->
<div class="modal fade" id="EditSubCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Sub Category</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_sub_cat">
        <div class="modal-body">
          <!-- input title -->
          <input type="hidden" id="edit_sub_cat_id">
          <div class="form-group mb-3">
              <label for="title">Catgory Title</label>
              <input type="text" name="title" id="edit_title" class="title  form-control">
          </div> 

           <!-- select main book cat -->
           <label for="main cat">Main Category</label>
          <select class="form-control select2 main_cat" name="main_cat" id="edit_main_cat" style="width: 100%;">
              <option selected="selected">Select Main Category</option>
                @foreach($main_book_cats as  $main_book_cat)
              <option value="{{$main_book_cat->id}}">{{$main_book_cat->title}}</option>
              @endforeach
          </select> 
          
       
                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_sub_cat">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<!-- end edit auhtor -->
<!-- Modal for confirm and delete author -->
<div class="modal fade" id="deleteSubCatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_sub_cat_id">
            <h4> Are You Sure you Want To Delete This Category</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_sub_cat_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confirm nad delete author -->
