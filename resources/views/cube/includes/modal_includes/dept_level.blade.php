<div class="modal fade" id="AddDeptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <div class="form-group mb-3">
            <label for="dept">Department</label>
            <input type="text" name="dept" id="dept" class="dept form-control">
        </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewDept">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- end add department -->

<!-- Add faculty -->
<div class="modal fade" id="AddFacModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Faculty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>


      </div>
      <div class="modal-body">
        <!-- input title -->
        <div class="form-group mb-3">
            <label for="faculty">Faculty</label>
            <input type="text" name="faculty" id="faculty" class="faculty form-control">
        </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewFac">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- end add faculty -->

<!-- Add level -->
<div class="modal fade" id="AddLevelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        
      
      </div>
      <div class="modal-body">
        <!-- input title -->
        <div class="form-group mb-3">
            <label for="level">Level</label>
            <input type="text" name="level" id="level" class="level form-control">
        </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary AddNewLevel">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- end add level -->

<!-- Modal for confirm and delete dept -->
<div class="modal fade" id="deleteDeptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_dept_id">
            <h4> Are You Sure you Want To Delete This Department</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_dept_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confim nad delete dept -->


<!-- Modal for confirm and delete faculty  -->
<div class="modal fade" id="deleteFacModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Faculty</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_fac_id">
            <h4> Are You Sure you Want To Delete This Department</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_fac_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confim nad delete Faculty -->


<!-- Modal for confirm and delete level -->
<div class="modal fade" id="deleteLevelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- <ul id="updateFrom_errlist"></ul> -->
            <input type="hidden" id="delete_level_id">
            <h4> Are You Sure you Want To Delete This Level</h4> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary delete_level_btn">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- End of modal for confirm nad delete level -->



<!-- Edit department Modal -->
<div class="modal fade" id="EditDeptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Department</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
        <!-- input title -->
        <div class="form-group mb-3">
            <label for="dept">Department</label>
            <input type="hidden" id="edit_dept_id">
            <input type="text" name="dept" id="edit_dept" class="dept form-control">
        </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_dept">Save Change</button>
      </div>
    </div>
  </div>
</div>
<!-- end edit department -->


<!-- edit fac -->
<!-- Add department Modal -->
<div class="modal fade" id="EditFacModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Faculty</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
        <!-- input title -->
        <div class="form-group mb-3">
            <label for="fac">Faculty</label>
            <input type="hidden" id="edit_fac_id">
            <input type="text" name="faculty" id="edit_fac" class="faculty form-control">
        </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_fac">Save Change</button>
      </div>
    </div>
  </div>
</div>
<!-- end edit faculty -->

<!-- edit level -->
 <div class="modal fade" id="EditLevelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Faculty</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
 
      </div>
      <div class="modal-body">
        <!-- input title -->
        <div class="form-group mb-3">
            <label for="level">Level</label>
            <input type="hidden" id="edit_level_id">
            <input type="text" name="level" id="edit_level" class="level form-control">
        </div>  
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_level">Save Change</button>
      </div>
    </div>
  </div>
</div>
<!-- end edit level -->

