<!-- Authors Modal -->
<div class="modal fade" id="AddQuoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        
    
      </div>
      <form id="quote">
      <div class="modal-body">
        <!-- input title -->
        
        <div class="form-group mb-3">
            <label for="quote">Quote/Verse</label>
            <textarea name="verse" id="verse" col="5" class="verse form-control"></textarea>

            <!-- <input type="text" name="quote" id="quote" class="quote form-control"> -->
        </div> 

        <div class="form-group mb-3">
            <label for="name">Scripture/Quote Author</label>
            <input type="text" name="scripture" id="scripture" class="scripture form-control">
        </div>
        
        <div class="form-group mb-3">
            <label for="diplay_date">Display Date</label>
            <input type="date" name="date_display" id="date_display" class="date_display form-control">

          </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewQuote">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add author -->

<!-- Edit department Modal -->
<div class="modal fade" id="EditQuoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Quote</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <form id="edit_quote">
        <div class="modal-body">
          <!-- input title -->
          <input type="hidden" id="edit_quote_id">

          <div class="form-group mb-3">
            <label for="quote">Quote/Verse</label>
            <textarea name="verse" id="verse" col="5" class="verse form-control"></textarea>

            <!-- <input type="text" name="quote" id="quote" class="quote form-control"> -->
          </div> 

          <div class="form-group mb-3">
              <label for="name">Scripture/Quote Author</label>
              <input type="text" name="scripture" id="scripture" class="scripture form-control">
          </div>
        
          <div class="form-group mb-3">
            <label for="diplay_date">Display Date</label>
            <input type="date" name="date_display" id="date_display" class="date_display form-control">

          </div>
                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_quote">Save Change</button>
        </div>
      </form>
    </div>
    
  </div>
</div>
<!-- end edit auhtor -->
<!-- Modal for confirm and delete author -->
<div class="modal fade" id="deleteQuoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_quote_id">
            <h4> Are You Sure you Want To Delete This Quote</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_quote_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confirm nad delete author -->



