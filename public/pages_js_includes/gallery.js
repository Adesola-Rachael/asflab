$(document).ready(function(){

    $(document).on('click', '#addGallery',function(e){
      e.preventDefault();
      
      $('#AddGalleryModal').modal('show');
    });

    $(document).on('click', '.AddNewGallery',function(){
        //   var galleryform={
        //     'gallery':$('.gallery').val(),
            
        //   }
        // var gallery=$("#gallery").serialize();
        var gallery = new FormData($("#gallery")[0]);
        console.log(gallery);
        console.log("clicked");
        
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        $.ajax({
            url:"/gallery",
            type:"POST",
            data:gallery,
            dataType:"json",
            contentType: false, 
            processData: false, 
            success:function(response){
            // console.log(response);
            
            if(response.status==200){
                $('#AddGalleryModal').modal('hide');
                $('#Gallery_success_message').html(
                '<div class="alert alert-success alert-dismissible">'+
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
                '</h5></div>'
                );
                // window.location="gallery_gallery";
            }else{
                console.log(response.message);
                $('#Gallery_success_message').html(
                '<div class="alert alert-danger alert-dismissible">'+
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
                '</div>'
                );

            }
            }
        });
    });

    // script for edit gallery

    $(document).on('click', '.edit_gallery', function(e){
      e.preventDefault();
        var gallery_id=$(this).val();
        console.log(gallery_id);
      $('#EditGalleryModal').modal('show');
        $.ajax({
        type: "GET",
        url:"/getGalleryById/"+gallery_id,
         dataType:"json",
        success:function(response){
            console.log(response);
          // alert("edit_dept").val(response.data.dept);
          $('.title').val(response.data.title);
          $('.old_image').val(response.data.image);
          //  $('#edit_image').val(response.data.image);
         
         
          $('#gallery_id').val(gallery_id);
         
        }  
      });
    
  
  // End of edit dept from database/////////////////////
      // edit gallery(NOT YET WORKING)

  
  //update dept and store into  database////////////////////////////
  $(document).on('click', '.update_gallery', function(e){
    e.preventDefault();
    var gallery_id=$('#gallery_id').val();
     console.log( gallery_id );
    // var message="Post Updated Successfully";
     var edit_gallery = new FormData($("#edit_gallery")[0]);
    // var edit_gallery =$('#edit_title').val();
    // var edit_gallery =$()
        // console.log(edit_gallery);
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
        type: "PUT",
        url:"/updateGallery/"+gallery_id,
        data:edit_gallery,
        contentType: false, 
        processData: false, 
        dataType:"json",
        success:function(response){
            $('#EditGalleryModal').modal('hide');
            if(response.status==200){
                $('#Gallery_success_message').html(
                '<div class="alert alert-success alert-dismissible">'+
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
                '</h5></div>'
                );
                
                // window.location="gallery_gallery";

            }else{
                console.log(response.message);
                $('#Gallery_success_message').html(
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


//  delete gallery 
$(document).on('click', '.delete_gallery', function(e){
  e.preventDefault();
    var delete_gallery_id=$(this).val();
    $('#delete_gallery_id').val(delete_gallery_id);
    // console.log(delete_dept_id);
  $('#deletegalleryModal').modal('show');
  $(document).on('click', '.delete_gallery_btn', function(e){
    e.preventDefault();
    var delete_gallery_id=$('#delete_gallery_id').val();
    // var message="Post Deleted Successfully";
        console.log(delete_gallery_id);
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $.ajax({
    type: "GET",
    url:"/delete-gallery/"+delete_gallery_id,
   
    dataType:"json",
    success:function(response){
      $('#deletegalleryModal').modal('hide');
        if(response.status==200){
          $('#gallery_success_message').html(
          '<div class="alert alert-success alert-dismissible">'+
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
            '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
          '</h5></div>'
          );
          
          // window.location="dept_gallery";

        }else{
          console.log(response.message);
          $('#gallery_success_message').html(
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

// script  for view gallery
$(document).on('click', '.view_gallery', function(e){
      e.preventDefault();
        var gallery_id=$(this).val();
        console.log(gallery_id);
      $('#ViewgalleryModal').modal('show');
        $.ajax({
        type: "GET",
        url:"/getgalleryById/"+gallery_id,
         dataType:"json",
        success:function(response){
            
           $('#display').append(
              '<div class="row">'+
                '<div class="col-6">'+
                  '<input type="hidden" id="gallery_id">'+
                  '<div class="show_content"> '+
                    // show title
                    '<div class="col-sm-12">'+
                      '<div class="form-group mb-30"> '+                                 
                        '<div class="form-group mb-30">'+
                          '<label>Title:</label><span class="title">'+response.data.title+'</span>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    // show description
                    '<div class="col-sm-12">'+
                      '<div class="form-group mb-30"> '+                                 
                        '<div class="form-group mb-30">'+
                          '<label>Description:</label><span class="title">'+response.data.description+'</span>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    // show galleryfile
                    '<div class="col-sm-12">'+
                      '<div class="form-group mb-30"> '+                                 
                        '<div class="form-group mb-30">'+
                          '<label>galleryFile:</label><span class="title">'+response.data.galleryfile+'</span>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    // show author
                    '<div class="col-sm-12">'+
                      '<div class="form-group mb-30"> '+                                 
                        '<div class="form-group mb-30">'+
                          '<label>Author:</label><span class="title">'+response.data.author+'</span>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    // show ssub gallery cat
                    '<div class="col-sm-12">'+
                      '<div class="form-group mb-30"> '+                                 
                        '<div class="form-group mb-30">'+
                          '<label>Description:</label><span class="title">'+response.data.main_gallery_cat_id+'</span>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    // show sub gallery cat
                    '<div class="col-sm-12">'+
                      '<div class="form-group mb-30"> '+                                 
                        '<div class="form-group mb-30">'+
                          '<label>Description:</label><span class="title">'+response.data.sub_gallery_cat_id+'</span>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+

                  '</div>'+
                '</div>'+
                '<div class="col-6">'+
                  '<h5>Picture and file</h5>'+
                  '<img src="{{url(‘storage/app/public/uploads/images/gallerys/’.${response.data.image})}}">'+
                   '<img src="/uploads/images/gallerys/${response.data.image}">'+
                '</div>'+
              '</div>'
            );
         


         
        }  
      });
});

    






// $(document).on('click', '.view_gallery', function(e){
//   e.preventDefault();
//     var gallery_id=$(this).val();
//     console.log(gallery_id);
//   $('#ViewgalleryModal').modal('show');
//     $.ajax({
//     type: "GET",
//     url:"/getgalleryById/"+gallery_id,
//      dataType:"json",
//     success:function(response){
//        console.log(response);
//       // alert("edit_dept").val(response.data.dept);
//       $('#title').val(response.data.title);
//       $('#desc').val(response.data.description);
//       //  $('#edit_image').val(response.data.image);
//       $('#main_cat').val(response.data.main_gallery_cat_id);
//       $('#ub_cat').val(response.data.sub_gallery_cat_id);
//       $('#author').val(response.data.author_id);

//       // $('#edit_dept').val('bio');
//       // $('#edit_content').val(response.data.content);
//       $('#gallery_id').val(gallery_id);
     
//     }  
//   });
// });

