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
<!-- end add level -->