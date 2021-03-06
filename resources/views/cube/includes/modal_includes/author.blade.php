<!-- Authors Modal -->
<div class="modal fade" id="AddAuthorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Author</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        
    
      </div>
      <form id="author">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="name">Author,s Name</label>
            <input type="text" name="name" id="name" class="name form-control">
        </div> 
        
        <div class="form-group mb-3">
            <label for="about">About Author</label>
            <textarea name="about" id="about" class="about form-control"></textarea>
         </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewAuthor">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!-- Edit department Modal -->
<div class="modal fade" id="EditAuthorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Author</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_author">
        <div class="modal-body">
          <!-- input title -->
          <input type="hidden" id="edit_author_id">
          <div class="form-group mb-3">
              <label for="name">Author's Name</label>
              <input type="text" name="name" id="edit_name" class="name  form-control">
          </div> 
          
          <div class="form-group mb-3">
              <label for="about">About Author</label>
              <textarea name="about" id="edit_about" class="about form-control"></textarea>
          </div>  
                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_author">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<!-- end edit auhtor -->
<!-- Modal for confirm and delete author -->
<div class="modal fade" id="deleteAuthorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Author</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_author_id">
            <h4> Are You Sure you Want To Delete This Author</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_author_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confirm nad delete author -->



