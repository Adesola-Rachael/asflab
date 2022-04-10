<div class="modal fade" id="AddGalleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Gallery</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
            <!-- input title -->
            <form id="gallery">
                <div class="form-group mb-3">
                    <label for="title">Gallery Title</label>
                    <input type="text" name="title" id="title" class="title form-control">
                </div>  
                 
                <div class="form-group mb-3">
                    <label for="image">Image<small> (File must be jpg,jpeg,svg,gif)</small></label>
                    <input type="file" name="image" id="image" class="image form-control">
                </div>
                
            </form>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary AddNewGallery">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- end add gallery -->
<!-- edit level -->
<div class="modal fade" id="EditGalleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Gallery</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
        <!-- input title --> 
        <form id="edit_gallery">        
            <input type="hidden" id="gallery_id">

            <div class="form-group mb-3">
                <label for="title">Gallery Title</label>
                <input type="text" name="title" id="title" class="title form-control">
            </div>  
                    
            <div class="form-group mb-3">
                <label for="image">Image<small> (File must be jpg,jpeg,svg,gif)</small></label>
                <input type="file" name="image" id="image" class="image form-control">
            </div>
            <input type="text" name="old_image" id="old_image" class="old_image">
         
       
        </form>

                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_gallery">Save Change</button>
      </div>
    </div>
  </div>
</div>
<!-- end edit level -->
<!-- Modal for confirm and delete gallery -->
<div class="modal fade" id="deletegalleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_gallery_id">
            <h4> Are You Sure you Want To Delete This gallery</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_gallery_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confim nad delete gallery -->

<!-- Modal for  view gallery -->
<div class="modal fade" id="ViewgalleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View gallery <p id="title"></p></h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body" id="display">
            <!-- input title -->
            
               
      </div>
       
    </div>
  </div>
</div>
<!-- end view gallery -->





