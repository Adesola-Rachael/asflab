$(document).ready(function(){

    $(document).on('click', '#addDept',function(e){
      e.preventDefault();
      
      $('#AddDeptModal').modal('show');
    });

    $(document).on('click', '.AddNewDept',function(){
      var Deptform={
        'dept':$('.dept').val(),
        
      }
      console.log(Deptform);
      
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url:"/dept",
        type:"POST",
        data:Deptform,
        dataType:"json",
        success:function(response){
          // console.log(response);
          
          if(response.status==200){
            $('#Dept_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            // window.location="dept_level";
          }else{
            console.log(response.message);
            $('#Dept_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
          $('#AddDeptModal').modal('hide');
        }
      });
    });

    // add new faculty
    $(document).on('click', '#addFac',function(e){
      e.preventDefault();
      
      $('#AddFacModal').modal('show');
    });

    $(document).on('click', '.AddNewFac',function(){
      var Facform={
        'faculty':$('.faculty').val(),
        
      }
      console.log(Facform);
      
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url:"/faculty",
        type:"POST",
        data:Facform,
        dataType:"json",
        success:function(response){
          // console.log(response);
        
          if(response.status==200){
            $('#Fac_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            // window.location="dept_level";
          }else{
            var message=JSON.stringify(response.message)
            console.log(response.message);
            $('#Fac_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
            '</div>'
            );

          }
          $('#AddFacModal').modal('hide');
        }
      });
    });
    // add new Level
    $(document).on('click', '#addLevel',function(e){
      e.preventDefault();
      
      $('#AddLevelModal').modal('show');
    });

    $(document).on('click', '.AddNewLevel',function(){
      var Levelform={
        'level':$('.level').val(),
        
      }
      console.log(Levelform);
      
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url:"/level",
        type:"POST",
        data:Levelform,
        dataType:"json",
        success:function(response){
          // console.log(response);
          $('#AddLevelModal').modal('hide');
          if(response.status==200){
            $('#Level_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_level";

          }else{
            console.log(response.message);
            $('#Level_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
          $('#AddLevelModal').modal('hide');
         
                   
        }
      });
    });
    
    
  });

  $(document).ready(function(){
    $(document).on('click', '.delete_dept', function(e){
    e.preventDefault();
      var delete_dept_id=$(this).val();
      $('#delete_dept_id').val(delete_dept_id);
      // console.log(delete_dept_id);
    $('#deleteDeptModal').modal('show');
    $(document).on('click', '.delete_dept_btn', function(e){
      e.preventDefault();
      var delete_dept_id=$('#delete_dept_id').val();
      // var message="Post Deleted Successfully";
          console.log(delete_dept_id);
          $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      $.ajax({
      type: "GET",
      url:"/delete-dept/"+delete_dept_id,
     
      dataType:"json",
      success:function(response){
        $('#deleteDeptModal').modal('hide');
          if(response.status==200){
            $('#Dept_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_level";

          }else{
            console.log(response.message);
            $('#Dept_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
        // fetch_data();
        // $('#success_message').addClass('alert alert-success');
        // $('#success_message').text(response.message);
        // $('#deleteDeptModal').modal('hide');
        // window.location.reload();
         
        // alert("data sved");
        
      }
       
    });
    });
     
  });

  // delete fac
  $(document).on('click', '.delete_fac', function(e){
    e.preventDefault();
      var delete_fac_id=$(this).val();
      $('#delete_fac_id').val(delete_dept_id);
      // console.log(delete_dept_id);
    $('#deleteFacModal').modal('show');
    $(document).on('click', '.delete_fac_btn', function(e){
      e.preventDefault();
      var delete_dept_id=$('#delete_fac_id').val();
      // var message="Post Deleted Successfully";
          console.log(delete_fac_id);
          $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      $.ajax({
      type: "GET",
      url:"/delete-faculty/"+delete_fac_id,
     
      dataType:"json",
      success:function(response){
        $('#deleteDeptModal').modal('hide');
          if(response.status==200){
            $('#Fac_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_level";

          }else{
            console.log(response.message);
            $('#Fac_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
        // fetch_data();
        // $('#success_message').addClass('alert alert-success');
        // $('#success_message').text(response.message);
        // $('#deleteDeptModal').modal('hide');
        // window.location.reload();
         
        // alert("data sved");
        
      }
       
    });
    });
     
  });

   // delete Level
   $(document).on('click', '.delete_level', function(e){
    e.preventDefault();
      var delete_level_id=$(this).val();
      $('#delete_level_id').val(delete_level_id);
      // console.log(delete_dept_id);
    $('#deleteLevelModal').modal('show');
    $(document).on('click', '.delete_level_btn', function(e){
      e.preventDefault();
      var delete_level_id=$('#delete_level_id').val();
      // var message="Post Deleted Successfully";
          console.log(delete_level_id);
          $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      $.ajax({
      type: "GET",
      url:"/delete-level/"+delete_level_id,
     
      dataType:"json",
      success:function(response){
        $('#deleteLevelModal').modal('hide');
          if(response.status==200){
            $('#Level_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_level";

          }else{
            console.log(response.message);
            $('#Level_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
        // fetch_data();
        // $('#success_message').addClass('alert alert-success');
        // $('#success_message').text(response.message);
        // $('#deleteDeptModal').modal('hide');
        // window.location.reload();
         
        // alert("data sved");
        
      }
       
    });
    });
     
  });

  });
// update dept
  $(document).ready(function(){
       // edit dept////////////////////////////////////////////
   $(document).on('click', '.edit_dept', function(e){
    e.preventDefault();
      var dept_id=$(this).val();
      console.log(dept_id);
    $('#EditDeptModal').modal('show');
      $.ajax({
      type: "GET",
      url:"/getdeptById/"+dept_id,
       dataType:"json",
      success:function(response){
        //  console.log(response);
        // alert("edit_dept").val(response.data.dept);
        $('#edit_dept').val(response.data.dept);
        // $('#edit_dept').val('bio');
        // $('#edit_content').val(response.data.content);
        $('#edit_dept_id').val(dept_id);
       
      }  
    });
  

// End of edit dept from database/////////////////////

//update dept and store into  database////////////////////////////
$(document).on('click', '.update_dept', function(e){
    e.preventDefault();
    var dept_id=$('#edit_dept_id').val();
     console.log("this data 111" +dept_id+ "mydata");
    // var message="Post Updated Successfully";
    var data= {
      'dept' : $('#edit_dept').val(),
    }
    // console.log(data)
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "PUT",
      url:"/updateDept/"+dept_id,
      data:data,
      dataType:"json",
      success:function(response){
        $('#EditDeptModal').modal('hide');
          if(response.status==200){
            $('#Dept_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_level";

          }else if(response.status==400){
            var message=JSON.stringify(response.message)
            console.log(response.message);
            $('#Dept_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +message+
            '</div>'
            );

          }
      }
       
      
    });
  });
    
  });


  // edit and update faculty
   // edit fac////////////////////////////////////////////
   $(document).on('click', '.edit_fac', function(e){
    e.preventDefault();
      var faculty_id=$(this).val();
      // console.log(faculty_id);
    $('#EditFacModal').modal('show');
      $.ajax({
      type: "GET",
      url:"/getfacultyById/"+faculty_id,
       dataType:"json",
      success:function(response){
         console.log(response);
        // alert("edit_dept").val(response.data.dept);
        $('#edit_fac').val(response.data.faculty);
        // $('#edit_dept').val('bio');
        // $('#edit_content').val(response.data.content);
        $('#edit_fac_id').val(faculty_id);
       
      }  
    });
  

// End of edit faculty from database/////////////////////

//update fac and store into  database////////////////////////////
  $(document).on('click', '.update_fac', function(e){
    e.preventDefault();
    var faculty_id=$('#edit_fac_id').val();
    //  console.log("this fac id :"+faculty_id);
    // var message="Post Updated Successfully";
    var data= {
      'faculty' : $('#edit_fac').val(),
    }
    // console.log(data)
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "PUT",
      url:"/updateFac/"+faculty_id,
      data:data,
      dataType:"json",
      success:function(response){
        $('#EditFacModal').modal('hide');
          if(response.status==200){
            $('#Fac_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_level";

          }else{
            console.log(response.message);
            $('#Fac_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
        } 
      });
    });  
  });

  // Edit and update fac
  // End of edit faculty from database/////////////////////

  // edit fac////////////////////////////////////////////
  $(document).on('click', '.edit_level', function(e){
    e.preventDefault();
      var level_id=$(this).val();
      console.log(level_id);
    $('#EditLevelModal').modal('show');
      $.ajax({
      type: "GET",
      url:"/getlevelById/"+level_id,
       dataType:"json",
      success:function(response){
         console.log(response);
         console.log("this level id:"+level_id);
        // alert("edit_dept").val(response.data.dept);
        $('#edit_level').val(response.data.level);
        // $('#edit_dept').val('bio');
        // $('#edit_content').val(response.data.content);
        $('#edit_level_id').val(level_id);
       
      }  
    });
  });
  

// End of edit faculty from database/////////////////////

//update level and store into  database////////////////////////////
  $(document).on('click', '.update_level', function(e){
    e.preventDefault();
    var level_id=$('#edit_level_id').val();
      console.log(level_id);
    // var message="Post Updated Successfully";
    var data= {
      'level' : $('#edit_level').val(),
    }
    // console.log(data)
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "PUT",
      url:"/updateLevel/"+level_id,
      data:data,
      dataType:"json",
      success:function(response){
        $('#EditLevelModal').modal('hide');
          if(response.status==200){
            $('#Level_success_message').html(
            '<div class="alert alert-success alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
            '</h5></div>'
            );
            
            // window.location="dept_level";

          }else{
            console.log(response.message);
            $('#Level_success_message').html(
            '<div class="alert alert-danger alert-dismissible">'+
              '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
              '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
            '</div>'
            );

          }
        } 
      });
    });  
  });