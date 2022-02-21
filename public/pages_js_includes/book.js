$(document).ready(function(){

    $(document).on('click', '#addBook',function(e){
      e.preventDefault();
      
      $('#AddBookModal').modal('show');
    });

    $(document).on('click', '.AddNewbook',function(){
        //   var bookform={
        //     'book':$('.book').val(),
            
        //   }
        // var book=$("#book").serialize();
        var book = new FormData($("#book")[0]);
        console.log(book);
        console.log("clicked");
        
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        $.ajax({
            url:"/book",
            type:"POST",
            data:book,
            dataType:"json",
            contentType: false, 
            processData: false, 
            success:function(response){
            // console.log(response);
            
            if(response.status==200){
                $('#book_success_message').html(
                '<div class="alert alert-success alert-dismissible">'+
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
                '</h5></div>'
                );
                // window.location="book_book";
            }else{
                console.log(response.message);
                $('#book_success_message').html(
                '<div class="alert alert-danger alert-dismissible">'+
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
                '</div>'
                );

            }
            $('#AddbookModal').modal('hide');
            }
        });
    });

    $(document).on('click', '.edit_book', function(e){
      e.preventDefault();
        var book_id=$(this).val();
        console.log(book_id);
      $('#EditBookModal').modal('show');
        $.ajax({
        type: "GET",
        url:"/getBookById/"+book_id,
         dataType:"json",
        success:function(response){
          //  console.log(response);
          // alert("edit_dept").val(response.data.dept);
          $('#edit_title').val(response.data.title);
          $('#edit_desc').val(response.data.description);
          //  $('#edit_image').val(response.data.image);
          $('#edit_main_cat').val(response.data.main_book_cat_id);
          $('#edit_sub_cat').val(response.data.sub_book_cat_id);
          $('#edit_author').val(response.data.author_id);

          // $('#edit_dept').val('bio');
          // $('#edit_content').val(response.data.content);
          $('#edit_book_id').val(book_id);
         
        }  
      });
    
  
  // End of edit dept from database/////////////////////
      // edit book(NOT YET WORKING)

  
  //update dept and store into  database////////////////////////////
  // $(document).on('click', '.update_book', function(e){
  //   e.preventDefault();
  //   var book_id=$('#edit_book_id').val();
  //    console.log("" +book_id+ "");
  //   // var message="Post Updated Successfully";
  //   // var edit_book = new FormData($("#edit_book")[0]);
  //   var edit_book =$('#edit_title').val();
  //   // var edit_book =$()
  //        console.log(edit_book);
  //   $.ajaxSetup({
  //     headers: {
  //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //     }
  //   });
  //   $.ajax({
  //     type: "POST",
  //     url:"/updateBook/"+book_id,
  //     data:edit_book,
  //     contentType: false, 
  //     processData: false, 
  //     dataType:"json",
  //     success:function(response){
  //       $('#EditbookModal').modal('hide');
  //         if(response.status==200){
  //           $('#book_success_message').html(
  //           '<div class="alert alert-success alert-dismissible">'+
  //             '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
  //             '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
  //           '</h5></div>'
  //           );
            
  //           // window.location="book_book";

  //         }else{
  //           console.log(response.message);
  //           $('#book_success_message').html(
  //           '<div class="alert alert-danger alert-dismissible">'+
  //             '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
  //             '<h5><i class="icon fas fa-ban"></i>Error!</h5>' +response.message+
  //           '</div>'
  //           );

  //         }
  //     }
       
      
  //   });
  // });
 });

//  delete book 
$(document).on('click', '.delete_book', function(e){
  e.preventDefault();
    var delete_book_id=$(this).val();
    $('#delete_book_id').val(delete_book_id);
    // console.log(delete_dept_id);
  $('#deleteBookModal').modal('show');
  $(document).on('click', '.delete_book_btn', function(e){
    e.preventDefault();
    var delete_book_id=$('#delete_book_id').val();
    // var message="Post Deleted Successfully";
        console.log(delete_book_id);
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $.ajax({
    type: "GET",
    url:"/delete-book/"+delete_book_id,
   
    dataType:"json",
    success:function(response){
      $('#deleteBookModal').modal('hide');
        if(response.status==200){
          $('#book_success_message').html(
          '<div class="alert alert-success alert-dismissible">'+
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
            '<h5><i class="icon fas fa-thumbs-up"></i>' +response.message+
          '</h5></div>'
          );
          
          // window.location="dept_book";

        }else{
          console.log(response.message);
          $('#book_success_message').html(
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